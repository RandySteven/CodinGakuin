@extends('layouts.app')

@section('content')
<header>
    <img src="{{ asset('/storage/'.$course->thumbnail) }}" class="w-full h-80" alt="">
</header>
<div>
    <main class="sm:container sm:mx-auto sm:mt-10 border-b-4 bg-gray-100 py-2 px-4">
        <div class="items-center">
            <div class="max-w-sm rounded overflow-hidden hover:border-gray-500 border-2 bg-white shadow-lg">
                <img class="w-full border-blue-200 border-2" src="{{ asset('/storage/'.$course->thumbnail) }}" alt="Sunset in the mountains">
                <div class="px-6 py-4 my-1">
                  <div class="font-bold text-xl mb-2">{{ $course->title }}</div>
                </div>
                <div class="px-4 pt-4 pb-3 bg-white border-orange-500 border-2  grid-cols-2">
                    <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full mr-4" src="{{ $course->user->gravatar() }}" alt="Avatar of {{ $course->user->name }}">
                        <div class="text-sm">
                          <p class="text-gray-900 leading-none">{{ $course->user->name }}</p>
                          <p class="text-gray-600">{{ $course->created_at->format("d M, Y") }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <p class="my-10">
                @if (Auth::user()->id == $course->user_id)
                    <a href="{{ route('subject.create', ['course_id'=>$course->id]) }}" class="bg-blue-600 hover:bg-blue-700 text-white py-3 px-4 rounded rounded-md">Add Materi</a>
                @endif
            </p>
        </div>
        <p>{{ $course->desc }}</p>

    </main>
</div>
@endsection
