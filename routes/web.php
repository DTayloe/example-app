<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;

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

Route::get('/', function () {
    return redirect('vehicle');
});

Route::get('/tracker', function(){
    return view('tracker');
});
Route::get('tracker/{pageNum}', function ($pageNumba) {
    return view('tracker', ['pageNumer' => $pageNumba]);
});

Route::get('/vehicle', [VehicleController::class, 'index']);
Route::post('/vehicle/create', [VehicleController::class, 'create']);
// Route::get('vehicle', function () {
//     return view('vehicle');
// });
// Route::get('vehicle/{id}', function (Request $request, $id) {
//     return view('vehicle', ['id' => $id, 'requesty' => $request]);
// });