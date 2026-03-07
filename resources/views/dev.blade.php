@extends('layouts.app')

@section('title', 'Dev Page')
@section('header-title', 'Developer Page')

@section('content')
    <section class="text-center">
        @if(request('from'))
            <div class="info-message">
                <p>I come from the specific page: <strong>{{ request('from') }}</strong></p>
            </div>
        @endif

        <h2>Developer Information</h2>
        <p>{{ $message ?? 'Welcome to the developer page!' }}</p>
        
        @if(isset($msg))
            <p>{{ $msg }}</p>
        @endif
        @if ($devMessage ==="Golden Number") 
            <h3 style="color: gold;">{{ $devMessage }}</h3>
        @else
            <h3>{{ $msg }}</h3>
        @endif 
    </section>
@endsection
