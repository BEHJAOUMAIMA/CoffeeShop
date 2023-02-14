<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;

class PagesController extends Controller
{
    public function welcome(){
        $dishes = Dish::all();
        return view('welcome')->with('dishes', $dishes);
    }
}
