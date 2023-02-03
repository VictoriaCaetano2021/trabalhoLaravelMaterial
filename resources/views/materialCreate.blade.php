@extends('layouts.base')

@section('title','Create Material')

@section('navTitle','Create Material')
@section('navText','Cadastro de Materiais')

@section('mainTitle','Cadastro')
@section('mainText','Cadastre um novo material')

@section('formCreate')
<div class="jumbotron jumbotron-fluid bg-light">
<div class="row">
  <div class="col-md-6 offset-md-3">
        <form method="POST" enctype="multipart/form-data"   action="{{route('material.store')}}">
        @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Nome</label>
                <input class="form-control" type="text" name="nome" placeholder="nome de material">
            </div>
            <div class="form-group">
            <label for="exampleFormControlInput1">Imagem</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01"  name="imagem"/>
                    <label class="custom-file-label" for="inputGroupFile01">Escolha a imagem</label>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Setor</label>
                <input class="form-control" type="text" name="setor" placeholder="nome de material"/>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Descrição</label>
                <textarea class="form-control" name="descricao" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Enviar</button>
        </form>

  </div>
</div>
</div>
@endsection
