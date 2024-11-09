<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Http\Requests\StoreRecipeRequest;
use App\Http\Requests\UpdateRecipeRequest;
use App\Http\Requests\Recipe\SearchRequest;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRecipeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Recipe $recipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRecipeRequest $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe)
    {
        //
    }

    public function search(SearchRequest $request)
    {
        $recipes = [
            [
                'title' => 'Curry Vegetables',
                'description' => 'Indian curry with vegetables',
                'url' => 'https://example.com/recipes/curry-vegetables',
            ],
            [
                'title' => 'Steam broccoli',
                'description' => 'Simplest way to cook broccoli in less than 10 minutes',
                'url' => 'https://example.com/recipes/steam-broccoli',
            ],
            [
                'title' => 'Salad',
                'description' => 'Using broccoli as a base, this salad is easy to make and filled with vegetables',
                'url' => 'https://example.com/recipes/broccoli-salad',
            ],
        ];
        return redirect()->route('dashboard')->with('recipes', $recipes)->withInput();
    }
}
