<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['title'=>'Tips Cepat Jago','content'=>'lorem ipsum'],
            ['title'=>'Haruskah Menunda Immo','content'=>'lorem ipsum'],
            ['title'=>'Membangun Visi Misi Kemenangan','content'=>'lorem ipsum']
        ];
        DB::table('posts')->insert($posts);
    }
}
