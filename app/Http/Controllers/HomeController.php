<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{

  // public function __construct()
  // {
  //     $this->middleware('auth');
  // }


  public function index()  {
    $posts = Post::orderBy('created_at','desc')->take(6)->get();
    return view('home.index', compact('posts'));
  }

  public function homepage()  {
    $posts = Post::orderBy('created_at','desc')->take(6)->get();    
    return view('home.index', compact('posts'));
  }

  public function logar()  {
    return view('auth.login');
  }


}
