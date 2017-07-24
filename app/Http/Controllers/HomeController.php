<?php

namespace App\Http\Controllers;

use Ibec\Content\Category;
use Ibec\Content\Post;
use Ibec\Media\Gallery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $slider = Gallery::find(1);

        $products = Post::whereHas('nodes', function ($q){
            $q->where('fields->new_product', '1');
        })->get();

        $productsCategory = Category::find(1);

        return view('home', compact('slider', 'products', 'productsCategory'));
    }
}
