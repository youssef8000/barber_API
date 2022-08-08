<?php

namespace App\Http\Controllers;

use App\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = post::all();
        return $post;
    }

    public function store(Request $request)
    {
        $request->validate([
            "price"=>"required|numeric",
            "description"=>"required|string",
            "image"=>"required|string",
            "status"=>"required|string",
            "barberId"=>"required|numeric",

        ]);
        
        return post::create($request->all());
    }

    public function show($id)
    {
        return post::find($id);
    }

    public function update(Request $request,$id)    
    {
        $request->validate([
            "price"=>"required|numeric",
            "description"=>"required|string",
            "image"=>"required|string",
            "status"=>"required|string",
            "barberId"=>"required|numeric",
        ]);
        $post = post::find($id);
        $post->update($request->all());
        return $post;
    }

    public function destroy($id)
    {
        return post::destroy($id);

    }
}
