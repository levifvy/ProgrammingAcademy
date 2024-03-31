@extends('layouts.plantilla')

@section('template_title')
    Edit Player
@endsection

@section('content')
    <div class="flex justify-center p-2">
        <div class="w-full sm:w-2/3 md:w-1/2 lg:w-1/3">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <h1 class="text-2xl font-bold mb-6">Edit Player</h1>
                <form method="POST" action="{{ route('players.update', $player->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                            Name:
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror"
                            id="name"
                            type="text"
                            name="name"
                            value="{{ old('name', $player->name) }}"
                            required
                            autofocus
                        >
                        @error('name')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="last_name">
                            Last Name:
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('last_name') border-red-500 @enderror"
                            id="last_name"
                            type="text"
                            name="last_name"
                            value="{{ old('last_name', $player->last_name) }}"
                            required
                        >
                        @error('last_name')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="age">
                            Age:
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('age') border-red-500 @enderror"
                            id="age"
                            type="number"
                            name="age"
                            value="{{ old('age', $player->age) }}"
                            required
                        >
                        @error('age')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Hidden field for position -->
                    <input type="hidden" name="position" value="student">

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="nif">
                            NIF:
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('nif') border-red-500 @enderror"
                            id="nif"
                            type="text"
                            name="nif"
                            value="{{ old('nif', $player->nif) }}"
                            required
                        >
                        @error('nif')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="team_id">
                            Team:
                        </label>
                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('team_id') border-red-500 @enderror"
                            id="team_id"
                            name="team_id">
                            <option value="" {{ is_null(old('team_id', $player->team_id)) ? 'selected' : '' }}>No team</option>
                            @foreach ($teams as $team)
                                <option value="{{ $team->id }}" {{ old('team_id', $player->team_id) == $team->id ? 'selected' : '' }}>
                                    {{ $team->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('team_id')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
                            Image:
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('image') border-red-500 @enderror"
                            id="image"
                            type="file"
                            name="image"
                        >
                        @error('image')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                        @if ($player->image)
                            <img src="{{ asset('storage/' . $player->image) }}" alt="Player Image" class="mt-2 max-w-xs">
                        @endif
                    </div>

                    <div class="flex items-center justify-between">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit"
                        >
                            Update
                        </button>
                        <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800"
                            href="{{ route('players.index') }}"
                        >
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
