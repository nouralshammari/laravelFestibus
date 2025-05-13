
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Festival Travel System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

@extends('layouts.app')


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
            @foreach($festivals as $festival)
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                    <h4 class="text-2xl font-semibold mb-2">{{ $festival->name }}</h4>
                    <p class="text-gray-600 mb-4">{{ $festival->location }} - {{ $festival->date->format('Y') }}</p>
                    <form method="POST" action="{{ route('cart.add') }}" class="add-to-cart-form">
                        @csrf
                        <input type="hidden" name="id" value="{{ $festival->id }}">
                        <input type="hidden" name="name" value="{{ $festival->name }}">
                        <input type="hidden" name="location" value="{{ $festival->location }}">
                        <input type="hidden" name="date" value="{{ $festival->date->format('Y-m-d') }}">
                        <input type="hidden" name="price" value="{{ $festival->price }}">
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Boek Nu</button>
                    </form>

                </div>
            @endforeach
        </div>
    </div>
@endsection
<!-- Modal + script (toe te voegen aan je Blade view, bijv. home.blade.php) -->
<div id="confirmationModal" class="fixed inset-0 bg-white/10 backdrop-blur-sm hidden flex justify-center items-center z-50">
    <div id="modalContent" class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md text-center transition transform scale-95 opacity-0 duration-200 ease-out">
        <h3 class="text-xl font-bold mb-4">🎉 Ticket toegevoegd aan je winkelwagen!</h3>
        <p id="modalFestivalName" class="mb-6 text-gray-700"></p>
        <div class="flex justify-between">
            <button onclick="closeModal()" class="bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400">Verder winkelen</button>
            <a href="/cart" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ga naar winkelwagen</a>
        </div>
    </div>
</div>

<script>
    function closeModal() {
        const modal = document.getElementById('confirmationModal');
        const modalContent = document.getElementById('modalContent');
        modalContent.classList.add('scale-95', 'opacity-0');
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 200);
    }

    document.addEventListener('DOMContentLoaded', () => {
        const forms = document.querySelectorAll('.add-to-cart-form');

        forms.forEach(form => {
            form.addEventListener('submit', async function (e) {
                e.preventDefault();

                const formData = new FormData(this);

                try {
                    const response = await fetch(this.action, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                        },
                        body: formData
                    });

                    const data = await response.json();

                    if (response.ok) {
                        const modal = document.getElementById('confirmationModal');
                        const modalContent = document.getElementById('modalContent');
                        document.getElementById('modalFestivalName').textContent = `🎫 ${data.festival}`;
                        modal.classList.remove('hidden');
                        setTimeout(() => {
                            modalContent.classList.remove('scale-95', 'opacity-0');
                            modalContent.classList.add('scale-100', 'opacity-100');
                        }, 10);
                    } else {
                        alert(data.error || 'Onbekende fout');
                    }
                } catch (error) {
                    console.error('Fout bij toevoegen aan winkelwagen:', error);
                    alert('Fout bij verzenden. Probeer het opnieuw.');
                }
            });
        });
    });
</script>
