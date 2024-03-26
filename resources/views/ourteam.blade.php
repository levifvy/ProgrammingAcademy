@extends('layouts.plantilla')

@section('title','Ourteam')

@section('content')
<div class="bg-image h-screen">
  <section class="grid justify-center items-center bg-transparent from-green-300 to-purple-300 min-h-screen body-font text-gray-600">
    <div class="grid grid-cols-3 gap-2 border">
      <div class="w-full p-4">
        <a href="{{route('levi')}}" class="relative block h-48 overflow-hidden rounded">
          <img class="block h-full w-full object-cover object-center cursor-pointer" src="{{asset('/img/levi.png')}}" alt="Football" loading="lazy" width="100" height="100"/>
        </a>
        <div class="mt-2">
          <h3 class="title-font mb-1 text-xs tracking-widest text-gray-500">CEO from Techo&CodeAcademy</h3>
          <h2 class="title-font text-lg font-medium text-gray-900"><strong>Levi Flores</strong></h2>
          <p class="mt-0 text-xs">Easy</p>
        </div>
      </div>
      <div class="w-full p-4">
        <a href="https://youtu.be/ov8Qg99w4uI?si=ir7cOa2wkSGQkIQq" class="relative block h-48 overflow-hidden rounded">
          <img class="block h-full w-full object-cover object-center cursor-pointer" src="{{asset('/img/.jpg')}}" alt="Levi" width="50" height="50"/>
        </a>
        <div class="mt-2">
          <h3 class="title-font mb-1 text-xs tracking-widest text-gray-500">Always available</h3>
          <h2 class="title-font text-lg font-medium text-gray-900"><strong>Vide presentation from Levi</strong></h2>
          <p class="mt-0 text-xs">All you need</p>
        </div>
      </div>
    </div>
    <div class="grid grid-cols-3 gap-2">
      <div class="w-full p-4">
        <a href="{{route('pau')}}" class="relative block h-48 overflow-hidden rounded">
          <img class="block h-full w-full object-cover object-center cursor-pointer" src="{{asset('/img/pauloor.png')}}" alt="Pau" width="100" height="100"/>
        </a>
        <div class="mt-2">
          <h3 class="title-font mb-1 text-xs tracking-widest text-gray-500">Know us</h3>
          <h2 class="title-font text-lg font-medium text-gray-900"><strong>Pau Loor</strong></h2>
          <p class="mt-0 text-xs">Our staff</p>
        </div>              
      </div>
      <div class="w-full p-4">
        <a href="" class="relative block h-48 overflow-hidden rounded">
          <img class="block h-full w-full object-cover object-center cursor-pointer" src="{{asset('/img/.jpg')}}" alt="Pau" width="100" height="100"/>
        </a>
        <div class="mt-2">
          <h3 class="title-font mb-1 text-xs tracking-widest text-gray-500">You want to play</h3>
          <h2 class="title-font text-lg font-medium text-gray-900"><strong>Video presenration from Pau</strong></h2>
          <p class="mt-0 text-xs">The best method</p>
        </div>
      </div>
    </div>
  </section>
</div>

<style>
  .bg-image {
    background-image: url({{asset('/img/')}});
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>
@endsection
