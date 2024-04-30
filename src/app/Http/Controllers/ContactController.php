<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
     {
        $contact=$request->only(['first_name','last_name','gender','email','tel','address','building','detail']);
        return view('confirm', compact('contact'));
     }

     public function store(Request $request)
    {
        $contact=$request->only(['first_name','last_name','gender','email','tel','address','building','detail']);
        return view('thanks');
    }
}
