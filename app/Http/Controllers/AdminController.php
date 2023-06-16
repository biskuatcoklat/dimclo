<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view_category()
    {
        $category = Category::all();
        return view('admin.category',compact('category'));
    }

}
