@extends('layout.layout')

@section('title', 'Homepage')

@section('content')
    <div class="container">
        <h2>Register</h2>
        <form method="POST" action="{{ route('show.register') }}">
            @csrf
            <div class="form-group">
                <label for="name" class="text-2xl">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control"
                    required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
@endsection
