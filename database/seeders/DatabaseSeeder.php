<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Eri Ardiansyah',
            'username' => 'eri',
            'email' => 'eri@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::factory(3)->create();

        // User::create([
        //     'name' => 'Ardian',
        //     'email' => 'ardian@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

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
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, quia?',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt quas maiores facere porro impedit libero exercitationem praesentium aspernatur ipsam eum consequatur et consectetur similique ullam animi, rerum nihil, quod veritatis! Vel laborum porro consequuntur dolorem, neque hic repellendus, molestiae ab accusantium obcaecati ipsa facilis. Autem, magni. Expedita ut corporis, eius nemo, animi voluptatem ab voluptatibus sit quam deserunt quas ipsam labore dignissimos possimus tenetur aspernatur! Voluptatum eos exercitationem, voluptatem debitis neque maxime aut magnam impedit quasi fuga! Dignissimos consequuntur debitis neque beatae mollitia maiores optio cum, pariatur tempora quae hic veritatis architecto veniam odit, repellendus voluptas, aliquam vitae similique aut.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, quia?',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt quas maiores facere porro impedit libero exercitationem praesentium aspernatur ipsam eum consequatur et consectetur similique ullam animi, rerum nihil, quod veritatis! Vel laborum porro consequuntur dolorem, neque hic repellendus, molestiae ab accusantium obcaecati ipsa facilis. Autem, magni. Expedita ut corporis, eius nemo, animi voluptatem ab voluptatibus sit quam deserunt quas ipsam labore dignissimos possimus tenetur aspernatur! Voluptatum eos exercitationem, voluptatem debitis neque maxime aut magnam impedit quasi fuga! Dignissimos consequuntur debitis neque beatae mollitia maiores optio cum, pariatur tempora quae hic veritatis architecto veniam odit, repellendus voluptas, aliquam vitae similique aut.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, quia?',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt quas maiores facere porro impedit libero exercitationem praesentium aspernatur ipsam eum consequatur et consectetur similique ullam animi, rerum nihil, quod veritatis! Vel laborum porro consequuntur dolorem, neque hic repellendus, molestiae ab accusantium obcaecati ipsa facilis. Autem, magni. Expedita ut corporis, eius nemo, animi voluptatem ab voluptatibus sit quam deserunt quas ipsam labore dignissimos possimus tenetur aspernatur! Voluptatum eos exercitationem, voluptatem debitis neque maxime aut magnam impedit quasi fuga! Dignissimos consequuntur debitis neque beatae mollitia maiores optio cum, pariatur tempora quae hic veritatis architecto veniam odit, repellendus voluptas, aliquam vitae similique aut.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, quia?',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt quas maiores facere porro impedit libero exercitationem praesentium aspernatur ipsam eum consequatur et consectetur similique ullam animi, rerum nihil, quod veritatis! Vel laborum porro consequuntur dolorem, neque hic repellendus, molestiae ab accusantium obcaecati ipsa facilis. Autem, magni. Expedita ut corporis, eius nemo, animi voluptatem ab voluptatibus sit quam deserunt quas ipsam labore dignissimos possimus tenetur aspernatur! Voluptatum eos exercitationem, voluptatem debitis neque maxime aut magnam impedit quasi fuga! Dignissimos consequuntur debitis neque beatae mollitia maiores optio cum, pariatur tempora quae hic veritatis architecto veniam odit, repellendus voluptas, aliquam vitae similique aut.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);


    }
}
