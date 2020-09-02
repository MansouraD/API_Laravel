<?php

namespace App\Http\Controllers;

use App\Clients;
use App\Comptes;
use App\Operations;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Clients::all();

        return $clients->toJson(JSON_PRETTY_PRINT); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       if(Clients::create($request->all()))
       {
           return response()->json([
               'Oourah' => 'Données ajoutées avec succes'
           ]);
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function show(Clients $clients, Comptes $comptes, Operations $operations)
    {
      return $clients;
      return $comptes;
      return $operations;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clients $clients)
    {
       if($clients->update($request->all()))
       {
        return response()->json([
            'Oourah' => 'Données modifiées avec succes'
        ]);
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clients $clients)
    {
        $clients->delete();
    }
}
