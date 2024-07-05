<?php

namespace App\Models;



class Post 
{
    private static  $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Bayu Kristianto",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate, omnis corporis. Alias iusto harum, repellat veniam explicabo odio pariatur culpa ex, voluptas sint consectetur nam. Expedita libero eos vel et veniam, perferendis exercitationem veritatis ipsum quam impedit consequuntur qui pariatur quidem eaque deserunt itaque laborum aut amet a sapiente! Optio debitis fugit quod quaerat quidem placeat. Ducimus voluptatibus atque, totam magnam pariatur nihil dolorem aperiam labore culpa quae cumque, vero corrupti exercitationem velit voluptatum architecto natus voluptas ab aliquam, voluptates minima? Cum nobis repellendus eaque laborum sit veritatis nisi repellat ipsa vero provident, deserunt commodi eveniet tenetur, voluptas ratione hic?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Supiw piw salamander",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate, omnis corporis. Alias iusto harum, repellat veniam explicabo odio pariatur culpa ex, voluptas sint consectetur nam. Expedita libero eos vel et veniam, perferendis exercitationem veritatis ipsum quam impedit consequuntur qui pariatur quidem eaque deserunt itaque laborum aut amet a sapiente! Optio debitis fugit quod quaerat quidem placeat. Ducimus voluptatibus atque, totam magnam pariatur nihil dolorem aperiam labore culpa quae cumque, vero corrupti exercitationem velit voluptatum architecto natus voluptas"
        ]
    ];

    public static function all()
    {
        return collect( self::$blog_posts);
    }

    public static function find($slug) 
    {
        $posts = static::all();  //ambil dulu semua postnya, 
    //     $post = [];
    //         foreach ($posts as $p) {      //terus kita looping satu satu di representasikan sebagai $p
    //         if($p["slug"] === $slug) {   //kalau slag nya sama dengan yang di kirim ke parameter, 
    //             $post = $p;    //Maka masukkan postingan tsb kedalam variabel post (kalau ketemu)
    //         }
    // }  di hapus karena sudah menggunakan fungsi collection

        return $posts->firstWhere('slug', $slug);// nulis sebaris menggantikan banyak baris
            //bisa dibaca : Ambil semua $posts yang bentuknya collection lalu cari yang pertama ditemukan
            // dimana 'slug' nya sama dengan $slug

    }
}
