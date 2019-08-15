@extends('layouts.admin')

@section('content')


<div class="row">

  <!-- 3 colunas na tela
  <div class="col-md-4 col-sm-4 col-xs-12">
  <div class="x_panel tile fixed_height_320">
</div>
</div> -->

<div class="col-md-12 col-sm-4 col-xs-12">

  <h3>Cadastrar Posts </h3>


  <form method="POST" enctype="multipart/form-data" action="{{ route('posts.store') }}">
    @csrf
    <div class="row">

      <div class="form-group col-md-12" style="margin-top:15px;">
        <label for="titulo">Categoria</label>
        <select name="categoria_id" class="form-control">
          <option value="">Selecione uma Categoria</option>
          @foreach( $categorias as $categoria )
          <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
          @endforeach
        </select>
      </div>


      <div class="form-group col-md-12">
        <label for="titulo">Título</label>
        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título do Post">
      </div>
      <!-- <div class="form-group col-md-4">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div> -->
  </div>

  <div class="row">
    <div class="form-group col-md-12">
      <label for="descricao">Descrição</label>
      <textarea class="form-control" id="descricao" name="descricao" rows="5"></textarea>
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-12">
      <label for="imagem">Imagem</label>
      <input type="file" id="imagem" name="imagem">
    </div>
  </div>



  <div class="row">
    <div class="form-group col-md-2">
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
  </div>
</form>



</div>


</div>

@endsection
