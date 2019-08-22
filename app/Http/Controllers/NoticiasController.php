<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class NoticiasController extends Controller
{

  public function index() {
    return view('noticias.index');
  }

  public function detalhes($id) {    
    $post = Post::whereId($id)->first();
    return view('noticias.detalhe', compact('post'));
  }


}
