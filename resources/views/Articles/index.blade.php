@extends('layouts.app')

@section('title', 'Articles')
@section('header-title', 'All Articles')

@section('content')

<style>
    .articles-container {
        max-width: 1000px;
        margin: 2rem auto;
        padding: 0 20px;
    }

    .articles-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
    }

    .articles-header h2 {
        color: #007bff;
        font-weight: 600;
        margin: 0;
    }

    .btn-new-article {
        padding: 0.6rem 1.5rem;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 0.95rem;
        cursor: pointer;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-block;
    }

    .btn-new-article:hover {
        background-color: #0056b3;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 123, 255, 0.3);
        text-decoration: none;
        color: white;
    }

    .articles-table {
        width: 100%;
        border-collapse: collapse;
        background: #ffffff;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .articles-table thead {
        background-color: #007bff;
        color: white;
    }

    .articles-table th {
        padding: 1rem;
        text-align: left;
        font-weight: 600;
        border-bottom: 2px solid #0056b3;
    }

    .articles-table td {
        padding: 1.2rem;
        border-bottom: 1px solid #eee;
    }

    .articles-table tbody tr {
        transition: background-color 0.3s ease;
    }

    .articles-table tbody tr:hover {
        background-color: #f8f9fa;
    }

    .articles-table tbody tr:last-child td {
        border-bottom: none;
    }

    .article-id {
        font-weight: 600;
        color: #007bff;
    }

    .article-title {
        font-weight: 600;
        color: #333;
    }

    .article-content {
        color: #666;
        max-width: 500px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .articles-actions {
        display: flex;
        gap: 0.5rem;
    }

    .btn-small {
        padding: 0.4rem 0.8rem;
        border: none;
        border-radius: 4px;
        font-size: 0.85rem;
        cursor: pointer;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-block;
    }

    .btn-edit {
        background-color: #007bff;
        color: white;
    }

    .btn-edit:hover {
        background-color: #0056b3;
        text-decoration: none;
        color: white;
    }

    .btn-delete {
        background-color: #dc3545;
        color: white;
    }

    .btn-delete:hover {
        background-color: #c82333;
        text-decoration: none;
        color: white;
    }

    .no-articles {
        text-align: center;
        padding: 2rem;
        background: #ffffff;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        color: #666;
    }

    .no-articles p {
        margin: 0 0 1rem 0;
    }
</style>

<div class="articles-container">
    <div class="articles-header">
        <h2>📰 Articles</h2>
        <a href="{{ route('articles.create') ?? '#' }}" class="btn-new-article">+ New Article</a>
    </div>

    @if($articles && count($articles) > 0)
        <table class="articles-table">
            <thead>
                <tr>
                    <th style="width: 8%;">ID</th>
                    <th style="width: 25%;">Title</th>
                    <th style="width: 50%;">Content</th>
                    <th style="width: 17%;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                <tr>
                    <td><span class="article-id">#{{ $article->id }}</span></td>
                    <td><span class="article-title">{{ $article->title }}</span></td>
                    <td><span class="article-content">{{ $article->content }}</span></td>
                    <td>
                        <div class="articles-actions">
                            <a href="{{ route('articles.edit', $article->id) }}" class="btn-small btn-edit">Edit</a>
                            <a href="{{ route('articles.show', $article->id) }}" class="btn-small btn-view">View</a>
                            <form method="POST" action="{{ route('articles.destroy', $article->id) }}" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-small btn-delete" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="no-articles">
            <p>📭 No articles found yet.</p>
            <a href="{{ route('articles.create') ?? '#' }}" class="btn-new-article">+ Create Your First Article</a>
        </div>
    @endif
</div>

@endsection