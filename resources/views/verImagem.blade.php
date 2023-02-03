@extends('layouts.base')

@section('title','Ver Material')

@section('navTitle','Ver Material')
@section('navText','Ver o Material')

@section('mainTitle','Ver Imagem')
@section('mainText','Ver Imagem do material')

@section('verImagem')
    <p class="lead">{{$material['nome']}}</p>
    <div class="image">
       <!-- <img src="{{$material['imagem']}}" alt="a imagem não existe">-->
        <img src="../../../storage/app/{{$material['imagem']}}" alt="a imagem não existe">
       
    </div>
@endsection
