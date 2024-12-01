<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Forms\IngredientForm;

class SearchRecipe extends Component
{
    public IngredientForm $form;

    public $recipes = [];

    public function render()
    {
        return view('livewire.search-recipe', [
            'recipes' => $this->recipes,
        ]);
    }

    public function search()
    {
        $this->form->searchRecipes();

        return redirect('/dashboard');
    }
}
