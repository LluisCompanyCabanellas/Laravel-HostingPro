

@extends('front.layout.master')

@section('title')Carrito @endsection
@section('description')Eso es la sección de carrito @endsection

@section("content")
        
    @if($agent->isDesktop())

        @include('front.component.desktop.titulos', {'title' => 'Carrito de compras'})

        @include('front.pages.carrito.desktop.carrito')

    @endif

    @if($agent->isMobile())

        @include('front.pages.carrito.mobile.carrito')
        
    @endif

@endsection