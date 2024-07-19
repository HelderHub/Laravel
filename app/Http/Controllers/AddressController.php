<?php

namespace App\Http\Controllers;

use App\Address;
use App\Player;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addresses = Address::orderBy('id', 'desc')->Paginate(15);
        return view('pages.addresses.index', ['addresses' => $addresses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.addresses.create');
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
            'address'     => 'required',
            'city'        => 'required',
            'country'     => 'required',
            'postal_code' => 'required',
        ]);
        Address::create($request->all());
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

        return redirect('addresses')->with('status','Item created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
        return view('pages.addresses.show', ['address' => $address]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address)
    {
        $addresses = Address::all();
        return view('pages.addresses.edit', ['address' => $address]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address)
    {
        $address->update($request->all());
        return redirect('addresses')->with('status','Item updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */


    public function destroy(Address $address)
    {
        $player = Player::where('address_id', $address->id)->count();
        if($player == 0)
        {
            $address->delete();
            return redirect('addresses')->with('status','Item deleted successfully!');
        }
        else
        {
            return redirect('addresses')->with('status','Nao pode eliminar');
        }
    }


    public function destroyAll(Address $address)
    {
        //nao esta feito
        $address->where('address_id',  0 )->delete();
        return redirect('addresses')->with('status','All Items deleted successfully!');
    }
}
