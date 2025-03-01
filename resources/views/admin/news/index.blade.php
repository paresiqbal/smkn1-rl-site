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

                {{-- Updated Quill editor container --}}
                <div id="editor">
                    {{-- This will be controlled by Quill --}}
                </div>
                <br>

                {{-- Hidden textarea to submit the content --}}
                <textarea name="content" id="content" style="display:none;">{{ old('content') }}</textarea>
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
                <div class="news-item" style="margin-bottom: 20px;">
                    <h3>{{ $newsItem->title }}</h3>
                    <div class="ql-editor">{!! $newsItem->content !!}</div>
                    <small>{{ $newsItem->date }}</small>
                </div>
            @endforeach
        </div>

    </div>

    <!-- Include the Quill library -->
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

    <script>
        // Initialize Quill
        const quill = new Quill('#editor', {
            theme: 'snow'
        });

        // Load old content, if any, into Quill
        const contentField = document.getElementById('content');
        if (contentField.value) {
            quill.root.innerHTML = contentField.value;
        }

        // Before form submission, copy Quill content into hidden textarea
        document.getElementById('newsForm').addEventListener('submit', function(e) {
            contentField.value = quill.root.innerHTML;
        });
    </script>


@endsection
