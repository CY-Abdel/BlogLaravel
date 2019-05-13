<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // premier test
        // utilser la base de donner sans les Model
        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10) . '@gmail.com',
        //     'password' => bcrypt('motDePasse')
        // ]);

        // 2eme test avec PostFactory on remplace le code du 1er test avec celui-ci
        factory(App\User::class, 10)->create()->each(function($user) {
            $user->posts()->save(factory(App\Post::class)->create());
        });

        //création d'un utilisateur pour lui donner le role admin
        DB::table('users')->insert([
            'name' => 'youva',
            'email' => 'chougar@gmail.com',
            'password' => bcrypt('a123456')
        ]);

    }
}
