<?php

Route::resource('produtos','ProductController');


/*
Grupo de Rotas

Route::middleware('auth')->group(function(){ 
    Route::prefix('admin')->group(function(){
       
        Route::get('/financeiro', function () {
            return 'Admin Financeiro';
        });

        Route::get('/dashboard', function () {
            return 'Home Admin';
        });

        Route::get('/', 'TesteController@teste');
    });

});
*/

/*
Rota criada para chamar a pagina, via get.
Rota usando um subdiretório na view

Route::get('/contato', function(){
    return view('site.contato');
});
*/

/*
Rota com parametro

Route::get('/produtos/{idProduto?}', function ($idProduto=NULL) {
    return "Produto: {$idProduto}";
});

*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
