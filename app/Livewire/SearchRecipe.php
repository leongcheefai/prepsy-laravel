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
        $this->recipes = [
            [
                'title' => 'Curry Vegetables',
                'description' => 'A fragrant Indian curry with mixed vegetables, coconut milk and warming spices. Ready in 30 minutes.',
                'url' => 'https://example.com/recipes/curry-vegetables',
                'prep_time' => '10 mins',
                'cook_time' => '20 mins',
                'difficulty' => 'Medium',
                'ingredients' => ['Mixed vegetables', 'Coconut milk', 'Curry powder', 'Ginger', 'Garlic'],
            ],
            [
                'title' => 'Steam broccoli',
                'description' => 'Perfectly tender-crisp steamed broccoli with garlic and lemon. A healthy side dish ready in less than 10 minutes.',
                'url' => 'https://example.com/recipes/steam-broccoli',
                'prep_time' => '2 mins',
                'cook_time' => '5-7 mins',
                'difficulty' => 'Easy',
                'ingredients' => ['Broccoli', 'Garlic', 'Lemon', 'Salt', 'Pepper'],
            ],
            [
                'title' => 'Broccoli Superfood Salad',
                'description' => 'A crunchy, nutritious salad featuring raw broccoli, dried cranberries, sunflower seeds and a creamy yogurt dressing.',
                'url' => 'https://example.com/recipes/broccoli-salad',
                'prep_time' => '15 mins',
                'cook_time' => '0 mins',
                'difficulty' => 'Easy',
                'ingredients' => ['Broccoli', 'Cranberries', 'Sunflower seeds', 'Greek yogurt', 'Honey'],
            ],
            [
                'title' => 'Classic Pasta Pomodoro',
                'description' => 'Al dente pasta tossed in a fresh tomato sauce with basil and garlic. A simple Italian favorite ready in 20 minutes.',
                'url' => 'https://example.com/recipes/pasta',
                'prep_time' => '5 mins',
                'cook_time' => '15 mins',
                'difficulty' => 'Easy',
                'ingredients' => ['Pasta', 'Tomatoes', 'Basil', 'Garlic', 'Olive oil'],
            ],
        ];

        return redirect('/dashboard');
    }
}
