@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="w-full sm:px-6">
            <div class="text-center">
                <h4>Create Course</h4>
            </div>
            <form action="{{ route('course.store') }}" method="post">
                @csrf

            </form>
        </div>
    </main>
@endsection
