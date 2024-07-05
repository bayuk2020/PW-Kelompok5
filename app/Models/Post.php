<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable; 


class Post extends Model
{
    use HasFactory;
    use Sluggable;

    // protected $fillable = ['title','excerpt','body'];

    protected $guarded = ['id'];
    protected $with = ['category','author'];


    //Cara 1
    // public function scopeFilter($query)
    // {
    //     if(request('search')){
    //         $query->where('title', 'like', '%' . request('search') . '%')
    //                 ->orWhere('body', 'like', '%' . request('search') . '%');
    //     }
    // }


    //Cara 2
    // public function scopeFilter($query, array $filters)
    // {
    //     if(isset($filters['search']) ? $filters['search'] : false){
    //       return $query->where('title', 'like', '%' . $filters['search'] . '%')
    //                   ->orWhere('body', 'like', '%' . $filters['search'] . '%');
    //     }
    // }

    //Cara 3
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like', '%' . $search . '%')
                        ->orWhere('body', 'like', '%' . $search . '%');
        });
        
        //melakukan join table category :
        //mencari postingan yang sesuai dengan kriteria yang di cari, tapi dia juga merupakan bagian dari category
        //intinya, menggunakan search tapi filter berdasarkan category
        //menit 29:50
        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            });
        });
        //kita punya sebuah method yang namanya whereHas
        //Kalau kita punya $query->whereHas() dimana relationship ini punya relation apa
        //Kalau kita memanggil category, itu artinya kita memakai relationship belongsTo (1 Category dimiliki 1 post)
        //$query->whereHas('category') berarti query nya punya relationship dengan category

        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn($query) =>
                $query->where('username', $author)
            )
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
