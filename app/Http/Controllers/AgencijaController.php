<?php

namespace App\Http\Controllers;

use App\Http\Resources\AgencijaResource;
use App\Models\Agencija;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AgencijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AgencijaResource::collection(Agencija::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'naziv' => 'required|string',
            'brojTelefona' => 'required|string',
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return response()->json(['Greška', $validator->errors()]);
        }

        $agencija = Agencija::create([
            'naziv' => $request->naziv,
            'brojTelefona' => $request->brojTelefona,
            'email' => $request->email,
        ]);

        return response()->json(['Agencija je kreirana', new AgencijaResource($agencija)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agencija  $agencija
     * @return \Illuminate\Http\Response
     */
    public function show(Agencija $agencija)
    {
        return new AgencijaResource($agencija);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agencija  $agencija
     * @return \Illuminate\Http\Response
     */
    public function edit(Agencija $agencija)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agencija  $agencija
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agencija $agencija)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agencija  $agencija
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agencija $agencija)
    {
        $agencija->delete();
        return response()->json('Agencija je obrisana');
    }
}
