<?php

namespace App\Http\Controllers;

use App\payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payment =payment::all();
        return $payment;
    }

    public function store(Request $request)
    {
        $request->validate([
            "postId"=>"required|numeric",
            "userId"=>"required|numeric",
            "data"=>"required|string",
        ]);
        
        return payment::create($request->all());
    }

    public function show($id)
    {
        return payment::find($id);
    }

    public function update(Request $request,$id)    
    {
        $request->validate([
            "postId"=>"required|numeric",
            "userId"=>"required|numeric",
            "data"=>"required|string",
        ]);
        $payment =payment::find($id);
        $payment->update($request->all());
        return $payment;
    }

    public function destroy($id)
    {
        return payment::destroy($id);

    }
}
