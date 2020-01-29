@extends('admin.layout.app')

@section('title','Produtos...')
    

@section('content')

 <h1>Exibindo Produtos</h1>
 
 @include('admin.includes.alerts',['msg'=> 'Mensagem alerta!'])

 @component('admin.components.card')
     
 @endcomponent

@forelse ($produtos as $produto)
    <p>{{$produto}}</p>    
@empty
    'Não há produtos cadastrados!'
@endforelse
    
@endsection
