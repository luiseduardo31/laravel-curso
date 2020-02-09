@extends('admin.layout.app')

@section('title','Detalhes do Produto')

@section('content')

    <h4>{{$product->nome}}</h4>

    <div class="container-fluid">
       <p>
        Produto: {{$product->nome}} <br/>
        Descrição: {{$product->descricao}} 
       </p>
        <form action="{{route('produtos.destroy',$product->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
    </div>


    
@endsection