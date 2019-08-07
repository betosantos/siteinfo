<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UsersController extends Controller
{

  public function profile() {
    $user = User::where('id', Auth::id())->get();
    return view('admin.index', compact('user'));
  }






}
