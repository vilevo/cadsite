<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $authorRole = Role::where('name', 'author')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = user::create([
            'name' => 'Admin User',
            'email' => 'devbusiness20@gmail.com',
            'password' => Hash::make('azerty123')
        ]);

        $author = user::create([
            'name' => 'Author User',
            'email' => 'author@gmail.com',
            'password' => Hash::make('azerty123')
        ]);

        $user = user::create([
            'name' => 'Generic User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('azerty123')
        ]);

        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $user->roles()->attach($userRole);
    }
}
