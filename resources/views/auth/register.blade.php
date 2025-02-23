@extends('layout.layout')

@section('title', 'Homepage')

@section('content')
    <div
        class="container border-4 border-black p-6 w-full max-w-md shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] transition-all dark:border-white dark:shadow-[6px_6px_0px_0px_rgba(255,255,255,1)]">
        <h2 class="text-2xl font-bold text-center mb-6">Daftar Akun</h2>
        <form method="POST" action="{{ route('show.register') }}">
            @csrf
            <div class="form-group mb-4">
                <label for="name" class="block mb-2">Nama</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}"
                    class="w-full px-3 py-2 border-2 focus:outline-none focus:ring-2 focus:ring-black" required>
            </div>
            <div class="form-group mb-4">
                <label for="email" class="block mb-2">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="form-group mb-4">
                <label for="password" class="block mb-2">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group mb-6">
                <label for="password_confirmation" class="block mb-2">Konfirmasi Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>
            <button type="submit"
                class="btn btn-primary w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Daftar</button>
        </form>
    </div>
@endsection
