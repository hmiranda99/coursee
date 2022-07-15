@extends('layout.site')
@section('titulo', 'Contatos')

@section('conteudo')
<h3>Lista de contatos</h3>
@foreach ($contato as $value)
<p>{{$value->nome}}</p>
<p>{{$value->contato}}</p>
@endforeach
@endsection