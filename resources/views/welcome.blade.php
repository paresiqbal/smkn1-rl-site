@extends('layout.main')

@section('title', 'Homepage')

@section('content')
    <div>
        @include('components.banner')
        @include('components.detail')
    </div>
@endsection
