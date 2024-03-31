@extends('layouts.plantilla')

@section('title', 'Game Show')

@section('content')
<div class="bg-gradient-to-r from-blue-900 to-red-900 min-h-screen flex flex-col justify-between">
    <div class="italic text-white p-1">
        Match was created in: {{ $game->game_date }}
    </div>
    <div class="container mx-auto flex-grow px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <form method="POST" action="{{ route('teams.storeResults', $game->id) }}" id="game-form">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-4 bg-transparent shadow-md rounded px-8 pt-6 pb-8 mb-4 text-white">
                    <div class="form-group">
                        <h2 class="text-3xl font-bold text-white sm:text-center">{{ $game->team1->name }}</h2>
                        <div class="mt-2 bg-white shadow-md rounded px-8 pt-2 pb-8 mb-4 sm:mt-2">
                            <div class="grid grid-cols-4" title="category">
                                <div class="col-start-1">
                                    <input type="hidden" name="team_id1" id="team_id1" value="{{ old('team_id1', $game->team1_id) }}">
                                    <p class="text-gray-700 font-bold text-start">{{ $game->category->name }}</p>
                                    <input type="hidden" name="category_id1" id="category_id1" value="{{ old('category_id1', $game->category_id) }}">
                                </div>
                            </div>
                            <div class="grid justify-items-end sm:flex-col">
                                <div class="mb-4 flex justify-center sm:mb-4">
                                    <label class="block text-gray-700 font-bold mb-2" for="goals1">Creativity:</label>
                                    <input class="input-style text-black text-center font-bold" type="number" id="goals1" name="goals1" value="0" min="0">
                                </div>
                                <div class="mb-4 flex justify-center sm:mb-4">
                                    <label class="block text-gray-700 font-bold mb-2" for="fouls_commited1">Inefficiency:</label>
                                    <input class="input-style text-black text-center font-bold" type="number" id="fouls_commited1" name="fouls_commited1" value="0" min="0">
                                </div>
                                <div class="mb-4 flex justify-center sm:mb-4">
                                    <label class="block text-gray-700 font-bold mb-2" for="fouls_received1">Teamwork:</label>
                                    <input class="input-style text-black text-center font-bold" type="number" id="fouls_received1" name="fouls_received1" value="0" min="0">
                                </div>
                                <div class="mb-4 flex justify-center sm:mb-4">
                                    <label class="block text-gray-700 font-bold mb-2" for="red_cards1">Derivative 🟥:</label>
                                    <input class="input-style text-black text-center font-bold" type="number" id="red_cards1" name="red_cards1" value="0" min="0">
                                </div>
                                <div class="mb-4 flex justify-center sm:mb-4">
                                    <label class="block text-gray-700 font-bold mb-2" for="yellow_cards1">Miscommunication 🟨:</label>
                                    <input class="input-style text-black text-center font-bold" type="number" id="yellow_cards1" name="yellow_cards1" value="0" min="0">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="text-center mt-20">
                            <!-- Chronometer HTML -->
                            <div class="container text-center">
                                <h1 class="text-white font-bold mb-2">Chronometer</h1>
                                <h2 class="text-white font-bold"><span id="hours">00</span>:<span id="minutes">00</span>:<span id="seconds">00</span></h2><br>
                                <button class="text-white font-bold mb-2" id="start-btn" type="button">Start</button>&nbsp&nbsp
                                <button class="text-white font-bold mb-2" id="pause-btn" type="button">Pause</button>
                            </div>
                            <div class="mt-20">
                                <h1 class="text-5xl font-bold text-yellow-500 bg-gradient-to-r from-yellow-500 to-red-500 p-2 rounded-full shadow-lg"><p class="text-8xl text-yellow-200">VS</p></h1>
                            </div>
                            <div class="text-center">
                                <div>
                                    <input type="hidden" name="goals_diff" id="goals_diff">
                                    <div class="text-center">
                                        <button type="submit" onclick="return confirm('Are you sure you want to submit this form?')" class="mt-5 border-2 px-5 py-2 rounded-lg border-green-500 bg-gray-200 hover:bg-blue-400 hover:border-red-900 border-b-4 font-black translate-y-2 border-l-4" id="matches">Save Results</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <h2 class="text-3xl font-bold text-white sm:text-center">{{$game->team2->name}}</h2>
                        <div class="mt-2 bg-white shadow-md rounded px-8 pt-2 pb-8 mb-4 sm:mt-2">
                            <div class="grid grid-cols-3 gap-4">
                                <div class="col-end-4" title="category">
                                    <p class="text-gray-900 font-bold text-end">{{ $game->category->name }}</p>
                                    <input type="hidden" name="category_id2" id="category_id2" value="{{ old('category_id2', $game->category_id) }}">
                                    <input type="hidden" name="team_id2" id="team_id2" value="{{ old('team_id2', $game->team2_id) }}">
                                </div>
                            </div>
                            <div class="grid justify-items-start sm:flex-col">
                                <div class="mb-4 flex justify-center sm:mb-4">
                                    <input class="input-style text-black text-center font-bold" type="number" id="goals2" name="goals2" value="0" min="0">
                                    <label class="block text-gray-700 font-bold mb-2" for="goals2">&nbsp: Creativity</label>
                                </div>
                                <div class="mb-4 flex justify-center sm:mb-4">
                                    <input class="input-style text-black text-center font-bold" type="number" id="fouls_commited2" name="fouls_commited2" value="0" min="0">
                                    <label class="block text-gray-700 font-bold mb-2" for="fouls_committed2">&nbsp :Inefficiency</label>
                                </div>
                                <div class="mb-4 flex justify-center sm:mb-4">
                                    <input class="input-style text-black text-center font-bold" type="number" id="fouls_received2" name="fouls_received2" value="0" min="0">
                                    <label class="block text-gray-700 font-bold mb-2" for="fouls_received2">&nbsp :Teamwork</label>
                                </div>
                                <div class="mb-4 flex justify-center sm:mb-4">
                                    <input class="input-style text-black text-center font-bold" type="number" id="red_cards2" name="red_cards2" value="0" min="0">
                                    <label class="block text-gray-700 font-bold mb-2" for="red_cards2">&nbsp :🟥 Derivative</label>
                                </div>
                                <div class="mb-4 flex justify-center sm:mb-4">
                                    <input class="input-style text-black text-center font-bold" type="number" id="yellow_cards2" name="yellow_cards2" value="0" min="0">
                                    <label class="block text-gray-700 font-bold mb-2" for="yellow_cards2">&nbsp :🟨 Miscommunication</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    let seconds = 0;
    let minutes = 0;
    let hours = 0;
    let timerId;

    function updateTime() {
        seconds++;
        if (seconds >= 60) {
            seconds = 0;
            minutes++;
            if (minutes >= 60) {
                minutes = 0;
                hours++;
            }
        }

        document.getElementById('hours').innerHTML = padTime(hours);
        document.getElementById('minutes').innerHTML = padTime(minutes);
        document.getElementById('seconds').innerHTML = padTime(seconds);
    }

    function padTime(time) {
        return (time < 10 ? "0" : "") + time;
    }

    document.getElementById('start-btn').addEventListener('click', function () {
        timerId = setInterval(updateTime, 1000);
    });

    document.getElementById('pause-btn').addEventListener('click', function () {
        clearInterval(timerId);
    });

    // Calculate the difference in goals and update the hidden input
    document.getElementById('game-form').addEventListener('submit', function () {
        const goals1 = parseInt(document.getElementById('goals1').value);
        const goals2 = parseInt(document.getElementById('goals2').value);
        const goalsDiff = goals1 - goals2;

        document.getElementById('goals_diff').value = goalsDiff;
    });
</script>
@endsection

@section('styles')
<style>
    .input-style {
        height: 40px; /* Set a fixed height for all inputs */
        color: black; /* Set text color to black */
        text-align: center; /* Center-align text */
        font-weight: bold; /* Set font weight to bold */
        /* Add any additional styling here */
    }
</style>
@endsection
