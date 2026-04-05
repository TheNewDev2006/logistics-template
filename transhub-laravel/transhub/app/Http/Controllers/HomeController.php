<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function index_2()
    {
        return view('home.index-2');
    }

    public function index_3()
    {
        return view('home.index-3');
    }
}