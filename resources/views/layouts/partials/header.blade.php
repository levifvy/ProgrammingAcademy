<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <nav class="flex flex-col lg:flex-row items-center justify-between bg-purple-950 p-4 w-full">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <a href="{{route('sites')}}">
                    <div class="flex items-center">
                        <img class="bg-transparent" src="{{asset('/img/programador.png')}}" alt="image" loading="lazy" width="50" height="50">
                        <span class="ml-4 font-semibold text-4xl tracking-tight">Tech&CodeAcademy &nbsp</span>
                    </div>
                </a>
            </div>

            <div class="w-full lg:flex lg:items-center lg:w-auto ml-2">
                <div class="text-xl lg:flex-grow flex flex-col lg:flex-row justify-center lg:justify-start">
                    <a href="{{route('home')}}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4 {{request()->routeIs('home') ? 'active':''}}">Home</a>
                    <a href="{{route('plans')}}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4 {{request()->routeIs('plans') ? 'active':''}}">Plans</a>
                    <a href="{{route('categories.index')}}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4 {{request()->routeIs('categories.index*') ? 'active':''}}">Courses</a>
                    <a href="{{ route('teams.index') }}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4 {{ request()->routeIs('teams.index*') ? 'active' : '' }}">Teams</a>
                    <a href="{{route('games.index')}}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4 {{request()->routeIs('games.index*') ? 'active':''}}">Competitions</a>
                    <a href="{{route('results.index')}}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4 {{request()->routeIs('resultsMenu') ? 'active':''}}">Results</a>
                    <a href="{{route('about')}}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4 {{request()->routeIs('about') ? 'active':''}}">About</a>
                    <a href="{{route('ourteam')}}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4 {{request()->routeIs('ourteam') ? 'active':''}}">Founders</a>
                    <a href="{{route('contactUs.index')}}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4 {{request()->routeIs('contactUs.index')? 'active':''}}">Contact</a>
                </div>
            </div>
            

            <div class="relative inline-block text-left">
                <div>
                    <button type="button" class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" id="menu-button" aria-expanded="false" aria-haspopup="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z"/>
                            <path d="M4 18h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1zm0-5h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1zM3 7c0 .55.45 1 1 1h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1z"/>
                        </svg>
                    </button>
                </div>

                <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                    <div class="py-1" role="none">
                        <a href="{{ route('players.create') }}" class="block w-full px-4 py-2 text-left text-sm
                            @if(Request::is('players/create'))
                                bg-gray-100 text-gray-900
                            @else
                                text-gray-700
                            @endif">
                            New Student
                        </a>
                        <a href="{{ route('categories.create') }}" class="block w-full px-4 py-2 text-left text-sm
                            @if(Request::is('categories/create'))
                                bg-gray-100 text-gray-900
                            @else
                                text-gray-700
                            @endif">
                            New Category
                        </a>
                        <a href="{{ route('games.create') }}" class="block w-full px-4 py-2 text-left text-sm
                            @if(Request::is('games/create'))
                                bg-gray-100 text-gray-900
                            @else
                                text-gray-700
                            @endif">
                            New Competition
                        </a>
                        <a href="{{ route('courses.create') }}" class="block w-full px-4 py-2 text-left text-sm
                            @if(Request::is('courses/create'))
                                bg-gray-100 text-gray-900
                            @else
                                text-gray-700
                            @endif">
                            New Course
                        </a>
                        <a href="{{ route('courses.index') }}" class="block w-full px-4 py-2 text-left text-sm
                            @if(Request::is('courses'))
                                bg-gray-100 text-gray-900
                            @else
                                text-gray-700
                            @endif">
                            Search Courses
                        </a>
                        <a href="{{ route('players.index') }}" class="block w-full px-4 py-2 text-left text-sm
                            @if(Request::is('players'))
                                bg-gray-100 text-gray-900
                            @else
                                text-gray-700
                            @endif">
                            Search students
                        </a>
                        <form method="POST" action="#" role="none">
                            <button type="submit" class="block w-full px-4 py-2 text-left text-sm
                                @if(Request::is('sign-out'))
                                    bg-gray-100 text-gray-900
                                @else
                                    text-gray-700
                                @endif"
                                role="menuitem" tabindex="-1" id="menu-item-3">Sign out
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</body>
</html>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuButton = document.getElementById('menu-button');
        const menu = document.querySelector('.absolute.right-0');

        menuButton.addEventListener('click', function() {
            const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';
            menuButton.setAttribute('aria-expanded', !isExpanded);
            menu.classList.toggle('hidden');
        });
    });
</script>
<style>
    /* Estilos para el menú */
    .active {
        font-weight: bold;
        color: white !important;
    }
</style>
