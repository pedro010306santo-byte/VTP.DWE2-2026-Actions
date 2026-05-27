<?php

use App\Http\Controllers\EventController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $titulo = 'Algum título';
    $nome = 'Laravel na EC2';

    $itens = [
        'Rotas e views',
        'Parâmetros enviados para a view',
        'Loops com Blade',
        'Foreach com Blade',
        'Arquivos estáticos com CSS e imagem',
        'Layout com @yield',
        'Parâmetros de URL',
        'Controller',
        'Conexão com banco MySQL',
    ];

    return view('welcome', [
        'titulo' => $titulo,
        'nome' => $nome,
        'itens' => $itens,
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function (Request $request) {
    return view('products', [
        'search' => $request->query('search'),
    ]);
});

Route::get('/produtos', function (Request $request) {
    return view('products', [
        'search' => $request->query('search'),
    ]);
});

Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('produtos_teste', [
        'id' => $id,
    ]);
});

Route::get('/events/create', [EventController::class, 'create']);
