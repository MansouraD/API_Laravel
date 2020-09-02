<?php

namespace App\Http\Controllers;

use App\Operations;
use Illuminate\Http\Request;

class OperationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operations = Operations::all();

        return $operations->toJson(JSON_PRETTY_PRINT);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Operations::create($request->all()))
        {
                return response()->json([
                    'Oourah' => 'Données ajoutées avec succes'
                ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Operations  $operations
     * @return \Illuminate\Http\Response
     */
    public function show(Operations $operations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Operations  $operations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Operations $operations)
    {
        if($operations->update($request->all()))
        {
         return response()->json([
             'Oourah' => 'Données modifiées avec succes'
         ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Operations  $operations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Operations $operations)
    {
        $operations->delete();
    }
}
