<?php

namespace App\Http\Controllers;

use App\Address;
use App\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::orderBy('id', 'desc')->Paginate(15);
        return view('pages.players.index', ['players' => $players]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $addressList = Address::all();
        return view('pages.players.create', ['addressList' => $addressList]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'address_id' => 'required',
            'description' => 'required',
            'retired' => 'required',
        ]);
        Player::create($request->all());
        /* Example 2
        $input = $request->all();
        Player::create($input);
        */
        /* Example 3
        Player::create([
        'name' => $request->name,
        'address' => $request->address,
        'description' => $request->description,
        'retired' => $request->retired
        ]);
        */
        /* Example 4
        $player = new Player();
        $player->name = $request->name;
        $player->address = $request->address;
        $player->description = $request->description;
        $player->retired = $request->retired;
        $player->save();
        */
        return redirect('players')->with('status','Item created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        return view('pages.players.show', ['player' => $player]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        $addressList = Address::all();
        return view('pages.players.edit', ['player' => $player, 'addressList' => $addressList]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
    {
        $player->update($request->all());
        return redirect('players')->with('status','Item updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        $player->delete();
        return redirect('players')->with('status','Item deleted successfully!');

    }

    public function destroyAll(Player $player)
    {
        $player->where('id', '>', 0 )->delete();
        return redirect('players')->with('status','All Items deleted successfully!');
    }
}
