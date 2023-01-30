<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Rework Digital Laravel Task</title>
    </head>
    <body class="bg-slate-500 grid justify-center">
        <div class="w-full max-w-xs grid mb-10">
            <form action="/products" method="POST" class="mt-9 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Product name: </label>
                <input type="text" name="name" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                <label for="price" for="name" class="block text-gray-700 text-sm font-bold mb-2">Price: </label>
                <input type="number" name="price" step="0.01" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                <label for="quantity" for="name" class="block text-gray-700 text-sm font-bold mb-2">Quantity: </label>
                <input type="number" name="quantity" step="1" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                <label for="description" for="name" class="block text-gray-700 text-sm font-bold mb-2">Description: </label>
                <textarea name="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>

                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">Add product</button>
            </form>
        </div>
        <h1 class="text-white font-sans text-5xl font-medium grow">Products</h1>
        <div class="flex flex-row flex-wrap">
            @foreach ($products as $product)
            <div class="block max-w-sm p-6 border rounded-lg shadow hover:bg-gray-100 bg-gray-800 border-gray-700 hover:bg-gray-700 m-4">
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-white">{{ $product->name }}</h2>
                <p class="text-xl font-bold text-white">£{{ $product->price }}</p>
                <p class="font-normal text-gray-400">Quantity: {{ $product->quantity }}</p>
                <p class="font-normal text-gray-400">{{ $product->description }}</p>    
            </div>    
            @endforeach
        </div>
    </body>
</html>
