<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
            'dishName'=>'required',
            'dishPrice'=>'required',
            'dishCategory'=>'required',
            'dishDescription'=>'required',
            'dishImage'=>'required|mimes:jpg,png,jpeg',
        ],[
            'dishName.required' => 'Please enter a valid name for the dish !',
            'dishPrice.required' => 'Please enter the price !',
            'dishCategory.required' => 'Enter a Category !',
            'dishDescription.required' => 'Enter a description !',
            'dishImage.required' => 'Please select an image !',
        ]);

        // $newImageName = uniqid().'-'.$request->name.'.'.$request->image_path->extension();
        // $request->image_path->move(public_path('images'), $newImageName);

        $plat_image = $request->file('dishImage');         
        $name_gen = hexdec(uniqid());         
        $img_ext = strtolower($plat_image->getClientOriginalExtension());         
        $img_name = $name_gen.'.'.$img_ext;         
        $location = 'images/';         
        $last_img = $location.$img_name;         
        $plat_image->move($location,$img_name);


        Dish::create([
            'image_path'=> $last_img,
            'name'=>$request->dishName,
            'price'=>$request->dishPrice,
            'Category'=>$request->dishCategory,
            'description'=>$request->dishDescription,
        ]);
        return redirect('/menu')->with('success','Dish has been created successfully.');
    }

    
    public function show($id)
    {
        $dish = Dish::find($id);
        return view('menu.show')->with('dishes', $dish);

    }

    
    public function edit($id)
    {
        $dish = Dish::find($id);
        return view('menu.edit')->with('dishes', $dish);
    }

    
    public function update(Request $request, $id)
    {
        $dish = Dish::find($id);
        if($request->hasFile('dishImage')){
            $plat_image = $request->file('dishImage');         
            $name_gen = hexdec(uniqid());         
            $img_ext = strtolower($plat_image->getClientOriginalExtension());         
            $img_name = $name_gen.'.'.$img_ext;         
            $location = 'images/';         
            $last_img = $location.$img_name;         
            $plat_image->move($location,$img_name);
            $dish->update([
                'image_path'=> $last_img,
            ]);

        }
        $request->validate([
            'dishName'=>'required',
            'dishPrice'=>'required',
            'dishCategory'=>'required',
            'dishDescription'=>'required',
        ],[
            'dishName.required' => 'Please enter a valid name for the dish !',
            'dishPrice.required' => 'Please enter the price !',
            'dishCategory.required' => 'Enter a Category !',
            'dishDescription.required' => 'Enter a description !',
        ]);
        $dish->update([
            'name'=>$request->dishName,
            'price'=>$request->dishPrice,
            'Category'=>$request->dishCategory,
            'description'=>$request->dishDescription,
        ]);
        return redirect('/menu')->with('success','Dish Has Been updated successfully');
    }

    
    public function destroy($id)
    {
        $dish = Dish::destroy($id);
        return redirect('/menu')->with('success','Dish has been deleted successfully');
    }
}
