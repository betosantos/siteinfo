<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Mail;
use App\Mail\Bemvindo;
use App\User;
use App\Categoria;


class PostsController extends Controller
{

  public function list () {
    $posts = Post::all();
    return view('posts.list', compact('posts'));
  }


  public function form (Categoria $categoria) {
    $categorias = Categoria::all();
    return view('posts.create', compact('categorias'));
  }


  public function store(Request $request) {
    $dataForm = $request->all();

    $dataForm['user_id'] = auth()->user()->id;

    if ($request->hasFile('imagem')) {
      $imagem = $request->file('imagem');
      $imagemName = uniqid(date('YmdHis')).'.'.$imagem->getClientOriginalExtension();
      $dataForm['imagem'] = $imagemName;
      $upload = $imagem->storeAs('posts', $imagemName);
    }    

    $insert = Post::create($dataForm);

    // Envio e-mail
    // $user = auth()->user();
    // Mail::to($user)->send(new Bemvindo($user));

    return redirect('posts');
  }


  public function send(Request $request) {
    $validator = \Validator::make($request->all(), [
      'name' => 'required|max:255',
      'email' => 'required|email|max:255',
      'subject' => 'required',
      'message' => 'required']
    );

    if ($validator->fails()) {
      return redirect('contact')->withInput()->withErrors($validator);
    }

    $name = $request->name;
    $email = $request->email;
    $subject = $request->subject;
    $message = $request->message;

    \Mail::send('emails.bemvindo', ['name' => $name, 'email' => $email, 'subject' => $subject, 'message' => $message], function ($message) {
      $message->to('oliveira.roberto@gmail.com')->subject('Subject of the message!');
    });

    return redirect('home')->with('status', 'You have successfully sent an email to the admin!');
  }



}
