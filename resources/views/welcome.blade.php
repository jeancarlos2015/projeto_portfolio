@extends('layouts.tema1.layout')

@section('content')
    @includeIf('layouts.tema1.header')
    @includeIf('componentes.tema1.section3')
    @includeIf('componentes.tema1.section2')
    @includeIf('componentes.tema1.section4')
    @includeIf('componentes.tema1.section5')
@endsection


@section('menu')
    @includeIf('layouts.tema1.nav')
@endsection