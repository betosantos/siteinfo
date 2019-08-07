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


  public function store(Request $request) {
    $dataForm = $request->all();

    if ($request->hasFile('imagem')) {
      $imagem = $request->file('imagem');
      $imagemName = uniqid(date('YmdHis')).'.'.$imagem->getClientOriginalExtension();
      $dataForm['imagem'] = $imagemName;
      $upload = $imagem->storeAs('posts', $imagemName);
    }

    $insert = Post::create($dataForm);
  }


}
