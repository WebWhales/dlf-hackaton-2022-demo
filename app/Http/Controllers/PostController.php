<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return Post::query()->get();
    }

    public function view(string $locale, Post $post)
    {
        return [
            'post'         => $post,
            'translations' => $post?->getTranslations(),
        ];
    }
}
