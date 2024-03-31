@extends('layouts.plantilla')

@section('title','Ourteam')

@section('content')
<div class="bg-gradient-to-br from-purple-950 via-blue-500 to-pink-500 h-screen">
  <section class="grid justify-center items-center bg-transparent from-green-300 to-purple-300 min-h-screen body-font text-gray-600">
    <h1 class="text-6xl font-bold text-white text-center mb-8">Founders</h1>
    <div class="grid grid-cols-2 gap-8 pb-40">
      <div class="habitat1 p-4 flex flex-col justify-center items-center border-2 border-gray-700 rounded-lg">
        <div class="first flex flex-col items-center">
          <a href="{{ route('levi') }}" class="relative block h-48 overflow-hidden rounded-lg">
            <img class="block h-full w-full object-cover object-center cursor-pointer" src="{{ asset('/img/levi.png') }}" alt="Football" loading="lazy" />
          </a>
          <a href="{{ route('levi') }}">
            <div class="mt-2 text-center">
              <h2 class="title-font text-2xl font-medium text-white"><strong>Levi Flores (CEO)</strong></h2>
            </div>
          </a>
        </div><br><br>
        <div class="second flex flex-row justify-center items-center mt-4 sm:mt-0">
          <a href="{{ route('levi') }}" class="mt-6 inline-block bg-gray-800 text-gray-100 hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-300 font-semibold rounded-md text-sm px-5 py-2.5 mr-2">Biography</a>
          <a href="img/levi.mp4" class="mt-6 inline-block bg-gray-800 text-gray-100 hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-300 font-semibold rounded-md text-sm px-5 py-2.5">Watch Video</a>
        </div>
      </div>
      <div class="habitat2 p-4 flex flex-col justify-center items-center border-2 border-gray-700 rounded-lg">
        <div class="first flex flex-col items-center">
          <a href="{{ route('pau') }}" class="relative block h-48 overflow-hidden rounded-lg">
            <img class="block h-full w-full object-cover object-center cursor-pointer" src="{{ asset('/img/foto_pau.jpg') }}" alt="Football" loading="lazy" />
          </a>
          <a href="{{ route('pau') }}">
            <div class="mt-2 text-center">
              <h2 class="title-font text-2xl font-medium text-white"><strong>Pau Loor (CEO)</strong></h2>
            </div>
          </a>
        </div><br><br>
        <div class="second flex flex-row justify-center items-center mt-4 sm:mt-0">
          <a href="{{ route('pau') }}" class="mt-6 inline-block bg-gray-800 text-gray-100 hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-300 font-semibold rounded-md text-sm px-5 py-2.5 mr-2">Biography</a>
          <a href="img/pauloor.mp4" class="mt-6 inline-block bg-gray-800 text-gray-100 hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-300 font-semibold rounded-md text-sm px-5 py-2.5">Watch Video</a>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
