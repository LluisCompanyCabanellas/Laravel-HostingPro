
@extends('front.layout.master')


@section('title')Checkout @endsection
@section('description')Eso es la sección de Checkout @endsection

@section("content")

    @if($agent->isDesktop())

        @include('front.component.desktop.titulos', ['title' => 'Confirmar tu Host'])

        @include('front.pages.checkout.desktop.checkout')

    @endif

    @if($agent->isMobile())

        @include('front.pages.checkout.mobile.checkout')

    @endif
    
@endsection

    