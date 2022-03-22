<?php

Route::prefix('appart/store')
    ->name('appart.store.')
    ->group(function () {
        Route::get('/', 'Cp\StoreController@index')->name('index');

        Route::prefix('categories')
            ->name('categories.')
            ->group(function () {
                Route::get('/', 'Cp\CategoryController@index')->name('index');
            });
    });
