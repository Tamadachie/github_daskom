<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("hello");
    }
    public function artikel(){
        return view("artikel");
    }
    public function kontak(){
        return view("kontak");
    }
    public function page2(){
        return view("page2");
    }
}
