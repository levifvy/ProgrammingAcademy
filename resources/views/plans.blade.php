@extends('layouts.plantilla')

@section('title','Plans')

@section('content')
<div class="py-16 bg-gradient-to-r from-purple-900 to-indigo-900 min-h-screen">
    <div class="container m-auto px-6 text-gray-300 md:px-12 xl:px-6">
        <div class="flex flex-col md:flex-row items-center justify-center space-y-6 md:space-y-0 md:space-x-6 lg:space-x-12">
            <div class="flex-1 md:ml-20 p-10">
                <h2 class="text-2xl text-yellow-600 font-bold md:text-6xl">Payment Plans:</h2>
                <p class="mt-6 text-white">We have two payment methods, annual and monthly.</p>
                <div class="flex flex-col md:flex-row md:justify-center md:items-center md:mt-8 md:space-x-4">
                    <div class="flex flex-col md:flex-row md:space-x-2 md:space-y-0 space-y-2 md:w-auto w-full">
                        <div class="flex-1 flex border-2 rounded-lg border-yellow-400 p-2">
                            <div class="flex-1 bg-teal-500 rounded-lg border-2 border-yellow-400 p-4">
                                <div class="text-2xl font-bold flex items-center">
                                    <span class="text-yellow-400">€</span>35.00 monthly
                                </div>
                                <div class="text-xl flex items-center">
                                    <ul>
                                        <li><p class="text-pink-600">- All time Available</p></li>
                                        <li><p class="text-pink-600">- Best contents</p></li>
                                        <li><p class="text-pink-600">- Without schedule</p></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="flex-1 flex border-2 rounded-lg border-yellow-400 p-2">
                            <div class="flex-1 bg-teal-500 rounded-lg border-2 border-yellow-400 p-4">
                                <div class="text-2xl font-bold flex items-center">
                                    <span class="text-yellow-400">€ </span>350.00 annual
                                </div>
                                <div class="text-xl flex items-center">
                                    <ul>
                                        <li><p class="text-pink-600">- Save </p></li>
                                        <li><p class="text-pink-600">- Without worries </p></li>
                                        <li><p class="text-pink-600">- Access to all content </p></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-1 md:mr-20 mt-6 md:mt-0">
                <img src="img/payment2.jpg" alt="Payment image" loading="lazy" class="h-auto md:w-auto w-full max-w-full" />
            </div>
        </div>
    </div>
</div>
@endsection
