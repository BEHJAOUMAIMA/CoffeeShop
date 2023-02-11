<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;

class DishesController extends Controller
{
    public function index()
    {
        $dishes = Dish::all();
        return view('menu.index')->with('dishes', $dishes);
        // return view('menu.index')->with('dishes', Dish::get());
    }
    public function create()
    {
        return view('menu.create');
        
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'image_path'=>'required|mimes:jpg,png,jpeg',
            'name'=>'required',
            'price'=>'required',
            'Category'=>'required',
            'description'=>'required',
        ]);
        $newImageName = uniqid().'-'.$request->name.'.'.$request->image_path->extension();
        $request->image_path->move(public_path('images'), $newImageName);

        Dish::create([
            'image_path'=>$request->$newImageName,
            'name'=>$request->input('dishName'),
            'price'=>$request->input('dishPrice'),
            'Category'=>$request->input('dishCategory'),
            'description'=>$request->input('dishDescription'),
        ]);
        return redirect('/menu');
    }

    
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        
    }

    
    public function update(Request $request, $id)
    {
        
    }

    
    public function destroy($id)
    {
        
    }
}
