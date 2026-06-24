<?php

namespace App\Livewire\Landing;

use App\Models\CelebrityInvestor;
use App\Models\Company;
use App\Models\InvestmentPlan;
use App\Models\Testimony;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Layout('layouts.landing', params: ['showPreloader' => true])]
#[Title('Credit Tide — Private Stock Investment Firm')]
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
                str_contains($inv->position, 'Alphabet') => 'google',
                str_contains($inv->position, 'Apple')  => 'apple',
                str_contains($inv->position, 'Tesla')  => 'tesla',
                default => null,
            };

            $inv->color = match (true) {
                str_contains($inv->position, 'Meta') => '00C8FF',
                str_contains($inv->position, 'Amazon') => 'FFB547',
                str_contains($inv->position, 'Nvidia') => '76B900',
                str_contains($inv->position, 'Nike') => '7B5EFF',
                str_contains($inv->position, 'Alphabet') => '4285F4',
                str_contains($inv->position, 'Apple')    => 'A2AAAD',
                str_contains($inv->position, 'Tesla')    => 'CC0000',
                default => 'FF4D6A',
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