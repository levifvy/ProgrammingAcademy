@extends('layouts.plantilla')

@section('title', 'Game.create')

@section('content')
<div class="bg-gradient-to-b from-black to-purple-500 h-screen flex items-center justify-center px-6">
    <div class="container mx-auto">
        <div class="space-y-4 text-center">
            <h2 class="mb-8 text-3xl text-cyan-300 font-bold">Create Competition</h2>
        </div>
        <form action="{{ route('games.store') }}" method="post" onsubmit="return validateForm()" class="bg-white rounded-lg shadow-lg p-6">
            @csrf
            <div class="relative">
                <label for="category_id" class="form-control @error('category_id') is-invalid @enderror text-white">{{ __('Category:') }}</label><br>
                <select name="category_id" id="category_id" class="group h-10 px-6 border-2 border-gray-300 rounded-lg transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100 w-full" required>
                    <option value="" disabled selected>Select one category</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div><br>
            <div class="form-group">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-left">
                    <div class="relative">
                        <label for="team1_id" class="form-control @error('team1_id') is-invalid @enderror text-white text-left">{{ __('Local Team:') }}</label><br>
                        <select name="team1_id" id="team1_id" class="group h-10 px-6 border-2 border-gray-300 rounded-lg transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100 w-full" required>
                            <option value="" disabled selected>--------------- Select a team 1 ---------------</option>
                            @foreach($teams as $team)
                            <option value="{{ $team->id }}" data-category="{{ $team->category->id }}">{{ $team->name }} -> {{ $team->category->name }}</option>
                            @endforeach
                        </select>
                        @error('team1_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="relative">
                        <label for="team2_id" class="form-control @error('team2_id') is-invalid @enderror text-white">{{ __('Visiting Team:') }}</label><br>
                        <select name="team2_id" id="team2_id" class="group h-10 px-6 border-2 border-gray-300 rounded-lg transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100 w-full" required>
                            <option value="" disabled selected>--------------- Select a team 2 ---------------</option>
                            @foreach($teams as $team)
                            <option value="{{ $team->id }}" data-category="{{ $team->category->id }}">{{ $team->name }} -> {{ $team->category->name }}</option>
                            @endforeach
                        </select>
                        @error('team2_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="game_date" class="text-white">Date:</label>
                        <input type="datetime-local" name="game_date" id="game_date" class="w-full">
                    </div>
                    <div class="col-span-2 flex justify-center sm:justify-end mt-4 sm:mt-0">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                            Create
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function validateForm() {
        var categorySelect = document.getElementById('category_id');
        var selectedCategory = categorySelect.options[categorySelect.selectedIndex].value;
        var team1Select = document.getElementById('team1_id');
        var team2Select = document.getElementById('team2_id');
        var team1Category = team1Select.options[team1Select.selectedIndex].getAttribute('data-category');
        var team2Category = team2Select.options[team2Select.selectedIndex].getAttribute('data-category');
        var team1Name = team1Select.options[team1Select.selectedIndex].text.split(" -> ")[0];
        var team2Name = team2Select.options[team2Select.selectedIndex].text.split(" -> ")[0];
        var team1Id = team1Select.options[team1Select.selectedIndex].value;
        var team2Id = team2Select.options[team2Select.selectedIndex].value;

        if (team1Category !== selectedCategory || team2Category !== selectedCategory) {
            alert("Warning: The selected teams have different categories than the chosen category.");
            return false; // Prevent form submission
        }

        if (team1Id === team2Id) {
            alert("Warning: Two teams with the same ID cannot be selected.");
            return false; // Prevent form submission
        }

        if (team1Name === team2Name) {
            alert("Warning: Two teams with the same name cannot be selected.");
            return false; // Prevent form submission
        }

        return true; 
    }
</script>
@endsection
