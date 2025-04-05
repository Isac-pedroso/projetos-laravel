@extends('site.layout')
@section('title', 'Home')
@section('conteudo')
{{-- Comentario dentro do codigo --}}

{{ isset($nome) ? 'existe' : 'não existe'}}
{{-- {{ $teste ?? 'padrao'}} --}}
@endsection