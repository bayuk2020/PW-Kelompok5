<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Akhelisera',
            'username' => 'akhelisera',
            'email' => 'akhelisera@gmail.com',
            'password' => bcrypt('Akhelisera')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Post::factory(20)->create();
        
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Bayu Kristianto',
            'username' => 'bayuk2020',
            'email' => 'bayuk2020@gmail.com',
            'password' => bcrypt('1234567890')
        ]);
        



        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur Pertama',
        //     'body' =>  '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe eius quis neque, itaque ad, quia nihil dolor numquam, veritatis dignissimos ab cupiditate error ea amet quasi quas praesentium alias est quisquam? Architecto necessitatibus quae laboriosam porro rerum nulla officia alias cupiditate? Inventore cupiditate quasi similique, mollitia unde quis molestiae ipsam autem illo accusamus excepturi dolore aliquid porro quisquam sunt dolorum, rerum veritatis rem libero deserunt vitae. Atque nostrum soluta quibusdam quod dignissimos sunt facere impedit reprehenderit, facilis, dolores nesciunt maxime obcaecati? Sapiente optio nulla deleniti tenetur reprehenderit voluptatum nam ab quam officiis quo error, blanditiis laudantium natus exercitationem repudiandae minus?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur hic minus voluptates nulla, qui provident eum similique eligendi placeat, minima accusantium tenetur assumenda commodi cumque voluptatibus magnam nihil facilis ipsa quisquam eius molestiae error cum atque. Harum similique corrupti nulla iusto quidem voluptas ratione quae? Amet quisquam quo quod accusamus!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur Kedua',
        //     'body' =>  '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe eius quis neque, itaque ad, quia nihil dolor numquam, veritatis dignissimos ab cupiditate error ea amet quasi quas praesentium alias est quisquam? Architecto necessitatibus quae laboriosam porro rerum nulla officia alias cupiditate? Inventore cupiditate quasi similique, mollitia unde quis molestiae ipsam autem illo accusamus excepturi dolore aliquid porro quisquam sunt dolorum, rerum veritatis rem libero deserunt vitae. Atque nostrum soluta quibusdam quod dignissimos sunt facere impedit reprehenderit, facilis, dolores nesciunt maxime obcaecati? Sapiente optio nulla deleniti tenetur reprehenderit voluptatum nam ab quam officiis quo error, blanditiis laudantium natus exercitationem repudiandae minus?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur hic minus voluptates nulla, qui provident eum similique eligendi placeat, minima accusantium tenetur assumenda commodi cumque voluptatibus magnam nihil facilis ipsa quisquam eius molestiae error cum atque. Harum similique corrupti nulla iusto quidem voluptas ratione quae? Amet quisquam quo quod accusamus!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur KETIGA',
        //     'body' =>  '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore delectus eius dicta dolore odit eligendi. Exercitationem quas ex rem fugit quibusdam, veniam illo molestias obcaecati, porro perferendis saepe at aliquid.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur hic minus voluptates nulla, qui provident eum similique eligendi placeat, minima accusantium tenetur assumenda commodi cumque voluptatibus magnam nihil facilis ipsa quisquam eius molestiae error cum atque. Harum similique corrupti nulla iusto quidem voluptas ratione quae? Amet quisquam quo quod accusamus!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, libero! Fuga quidem quae vitae adipisci optio asperiores quia dolorem distinctio perspiciatis. Ex fuga necessitatibus, minima voluptates architecto beatae voluptate accusantium laborum dolores aliquid alias pariatur sapiente esse laboriosam, aperiam quidem odio inventore totam a quo ipsum eum officia excepturi. Perferendis, eum fuga. Fugit voluptate maiores officiis optio, expedita earum unde! Porro dolor fugit maiores dolore. Sint corporis iste accusamus distinctio. Eum ducimus nam ea autem hic quas esse consequatur aliquid recusandae deleniti similique voluptates vero, dolore nesciunt maxime, nihil, nisi deserunt dolores odit atque? Hic illum error iusto in deserunt, dolor, nostrum neque iure, nam eligendi quibusdam ducimus veritatis? Velit ex nihil dolore sed autem repellendus ipsam nobis dolorum quam sunt asperiores corrupti perferendis, quasi quod soluta voluptate maiores? Ipsum repudiandae quisquam nostrum numquam aliquam? Tenetur necessitatibus quaerat doloremque voluptatum assumenda temporibus hic error deleniti laudantium commodi consequuntur dicta, numquam maxime tempora? Enim cumque consequatur, commodi perferendis aut deleniti voluptatem ab in repellat consectetur odio aperiam molestiae laborum mollitia libero.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur KEEMPAT',
        //     'body' =>  '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore delectus eius dicta dolore odit eligendi. Exercitationem quas ex rem fugit quibusdam, veniam illo molestias obcaecati, porro perferendis saepe at aliquid.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur hic minus voluptates nulla, qui provident eum similique eligendi placeat, minima accusantium tenetur assumenda commodi cumque voluptatibus magnam nihil facilis ipsa quisquam eius molestiae error cum atque. Harum similique corrupti nulla iusto quidem voluptas ratione quae? Amet quisquam quo quod accusamus!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, libero! Fuga quidem quae vitae adipisci optio asperiores quia dolorem distinctio perspiciatis. Ex fuga necessitatibus, minima voluptates architecto beatae voluptate accusantium laborum dolores aliquid alias pariatur sapiente esse laboriosam, aperiam quidem odio inventore totam a quo ipsum eum officia excepturi. Perferendis, eum fuga. Fugit voluptate maiores officiis optio, expedita earum unde! Porro dolor fugit maiores dolore. Sint corporis iste accusamus distinctio. Eum ducimus nam ea autem hic quas esse consequatur aliquid recusandae deleniti similique voluptates vero, dolore nesciunt maxime, nihil, nisi deserunt dolores odit atque? Hic illum error iusto in deserunt, dolor, nostrum neque iure, nam eligendi quibusdam ducimus veritatis? Velit ex nihil dolore sed autem repellendus ipsam nobis dolorum quam sunt asperiores corrupti perferendis, quasi quod soluta voluptate maiores? Ipsum repudiandae quisquam nostrum numquam aliquam? Tenetur necessitatibus quaerat doloremque voluptatum assumenda temporibus hic error deleniti laudantium commodi consequuntur dicta, numquam maxime tempora? Enim cumque consequatur, commodi perferendis aut deleniti voluptatem ab in repellat consectetur odio aperiam molestiae laborum mollitia libero.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
