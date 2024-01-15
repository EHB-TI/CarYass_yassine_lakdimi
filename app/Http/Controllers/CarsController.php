<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Cars::all();
        return view('site.car') -> with('cars', $cars);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
        return view('admin.CreateCar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $imageName=time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images/posts'),$imageName);
        $input = $request->all();
        $car =Cars::create($input);
        $car->update(['image' => $imageName]);

        return redirect('car')-> with('flash_message', 'Car Added !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = Cars::findOrFail($id); 
        return view('admin.edit')->with('car', $car);

   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $car = Cars::findOrFail($id);

      

        $car->update($request->all());

        return redirect('car')->with('flash_message', 'Car Updated!');
        
      

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cars=Cars::find($id);
        $cars->delete();
        return redirect('/car');
    
    }

    public function rentCar($id) {
        $car = Cars::findOrFail($id);
        $car->update(['rented' => true]);
    
        return redirect()->back()->with('success', 'Car rented successfully');
    }

    public function returnCar($id) {
        $car = Cars::findOrFail($id);
        $car->update(['rented' => false]);
    
        return redirect()->back()->with('success', 'Car returned successfully');
    }

    public function carDetails($id) {
        $car = Cars::findOrFail($id);
        return view('site.car-details')->with('car', $car);
    }

    public function welcome()
    {
        $cars = Cars::all(); 
    
        return view('welcome', compact('cars'));
    }
    
    
}
