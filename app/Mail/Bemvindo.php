<?php

namespace App\Mail;

use App\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Bemvindo extends Mailable
{
  use Queueable, SerializesModels;

  public $post;

  public function __construct(Post $post)
  {
    $this->post = $post;
  }

  /**
  * Build the message.
  *
  * @return $this
  */
  public function build()
  {
    return $this->view('emails.bemvindo')
    ->with([
      'titulo' => $this->post->titulo,
      'descricao' => $this->post->descricao,
    ]);
  }
  



}
