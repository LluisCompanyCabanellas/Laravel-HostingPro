

@extends('front.layout.master')

@section('title')Carrito confirmado @endsection
@section('description')Eso es la sección de carrito @endsection

@section("content")
        
    @if($agent->isDesktop())

        @include('front.component.desktop.titulos', ['title' => 'Tu pedido'])

        @include('front.pages.buyconfirmate.desktop.buyconfirmate')

    @endif

    @if($agent->isMobile())

        @include('front.pages.buyconfirmate.mobile.buyconfirmate')
        
    @endif

@endsection