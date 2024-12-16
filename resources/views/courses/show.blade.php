@extends('layouts.app')

@section('content')
<div class="container mx-auto py-10 px-4 lg:px-0">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden border border-gray-200 w-80 mx-auto">
        <!-- Image Section -->
        <div class="relative w-full h-72">
            <img src="{{ $course->image }}" alt="{{ $course->title }}" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-25 flex items-center justify-center text-white text-xl font-semibold p-4">
                {{ $course->title }}
            </div>
        </div>

        <!-- Content Section -->
        <div class="p-6">
            <h1 class="text-2xl font-semibold text-gray-800 mb-2">{{ $course->title }}</h1>
            <p class="text-sm text-gray-500 mb-4">Level: <span class="font-medium text-gray-700">{{ $course->level }}</span></p>
            <p class="text-sm text-gray-500 mb-6">Price: <span class="font-medium text-gray-700">{{ $course->price }}</span></p>

            <!-- Button to go to Materi -->
            <a href="{{ route('courses.materi', $course->id) }}" class="inline-block w-full text-center text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 rounded-lg py-3 font-medium transition duration-200">
                Go to Materi
            </a>
        </div>
    </div>
</div>
@endsection
