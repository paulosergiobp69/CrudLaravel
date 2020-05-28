@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
    <div class="container">
        <h3 class="center"> Lista de Cursos</h3>
        <div class="row center" >
            @foreach($cursos as $curso)
        <div class="col s12 m3">
          <div class="card">
            <div class="card-image">
              <img width="20" height="100" src="{{asset($curso->imagem)}}">
            </div>
            <div class="card-content">
                <h5>{{$curso->titulo}}</h5>
                <p>{{$curso->descricao}}</p>
            </div>
            <div class="card-action">
              <a href="#">Ver mais...</a>
            </div>
          </div>
        </div>
            @endforeach
      </div>
      <div class="row" align="center">
        {{$cursos->links()}}
      </div>
	</div>

@endsection('conteudo')
