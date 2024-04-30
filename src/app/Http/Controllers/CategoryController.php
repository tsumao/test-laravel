<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function option(){
        $items = category::all();
        return view('index', compact('items'));
    }
}
