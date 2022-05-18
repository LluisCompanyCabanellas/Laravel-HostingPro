@extends('front.layout.master')

@section('title')Página de contacto @endsection
@section('description')Eso es la sección de contacto @endsection

@section("content")
        
    @if($agent->isDesktop())

    @include('front.component.desktop.titulos', {'title' => 'Carrito de compras'})

    @include('front.pages.contacto.desktop.contacto')
    
    @endif

    @if($agent->isMobile())
        @include('front.pages.contacto.mobile.contacto')
    @endif

@endsection