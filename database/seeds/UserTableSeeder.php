<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();

        $user = new User();
        $user->name = 'User';
        $user->email = 'user@beebet.email';
        $user->password = bcrypt('user1234');
        $user->save();
        $user->roles()->attach($role_user);


        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@beenet.email.com';
        $user->password = bcrypt('admin1234');
        $user->save();
        $user->roles()->attach($role_admin);

    }
}
