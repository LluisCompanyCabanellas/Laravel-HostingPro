@extends('front.layout.master')

@section('title')Panel @endsection
@section('description')Eso es la sección de panel @endsection

@section("content")

    @if($agent->isDesktop())

        @include('front.component.desktop.titulos', ['title' => 'Panel de Admin'])

        @include('front.pages.panel.desktop.panel')

    @endif

    @if($agent->isMobile())

        @include('front.pages.panel.mobile.panel')
        
    @endif

@endsection