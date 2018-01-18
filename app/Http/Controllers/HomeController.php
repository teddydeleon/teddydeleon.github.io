<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    

    public function portfolio()
    {
        return view('portfolio');
    }

    public function contact()
    {
        return view('contact');
    }

    public function downloads()
    {
        return view('downloads');
    }

    public function posts()
    {
        return view('posts');
    }

}
