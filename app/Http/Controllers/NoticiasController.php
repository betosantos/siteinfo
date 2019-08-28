<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class NoticiasController extends Controller
{

  public function index() {
    $posts = Post::orderBy('created_at', 'DESC')->get();
    return view('noticias.index', compact('posts'));
  }

  public function detalhes($id) {
    $post = Post::whereId($id)->first();
    return view('noticias.detalhe', compact('post'));
  }

  public function buscar (Request $request) {
    $busca = $request->input('busca');

    $posts = Post::where('titulo','LIKE','%'.$busca.'%')->get();
    if(count($posts) > 0)
      return view('noticias.busca', compact('busca','posts'));
    else
      return view('noticias.zerobusca', compact('busca'));
  }




}
