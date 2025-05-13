<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Festival Travel System - Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.0/dist/tailwind.min.css">
</head>
<body class="bg-gray-100 text-gray-800">
    <nav class="bg-gradient-to-r from-gray-800 to-black text-white py-4 shadow-md">
        <div class="container mx-auto flex justify-between">
            <div class="font-bold text-lg">Admin Panel</div>
            <div class="space-x-4">
                <a href="{{ route('admin.dashboard') }}" class="hover:text-yellow-300">Dashboard</a>
                <a href="{{ route('admin.festivals.index') }}" class="hover:text-yellow-300">Festivals</a>
                <a href="{{ route('admin.orders.index') }}" class="hover:text-yellow-300">Bestellingen</a>
            </div>
        </div>
    </nav>
    <div class="container mx-auto py-8">
        <div class="bg-white shadow-md rounded-lg p-6">
@section('content')
@show
</div>
</div>
<footer class="bg-gray-800 text-white py-4 mt-8">
    <div class="container mx-auto text-center">
        <p>&copy; 2024 Festival Travel System Admin Panel. Alle rechten voorbehouden.</p>
    </div>
</footer>
</body>
</html>
