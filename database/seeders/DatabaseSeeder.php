<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name' => 'Anybody',
            'username' => 'Anybody',
            'email' => 'mranybody@gmail.com',
            'password' => bcrypt(123456)
        ]);

        // User::create([
        //     'name' => 'Nobody',
        //     'email' => 'misternobody@gmail.com',
        //     'password' => bcrypt(123456)
        // ]);


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


        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore maiores labore, nemo ullam ',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore maiores labore, nemo ullam sint provident cumque unde architecto obcaecati modi vitae deleniti dicta doloribus hic consectetur veritatis aliquid non? Non unde repudiandae quisquam cum temporibus! Sequi cumque architecto rerum vel alias aspernatur, in tempore enim dicta ea, reiciendis voluptas dolorum eligendi laboriosam maxime nemo fugiat aut ratione? Quidem pariatur libero quod ipsa molestiae nesciunt esse incidunt excepturi velit dignissimos, quos similique, vero, unde cupiditate mollitia sunt illum iste ratione? Optio explicabo voluptate modi reiciendis, velit repudiandae! Quia laudantium iure deserunt veniam odio, quis voluptatum repudiandae reprehenderit nulla? Eligendi, nemo ducimus.',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore maiores labore, nemo ullam ',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore maiores labore, nemo ullam sint provident cumque unde architecto obcaecati modi vitae deleniti dicta doloribus hic consectetur veritatis aliquid non? Non unde repudiandae quisquam cum temporibus! Sequi cumque architecto rerum vel alias aspernatur, in tempore enim dicta ea, reiciendis voluptas dolorum eligendi laboriosam maxime nemo fugiat aut ratione? Quidem pariatur libero quod ipsa molestiae nesciunt esse incidunt excepturi velit dignissimos, quos similique, vero, unde cupiditate mollitia sunt illum iste ratione? Optio explicabo voluptate modi reiciendis, velit repudiandae! Quia laudantium iure deserunt veniam odio, quis voluptatum repudiandae reprehenderit nulla? Eligendi, nemo ducimus.',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore maiores labore, nemo ullam ',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore maiores labore, nemo ullam sint provident cumque unde architecto obcaecati modi vitae deleniti dicta doloribus hic consectetur veritatis aliquid non? Non unde repudiandae quisquam cum temporibus! Sequi cumque architecto rerum vel alias aspernatur, in tempore enim dicta ea, reiciendis voluptas dolorum eligendi laboriosam maxime nemo fugiat aut ratione? Quidem pariatur libero quod ipsa molestiae nesciunt esse incidunt excepturi velit dignissimos, quos similique, vero, unde cupiditate mollitia sunt illum iste ratione? Optio explicabo voluptate modi reiciendis, velit repudiandae! Quia laudantium iure deserunt veniam odio, quis voluptatum repudiandae reprehenderit nulla? Eligendi, nemo ducimus.',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore maiores labore, nemo ullam ',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore maiores labore, nemo ullam sint provident cumque unde architecto obcaecati modi vitae deleniti dicta doloribus hic consectetur veritatis aliquid non? Non unde repudiandae quisquam cum temporibus! Sequi cumque architecto rerum vel alias aspernatur, in tempore enim dicta ea, reiciendis voluptas dolorum eligendi laboriosam maxime nemo fugiat aut ratione? Quidem pariatur libero quod ipsa molestiae nesciunt esse incidunt excepturi velit dignissimos, quos similique, vero, unde cupiditate mollitia sunt illum iste ratione? Optio explicabo voluptate modi reiciendis, velit repudiandae! Quia laudantium iure deserunt veniam odio, quis voluptatum repudiandae reprehenderit nulla? Eligendi, nemo ducimus.',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);

    }
}
