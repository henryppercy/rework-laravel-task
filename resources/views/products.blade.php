<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Rework Digital Laravel Task</title>
    </head>
    <body class="bg-slate-500 flex justify-center gap-9 m-6 lg:flex-row flex-col">
        <div class="w-full max-w-xs grid mb-10">
            <form action="/products" method="POST" class="mt-9 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 h-min">
                @csrf
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Product name:</label>
                <input type="text" name="name" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                <label for="price" for="name" class="block text-gray-700 text-sm font-bold mb-2">Price:</label>
                <input type="number" name="price" step="0.01" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                <label for="quantity" for="name" class="block text-gray-700 text-sm font-bold mb-2">Quantity:</label>
                <input type="number" name="quantity" step="1" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                <label for="description"  class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                <textarea name="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>

                <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Category:</label>
                @foreach ($categories as $category)
                    <div class="flex items-center mb-4">
                        <input name="category[]" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2" value="{{ $category->id }}">
                        <label for="category" class="ml-2 text-sm font-medium text-gray-900">{{ $category->name }}</label>
                    </div>
                @endforeach

                <button type="submit" class="mt-5 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">Add product</button>
            </form>
        </div>
        <div>
            <h1 class="text-white font-sans text-5xl font-medium p-6">Products</h1>
            <div class="flex flex-row flex-wrap">
            @foreach ($products as $product)
                <div class="block max-w-sm p-6 border rounded-lg shadow hover:bg-gray-100 bg-gray-800 border-gray-700 hover:bg-gray-700 m-4">
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-white">{{ $product->name }}</h2>
                    <p class="text-xl font-bold text-white">£{{ $product->price }}</p>
                    <p class="font-normal text-gray-400 italic">Quantity: {{ $product->quantity }}</p>
                    <p class="font-normal text-white mt-4">{{ $product->description }}</p> 
                    <div class="mt-3">
                        @foreach ($product->categories as $category)
                            <p class="font-normal text-gray-500 italic inline">{{ $category->name }}</p>
                        @endforeach  
                    </div>
                    <div class="flex gap-3">
                        {{ Form::open(array('url' => 'products/' . $product->id)) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Delete', array('class' => 'mt-5 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline')) }}
                        {{ Form::close() }}
                        <a class="mt-5 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" href="{{ URL::to('products/' . $product->id) }}">Details</a>
                    </div>
                </div>    
            @endforeach
            </div>
        </div>
    </body>
</html>
