@extends('admin.layout.admin-layout')

@section('title', 'Buat Berita')

@section('content')
    <div>
        <form method="POST" action="{{ route('admin.store.news') }}" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="title">Judul Berita</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div>
                <label for="content">Konten Berita</label>
                <textarea id="content" name="content" required></textarea>
            </div>
            <div>
                <label for="file">Upload File</label>
                <input type="file" id="file" name="file">
            </div>
            <button type="submit">Upload</button>
        </form>
    </div>
@endsection
