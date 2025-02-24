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

            <form method="POST" action="{{ route('admin.store.news') }}">
                @csrf

                <div>
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}" required>
                </div>
                <br>

                <div>
                    <label for="content">Content:</label>
                    <textarea name="content" id="content" rows="5" required>{{ old('content') }}</textarea>
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
    </div>
@endsection
