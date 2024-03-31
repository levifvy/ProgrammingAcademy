@extends('layouts.plantilla')

@section('template_title')
    Show Player
@endsection

@section('content')
    <div class="flex justify-center p-2 h-screen bg-gradient-to-b from-purple-950 to-purple-500">
        <div class="w-full sm:w-2/3 md:w-1/2 lg:w-1/3 pt-10">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @if ($player->image)
                    <!-- Verificar que la ruta de la imagen sea correcta y que el archivo exista -->
                    <div class="mb-6">
                        <img src="{{ asset('storage/' . $player->image) }}" alt="Player Image" class="mx-auto rounded-lg max-h-48">
                    </div>
                @endif

                <h1 class="text-2xl font-bold mb-6 text-center text-gray-700">Player Details</h1>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="mb-4">
                        <p class="block text-gray-700 text-sm font-bold mb-2">
                            Name:
                        </p>
                        <p class="block text-gray-900 text-sm">{{ $player->name }}</p>
                    </div>

                    <div class="mb-4">
                        <p class="block text-gray-700 text-sm font-bold mb-2">
                            Last Name:
                        </p>
                        <p class="block text-gray-900 text-sm">{{ $player->last_name }}</p>
                    </div>

                    <div class="mb-4">
                        <p class="block text-gray-700 text-sm font-bold mb-2">
                            Age:
                        </p>
                        <p class="block text-gray-900 text-sm">{{ $player->age }}</p>
                    </div>

                    <div class="mb-4">
                        <p class="block text-gray-700 text-sm font-bold mb-2">
                            Role:
                        </p>
                        <p class="block text-gray-900 text-sm">{{ $player->position }}</p>
                    </div>

                    <div class="mb-4">
                        <p class="block text-gray-700 text-sm font-bold mb-2">
                            NIF:
                        </p>
                        <p class="block text-gray-900 text-sm">{{ $player->nif }}</p>
                    </div>

                    <div class="mb-4">
                        <p class="block text-gray-700 text-sm font-bold mb-2">
                            Team:
                        </p>
                        <p class="block text-gray-900 text-sm">{{ $player->team ? $player->team->name : 'No team assigned' }}</p>
                    </div>
                </div>

                <div class="flex items-center justify-center mt-6">
                    <a href="{{ route('players.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Back to Players</a>
                </div>
            </div>
        </div>
    </div>
@endsection
