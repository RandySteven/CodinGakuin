@extends('layouts.app')

@section('content')
    <main class="bg-gray-50 py-2 border-4 sm:container sm:mx-auto sm:mt-10">
        <div class="w-full sm:px-6">
            <div class="text-center">
                <h2 class="font-mono">Create Course</h2>
            </div>
            <form action="{{ route('course.store') }}" method="post" class="py-10 px-10" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="thumbnail">
                        Thumbnail
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="thumbnail" name="thumbnail" type="file" placeholder="Thumbnail">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                        Title
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" type="text" placeholder="Title" name="title">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="price">
                        Price
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="price" type="text" placeholder="Price" name="price">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="category">
                        Category
                    </label>
                    <select name="category_id" id="category" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option disabled selected>Choose one</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="type">
                        Type
                    </label>
                    <select name="type_id" id="type" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option disabled selected>Choose one</option>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="desc">
                        Desc
                    </label>
                    <textarea name="desc" id="desc" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="10"></textarea>
                </div>
                <div class="text-center justify-between">
                    <button class="bg-orange-500 text-center hover:bg-blue-700 text-white font-bold py-4 px-8 rounded rounded-full focus:outline-none focus:shadow-outline" type="submit">
                      Create Course
                    </button>
                </div>
            </form>
        </div>
    </main>
@endsection
