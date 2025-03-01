@extends('admin.layout.admin-layout')

@section('title', 'Buat Berita')

@section('content')
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-lg shadow-md p-6 md:p-8">
            <h1 class="text-2xl font-bold text-gray-900 mb-6">Create News</h1>

            @if (session('success'))
                <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded mb-6">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded mb-6">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('admin.store.news') }}" class="space-y-6">
                @csrf

                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title:</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div>
                    <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Content:</label>
                    <textarea name="content" id="content" rows="6" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ old('content') }}</textarea>
                </div>

                <div>
                    <label for="date" class="block text-sm font-medium text-gray-700 mb-1">Date:</label>
                    <input type="date" name="date" id="date" value="{{ old('date') }}" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div class="pt-2">
                    <button type="submit"
                        class="w-full sm:w-auto px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-md shadow-sm transition duration-150 ease-in-out">
                        Upload News
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
