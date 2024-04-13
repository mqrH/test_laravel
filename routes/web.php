<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('customers');
});

Route::get(
    'zoo',
    [CustomerController::class, "showAll"]
);

Route::get(
    'zoo/{customerId}',
    [CustomerController::class, "showCustomerData"]
);

Route::prefix('test')->group(function() {
   Route::get(
       '/',
       function () {
           return 'Main test route';
       }
    );

    Route::get(
        '/animals',
        function () {
            dd((int)'action4321');
            return'Test animals here';
        }
    );

    Route::get(
        '/workers',
        function () {
            dd((int)'action1337');
            return'Test workers here';
        }
    );

    Route::get(
        '/food',
        function () {
            dd((int)'action1234');
            return'Test food here';
        }
    );

    Route::get(
        '/{id}',
        function () {
            return'Test route with ID';
        }
    )->where('id', '[0-9]+');

    Route::match(
        ['post', 'put', 'patch'],
        'test-route',
        [CustomerController::class, 'showCustomerData']
    );
});


