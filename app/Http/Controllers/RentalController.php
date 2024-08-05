<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Customer;
use App\Models\Rental;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function index()
    {
        $rentals = Rental::with(['car', 'customer'])->get();
        return view('rentals.index', compact('rentals'));
    }

    public function create()
    {
        $cars = Car::all();
        $customers = Customer::all();
        return view('rentals.create', compact('cars', 'customers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'customer_id' => 'required|exists:customers,id',
            'rental_start' => 'required|date',
            'rental_end' => 'required|date|after_or_equal:rental_start',
            'total_amount' => 'required|numeric',
        ]);

        Rental::create($request->all());

        return redirect()->route('rentals.index')->with('success', 'Rental created successfully.');
    }

    public function edit(Rental $rental)
    {
        $cars = Car::all();
        $customers = Customer::all();
        return view('rentals.edit', compact('rental', 'cars', 'customers'));
    }

    public function update(Request $request, Rental $rental)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'customer_id' => 'required|exists:customers,id',
            'rental_start' => 'required|date',
            'rental_end' => 'required|date|after_or_equal:rental_start',
            'total_amount' => 'required|numeric',
        ]);

        $rental->update($request->all());

        return redirect()->route('rentals.index')->with('success', 'Rental updated successfully.');
    }

    public function destroy(Rental $rental)
    {
        $rental->delete();
        return redirect()->route('rentals.index')->with('success', 'Rental deleted successfully.');
    }
}
