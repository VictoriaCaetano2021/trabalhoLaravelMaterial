@extends('layouts.base')

@section('title','Update Material')

@section('navTitle','Update Material')
@section('navText','Update de Materiais')

@section('mainTitle','Update')
@section('mainText','Update um novo material')

@section('formUpdate')
<div class="jumbotron jumbotron-fluid bg-light">
<div class="row">
  <div class="col-md-6 offset-md-3">
  {{ $material }}
        <br>
       form para update vem aqui

       <form method="POST" action="{{$material['id']}}/editar">
        @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Nome</label>
                <input class="form-control" type="text" name="nome" placeholder="nome de material" value="{{$material['nome']}}">
            </div>
            <div class="form-group">
            <label for="exampleFormControlInput1">Imagem</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01"  name="imagem" value="{{$material['imagem']}}">
                    <label class="custom-file-label" for="inputGroupFile01">Escolha a imagem</label>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Setor</label>
                <input class="form-control" type="text" name="setor" placeholder="nome de material" value="{{$material['setor']}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Descrição</label>
                <input class="form-control" name="descricao" type="textarea"  id="exampleFormControlTextarea1" rows="3" value="{{$material['descricao']}}">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Enviar</button>
        </form>

  </div>
</div>
</div>
@endsection