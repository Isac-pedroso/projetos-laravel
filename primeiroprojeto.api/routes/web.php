<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ProdutoResourcesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::resource('produtos', ProdutoController::class);
Route::get('users/{id}', [UserController::class, 'index'])->name('user.index');
/**
 * Vamos trabalhor com rotas
 * Vamos trabalhar com controllers
 */

/**
 * Trabalhando com controllers
 */
// //Route::get('/', [ProdutoController::class, 'index']);
// Route::get('/produto/{id?}', [ProdutoController::class, 'show']);

// // Rota de Controller com utilização de resources
// Route::resource('produtoresources', ProdutoResourcesController::class);
/*
Route::get('/', function () {
    return view('welcome');
});
*/

//Cria rota com view
/*
Route::get('/teste', function(){
    return view('site/teste');
});
*/

/*
// Cria rota mais simples com view
Route::view('/teste', 'site/teste');
// Cria rota para permitindo apenas os acessos defenidos
Route::match(['get', 'post'], '/match',function(){
    return "Permite apenas acessos defenidos !";
});
// Cria rota passando parametro
Route::get('/produto/{id}', function($id){
    return "Id do produto é ".$id;
});
// Cria rota passando parametros que não precisam ser obrigatorios
Route::get('/testeParam/{id?}/{cat?}', function($id = '', $cat = ''){
    return "Teste".$id." ".$cat;
});

// Redirecionamentos
// Redirecionamento mais complexo com muito codigo
Route::get('/sobre', function(){
    return redirect('/empresa');
});
// Redirecionamento simples 
Route::redirect('/testeRedirect', 'http://localhost/projetos-laravel/primeiroprojeto.api/public/teste');
// Criação de rotas nomeadas
Route::get('/new', function(){
    return view('site/news');
})->name('noticias');
Route::get('/novidades', function(){
    return redirect()->route('noticias');
});

// Grupo de rotas
Route::prefix('admin')->group(function(){
    Route::get('dashboard', function(){
        return 'dashboard';
    });
    Route::get('usuarios', function(){
        return 'usuarios';
    });
    Route::get('clientes', function(){
        return 'clientes';
    });
});
*/