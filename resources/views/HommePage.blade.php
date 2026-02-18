@extends('layouts.app')

@section('title', 'Home Page')
@section('header-title', 'Welcome to Home Page')

@section('content')
    <section class="text-center">
        <h2>The Home Page</h2>
        <p>This is a simple page created with HTML, CSS, and PHP Blade</p>
        <p>Here I learn Laravel from the beginning step by step</p>
        
        @if(request('from'))
            <div class="info-message">
                <p>I came from {{ request('from') }}</p>
            </div>
        @endif

        <div class="links" style="margin-top: 2rem;">
            <a href="{{ route('about') }}" class="btn">Learn More About Me</a>
        </div>
    </section>
@endsection