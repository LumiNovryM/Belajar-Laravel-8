<?php

namespace App\Models;

class Post 
{

    // Data
    private static $blog_posts = [
        [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Lumi Novry M",
        "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet iusto sint aliquid, suscipit repellat pariatur repudiandae voluptate quia voluptatibus harum modi, dolore, aperiam dicta quas eligendi? Explicabo, enim velit corporis repudiandae officia maiores consequatur! Ex libero suscipit modi minus aliquid, dicta commodi repellat asperiores dolor. Nesciunt nisi, veniam omnis ullam deserunt tenetur atque incidunt, tempora minima, voluptatibus saepe ea consequatur est magnam dignissimos unde. Impedit est reprehenderit velit officia unde! Eius ab ratione aut perspiciatis quia reiciendis 
        temporibus exercitationem fugit."
        ],
        [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Alianna Sofia",
        "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem qui quo quas iure dolore nobis suscipit optio dolor iste, at architecto officia repellendus voluptas accusantium explicabo atque nesciunt deleniti ad beatae doloribus sed, odio esse unde natus? Unde error libero numquam assumenda dolorum vel omnis atque, aut voluptate doloremque amet recusandae earum ea! Laborum nobis asperiores adipisci iusto non atque obcaecati dignissimos enim! Eveniet quia odio ad soluta sunt dolor quas saepe. Deleniti asperiores et itaque, ipsam quos autem iusto exercitationem quidem minima reprehenderit ad, doloremque ex debitis quo incidunt accusantium, odit id ratione optio consectetur tempore praesentium placeat facilis."
        ]
    ];

    public static function all()
    {
       return collect(self::$blog_posts);
    }

    public static function find($slug) 
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
   

}
