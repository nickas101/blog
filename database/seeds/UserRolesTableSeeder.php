<?php

use Illuminate\Database\Seeder;
use App\UserRole;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['name' => 'Admin'],
            ['name' => 'User'],
        ];

        DB::table('user_roles')->delete();

        foreach ($roles as $role){
            UserRole::create($role);
        }
    }
}
