<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

//Ruta de la pagina principal
Route::get('/', HomeController::class);

//Rutas para los Posts
Route::get('/posts', [PostController::class, 'index'])
    ->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create']);
Route::post('/posts/create', [PostController::class, 'store']);
Route::get('/posts/{id}', [PostController::class, 'show'])
    ->name('posts.show');
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
Route::post('/posts/{post}/edit', [PostController::class, 'update']);

// Route::resource('posts', PostController::class);


// Route::get('/posts/{id}/{comments?}', function ($id, $comments = null) { 
//     if ($comments) {
//         return "Aqui se muestran todos los comentarios $comments del post con id $id ";
//     }
//     return "Aqui se muestra el post con id $id";
// });

Route::get('/prueba', function () {
    // Nuevo registro
    // $post= new Post;
    // $post->title = 'Titulo de Prueba 3';
    // $post->content = 'Esto es un post de prueba 3';
    // $post->category = 'prueba 3';
    // $post->save();
    // return $post;

     $posts = Post::find(3);
     return $posts;

    // Actualización de un registro
    // $posts = Post::where ('category', 'prueba 2')
    //         ->first();
    
    // $posts->category = 'prueba 2.5';
    // $posts->save();
    // return $posts;

    // Eliminación de un registro
    // $posts = Post::where ('category', 'prueba 2.5')
    //         ->first();
    
    // $posts->delete();
    // return $posts;
});

