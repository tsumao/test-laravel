<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
     {
        $contact=$request->only(['first_name','last_name','gender','email','tel_pre','tel_mid','tel_pos','address','building','category_id','detail']);
        return view('confirm', compact('contact'));
     }

     public function store(Request $request)
    {
        $adddata=$request->only(['category_id', 'first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'detail']);
        Contact::create($adddata);
        return view('thanks');
    }
}
