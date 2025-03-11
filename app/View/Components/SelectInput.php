<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SelectInput extends Component
{

    public array $options;
    public ?array $selected;
    public string $name;

    public function __construct(string $name, array $options = [], ?array $selected = [])
    {
        $this->name = $name;
        $this->options = $options;
        $this->selected = $selected;
    }

    public function render()
    {
        return view('components.select-input');
    }
}
