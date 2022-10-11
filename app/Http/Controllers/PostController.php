<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return Post::query()->get();
    }

    public function view(string $locale, $id)
    {
        /** @var Post $post */
        $post = Post::find($id);

        return [
            'post'         => $post,
            'translations' => $post?->getTranslations(),
        ];
    }
}
