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
        
        @if(isset($devMessage))
            <p>{{ $devMessage }}</p>
        @endif
        @if ($msg ==="Golden Number") 
            <h3 style="color: gold;">{{ $msg }}</h3>
        @else
            <h3>{{ $msg }}</h3>
        @endif 
    </section>
@endsection
