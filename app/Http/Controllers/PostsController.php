<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{

  public function list () {
    $posts = Post::all();
    return view('posts.list', compact('posts'));
  }


  public function form () {
    return view('posts.create');
  }




}
