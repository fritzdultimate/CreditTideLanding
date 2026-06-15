<?php

namespace App\Livewire\Landing\About;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Layout('layouts.landing', params: ['showPreloader' => true])]
#[Title('Credit Tide — Our Company')]
class  OurCompany extends Component {

    public function render(): \Illuminate\View\View {
        return view('livewire.landing.about.our-company');
    }
}