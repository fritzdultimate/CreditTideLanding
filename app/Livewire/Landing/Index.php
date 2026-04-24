<?php

namespace App\Livewire\Landing;

use App\Models\InvestmentPlan;
use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('layouts.landing', params: ['showPreloader' => true])]
class  Index extends Component {

    public function render(): \Illuminate\View\View {
        $plans = InvestmentPlan::all();
        return view('livewire.landing.index', [
            'plans' => $plans
        ]);
    }
}