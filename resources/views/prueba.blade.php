@extends('layout')

@section('title', 'guapeton')

@section('header')
<p>Esto el el jeder</p>

@section('content')
<p>Esto es el wodi</p>

@section('footer')
<p>Esto es el futer</p>
<?php 
    echo $citas;
  ?>
@for($i = 0; $i < sizeOf($citas); $i ++)
    <li>nombre: {{ $citas[$i]->nombre }}</li>
    <li>usuarioId: {{ $citas[$i]->UsuarioId }}</li>
    <li>fecha: {{ $citas[$i]->fecha }}</li>
    <li>observaciones: {{ $citas[$i]->observaciones }}</li>
@endfor

@endsection


