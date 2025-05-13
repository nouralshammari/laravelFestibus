
@vite('resources/css/app.css')

@extends('layouts.app')
@section('content')
    <h2 class="text-3xl font-bold mb-4">Jouw Winkelwagen</h2>
    <div class="bg-white p-6 rounded-lg shadow-md">
        <p class="text-gray-600">Je winkelwagen is momenteel leeg.</p>
        <a href="{{ route('home') }}" class="mt-4 inline-block bg-blue-600 text-white py-2 px-4 rounded">Terug naar festivals</a>
    </div>
@endsection
