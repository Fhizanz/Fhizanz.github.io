<?php

namespace App\Models;

class post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Posts Pertama",
            "slug" => "Judul-Posts-Pertama",
            "author" => "Saya",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro tempore velit dolore ab vitae, nobis adipisci dignissimos omnis vero at, minus suscipit molestiae tenetur repellat eligendi. Ducimus sed ut minus neque quod nisi iste at, quasi dicta molestias laudantium facilis reiciendis cum beatae consequuntur! Amet magnam animi quia laudantium. Veritatis tempora earum doloremque harum eligendi quas rem soluta quae corrupti, libero facilis aspernatur rerum, expedita placeat voluptates incidunt officiis nisi repellat amet aperiam culpa porro reiciendis. Dolor in iusto eius?"
        ],
        [
            "title" => "Judul Posts Kedua",
            "slug" => "Judul-Posts-Kedua",
            "author" => "Aku",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Non consequatur facere voluptatibus laboriosam fuga quo, est ea quos, reprehenderit temporibus dolorum repellat commodi recusandae. Nihil, expedita. Nulla atque nobis, consectetur fugit ad odit, pariatur a, corporis nostrum autem odio explicabo! Esse quos doloribus dolorum repellat, maiores omnis rerum voluptatibus aperiam! Facere, natus! Ad fuga pariatur corporis rerum impedit facilis earum laborum id similique officia, minus eaque rem incidunt porro cupiditate, cum ipsum cumque magnam, laboriosam ipsam consequuntur? Fugiat impedit numquam magnam quae facere iste magni doloribus culpa hic eligendi minus sapiente voluptatibus optio esse, sequi corrupti quibusdam, distinctio est rerum."
        ],
    ];

    public static function all()
    {
        return collect( self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);

    }
    
}


