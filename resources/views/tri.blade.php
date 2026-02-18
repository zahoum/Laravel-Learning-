@extends('layouts.app')

@section('title', 'Tri Page')
@section('header-title', 'Welcome Again')

@section('content')
    <section class="text-center">
        @if(request('from'))
            <div class="info-message">
                <p>I came from: <strong>{{ request('from') }}</strong></p>
            </div>
        @endif

        <h2>Tri Page Content</h2>
        <p>This is the tri page content.</p>
    </section>
@endsection