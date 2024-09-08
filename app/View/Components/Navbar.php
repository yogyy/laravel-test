<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    public $links = ['home', 'blog', 'about', 'contact'];

    public function render(): View|Closure|string
    {
        return view('components.navbar', ['links' => $this->links]);
    }
}
