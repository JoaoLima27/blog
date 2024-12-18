<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PostagemController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\ModeracaoController;

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/', [FeedController::class, 'welcome'])->name('welcome');

Route::get('/feed/categoria', [FeedController::class, 'categoria'])->name('feed.categoria');

Route::get('/feed/categoria/{id}', [FeedController::class, 'categoriaById'])->name('feed.categoriaById');

Route::get('/feed/autor', [FeedController::class, 'autor'])->name('feed.autor');

Route::get('/feed/autor/{id}', [FeedController::class, 'autorById'])->name('feed.autorById');

Route::get('/feed/postagem/{id}/comentario', [FeedController::class, 'comentario'])->name('comentario');

Route::post('comentario', [ComentarioController::class, 'store'])->name('comentario.store');

Route::get('/feed/curtida/{id}', [FeedController::class, 'curtida'])->middleware('auth')->name('curtida');

Route::get('/feed/denunciarpostagem/{id}', [FeedController::class, 'denunciarPostagem'])->middleware('auth')->name('denunciarpostagem');

Route::post('/feed/denunciarpostagem', [FeedController::class, 'denunciarPostagemStore'])->middleware('auth')->name('denunciarPostagem.store');

Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('ModeracaoDenunciaPostagem', [ModeracaoController::class, 'ModeracaoDenunciaPostagem'])->name('ModeracaoDenunciaPostagem');

    Route::get('ModeracaoDenunciaPostagemAceito/{id}', [ModeracaoController::class, 'ModeracaoDenunciaPostagemAceito'])->name('ModeracaoDenunciaPostagemAceito');

    Route::get('ModeracaoDenunciaPostagemNegado/{id}', [ModeracaoController::class, 'ModeracaoDenunciaPostagemNegado'])->name('ModeracaoDenunciaPostagemNegado');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //Funcionario
    Route::get('/funcionario', [FuncionarioController::class, 'index']);

    //Categoria

    Route::middleware(['can:is_admin'])->group(function () {

    Route::get('/categoria', [CategoriaController::class, 'index'])->middleware('can:is_admin')->name('categoria.index');

    Route::get('/categoria/create', [CategoriaController::class,'create'])->name('categoria.create');

    Route::post('/categoria', [CategoriaController::class,'store'])->name('categoria.store');

    Route::get('/categoria/{id}', [CategoriaController::class,'show'])->name('categoria.show');

    Route::get('/categoria/{id}/edit', [CategoriaController::class,'edit'])->name('categoria.edit');

    Route::put('/categoria/{id}', [CategoriaController::class,'update'])->name('categoria.update');

    route::delete('/categoria/{id}', [CategoriaController::class, 'destroy'])->name('categoria.destroy');
    });


    //Postagem
    Route::get('/postagem', [PostagemController::class, 'index'])->name('postagem.index');

    Route::get('/postagem/create', [PostagemController::class,'create'])->name('postagem.create');

    Route::post('/postagem', [PostagemController::class,'store'])->name('postagem.store');

    Route::get('/postagem/{id}', [PostagemController::class,'show'])->name('postagem.show');

    Route::get('/postagem/{id}/edit', [PostagemController::class,'edit'])->name('postagem.edit');

    Route::put('/postagem/{id}', [PostagemController::class,'update'])->name('postagem.update');

    route::delete('/postagem/{id}', [PostagemController::class, 'destroy'])->name('postagem.destroy');
});
