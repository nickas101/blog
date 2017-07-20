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
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@mail.com',
                'password' => bcrypt('123456'),
                'user_role_id' => 1
            ]
        ];

        DB::table('users')->delete();

        foreach ($users as $user){
            User::create($user);
        }
    }
}
