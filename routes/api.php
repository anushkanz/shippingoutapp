<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;


// Route::get('/users', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::prefix('v1')->group(base_path('routes/api_v1.php'));

// Route::get('/users', [UsersController::class, 'index']);
// Route::get('/users/{id}', [UsersController::class, 'show']);
// Route::post('/users', [UsersController::class, 'store']);
// Route::put('/users/{id}', [UsersController::class, 'update']);
// Route::delete('/users/{id}', [UsersController::class, 'destroy']);