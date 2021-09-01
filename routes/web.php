<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aqui é onde você pode registrar as rotas da web para seu aplicativo. Esses
| as rotas são carregadas pelo RouteServiceProvider dentro de um grupo que
| contém o grupo de middleware "web". Agora crie algo ótimo!
/   #rotas que irá utilizar cooke session
|
*/


// Metodo index -> determinando como pagina principal chamado pelo HomeController
Route::get('/' , 'HomeController');
#1 rota criada porpadrão
Route::view('/teste', 'teste');

// # GRUPOS DE ROTAS ->USAREI BASTANTE
    //AGRUPAMENTO ATRAVES DE PREFIXO
    //Dando responsabilidades a cada rota

Route::prefix('/config')->group(function(){
    # -- colocando rotas adicionais levando em consideração o prefixo
    Route::get('/', 'Admin\ConfigController@index');
    Route::get('info', 'Admin\ConfigController@info');
    Route::get('permissoes', 'Admin\ConfigController@permissoes');
});


# Fallback de Rotas (404)
    // -- situação se caso o usuario digitar uma url errada
    // -- sempre utilizar no final

    // FALLBACK = uma alternativa quando o que eu determinar não funcionar
        // -- Neste caso se o usuario digitar uma rota e nenhuma bater com as que eu determinei aqui
        // -- crio uma view 404.blade.php

    Route::fallback(function(){
        return view('404');
    });


# Controllers e Namespaces
    // Subdivisões no CONTROLLER


