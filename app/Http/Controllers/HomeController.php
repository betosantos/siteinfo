<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Categoria;
use App\User;
use Auth; //class import

class HomeController extends Controller
{

  // public function __construct()
  // {
  //     $this->middleware('auth');
  // }


  public function index()  {
    $posts = Post::orderBy('created_at','desc')->take(3)->get();
    $categorias = Categoria::orderBy('nome');
    return view('home.index', compact('posts','categorias'));
  }

  public function homepage()  {
    $posts = Post::orderBy('created_at','desc')->take(3)->get();
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


  public function json_posts() {
    $posts = Post::orderBy('created_at','desc')->get();
    return response()->json($posts);
  }


public function json_users_all() {
  $data = [
    'status' => 'ok',
    'users' => User::all()
    // $users = User::orderBy('created_at','desc')->get();
  ];
  return response()->json($data);
}



  public function json_users($name, $password) {
    if (Auth::attempt(['name' => $name, 'password' => $password]))
    {
      $data = [
        'name' => $name,
        'password' => $password,
        'status' => 'ok'
      ];
      return response()->json($data);
    } else {
      return response()->json([
        'status','Erro'
      ]);
    }
    // $data = [
    //   'status' => 'ok',
    //   'users' => User::all()
    //   // $users = User::orderBy('created_at','desc')->get();
    // ];
    // $data = [
    //   'nome' => 'jose',
    //   'email' => 'gmail.com'
    // ];


  }


}
