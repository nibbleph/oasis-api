<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/generate-pdf', [EmailController::class, 'store']);
Route::post('/contact', [EmailController::class, 'send_contact']);
Route::post('/get-started', [EmailController::class, 'send_form']);
Route::post('/pricing-form', [EmailController::class, 'send_pricing']);
Route::post('/customized-support', [EmailController::class, 'send_support']);
Route::post('/web-dev', [EmailController::class, 'web_development']);
Route::post('/digital-marketing', [EmailController::class, 'digital_marketing']);