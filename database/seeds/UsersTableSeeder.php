<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\DB::table('users')->truncate();
        factory(\Atende\MOdels\User::class, 100)->create();
    }
}
