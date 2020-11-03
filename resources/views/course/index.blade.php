@extends('layouts.app')

@section('content')
<div>
    <main class="sm:container sm:mx-auto sm:mt-10">
        <h3>Courses</h3>
        <div class="grid grid-cols-3 gap-4">
            @forelse ($courses as $course)
            <div>
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <img class="w-full" src="{{ asset('/storage/'.$course->thumbnail) }}" alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                      <div class="font-bold text-xl mb-2">{{ $course->title }}</div>
                      <p class="text-gray-700 text-base">
                        {{ Str::limit($course->desc, 120, '...') }}
                      </p>
                    </div>
                    <div class="px-4 pt-4 pb-3 bg-gray-200 grid-cols-2">
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
                No data
            @endforelse
        </div>
    </main>
</div>
@endsection
