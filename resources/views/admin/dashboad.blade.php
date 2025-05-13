// resources/views/admin/dashboard.blade.php
@extends('layouts.admin')
@section('content')
    <h2 class="text-3xl font-bold mb-4">Admin Dashboard</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold">Festivals Beheren</h3>
            <p>Beheer en voeg nieuwe festivals toe.</p>
            <a href="{{ route('admin.festivals.index') }}" class="mt-4 inline-block bg-blue-600 text-white py-2 px-4 rounded">Bekijk Festivals</a>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold">Bestellingen Beheren</h3>
            <p>Bekijk en beheer alle bestellingen.</p>
            <a href="{{ route('admin.orders.index') }}" class="mt-4 inline-block bg-blue-600 text-white py-2 px-4 rounded">Bekijk Bestellingen</a>
        </div>
    </div>
@endsection
