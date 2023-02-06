<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Rework Digital Laravel Task</title>
    </head>
    <body class="bg-slate-500 flex justify-center gap-9 m-6 lg:flex-row flex-col">
        <div class="block max-w-sm p-6 border rounded-lg shadow hover:bg-gray-100 bg-gray-800 border-gray-700 hover:bg-gray-700 m-4">
            <h2 class="mb-2 text-2xl font-bold tracking-tight text-white">{{ $product->name }}</h2>
            <p class="text-xl font-bold text-white">£{{ $product->price }}</p>
            <p class="font-normal text-gray-400 italic">Quantity: {{ $product->quantity }}</p>
            <p class="font-normal text-white mt-4 mb-6">{{ $product->description }}</p>
            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" href="{{ URL::to('products/') }}">Back</a>
        </div>
    </body>
</html>
