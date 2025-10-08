@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $news->title }}</h1>
    @if ($news->image)
        <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="img-fluid mb-3">
    @endif
    <p><strong>Published At:</strong> {{ $news->published_at ? $news->published_at->format('M d, Y H:i') : 'N/A' }}</p>
    <div>
        {!! nl2br(e($news->content)) !!}
    </div>
    <a href="{{ route('news.index') }}" class="btn btn-primary mt-3">Back to News List</a>
</div>
@endsection