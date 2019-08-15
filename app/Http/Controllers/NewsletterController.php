<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;

class NewsletterController extends Controller
{

  public function assinar(Request $request) {
    $dataForm = $request->all();
    $insert = Newsletter::create($dataForm);

    return redirect('home');
  }



}
