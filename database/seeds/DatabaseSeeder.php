<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // call the seeders
        $this->call(UsersTableSeeder::class);
        $this->call(PostTableSeeder::class);
        $this->call(RoleTableSeeder::class);
    }
}
