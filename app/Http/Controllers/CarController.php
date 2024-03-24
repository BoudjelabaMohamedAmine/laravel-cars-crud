<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get all cars from the database
        $cars = Car::all();
        return view('car.index' , compact('cars'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //create a new car
        $users = User::all();
        return view('car.create', compact('users'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //store the car in the database
        $car = new Car();
        $car->name = $request->input('name');
        $car->model = $request->input('model');
        $car->color = $request->input('color');
        $car->year = $request->input('year');
        $car->price = $request->input('price');
        // save the image in the storage
        $image = $request->file('image');
        $image->storeAs('images', $image->hashName(),'public');
        $car->image = $image->hashName();
        $car->description = $request->input('description');
        $car->status = $request->input('status');
        $car->email = $request->input('email');
        $car->save();
        
        return redirect('/dashboard');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //show a car
        $car = Car::find($id);
        return view('car.show', compact('car'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit a car
        $car = Car::find($id);
        return view('car.edit', compact('car'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //update a car
        $car = Car::find($id);
        $car->name = $request->input('name');
        $car->model = $request->input('model');
        $car->color = $request->input('color');
        $car->year = $request->input('year');
        $car->price = $request->input('price');
        $car->image = $request->input('image');
        $car->description = $request->input('description');
        $car->status = $request->input('status');
        $car->save();
        return redirect('/dashboard');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //destroy a car
        $car = Car::find($id);
        $car->delete();
        //DELETE THE IMAGE FROM THE STORAGE
        Storage::disk('public')->delete('images/'.$car->image);

        //redirect to the dashboard
        return redirect('/dashboard');

    }
}
