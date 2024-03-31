<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Support\Facades\Storage;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $players = Player::all();
        $categories = DB::table('categories')->get();
        $teams = DB::table('teams')->get();
        return view('players.index', compact('players','categories','teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = DB::table('teams')
            ->join('categories', 'teams.category_id', '=', 'categories.id')
            ->select('teams.*', 'categories.name as category_name')
            ->get();

        return view('players.create', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'last_name' => 'required|string',
            'age' => 'required|integer',
            'nif' => 'required|unique:players|string',
            'team_id' => 'nullable|exists:teams,id',
        ]);

        // Establecer la posición directamente como "student"
        $validatedData['position'] = 'student';

        Player::create($validatedData);

        return redirect()->route('players.index')->with('success', 'Player created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        return view('players.show', compact('player'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        $teams = Team::all();
        return view('players.edit', compact('player', 'teams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Player $player)
    // {
    //     $validatedData = $request->validate([
    //         'name' => 'required|string',
    //         'last_name' => 'required|string',
    //         'age' => 'required|integer',
    //         'nif' => 'required|string|unique:players,nif,' . $player->id,
    //         'team_id' => 'nullable|exists:teams,id',
    //     ]);

    //     $player->update($validatedData);

    //     return redirect()->route('players.index')->with('success', 'Player updated successfully.');
    // }
    public function update(Request $request, Player $player)
{
    $validatedData = $request->validate([
        'name' => 'required|string',
        'last_name' => 'required|string',
        'age' => 'required|integer',
        'nif' => 'required|string|unique:players,nif,' . $player->id,
        'team_id' => 'nullable|exists:teams,id',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validación para la imagen
    ]);

    // Actualizar los campos del jugador
    $player->name = $validatedData['name'];
    $player->last_name = $validatedData['last_name'];
    $player->age = $validatedData['age'];
    $player->nif = $validatedData['nif'];
    $player->team_id = $validatedData['team_id'];

    // Si se proporciona una nueva imagen, cargarla y guardarla
    if ($request->hasFile('image')) {
        // Eliminar la imagen anterior si existe
        if ($player->image) {
            Storage::delete($player->image);
        }
        // Guardar la nueva imagen
        $player->image = $request->file('image')->store('player_images');
    }

    $player->save();

    return redirect()->route('players.index')->with('success', 'Player updated successfully.');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        $player->delete();

        return redirect()->route('players.index')->with('success', 'Player deleted successfully.');
    }
}
