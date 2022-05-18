@extends('front.layout.master')

@section('title')Página de Productos @endsection
@section('description')Eso es la sección de productos @endsection

@section("content")

    @if($agent->isDesktop())

        @include('front.pages.products.desktop.products')

    @endif
    
    @if($agent->isMobile())

        @include('front.pages.products.mobile.products')

    @endif

@endsection
      
   





