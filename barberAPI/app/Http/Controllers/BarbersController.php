<?php

namespace App\Http\Controllers;

use App\barbers;
use Illuminate\Http\Request;

class BarbersController extends Controller
{
    public function index()
    {
        $barber = barbers::all();
        return $barber;
    }

    public function store(Request $request)
    {
        $request->validate([
            "name"=>"required|string",
            "phone"=>"required|string",
            "address"=>"required|string",
            "password"=>"required|string",
            "image"=>"required|string",
            "image2"=>"required|string",
            "categoryId"=>"required|numeric",

        ]);
        
        return barbers::create($request->all());
    }

    public function show($id)
    {
        return barbers::find($id);
    }

    public function update(Request $request,$id)    
    {
        $request->validate([
            "name"=>"required|string",
            "phone"=>"required|string",
            "address"=>"required|string",
            "password"=>"required|string",
            "image"=>"required|string",
            "image2"=>"required|string",
            "categoryId"=>"required|numeric",
        ]);
        $barber = barbers::find($id);
        $barber->update($request->all());
        return $barber;
    }

    public function destroy($id)
    {
        return barbers::destroy($id);

    }
}
