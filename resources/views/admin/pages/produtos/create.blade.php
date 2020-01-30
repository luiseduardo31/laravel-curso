@extends('admin.layout.app')

@section('title','Cadastrando Produtos')

@section('content')

<h1>Cadastrando Produtos</h1>

<form action="{{route('produtos.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="nome" placeholder="Nome:">
    <input type="text" name="descricao" placeholder="Descrição:">
    <input type="file" name="foto">
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    
@endsection