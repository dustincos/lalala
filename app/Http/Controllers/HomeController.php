<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class HomeController extends Controller
{
    public function index() {
        return view('home.index',['products'=> Product::latest()->paginate(5)]);
    }

    public function store() {
        return view('home.product',['products'=> Product::latest()->paginate(5)]);
    }

    public function about() {
        return view('home.about');
    }

    public function contact() {
        return view('home.contact');
    }

}
