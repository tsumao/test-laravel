<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
     {
        $contact=$request->only(['first_name','last_name','gender','email','tel','address','building','category_id','detail']);
        return view('confirm', compact('contact'));
     }

     public function store(Request $request)
    {
        $contact=$request->only(['first_name','last_name','gender','email','tel','address','building','category_id','detail']);
        Contact::create($contact);
        return view('thanks');
    }
}
