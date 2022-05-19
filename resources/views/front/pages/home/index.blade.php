@extends('front.layout.master')

@section('title')Página de Inicio @endsection
@section('description')Eso es la sección de home @endsection

@section("content")

    @if($agent->isDesktop())

        @include('front.component.desktop.titulos', ['title' => 'Inicio'])

        @include('front.pages.home.desktop.home')

    @endif

    @if($agent->isMobile())

        @include('front.pages.home.mobile.home')

    @endif

@endsection
   








