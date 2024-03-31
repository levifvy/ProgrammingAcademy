@extends('layouts.plantilla')

@section('title','Home')

@section('content')
<div class="bg-gradient-to-b from-purple-950 to-purple-500 h-screen flex justify-center items-center ">
  <section class="grid grid-cols-3 gap-2">
    <div class="w-full p-2">
      <a href="{{route('teams.index')}}" class="relative block h-32 overflow-hidden rounded">
        <img class="block h-full w-full object-cover object-center cursor-pointer" src="{{asset('/img/python_java.jpg')}}" alt="Football" loading="lazy" />
      </a>
      <div class="mt-2 text-center">
        <h3 class="title-font mb-1 text-xs tracking-widest text-white">List of our teams</h3>
        <h2 class="title-font text-lg font-medium text-gray-900"><strong>Teams</strong></h2>
        <p class="mt-0 text-xs">Found your favorite team</p>
      </div>
    </div>
    <div class="w-full p-2">
      <a href="{{route('games.create')}}" class="relative block h-32 overflow-hidden rounded">
        <img class="block h-full w-full object-cover object-center cursor-pointer" src="{{asset('/img/stock.jpg')}}" alt="competititon" loading="lazy" />
      </a>
      <div class="mt-2 text-center">
        <h3 class="title-font mb-1 text-xs tracking-widest text-white">Be the best</h3>
        <h2 class="title-font text-lg font-medium text-gray-900"><strong>Competitions</strong></h2>
        <p class="mt-0 text-xs">Alone or with a team.</p>
      </div>
    </div>
    <div class="w-full p-2">
      <a href="{{route('results.index')}}" class="relative block h-32 overflow-hidden rounded">
        <img class="block h-full w-full object-cover object-center cursor-pointer" src="{{asset('/img/competitions.jpg')}}" alt="Football" />
      </a>
      <div class="mt-2 text-center">
        <h3 class="title-font mb-1 text-xs tracking-widest text-white">Ranking of our students</h3>
        <h2 class="title-font text-lg font-medium text-gray-900"><strong>Results</strong></h2>
        <p class="mt-0 text-xs">get your positions</p>
      </div>
    </div>
    <div class="w-full p-2">
      <a href="{{route('about')}}" class="relative block h-32 overflow-hidden rounded">
        <img class="block h-full w-full object-cover object-center cursor-pointer" src="{{asset('/img/aboutUs.jpg')}}" alt="Football" />
      </a>
      <div class="mt-2 text-center">
        <h3 class="title-font mb-1 text-xs tracking-widest text-white">Know us</h3>
        <h2 class="title-font text-lg font-medium text-gray-900"><strong>About Us</strong></h2>
        <p class="mt-0 text-xs">Our staff</p>
      </div>              
    </div>
    <div class="w-full p-2">
      <a href="{{route('contactUs.index')}}" class="relative block h-32 overflow-hidden rounded">
        <img class="block h-full w-full object-cover object-center cursor-pointer" src="{{asset('/img/contact1.png')}}" alt="contact" />
      </a>
      <div class="mt-2 text-center">
        <h3 class="title-font mb-1 text-xs tracking-widest text-white">We will call you</h3>
        <h2 class="title-font text-lg font-medium text-gray-900"><strong>Contact Us</strong></h2>
        <p class="mt-0 text-xs">Send us your phone</p>
      </div>
    </div>
    <div class="w-full p-2">
      <a href="{{route('contactUs.index')}}" class="relative block h-32 overflow-hidden rounded">
        <img class="block h-full w-full object-cover object-center cursor-pointer" src="{{asset('/img/club.jpg')}}" alt="Football" />
      </a>
      <div class="mt-2 text-center">
        <h3 class="title-font mb-1 text-xs tracking-widest text-white">You want to be part of our club</h3>
        <h2 class="title-font text-lg font-medium text-gray-900"><strong>Join to our Programming club</strong></h2>
        <p class="mt-0 text-xs">Send us a email</p>
      </div>
    </div>
  </section>
</div>
@endsection
