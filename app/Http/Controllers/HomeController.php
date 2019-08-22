<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Categoria;

class HomeController extends Controller
{

  // public function __construct()
  // {
  //     $this->middleware('auth');
  // }


  public function index()  {
    $posts = Post::orderBy('created_at','desc')->take(6)->get();
    $categorias = Categoria::orderBy('nome');
    return view('home.index', compact('posts','categorias'));
  }

  public function homepage()  {
    $posts = Post::orderBy('created_at','desc')->take(6)->get();
    $categorias = Categoria::orderBy('nome');
    return view('home.index', compact('posts','categorias'));
  }

  public function logar()  {
    return view('auth.login');
  }


  public function dicas($id=2)  {
    $categoria = Categoria::find($id);
    $dicas = $categoria->posts()->get();
    return view('noticias.dicas', compact('categoria','dicas'));
  }


  public function detalhebycat($id) {
    $postbycat = Post::find($id);
    return view('noticias.bycat', compact('postbycat'));
  }

  public function informatica($id=1) {
    $categoria = Categoria::find($id);
    $infos = $categoria->posts()->get();
    return view('noticias.informatica', compact('infos', 'categoria'));
  }




}
