<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

// Route::fallback(function () {
//     return response()->json(['message' => 'Endpoint not found'], 404);
// });

Route::get('/', function () {
    return response()->json(['message' => "Welcome to mdxfy's services"], 200);
});
Route::get('/favicon.ico', function () {
    return response()->file(public_path('favicon.ico'));
});
Route::prefix('/public')->group(function () {
    Route::get('/{file}', function () {
        return response()->file(public_path('assets/'.request()->file));
    });
});

Route::prefix('/console')->group(function () {
    require_once __DIR__.'/../routes/console.php';
})->middleware(['dev.env']);

Route::prefix('/uploads')->group(function () {
    require_once __DIR__.'/../routes/uploads.php';
})->middleware([]);

Route::prefix('/storage')->group(function () {
    require_once __DIR__.'/../routes/storage.php';
});

Route::prefix('/api')->group(function () {
    require_once __DIR__.'/../routes/api.php';
});
