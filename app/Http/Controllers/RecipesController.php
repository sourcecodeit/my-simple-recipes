<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipesController extends Controller
{
    //
    public function index()
    {
        // retrieve all recipes
        $recipes = Recipe::all();

        // return the view
        return view('welcome', compact('recipes'));
    }
}
