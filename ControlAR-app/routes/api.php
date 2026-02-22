<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalasController;

//arquivo de rotas so pra testar API com postman sem precisar das telas (dps insere la no web.php, aq é só pra teste)

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('salas', [SalasController::class, 'store']);

