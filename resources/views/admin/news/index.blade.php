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

            <form method="POST" action="{{ route('admin.store.news') }}" id="newsForm" enctype="multipart/form-data">
                @csrf

                <div>
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}" required>
                </div>
                <br>

                <div>
                    <label for="content">Content:</label>
                    <input id="content" type="hidden" name="content" value="{{ old('content') }}">
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

                    @if ($newsItem->image)
                        <img src="{{ asset('storage/' . $newsItem->image) }}" alt="News Image" class="w-64 h-auto mt-2">
                    @endif

                    <div class="trix-content">{!! $newsItem->content !!}</div>
                    <small>{{ $newsItem->date }}</small>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener("trix-attachment-add", function(event) {
            if (event.attachment.file) {
                uploadImage(event.attachment);
            }
        });

        function uploadImage(attachment) {
            let formData = new FormData();
            formData.append('image', attachment.file);

            fetch('{{ route('admin.upload.image') }}', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    attachment.setAttributes({
                        url: data.url,
                        href: data.url
                    });
                })
                .catch(error => {
                    console.error('Upload failed:', error);
                });
        }
    </script>
@endpush
