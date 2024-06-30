@extends('layouts.app')

@section('title', 'Add New Film')

@section('contents')
<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold mb-4">Add showtime</h2>

    @if ($errors->any())
    <div class="bg-red-200 text-red-800 py-2 px-4 mb-4 rounded">
        <ul class="list-disc">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('movies.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
            <input type="date" name="date" id="date" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>
        <div class="mb-4">
            <label for="time" class="block text-sm font-medium text-gray-700">Time</label>
            <input type="time" name="time" id="time" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>
        <div class="mb-4">
            <label for="movie_title" class="block text-gray-700">Movie Title</label>
            <select id="movie_title" name="movie_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                @foreach($products as $product)
                    <option value="" disabled selected>Pilih!!!</option>
                    <option value="{{ $product->judul }}">{{ $product->judul }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="theater" class="block text-sm font-medium text-gray-700">Mall</label>
            <div class="mt-2">
                <select id="mall" name="mall" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    <option value="" disabled selected>Pilih!!!</option>
                    <option value="BCS MALL">BCS MALL </option>
                    <option value="MEGA MALL">MEGA MALL</option>
                    <option value="ONE BATAM MALL">ONE BATAM MALL</option>
                    <option value="GRAND BATAM MALL">GRAND BATAM MALL</option>
                </select>
            </div>
        </div>
        <div class="mb-4">
            <label for="theater" class="block text-sm font-medium text-gray-700">Theater</label>
            <input type="text" name="theater" id="theater" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>
        <div class="mt-4">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Showtime Film</button>
        </div>
    </form>
</div>
@endsection
