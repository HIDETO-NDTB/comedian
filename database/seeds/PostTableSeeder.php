<?php

use Illuminate\Database\Seeder;
use App\post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Post::create([
            'id' => '1',
            'name' => 'comedian-1',
            'slug' => 'comedian-1',
            'image' => '1584513114download-1.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto excepturi in temporibus natus laboriosam mollitia architecto ullam assumenda cumque incidunt omnis',
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto excepturi in temporibus natus laboriosam mollitia architecto ullam assumenda cumque incidunt omnis, dolorum aliquid aliquam obcaecati saepe repellat iste illum modi.',
        ]);

        \App\Post::create([
            'id' => '2',
            'name' => 'comedian-2',
            'slug' => 'comedian-2',
            'image' => '1584513114download-1.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto excepturi in temporibus natus laboriosam mollitia architecto ullam assumenda cumque incidunt omnis',
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto excepturi in temporibus natus laboriosam mollitia architecto ullam assumenda cumque incidunt omnis, dolorum aliquid aliquam obcaecati saepe repellat iste illum modi.',
        ]);
    
    }
}
