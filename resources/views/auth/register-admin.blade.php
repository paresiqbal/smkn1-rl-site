@extends('layout.layout')

@section('title', 'Homepage')

@section('content')
    <div
        class="container border-4 border-black p-6 w-full max-w-md shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] transition-all dark:border-white dark:shadow-[6px_6px_0px_0px_rgba(255,255,255,1)] bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:24px_24px]">
        <h2 class="text-2xl font-bold text-center mb-6">Daftar Akun Admin</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group mb-4">
                <label for="name" class="block mb-2">Nama</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}"
                    class=
                "w-full border-black border-2 p-2.5 focus:outline-none focus:shadow-[2px_2px_0px_rgba(0,0,0,1)] focus:bg-yellow-300 active:shadow-[2px_2px_0px_rgba(0,0,0,1)]"
                    required>
            </div>
            <div class="form-group mb-4">
                <label for="email" class="block mb-2">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}"
                    class=
                "w-full border-black border-2 p-2.5 focus:outline-none focus:shadow-[2px_2px_0px_rgba(0,0,0,1)] focus:bg-yellow-300 active:shadow-[2px_2px_0px_rgba(0,0,0,1)]"
                    required>
            </div>
            <div class="form-group mb-4">
                <label for="password" class="block mb-2">Password</label>
                <input type="password" id="password" name="password"
                    class=
                "w-full border-black border-2 p-2.5 focus:outline-none focus:shadow-[2px_2px_0px_rgba(0,0,0,1)] focus:bg-yellow-300 active:shadow-[2px_2px_0px_rgba(0,0,0,1)]"
                    required>
            </div>
            <div class="form-group mb-6">
                <label for="password_confirmation" class="block mb-2">Konfirmasi Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation"
                    class=
                "w-full border-black border-2 p-2.5 focus:outline-none focus:shadow-[2px_2px_0px_rgba(0,0,0,1)] focus:bg-yellow-300 active:shadow-[2px_2px_0px_rgba(0,0,0,1)]"
                    required>
            </div>
            <button type="submit"
                class="h-12 w-full text-black border-2 border-black p-2.5 bg-yellow-300 shadow-[4px_4px_0px_rgba(0,0,0,1)] hover:translate-x-1 hover:translate-y-1 hover:shadow-none transition">
                Daftar
            </button>

            {{-- validation error --}}
            @if ($errors->any())
                <div class="text-red-500 mt-4">
                    <ul class="px-4 py-2">
                        @foreach ($errors->all() as $error)
                            <li class="text-sm">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
    </div>
@endsection
