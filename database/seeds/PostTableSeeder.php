<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('posts')->insert([
        //     'post_author'=>Str::random(6),
        //     'post_date'=>'2019-02-27',
        //     'post_content'=>Str::random(15),
        //     'post_title'=>Str::random(8),
        //     'post_name'=>Str::random(8),
        //     'post_type'=>Str::random(8),
        // ]);
    }
}
