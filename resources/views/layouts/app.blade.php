<!DOCTYPEhtml>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Festival Travel System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.0/dist/tailwind.min.css">
</head>
<body class="bg-gray-100 text-gray-800">
<nav class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-4 shadow-md">
    <div class="container mx-auto flex justify-between">
        <a href="{{ route('home') }}" class="font-bold text-lg">Festival Travel System</a>
        <div class="space-x-4">
            <a href="{{ route('home') }}" class="hover:underline">Home</a>
            <a href="{{ route('cart.show') }}" class="hover:underline">Winkelwagen</a>
        </div>
    </div>
</nav>
<div class="container mx-auto py-8">
    @section('content')
    @show
</div>
<footer class="bg-gray-800 text-white py-4 mt-8">
    <div class="container mx-auto text-center">
        <p>&copy; 2024 Festival Travel System. Alle rechten voorbehouden.</p>
    </div>
</footer>
</body>
</html>
