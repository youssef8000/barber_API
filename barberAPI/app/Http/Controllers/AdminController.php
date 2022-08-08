<?php

namespace App\Http\Controllers;

use App\admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function index()
    {
        $admin = admin::all();
        return $admin;
    }

    public function store(Request $request)
    {
        $request->validate([
            "name"=>"required|string",
            "password"=>"required|string",
            "email"=>"required|string|unique:admins,email",
            "job"=>"required|string",
            "image"=>"required|string",
        ]);
        
        return admin::create($request->all());
    }

    public function show($id)
    {
        return admin::find($id);
    }

    public function update(Request $request,$id)    
    {
        $request->validate([
            "name"=>"required|string",
            "password"=>"required|string",
            "email"=>"required|string|unique:admins,email",
            "job"=>"required|string",
            "image"=>"required|string",
        ]);
        $admins = admin::find($id);
        $admins->update($request->all());
        return $admins;
    }

    public function destroy($id)
    {
        return admin::destroy($id);

    }
}
