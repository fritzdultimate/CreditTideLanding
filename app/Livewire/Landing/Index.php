<?php

namespace App\Livewire\Landing;

use App\Models\CelebrityInvestor;
use App\Models\Company;
use App\Models\InvestmentPlan;
use App\Models\Testimony;
use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('layouts.landing', params: ['showPreloader' => true])]
class  Index extends Component {

    public function render(): \Illuminate\View\View {
        $plans = InvestmentPlan::all();
        $testimonies = Testimony::all();
        $companies = Company::all();
        $investors = CelebrityInvestor::orderBy('joined_at')->get();

        $investors = $investors->map(function ($inv) {

            $inv->initials = collect(explode(' ', $inv->name))
                ->map(fn($n) => strtoupper(substr($n, 0, 1)))
                ->take(2)
                ->implode('');

            $inv->icon = match (true) {
                str_contains($inv->position, 'Meta')   => 'meta',
                str_contains($inv->position, 'Amazon') => 'amazon',
                str_contains($inv->position, 'Nvidia') => 'nvidia',
                str_contains($inv->position, 'Nike')   => 'nike',
                str_contains($inv->position, 'Google') => 'google',
                str_contains($inv->position, 'Apple')  => 'apple',
                default => 'default',
            };

            $inv->color = match (true) {
                str_contains($inv->position, 'Meta') => '#00C8FF',
                str_contains($inv->position, 'Amazon') => '#FFB547',
                str_contains($inv->position, 'Nvidia') => '#00E5A0',
                str_contains($inv->position, 'Nike') => '#7B5EFF',
                default => '#FF4D6A',
            };

            return $inv;
        });
        return view('livewire.landing.index', [
            'plans' => $plans,
            'testimonies' => $testimonies,
            'companies' => $companies,
            'investors' => $investors
        ]);
    }
}