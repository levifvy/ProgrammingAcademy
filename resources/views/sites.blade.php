@extends('layouts.plantilla')

@section('title','Sites')

@section('content')
<div class="bg-purple-950 min-h-screen flex flex-col justify-center items-center py-12">
  <div class="container mx-auto px-6 max-w-7xl">
    <div class="text-center">
      <div id="welcome-message-container" class="mb-10">
        <h1 class="text-6xl sm:text-7xl md:text-8xl font-bold text-white gradient-text" style="text-shadow: 2px 2px 0px rgba(0, 0, 0, 0.5);" id="welcome-message-text">Tech & Code Academy</h1>
      </div>
    </div>
    <section class="grid justify-center items-center body-font">

      <div class="flex flex-wrap justify-center mb-10 mr-20 border">
        <div class="mx-4 h-64 sm:w-1/2 md:w-1/3 lg:w-1/4">
          <img src="{{ asset('img/studying.jpg') }}" alt="studying" class="h-full w-full object-cover">
        </div>
        <div class="mx-4 h-64 sm:w-1/2 md:w-1/3 lg:w-1/4">
          <img src="{{ asset('img/woman_working.jpg') }}" alt="woman working" class="h-full w-full object-cover">
        </div>
      </div>
      <div class="text-center">
        <p class="text-xl text-white font-bold mb-10">
          Learn programming, at any time, without schedules, and at an affordable price.
        </p>
      </div>
    </div>
  </section>
  </div>
</div>

<style>
  .bg-image {
    background-image: url({{ asset('/img/matrice.jpg') }});
    background-repeat: no-repeat;
    background-size: cover;
  }

  .gradient-text {
    background-clip: text;
    -webkit-background-clip: text;
    color: transparent;
    background-image: linear-gradient(to right, #ebf706, #f8601a);
  }

  .pink-outline {
    border: 2px solid #f8601a;
  }
</style>

<script>
  function toggleMessage() {
    const welcomeMessageText = document.getElementById('welcome-message-text');
    welcomeMessageText.classList.toggle('invisible');
  }

  document.addEventListener('DOMContentLoaded', function() {
    setInterval(toggleMessage, 500);
  });
</script>

@endsection
