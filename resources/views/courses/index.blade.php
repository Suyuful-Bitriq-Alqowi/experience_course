@extends('layouts.app')

@section('content')
<div class="container mx-auto py-6">

    <!-- Search Bar -->
    <div class="flex justify-center">
        <form action="{{ route('courses.index') }}" method="GET" class="w-full max-w-lg">
            <input 
                type="text" 
                name="search" 
                value="{{ request()->get('search') }}" 
                placeholder="Search for Course by name" 
                class="w-full border border-gray-300 rounded-lg py-2 px-4 shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </form>
    </div>

    <!-- All Courses -->
    <div class="py-8">
        <h1 class="text-2xl font-bold mb-6 text-gray-800">All Courses ({{ count($courses) }})</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($courses as $course)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden border border-gray-200">
                    <!-- Course Image and Container -->
                    <div class="relative w-full h-64">
                        <img 
                            src="{{ $course->image }}" 
                            alt="{{ $course->title }}" 
                            class="w-full h-full object-cover">
                        <span 
                            class="absolute top-2 left-2 bg-{{ $course->level === 'Beginner' ? 'green' : ($course->level === 'Intermediate' ? 'yellow' : 'red') }}-500 text-white text-xs font-semibold uppercase px-2 py-1 rounded">
                            {{ $course->level }}
                        </span>
                    </div>

                    <!-- Course Details -->
                    <div class="p-4">
                        <h2 class="text-lg font-semibold mb-2 text-gray-800">{{ $course->title }}</h2>
                        <div class="flex justify-between items-center text-sm mb-2">
                            <span class="text-gray-500">Level: <span class="capitalize text-gray-700">{{ $course->level }}</span></span>
                            <span class="text-red-500 font-bold">{{ $course->price }}</span>
                        </div>
                        <div class="text-sm mb-4">
                            @if ($course->price === 'Free')
                                <span class="text-green-500 font-bold">Free</span>
                            @endif
                        </div>
                        <div>
                            <!-- Button for Show Page -->
                            <a 
                            href="{{ route('courses.show', $course->id) }}" 
                            class="block text-center text-white bg-green-600 hover:bg-green-700 rounded-lg py-2 mt-3">
                                Buy
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
