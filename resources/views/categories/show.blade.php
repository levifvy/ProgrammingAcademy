@extends('layouts.plantilla')

@section('title', 'Category ' . $category->name)

@section('content')
    <div class="flex flex-col items-center justify-center h-screen bg-gradient-to-b from-purple-950 to-purple-500 px-6">
        <div class="flex flex-col sm:flex-row w-full space-y-4 sm:space-y-0 sm:space-x-4">
            <div class="flex-1 bg-gradient-to-r from-blue-200 to-red-200 text-start p-6 rounded-lg shadow-lg">
                <div class="card-body flex items-center">
                    <h4 class="mb-0 text-xl text-cyan-900 font-bold mr-4">{{ __('Category') }}:</h4>
                    <p class="text-2xl text-cyan-900 font-bold">{{ $category->name }}</p>
                </div>
                <div class="mt-4">
                    <p><strong>{{ __('Created at') }}:</strong> {{ $category->created_at }}</p>
                    <p><strong>{{ __('Updated at') }}:</strong> {{ $category->updated_at }}</p>
                </div>
            </div>

            <div class="flex-1 bg-green-200 p-6 rounded-lg shadow-lg">
                <div class="card-body">
                    <h3 class="mb-8 text-2xl text-cyan-900 font-bold">Courses:</h3>
                    @php
                        $counter = 1;
                    @endphp
                    @foreach ($category->courses as $course)
                    <a href="{{route('courses.show', $course)}}" class="block hover:bg-gray-100" title="press to see">
                        <div class="mt-1 grid space-y-4">
                            <button class="group h-10 px-6 border-2 border-gray-300 rounded-lg transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
                                <div class="relative flex items-center space-x-4 justify-start">
                                    <span class="text-gray-500 font-medium">{{$counter}}</span>
                                    <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">{{$course->name}}</span>
                                    <div class="relative flex items-center space-x-4 justify-end">
                                        <div class="w-4 ml-auto transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </button>
                        </div>
                    </a>
                    @php
                        $counter++;
                    @endphp
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
