<?php

Route::get('/', function () {
    return redirect('auth/signin');
});

Route::prefix('auth')->group(function()
{
    Route::get('/signin', 'Staff\StaffsController@signin')->name('signin');
});

Route::prefix('admin')->group( function ()
{
    Route::prefix('dashboard')->group( function ()
    {
        Route::get('/', 'Admin\StudentsController@index')->name('dashboard');
        // Route::get('/student', 'Admin\StudentsController@students');
    });

    Route::prefix('mahasiswa')->group( function ()
    {
        Route::get('/', 'Admin\StudentsController@students');
        Route::get('/aktif', 'Admin\StudentsController@studentsaktif');
        Route::get('/cuti', 'Admin\StudentsController@studentscuti');
        Route::get('/do', 'Admin\StudentsController@studentsdo');
        Route::get('/create', 'Admin\StudentsController@create');
        Route::get('/{student}', 'Admin\StudentsController@show');
        Route::post('/create', 'Admin\StudentsController@store');
        Route::delete('/{student}', 'Admin\StudentsController@destroy');
        Route::get('/{student}/edit', 'Admin\StudentsController@edit');
        Route::patch('/{student}', 'Admin\StudentsController@update');
    });

    Route::prefix('about')->group( function ()
    {
        Route::get('/', 'Admin\StudentsController@about');
    });
});