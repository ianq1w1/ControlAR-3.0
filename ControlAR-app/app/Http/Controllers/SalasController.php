<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\salas;
use App\Models\User;

//isso esta funcionando baseado em testes com o postman
//tinker tb pra testar as relações com autenticação

class SalasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nome_sala' => 'required|string',
            'qtd_ac'    => 'required|string',
        ]);

        // O segredo está aqui: pegamos o usuário logado e criamos a sala através da relação
        // Isso injeta automaticamente o user_id correto no banco
        $sala = $request->user()->salas()->create($data);

        return response()->json($sala, 201);
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function user(Salas $sala)
    {
        return response()->json([
            'sala' => $sala,
            'user' => $sala->user // relação definida no Model Salas
        ]);
    }

    public function salasPorUser(User $user)
    {
        return response()->json([
            'user' => $user,
            'salas' => $user->salas // relação definida no Model User
        ]);
    }


}
