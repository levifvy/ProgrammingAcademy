@extends('layouts.plantilla')

@section('title', 'java')

@section('content')
<div class="container mx-auto">
    <div class="py-8">
        <div class="flex items-center border content-center ml-10">
            <h1 class="text-5xl font-bold mb-4">Java Basic Course</h1>
            <div class="w-12 h-12 rounded-lg ml-4">
                <img src="{{ asset('img/java_icon.png') }}" alt="Java Course Image" width="50" height="50">
            </div>
        </div>
        <div class="ml-20 border">
            <p class="text-gray-600 mb-6">Welcome to our Java basic course! Master the language that runs everywhere.</p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <div class="flex items-start ml-40">
                        <div class="paragraph">
                            <p class="text-lg">In this comprehensive Java course, you will learn:</p>
                            <ul class="list-disc pl-5 mt-2">
                                <li>- Java Syntax and Basics</li>
                                <li>- Object-Oriented Programming in Java</li>
                                <li>- Working with Java Collections</li>
                                <li>- Handling Exceptions</li>
                                <li>- Java GUI Programming</li>
                                <li>- And much more!</li>
                            </ul>
                        </div>
                        <div class="video border ml-4">
                            <a href=""><iframe width="400" height="200" src="https://www.youtube.com/embed/fxtCN04y4GY?si=KzHt_6MIOQH64Gcb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></a>
                        </div>
                    </div>
                </div>  
            </div>
            <p class="mt-4">Join us now and embark on your journey to becoming a proficient Java developer!</p>
            <div class="mt-8">
                <h2 class="text-xl font-bold mb-4">Course Details</h2>
                <p><strong>Duration:</strong> 10 weeks</p>
                <p><strong>Start Date:</strong> Without schedules, from anywhere.</p>
            </div>

            <div class="mt-8">
                <a href="#" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Enroll Now</a>
            </div>
        </div>
    </div>
</div>
@endsection
