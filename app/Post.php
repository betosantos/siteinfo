<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

  protected $fillable = [
    'categoria_id',
    'user_id',
    'titulo',
    'descricao',
    'imagem',
  ];

  public function categoria() {
    return $this->belongsTo(Categoria::class);
  }

}
