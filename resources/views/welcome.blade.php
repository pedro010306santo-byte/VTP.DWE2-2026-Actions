@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

@php
    $base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
    if ($base === '.') {
        $base = '';
    }
@endphp

<h1>{{ $titulo }}</h1>

<img class="banner" src="{{ $base }}/img/banner.svg" alt="Banner HDC Events">

<p>FUNCIONANDO DEMAIS EAI EDER VC TA BEM?</p>


@endsection
