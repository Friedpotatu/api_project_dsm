<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StorePostRequest;
use App\Http\Requests\Post\UpdatePostRequest;
use App\Models\Post;
use Tymon\JWTAuth\Facades\JWTAuth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    // Verificar si hay posts en el sistema
    $postCount = Post::count();

    if ($postCount === 0) {
        // Si no hay posts, devolver un mensaje de error
        return response()->json(['Mensaje' => 'No hay posts en sistema. ¡Sé el primero en publicar!']);
    }

    // Verificar si el usuario está autenticado
    if (Auth::check()) {
        // Si está autenticado, obtener todos los posts ordenados por la fecha de creación de manera descendente
        $posts = Post::latest()->get();
    } else {
        // Si no está autenticado, obtener los posts ordenados por 'likes' y 'comentarios' de manera descendente
        $posts = Post::orderBy('likes', 'desc')->orderBy('comentarios', 'desc')->get();
    }

    // Devolver los resultados en formato JSON o realizar cualquier otro tratamiento necesario
    return response()->json(['posts' => $posts]);
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        // Obtener el token
        $token = $request->header('Authorization');

        // Obtenemos al usuario autenticado
        $user = JWTAuth::toUser($token);

        // Procesar la imagen si se ha cargado
        $pathImage = null;
        if ($request->hasFile('image')) {
            $pathImage = $this->uploadImage($request->file('image'));
        }

        // Crear el post
        $post = Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'pathImage' => $pathImage,
            'likes' => 0,
            'comments' => 0,
            'user_id' => $user->id,
        ]);

        // Retornamos la respuesta
        return response()->json([
            'post' => $post,
        ], 200);
    }

    private function uploadImage($image)
    {
        $path = $image->store('images', 'public'); // Guardar la imagen en storage/public/images

        return $path;
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
    }
}
