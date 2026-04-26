<?php

namespace App\Livewire\Landing\Legal;

use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('layouts.landing', params: ['showPreloader' => true])]
class  PaymentPolicy extends Component {

    public function render(): \Illuminate\View\View {
        return view('livewire.landing.legal.payment-policy');
    }
}