@extends('layouts.plantilla')

@section('title', 'Team ' . $team->name)

@section('content')
    <div class="bg-purple-950 py-8">
        <div class="container mx-auto px-6 text-gray-500 md:px-12 xl:px-40">
            <div class="md:w-8/12 lg:w-6/12 xl:w-6/12 mx-auto">
                <div class="rounded-xl bg-fuchsia-400 shadow-xl">
                    <div class="p-6 sm:p-8">
                        <div class="space-y-4">
                            <h2 class="mb-8 text-2xl text-center text-cyan-900 font-bold"><strong>Team: {{$team->name}}</strong></h2>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="group h-12 px-6 border-2 border-gray-300 rounded transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100 flex items-center justify-center">
                                <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base"><p><strong>{{$team->category->name}}</strong></p></span>
                            </div>
                            <div class="group h-12 px-6 border-2 border-gray-300 rounded transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100 flex items-center justify-center">
                                <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base"><p><strong>Score: </strong>{{$team->score}}</p></span>
                            </div>
                        </div>
                        <div class="mt-4">
                            <strong>Description: </strong>
                            <span class="block w-auto font-semibold tracking-wide text-gray-700 hover:text-blue-600 text-sm transition duration-300 sm:text-base items-center justify-center"><p>{{$team->description}}</p></span>
                        </div>
                        <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="mt-4">
                                <strong title="Encourages innovative problem-solving">Creativity: </strong>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="goals" type="number" min="0" name="goals" value="{{old('goals', $team->goals)}}" placeholder="0" readonly>
                            </div>
                            <div class="mt-4">
                                <strong title="Identifies areas for optimization">Inefficiency: </strong>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fouls_commited" type="number" min="0" name="fouls_commited" value="{{old('fouls_commited', $team->fouls_commited)}}" placeholder="0" readonly>
                            </div>
                            <div class="mt-4">
                                <strong title="Emphasizes collaboration and communication">Teamwork: </strong>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fouls_received" type="number"  name="fouls_received" min="0" value="{{old('fouls_received', $team->fouls_received)}}" placeholder="0" readonly>
                            </div>
                            <div class="mt-4">
                                <strong title="Discourages unoriginal solutions">Derivative🟥: </strong>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="red_cards" type="number" name="red_cards" min="0" value="{{old('red_cards', $team->red_cards)}}" placeholder="0" readonly>
                            </div>
                            <div class="mt-4">
                                <strong title="Highlights the importance of clear communication">Miscommunication🟨: </strong>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="yellow_cards" name="yellow_cards" type="number" min="0" value="{{old('yellow_cards', $team->yellow_cards)}}" placeholder="0" readonly>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4 mt-4 justify-center">
                            <a href="{{route('teams.index')}}" class="py-2 px-4 bg-gray-400 text-white rounded-lg hover:bg-blue-500">Back to Teams</a>
                            <a href="{{route('teams.edit', $team)}}" class="py-2 px-4 bg-gray-400 text-white rounded-lg hover:bg-blue-500">Edit Team</a>
                            <form action="{{route('teams.destroy', $team)}}" method="POST" onsubmit="return confirm('Are you sure to delete this team: {{$team->name}}?')">
                                @csrf
                                @method('delete')
                                <button type="submit" class="py-2 px-4 bg-gray-500 text-white rounded-lg hover:bg-red-600">Delete Team</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
