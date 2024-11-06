<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

//Ruta de la pagina principal
Route::get('/', HomeController::class);

//Rutas para los Posts
Route::get('/posts', [PostController::class, 'index']); 
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{id}', [PostController::class, 'show']);

// Route::get('/posts/{id}/{comments?}', function ($id, $comments = null) { 
//     if ($comments) {
//         return "Aqui se muestran todos los comentarios $comments del post con id $id ";
//     }
//     return "Aqui se muestra el post con id $id";
// });

