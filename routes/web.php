<?php

Route::get('/produtos', 'ProdutosController@index');

Route::get('/produtos/adicionar', 'ProdutosController@create');

Route::post('/produtos/adicionar', 'ProdutosController@store');
