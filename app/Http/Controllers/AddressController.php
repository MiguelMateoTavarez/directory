<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('address.create_address')->with('id', $id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'client_id' => 'required',
            'address' => 'required',
        ]);

        Address::create([
            'client_id' => $request->input('client_id'),
            'address' => $request->input('address'),
        ]);

        return redirect("/show/$request->client_id");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address, $id)
    {
        $addresses = $address::where('id', $id)->get();
        return view('address.edit_address')->with('addresses', $addresses);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address)
    {
        $request->validate([
            'address' => 'required',
        ]);

        $address->update([
            'address' => $request->input('address'),
            'updated_at' => now(),
        ]);

        return redirect("/show/$request->client_id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
        $address->delete();

        return back();
    }
}
