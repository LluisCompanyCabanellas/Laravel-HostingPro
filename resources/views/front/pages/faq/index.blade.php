@extends('front.layout.master')

@section('title')Faqs @endsection
@section('description')Eso es la sección de faqs @endsection

@section("content")

    @if($agent->isDesktop())

            @include('front.pages.faq.desktop.faq')
    @endif

    @if($agent->isMobile())

        @include('front.pages.faq.mobile.faq')

    @endif

@endsection














