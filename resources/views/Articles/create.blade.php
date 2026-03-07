@extends('layouts.app')

@section('title', 'Create Article')

@section('content')
<style>
    .article-form {
        display: flex;
        flex-direction: column;
        max-width: 700px;
        margin: 2rem auto;
        background: #ffffff;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .article-form h2 {
        text-align: center;
        color: #007bff;
        margin-bottom: 1.5rem;
        font-weight: 600;
    }

    .article-form label {
        margin-bottom: 0.5rem;
        font-weight: 600;
        color: #333;
    }

    .article-form input,
    .article-form textarea {
        padding: 0.75rem;
        margin-bottom: 1.5rem;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 1rem;
        width: 100%;
        font-family: inherit;
        transition: border-color 0.3s ease;
    }

    .article-form input:focus,
    .article-form textarea:focus {
        outline: none;
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
    }

    .article-form textarea {
        resize: vertical;
        min-height: 200px;
    }

    .form-helper {
        font-size: 0.85rem;
        color: #666;
        margin-top: -1rem;
        margin-bottom: 1rem;
    }

    .form-buttons {
        display: flex;
        gap: 1rem;
        justify-content: center;
    }

    .btn-submit {
        padding: 0.6rem 1.5rem;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 0.95rem;
        cursor: pointer;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }

    .btn-submit:hover {
        background-color: #0056b3;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 123, 255, 0.3);
    }

    .btn-cancel {
        padding: 0.6rem 1.5rem;
        background-color: #6c757d;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 0.95rem;
        cursor: pointer;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }

    .btn-cancel:hover {
        background-color: #5a6268;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(108, 117, 125, 0.3);
        text-decoration: none;
        color: white;
    }
</style>

<form class="article-form" method="POST" action="{{ route('articles.store') }}" novalidate>
    @csrf <!-- CSRF token for security Cross Site Request Forgery -->
    
    <h2>Create New Article</h2>

    <label for="title">Article Title</label>
    <input type="text" id="title" name="title" placeholder="Enter your article title" value="{{ old('title') }}" required>
    <div class="form-helper">Give your article a clear and compelling title</div>
    @error('title')
        <div class="form-helper" style="color: red;">{{ $message }}</div>
    @enderror

    <label for="content">Content</label>
    <textarea id="content" name="content" placeholder="Write the main content of your article here..." required>{{ old('content') }}</textarea>
    <div class="form-helper">Share your detailed article content</div>
    @error('content')
        <div class="form-helper" style="color: red;">{{ $message }}</div>
    @enderror

    <div class="form-buttons">
        <button type="submit" class="btn-submit">
            ✓ Publish Article
        </button>
        <a href="{{ route('home') ?? '#' }}" class="btn-cancel">
            ✕ Cancel 
        </a>
    </div>
</form>

@endsection
