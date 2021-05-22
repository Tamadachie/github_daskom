<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("home");
    }
    public function artikel(){
        return view("artikel0028");
    }
    public function kontak(){
        return view("kontak0028");
    }
    public function page2(){
        return view("page2");
    }
}
