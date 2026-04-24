<?php

namespace App\Livewire\Landing\Plans;

use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('layouts.landing', params: ['showPreloader' => true])]
class  InvestmentPlans extends Component {

    public function render(): \Illuminate\View\View {
        return view('livewire.landing.plans.investment-plans');
    }
}