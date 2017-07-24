<?php

namespace App\Http\Controllers;

use Ibec\Content\Category;
use Ibec\Content\Post;
use Ibec\Media\Gallery;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($slug)
    {
        $category = Category::whereHas('nodes', function ($q) use ($slug){
            $q->where('slug', $slug);
        })->first();
        $products = Post::where('category_id', $category->id)->get();

        return view('product.index', compact('products'));
    }
}
