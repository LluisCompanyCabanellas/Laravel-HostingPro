@extends('admin.layout.master')

@section('content')

<div class="panel">
    <div class="desktop-two-columns">
        <div class="column">
            <div class="panel-table">
                @yield('table')
            </div>
        </div>
        <div class="column">
            <div class="panel-form">
                @yield('form')
            </div>
        </div>
    </div>
@endsection