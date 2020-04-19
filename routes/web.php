<?php

Route::get('/produtos', 'ProdutosController@index')
                            ->name('listar_produtos');

Route::get('/produtos/adicionar', 'ProdutosController@create')
                                        ->name('criar_produto');

Route::post('/produtos/adicionar', 'ProdutosController@store');

Route::post('/produtos/deletar/{id}', 'ProdutosController@destroy');
