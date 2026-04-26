<?php

namespace App\Livewire\Landing\Blog;

use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('layouts.landing', params: ['showPreloader' => true])]
class  Article extends Component {

    public function render(): \Illuminate\View\View {
        return view('livewire.landing.blog.article');
    }
}