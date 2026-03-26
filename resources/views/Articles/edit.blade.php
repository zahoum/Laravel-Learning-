@extends('layouts.app')

@section('title', 'Article Details')
@section('header-title', 'Article Details')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h2>Edit Article</h2>
            <form action="{{ route('articles.update', $P->id) }}" method="POST" class="article-form">
                @csrf
                @method('PUT')
                <label for="title">Title</label>
                <input type="text" id="title" name="title" value="{{ old('title', $P->title) }}" required>

                <label for="content">Content</label>
                <textarea id="content" name="content" required>{{ old('content', $P->content) }}</textarea>

                <button type="submit" class="btn-small btn-edit">Update Article</button>
            </form>
        </div>
    </div>
@endsection