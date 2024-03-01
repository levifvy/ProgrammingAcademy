@extends('layouts.plantilla')

@section('title','rules')

@section('content')
<div class="py-16 bg-white">
    <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
        <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
            <div class="md:7/12 lg:w-6/12">
                <h2 class="text-2xl text-gray-900 font-bold md:text-4xl">Payment plans:</h2>
                <p class="mt-6 text-gray-600">— We have two payment methods, annual and monthly.<br><br>
                <div class="flex flex-col justify-center items-start">
                    <div class="bg-green-500 rounded-lg border-4 border-green-700 p-4 mb-4">
                        <div class="text-xl font-bold">
                            <span class="text-yellow-400">$ </span>35.0 monthly
                        </div>
                    </div>
                    <div class="bg-green-500 rounded-lg border-4 border-green-700 p-4">
                        <div class="text-xl font-bold">
                            <span class="text-yellow-400">$ </span>350.0 annual
                        </div>
                    </div>
                </div>  
            </div>
            <div class="md:5/12 lg:w-5/12">
                <img src="img/payment2.jpg" alt="image" loading="lazy" width="300px" height="300px">
            </div>
        </div>
    </div>
</div>
@endsection