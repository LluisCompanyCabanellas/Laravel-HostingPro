
@extends('admin.layout.master')


@section('title')Checkout @endsection
@section('description')Eso es la sección de Checkout @endsection

@section("content")

    @if($agent->isDesktop())

        @include('admin.component.desktop.titulos', ['title' => 'Confirmar tu Host'])

        @include('admin.pages.checkout.desktop.checkout')

    @endif

    @if($agent->isMobile())

        @include('admin.pages.checkout.mobile.checkout')

    @endif
    
@endsection

    