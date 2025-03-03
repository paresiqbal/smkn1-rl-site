@extends('admin.layout.admin-layout')

@section('title', 'Berita')

@section('content')
    <div>
        <div class="container mt-5">
            <!-- Add button to go to news creation page -->
            <a href="{{ route('admin.show.create-news') }}" class="btn btn-primary mb-3">Create News</a>

            <!-- Modified news display as smaller cards -->
            <h2>News List</h2>
            <div class="row">
                @foreach ($news as $newsItem)
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="card p-2">
                            @if ($newsItem->image)
                                <img src="{{ asset('storage/' . $newsItem->image) }}" class="card-img-top img-fluid"
                                    alt="News Image">
                            @endif
                            <div class="card-body p-2">
                                <h5 class="card-title small">{{ $newsItem->title }}</h5>
                                <div class="trix-content small">{!! $newsItem->content !!}</div>
                                <p class="card-text">
                                    <small class="text-muted">{{ $newsItem->date }}</small>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
