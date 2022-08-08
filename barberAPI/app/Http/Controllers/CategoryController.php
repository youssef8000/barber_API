<?php

namespace App\Http\Controllers;
use App\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index()
    {
        $category = category::all();
        return $category;
    }

    public function store(Request $request)
    {
        $request->validate([
            "name"=>"required|string",
        ]);
        
        return category::create($request->all());
    }

    public function show($id)
    {
        return category::find($id);
    }

    public function update(Request $request,$id)    
    {
        $request->validate([
            "name"=>"required|string",
        ]);
        $categories = category::find($id);
        $categories->update($request->all());
        return $categories;
    }

    public function destroy($id)
    {
        return category::destroy($id);

    }
}
