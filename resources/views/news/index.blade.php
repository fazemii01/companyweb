@extends('layouts.app')

@section('content')
<div class="container">
    <h1>News List</h1>
    <a href="{{ route('news.create') }}" class="btn btn-primary">Create New News</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Published At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($news as $item)
            <tr>
                <td>{{ $item->title }}</td>
                <td>{{ $item->published_at ? $item->published_at->format('M d, Y') : 'N/A' }}</td>
                <td>
                    <a href="{{ route('news.show', $item->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('news.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('news.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection