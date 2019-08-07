@extends('layouts.admin')

@section('content')


<div class="row">

  <!-- 3 colunas na tela
  <div class="col-md-4 col-sm-4 col-xs-12">
  <div class="x_panel tile fixed_height_320">
</div>
</div> -->

<div class="col-md-12 col-sm-4 col-xs-12">
  <h3>Posts Cadastrados</h3>

  <table class="table">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">Título</th>
        <th scope="col">Descrição</th>
        <!-- <th scope="col">Imagem</th> -->
        <th scope="col">Ações</th>
      </tr>
    </thead>
    @foreach($posts as $post)
    <tbody>
      <tr>
        <!-- <th scope="row">1</th> -->
        <td>
          @if ($post['imagem'])
          <img src="{{ asset('uploads/posts/'.$post->imagem) }}" width="80" height="80">
          @else
          <img src="{{ asset('padrao/padrao.jpeg') }}" width="80" height="80">
          @endif
        </td>
        <!-- <img src={{ asset('uploads/posts/'.$post->imagem) }}></td> -->
        <td>{{ $post->titulo }}</td>
        <td>{{ $post->descricao }}</td>
        <td class="float-right">
          <a href="#"><i class="fa fa-id-card-o" aria-hidden="true"></i></a> &nbsp;
          <a href="#"><i class="fa fa-id-card-o" aria-hidden="true"></i></a>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>

</div>


</div>

@endsection
