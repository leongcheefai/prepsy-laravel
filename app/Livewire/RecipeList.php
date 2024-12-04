<?php

namespace App\Livewire;

use Livewire\Component;

class RecipeList extends Component
{
    public $recipes = [];

    public function render()
    {
        return view('livewire.recipe-list');
    }
}
