<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Category;
// use App\http\Controllers\CategoryController;
// use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('posts')->get();
        return view("categories", compact("categories"));
    }
}
