@extends('admin.layout.app')

@section('title','Produtos...')
    

@section('content')

 <h1>Exibindo Produtos</h1>

<a href="{{route('produtos.create')}}">Cadastrar</a>
 
 <hr>
 
 @include('admin.includes.alerts',['msg'=> 'Mensagem alerta!'])

 @component('admin.components.card')
     
 @endcomponent

@forelse ($produtos as $produto)
    <p>{{$produto->id}}: {{$produto->nome}}</p>    
@empty
    'Não há produtos cadastrados!'
@endforelse
    
@endsection
