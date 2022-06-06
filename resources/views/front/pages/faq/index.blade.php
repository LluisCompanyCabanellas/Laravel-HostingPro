@extends('front.layout.master')

@section('title')Faqs @endsection
@section('description')Eso es la sección de faqs @endsection

@section("content")

    @if($agent->isDesktop())

        @include('front.component.desktop.titulos', ['title' => 'Preguntas frequentes'])

        @include('front.pages.faq.desktop.faq', ['faqs' => $faqs])

    @endif

    @if($agent->isMobile())

        @include('front.pages.faq.mobile.faq', ['faqs' => $faqs])

    @endif

@endsection














