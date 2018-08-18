<?php

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
use Shop\Good;
use Shop\Customer;


// Home Page
Route::get('/', function () {
    return redirect('/invoices');
});

 // Display all Invoice belong to good name OK
    Route::get('/invoices/goods/{name}', function ($name) {
        $good = Good::with('invoices')
            ->where('good_name', $name)
            ->first();
        return view('invoices.index')
            ->with('good', $good)
            ->with('hd', $good->invoices);  
    });

// List Invoices OK
Route::get('/invoices', ['uses' => 'InvoiceController@index', 'as' => 'invoice.index']);
// Show one invoice OK
Route::get('/invoices/{invoice}', ['uses' => 'InvoiceController@show', 'as' => 'invoice.show'])->where('invoice', '[0-9]+');

// Show page create new Invoice  OK
Route::get('/invoices/create', ['uses' => 'InvoiceController@create', 'as' => 'invoice.create']);

// Insert new Invoice OK
Route::post('/invoices', ['uses' => 'InvoiceController@store', 'as' => 'invoice.store']);

// Show page edit a Invoice OK
Route::get('/invoices/{id}/edit', ['uses' => 'InvoiceController@edit', 'as' => 'invoice.edit']);

// Update a Invoice OK
Route::put('/invoices/{id}', ['uses' => 'InvoiceController@update', 'as' => 'invoice.update']);

// Delete a Invoice
Route::delete('/invoices/{id}', ['uses' => 'InvoiceController@destroy', 'as' => 'invoice.destroy']);