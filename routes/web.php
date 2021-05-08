<?php

Route::get('/produtos', 'ProdutosController@index')->name('produtos.index');
Route::get('/produtos/add', 'ProdutosController@add')->name('form_add_product');
Route::post('/produtos/add', 'ProdutosController@store');
Route::post('/produtos/remover/{id}', 'ProdutosController@destroy');
Route::get('/produtos/{id}/info', 'ProdutosController@show');
Route::get('/produtos/{id}/update', 'ProdutosController@update')->name('update_produto');
Route::post('/produtos/{id}/updateNome', 'ProdutosController@updateNome');
Route::post('/produtos/{id}/updateCategoria', 'ProdutosController@updateCategoria');
Route::post('/produtos/{id}/updateDescricao', 'ProdutosController@updateDescricao');
Route::post('/produtos/{id}/updateQuantidade', 'ProdutosController@updateQuantidade');
Route::post('/produtos/{id}/updatePreco', 'ProdutosController@updatePreco');
