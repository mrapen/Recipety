<!-- resources/views/tags/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container my-4">
    <h1>Теги рецептів</h1>
    <div class="list-group my-4">
        @foreach($tags as $tag)
            <a href="{{ route('tags.show', $tag->id) }}" class="list-group-item list-group-item-action">
                {{ $tag->name }} ({{ $tag->recipes_count }} рецептів)
            </a>
        @endforeach
    </div>
</div>
@endsection
