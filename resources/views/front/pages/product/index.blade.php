@extends('front.layout.master')


@section('title')Product @endsection
@section('description')Eso es la sección de product @endsection

@section("content")

    @if($agent->isDesktop())

        @include('front.component.desktop.titulos', {'title' => 'Carrito de compras'})

        @include('front.pages.product.desktop.product')

    @endif

    @if($agent->isMobile())

        @include('front.pages.product.mobile.product')

    @endif

@endsection
    























