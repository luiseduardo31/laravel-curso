@extends('admin.layout.app')

@section('title','Editando Produto')

@section('content')


<form action="{{route('produtos.update',$product->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <br/>
    @method('PUT')
    <br/>
    <input type="text" name="nome" placeholder="Nome:" value="{{$product->nome}}">
    <input type="text" name="descricao" placeholder="Descrição:" value="{{$product->descricao}}">
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    
@endsection