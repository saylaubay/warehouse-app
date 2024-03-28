<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\MeasurementController;
use App\Http\Controllers\OutputController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\WarehouseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function (){
    return \App\Models\Category::find(2)->category;
});

Route::prefix('inputs')->group(function (){
    Route::get('/getInputByDate', [InputController::class, 'getInputByDate']);

});




Route::apiResources([
    'inputs'=> InputController::class,
    'stocks'=> StockController::class,
    'outputs'=> OutputController::class,
    'clients'=> ClientController::class,
    'products'=> ProductController::class,
    'suppliers'=> SupplierController::class,
    'currencies'=> CurrencyController::class,
    'categories'=> CategoryController::class,
    'warehouses'=> WarehouseController::class,
    'measurements'=> MeasurementController::class,
]);

