<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

  // public function __construct()
  // {
  //     $this->middleware('auth');
  // }


  public function index()
  {
    return view('home.index');
  }


  public function homepage()
  {
    return view('home.index');
  }

  public function logar()
  {
    return view('auth.login');
  }


}
