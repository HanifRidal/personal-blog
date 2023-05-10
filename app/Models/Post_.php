<?php

namespace App\Models;


class Post
{
    static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Hanif Ridal Warits",
            "body" => "
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam hic modi assumenda consequuntur deserunt ex, ratione ut excepturi ipsum quia perspiciatis tempora, saepe laboriosam, fugit voluptatem dolores ab blanditiis voluptas."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ahmad Saleh",
            "body" => "
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam hic modi assumenda consequuntur deserunt ex, ratione ut excepturi ipsum quia perspiciatis tempora, saepe laboriosam, fugit voluptatem dolores ab blanditiis voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam hic modi assumenda consequuntur deserunt ex, ratione ut excepturi ipsum quia perspiciatis tempora, saepe laboriosam, fugit voluptatem dolores ab blanditiis voluptas."
            
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts= static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
