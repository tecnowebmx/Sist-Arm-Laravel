<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        factory(ARM\User::class)->create([
            'name' => 'Gustavo Reyes',
            'email' => 'gustavo@tecnoweb.mx',
            'username' => 'Gustavo',
            'type' => 'admin',
            'password' => bcrypt('tecnoweb'),
            'status' => 1

        ]);

        factory(ARM\User::class, 50)->create();
    }
}
