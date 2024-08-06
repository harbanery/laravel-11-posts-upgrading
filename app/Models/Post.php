<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Raihan Yusuf',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio esse ducimus quod
                libero ratione
                consequuntur error nobis quibusdam! Incidunt ipsa ullam numquam fugit corrupti libero sequi possimus odio
                asperiores quibusdam.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Raihan Yusuf',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore quae vero
                praesentium culpa earum numquam excepturi. Nobis eaque labore blanditiis ex. Amet molestiae quas beatae
                dolorem! Neque nam placeat ex!'
            ]
        ];
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
