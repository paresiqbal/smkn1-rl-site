@extends('admin.layout.admin-layout')

@section('title', 'Berita')

@section('content')
    <div>
        <div class="container mt-5">
            <!-- Add button to go to news creation page -->
            <a href="{{ route('admin.show.create-news') }}" class="btn btn-primary mb-3">Create News</a>

            <!-- Display news below the form -->
            <div class="container mt-5">
                <h2>News List</h2>
                @foreach ($news as $newsItem)
                    <div class="news-item no-tailwindcss-base" style="margin-bottom: 20px;">
                        <h3>{{ $newsItem->title }}</h3>

                        @if ($newsItem->image)
                            <img src="{{ asset('storage/' . $newsItem->image) }}" alt="News Image" class="w-64 h-auto mt-2">
                        @endif

                        <div class="trix-content">{!! $newsItem->content !!}</div>
                        <small>{{ $newsItem->date }}</small>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
