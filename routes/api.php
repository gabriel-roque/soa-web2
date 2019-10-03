<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Aluno'], function () {
    Route::get('/alunos', 'AlunoController@index');
    Route::post('/aluno', 'AlunoController@store');
    Route::get('/aluno/{id}', 'AlunoController@show');
    Route::put('/aluno/{id}', 'AlunoController@update');
    Route::delete('/aluno/{id}', 'AlunoController@destroy');
});
