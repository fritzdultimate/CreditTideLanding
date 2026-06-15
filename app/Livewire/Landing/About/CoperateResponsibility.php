<?php

namespace App\Livewire\Landing\About;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Layout('layouts.landing', params: ['showPreloader' => true])]
#[Title('Credit Tide — Corporate Responsibility')] 
class  CoperateResponsibility extends Component {

    public function render(): \Illuminate\View\View {
        return view('livewire.landing.about.coperate-responsibility');
    }
}