@extends('layouts.plantilla')

@section('title', 'Course ' . $course->name)

@section('content')
    <div class="py-8 bg-gradient-to-b from-cyan-950 to-cyan-400 min-h-screen">
        <div class="container mx-auto px-6 lg:px-40">
            <div class="w-full md:w-10/12 lg:w-8/12 mx-auto flex flex-col lg:flex-row">
                <div class="rounded-xl bg-gradient-to-b from-cyan-400 to-fuchsia-500 shadow-xl lg:w-9/12">
                    <div class="p-6 sm:p-8">
                        <div class="space-y-4">
                            <h2 class="mb-8 text-2xl text-cyan-900 font-bold">{{$course->name}}</h2>
                        </div>
                        <div class="mt-4 flex flex-col sm:flex-row justify-between items-center space-y-4 sm:space-y-0 sm:space-x-4">
                            <div class="group h-12 px-6 border-2 border-gray-300 rounded transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100 flex items-center justify-center w-full sm:w-auto">
                                <span class="text-gray-700 font-semibold text-sm transition duration-300 group-hover:text-blue-600">{{$course->category->name}}</span>
                            </div>
                            <div class="group">
                                <a href="{{ route('plans') }}" class="block h-12 px-6 border-2 border-gray-300 rounded transition duration-300 flex items-center justify-center text-gray-700 font-semibold text-sm hover:border-blue-400 hover:bg-white focus:bg-blue-50 active:bg-blue-100 hover:text-blue-600 group-hover:border-4">
                                    Enroll Now
                                </a>
                            </div>
                        </div>
                        <div class="mt-4">
                            <strong>Description: </strong>
                            <p class="font-semibold text-gray-700 hover:text-blue-600 text-sm transition duration-300 sm:text-base">{{$course->description}}</p>
                        </div>
                        <div class="mt-4">
                            <div class="border border-gray-300 rounded p-4">
                                <label class="block text-gray-700 font-bold mb-2" for="goals">Weeks:</label>
                                <input class="w-full shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="goals" type="number" min="0" name="goals" value="{{old('goals', $course->goals)}}" readonly>
                            </div>
                            <!-- Resto de los campos para mostrar los datos del curso -->
                        </div>
                        <div class="flex justify-center mt-8 space-x-4">
                            <a href="{{route('categories.index')}}" class="py-2 px-4 bg-gray-400 text-white rounded-lg hover:bg-blue-500">Back to Courses</a>
                            <a href="{{route('courses.edit', $course)}}" class="py-2 px-4 bg-gray-400 text-white rounded-lg hover:bg-blue-500">Edit Course</a>
                            <form action="{{route('courses.destroy', $course)}}" method="POST" onsubmit="return confirm('Are you sure to delete this course: {{$course->name}}?')">
                                @csrf
                                @method('delete')
                                <button type="submit" class="py-2 px-4 bg-gray-500 text-white rounded-lg hover:bg-red-600">Delete Course</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="video ml-4 mt-4 lg:mt-0 lg:ml-8">
                    <a href=""><iframe width="300" height="150" src="https://www.youtube.com/embed/fxtCN04y4GY?si=KzHt_6MIOQH64Gcb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></a>
                </div>
            </div>
        </div>
    </div>
@endsection
