@extends('layouts.app')

@section('content')
<div>
    <main class="sm:container sm:mx-auto sm:mt-10 border-b-4 bg-gray-100 py-2 px-4">
        <h3 class="text-2xl text-center my-2 mb-9">Courses</h3>
        <div class="grid grid-cols-3 gap-4">
            @forelse ($courses as $course)
            <div>
                <div class="max-w-sm rounded overflow-hidden hover:border-gray-500 border-2 bg-white shadow-lg">
                    <img class="w-full border-blue-200 border-2" src="{{ asset('/storage/'.$course->thumbnail) }}" alt="Sunset in the mountains">
                    <div class="px-6 py-4 my-1">
                      <div class="font-bold text-xl mb-2">{{ $course->title }}</div>
                      <p class="text-gray-700 text-base">
                        {{ Str::limit($course->desc, 120, '...') }} <a href="{{ route('course.show', $course->slug) }}" class="text-blue-900">Read more</a>
                      </p>
                      <p>
                          Rp {{ number_format($course->price, 2) }}
                      </p>
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
            </div>
            @empty
            <div>
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    No any Course
                </div>
            </div>
            @endforelse
        </div>
    </main>
</div>
@endsection
