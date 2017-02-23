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
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'Test',
            'email' => 'test@2ntkh.com',
            'password' => bcrypt('123456'),
            'api_token' => bcrypt('123456'),
        ]);
    }
}
