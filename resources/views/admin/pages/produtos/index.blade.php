@extends('admin.layout.app')

@section('title','Produtos...')
    

@section('content')

 <h1>Exibindo Produtos</h1>

<a href="{{route('produtos.create')}}">Cadastrar</a>
 
 <hr>
 
 @include('admin.includes.alerts')

 @component('admin.components.card')
     
 @endcomponent

@forelse ($produtos as $produto)
<p>{{$produto->id}}: {{$produto->nome}} <br/>
    <a href="{{route('produtos.edit', $produto->id)}}">Editar</a> 
    <a href="{{route('produtos.show', $produto->id)}}">Detalhes</a> </p>    
@empty
    'Não há produtos cadastrados!'
@endforelse
    
@endsection
