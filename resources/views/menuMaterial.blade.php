@extends('layouts.base')

@section('title','Menu Material')

@section('navTitle','Material')

@section('navText','Menu de materiais')

@section('mainTitle','Materiais')
@section('mainText','Página de Materiais, todas as opções necessárias estão no menu')



@section('paginate')
<!-- <div class="row"> -->
   
  <table class="table table-hover table-striped">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">nome</th>
        <th scope="col">descrição</th>
        <th scope="col">setor</th>
        <th scope="col">imagem</th>
        <th scope="col">Editar</th>
        <th scope="col">Apagar</th>
        <th scope="col">Imagem</th>
    </tr>
 </thead>
    <tbody>
        @foreach ($materials as $m) 
        <th scope="row">{{ $m->id }}</th>
            <td> {{ $m->nome }}</td>
            <td>{{ $m->descricao }}</td>
            <td>{{ $m->setor }}</td>
            <td>{{ $m->imagem }}</td>
            <td><a href="material/{{$m['id']}}">editar</a></td>
            <td><a href="material/{{$m['id']}}/delete">deletar</a></td>
            <td><a href="material/{{$m['id']}}/verImagem">ver</a></td>

        </tr>
        
        @endforeach
    </tbody>
    </table>
    {{ $materials->links() }} 

<!-- </div> -->
@endsection