<?php

namespace App\Http\Controllers;

use App\Comptes;
use Illuminate\Http\Request;

class ComptesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comptes = Comptes::all();

        return $comptes->toJson(JSON_PRETTY_PRINT);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Comptes::create($request->all()))
        {
            return response()->json([
                'Oourah' => 'Données ajoutées avec succes'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comptes  $comptes
     * @return \Illuminate\Http\Response
     */
    public function show(Comptes $comptes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comptes  $comptes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comptes $comptes)
    {
        if($comptes->update($request->all()))
        {
         return response()->json([
             'Oourah' => 'Données modifiées avec succes'
         ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comptes  $comptes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comptes $comptes)
    {
        $comptes->delete();
    }
}
