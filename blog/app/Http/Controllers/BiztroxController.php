<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiztroxController extends Controller
{
    public function index()
    {
        return view ('website.home.home');
    }

    public function category()
    {
        return view('website.category.category');
    }

    public function detail()
    {
        return view('website.detail.detail');
    }

    public function contact()
    {
        return view('website.contact.contact');
    }
}
