@extends('admin.layout.app')

@section('title','Editando Produtos')

@section('content')

<h1>Editando Produtos {{$id}}</h1>

<form action="{{route('produtos.update',$id)}}" method="POST">
    @method('PUT')
    @csrf
    <input type="text" name="nome" placeholder="Nome:">
    <input type="text" name="descricao" placeholder="Descrição:">
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    
@endsection