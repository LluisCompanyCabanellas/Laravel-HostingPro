@extends('front.layout.master')

@section('title')Página de contacto @endsection
@section('description')Eso es la sección de contacto @endsection

@section("content")
        
    @if($agent->isDesktop())

    @include('front.component.desktop.titulos', ['title' => 'Contacta con nosotros'])

    @include('front.pages.contact.desktop.contact')
    
    @endif

    @if($agent->isMobile())
        @include('front.pages.contact.mobile.contact')
    @endif

@endsection