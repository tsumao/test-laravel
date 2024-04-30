<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function getOptions()
    {
        $table = Category::pluck('content','id');
        return view('index', compact('table'));
    }
}
