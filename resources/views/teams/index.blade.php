@extends('layouts.plantilla')

@section('title', 'Teams')

@section('content')
<div class="bg-gradient-to-b from-purple-950 via-cyan-400 to-red-500 min-h-screen">
    <div class="relative py-16 bg-transparent">
        <div class="relative container m-auto px-6 text-gray-500 md:px-12 xl:px-40">
            <div class="m-auto md:w-8/12 lg:w-6/12 xl:w-6/12">
                <div class="rounded-xl bg-white shadow-xl">
                    <div class="p-6 sm:p-16">
                        <div class="space-y-4">
                            <h2 class="mb-8 text-2xl text-cyan-900 font-bold">List of Teams:</h2>
                        </div>
                        <div class="mt-4 grid space-y-4">
                            <a href="{{ route('teams.create') }}" class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-400 flex items-center justify-center bg-blue-400 text-white font-bold hover:bg-black">
                                <span class="block w-max tracking-wide text-sm sm:text-base">Create New Team</span>
                            </a>
                        </div>
                        
                        <div class="mt-8">
                            <ul class="divide-y divide-gray-200">
                                @foreach ($teams as $team)
                                    <li class="py-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-1">
                                                <p class="text-lg font-semibold text-gray-900">{{ $team->name }}</p>
                                                <p class="text-sm text-gray-500">{{ $team->description }}</p>
                                            </div>
                                            <div class="flex-none">
                                                <a href="{{ route('teams.show', $team) }}" class="text-blue-500 hover:text-blue-600">View</a>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
