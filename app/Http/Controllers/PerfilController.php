<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfil;
use Illuminate\Support\Facades\Auth;
use App\Models\User;




class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */




    public function store(Request $request, User $user)

    {

        $perfil = new Perfil();
        $perfil->fill([
            'name' => $request->name,
            'date_of_birth' => $request->date_of_birth,
            'nuit' => $request->nuit,
            'adress' => $request->adress,
            'b_i' => $request->b_i,
            'nationality' => $request->nationality,
            'numero_de_conta' => $request->numero_de_conta,
            'numero_telefone' => $request->numero_telefone,
        ]);

        $user->perfil()->save($perfil);

        return response()->json($perfil, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
