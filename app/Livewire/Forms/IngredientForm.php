<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Livewire\Attributes\Validate;

class IngredientForm extends Form
{
    #[Validate('required')]
    public $ingredients = '';

    public function searchRecipes()
    {
        $this->validate();
    }
}
