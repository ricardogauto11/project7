<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ricardo',
            'email' => "ricardogauto11@gmail.com",
            'password' => bcrypt('project7')
        ]);

        factory(User::class, 10)->create();
    }
}
