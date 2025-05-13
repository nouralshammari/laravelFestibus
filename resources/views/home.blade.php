/ resources/views/home.blade.php
@extends('layouts.app')
@vite('resources/css/app.css')
@section('content')
    <div class="bg-gradient-to-r from-purple-800 via-pink-600 to-red-600 text-white py-20">
        <div class="container mx-auto text-center">
            <h2 class="text-5xl font-extrabold mb-4">Festival Travel System</h2>
            <p class="text-2xl mb-6">Plan jouw ultieme festivalervaring met één klik.</p>
            <a href="#festivals" class="mt-6 inline-block bg-yellow-500 text-black py-3 px-8 rounded-lg font-semibold hover:bg-yellow-400 transition duration-300">Bekijk Festivals</a>
        </div>
    </div>

    <div id="festivals" class="container mx-auto py-12">
        <h3 class="text-4xl font-bold mb-8 text-center">Populaire Festivals</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                <h4 class="text-2xl font-semibold mb-2">Tomorrowland</h4>
                <p class="text-gray-600 mb-4">België - 2024</p>
                <a href="#" class="mt-4 inline-block bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition duration-300">Boek Nu</a>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                <h4 class="text-2xl font-semibold mb-2">Sziget Festival</h4>
                <p class="text-gray-600 mb-4">Hongarije - 2024</p>
                <a href="#" class="mt-4 inline-block bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition duration-300">Boek Nu</a>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                <h4 class="text-2xl font-semibold mb-2">Coachella</h4>
                <p class="text-gray-600 mb-4">Verenigde Staten - 2024</p>
                <a href="#" class="mt-4 inline-block bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition duration-300">Boek Nu</a>
            </div>
        </div>
    </div>
@endsection
