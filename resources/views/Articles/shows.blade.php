@extends('layouts.app')

@section('title', 'Article Details')
@section('header-title', 'Article Details')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h2>{{ $P->title }}</h2>
            <p>{{ $P->content }}</p>
        </div>
    </div>
</div>

@endsection
