<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class mpost
{
    private static $blog_posts = [
        [
            "title" => "Tulisan Pertama",
            "slug" => "tulisan-pertama",
            "author" => "ociddoci",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid labore hic, similique, iure minus necessitatibus excepturi aut voluptas eius facilis beatae quos ab pariatur, doloribus sit. Quaerat, accusamus iure. Reiciendis adipisci maiores rerum, eos reprehenderit ipsa enim, veritatis in nam incidunt illo consequuntur modi delectus laborum tempora neque facere inventore beatae eius quidem. Pariatur, qui? Doloribus atque quia temporibus, cumque facere fuga dolores laboriosam esse voluptates vero nostrum omnis quisquam corporis ipsam repellendus quidem animi reprehenderit. Iste, eius sint."
        ],
        [
            "title" => "Tulisan Kedua",
            "slug" => "tulisan-kedua",
            "author" => "dhenasib",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores deserunt explicabo esse sed nostrum, accusantium repudiandae possimus quas veniam architecto consequuntur magnam aliquid inventore incidunt aut quidem ut! Pariatur perferendis ipsam quia eos qui sed, delectus beatae porro harum ad similique quis fugit consectetur et quae at atque recusandae esse, non perspiciatis? Repellat eum voluptatum numquam. Blanditiis perferendis in asperiores, aperiam dolor consequatur possimus excepturi accusamus iste placeat. Illo laboriosam natus odit. Ratione nobis eaque delectus quas sunt voluptas laudantium non! Vero, voluptatum delectus officiis eaque exercitationem deleniti commodi unde dicta! Laudantium, sint sed. Numquam exercitationem itaque voluptatibus unde neque?
            "
        ]
    ];
    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts -> firstWhere('slug', $slug);
    }
}
