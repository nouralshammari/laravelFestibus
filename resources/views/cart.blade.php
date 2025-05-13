@extends('layouts.app')

@vite('resources/css/app.css');
@section('content')
    <h2 class="text-3xl font-bold mb-6">🛒 Jouw Winkelwagen</h2>
    @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif
    @if(empty($cart))
        <div class="bg-white p-6 rounded-lg shadow-md text-center">
            <p class="text-gray-600">Je winkelwagen is momenteel leeg.</p>
            <a href="{{ route('home') }}" class="mt-4 inline-block bg-blue-600 text-white py-2 px-4 rounded">Terug naar festivals</a>
        </div>
    @else
        <div class="bg-white p-6 rounded-lg shadow-md">
            <table class="w-full text-left">
                <thead>
                <tr class="border-b">
                    <th class="py-2">Festival</th>
                    <th>Locatie</th>
                    <th>Datum</th>
                    <th>Prijs</th>
                    <th>Actie</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cart as $item)
                    <tr class="border-b">
                        <td class="py-2 font-semibold">{{ $item['name'] }}</td>
                        <td>{{ $item['location'] }}</td>
                        <td>{{ $item['date'] }}</td>
                        <td>€{{ $item['price'] }}</td>
                        <td>
                            <form method="POST" action="{{ route('cart.remove') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $item['id'] }}">
                                <button type="submit" class="text-red-600 hover:underline">Verwijder</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="text-right mt-4">
            <a href="{{ route('checkout') }}" class="bg-green-600 text-white py-2 px-6 rounded hover:bg-green-700">Ga naar afrekenen</a>
        </div>
    @endif
@endsection
