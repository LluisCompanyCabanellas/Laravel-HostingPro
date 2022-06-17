@extends('front.layout.master')

@section('title')Página de Productos @endsection
@section('description')Eso es la sección de productos @endsection

@section("content")

    @if($agent->isDesktop())

        @include('front.component.desktop.titulos', ['title' => 'Servidores'])

        @include('front.pages.products.desktop.products', ['products' => $products])
        

    @endif
    
    @if($agent->isMobile())
    
        @include('front.pages.products.mobile.products')

    @endif

@endsection
      
   





