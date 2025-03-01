@extends('admin.layout.admin-layout')

@section('title', 'Berita')

@section('content')
    <div>
        <div class="container mt-5">
            <h1>Create News</h1>

            @if (session('success'))
                <div style="color: green;">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div style="color: red;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('admin.store.news') }}" id="newsForm">
                @csrf

                <div>
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}" required>
                </div>
                <br>

                {{-- Hidden textarea to submit the content --}}
                <div>
                    <label for="content">Content:</label>

                    <!-- Hidden input to store content (this is required for Trix to work properly) -->
                    <input id="content" type="hidden" name="content" value="{{ old('content') }}">

                    <!-- Trix Editor (must reference the hidden input via "input" attribute) -->
                    <trix-editor input="content" class="trix-content"></trix-editor>
                </div>
                <br>

                <div>
                    <label for="date">Date:</label>
                    <input type="date" name="date" id="date" value="{{ old('date') }}" required>
                </div>
                <br>

                <button type="submit">Upload News</button>
            </form>
        </div>

        <!-- Display news below the form -->
        <div class="container mt-5">
            <h2>News List</h2>
            @foreach ($news as $newsItem)
                <div class="news-item no-tailwindcss-base" style="margin-bottom: 20px;">
                    <h3>{{ $newsItem->title }}</h3>
                    <div class="trix-content">{!! $newsItem->content !!}</div>
                    <small>{{ $newsItem->date }}</small>
                </div>
            @endforeach
        </div>
    </div>
@endsection
