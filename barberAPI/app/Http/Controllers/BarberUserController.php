<?php

namespace App\Http\Controllers;

use App\barberUser;
use Illuminate\Http\Request;

class BarberUserController extends Controller
{
    public function index()
    {
        $barberUser = barberUser::all();
        return $barberUser;
    }

    public function store(Request $request)
    {
        $request->validate([
            "name"=>"required|string",
            "age"=>"required|numeric",
            "email"=>"required|string|unique:barber_users,email",
            "password"=>"required|string",
            "address"=>"required|string",
            "phone"=>"required|string",

        ]);
        
        return barberUser::create($request->all());
    }

    public function show($id)
    {
        return barberUser::find($id);
    }

    public function update(Request $request,$id)    
    {
        $request->validate([
            "name"=>"required|string",
            "age"=>"required|numeric",
            "email"=>"required|string|unique:barber_users,email",
            "password"=>"required|string",
            "address"=>"required|string",
            "phone"=>"required|string",
        ]);
        $barberUser = barberUser::find($id);
        $barberUser->update($request->all());
        return $barberUser;
    }

    public function destroy($id)
    {
        return barberUser::destroy($id);

    }
}
