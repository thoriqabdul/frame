<?php

use App\Http\Models\Role;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::where('name', 'Super Admin')->first();
        $pub = Role::where('name', 'Publish')->first();

        $new_user = new \App\User;
        $new_user->name = "Super Admin";
        $new_user->email = "Admin@gmail.com";
        $new_user->role_id = $role->id;
        $new_user->password =bcrypt('secret');
        $new_user->save();

        $new_user = new \App\User;
        $new_user->name = "Publish";
        $new_user->email = "test@gmail.com";
        $new_user->role_id = $pub->id;
        $new_user->password =bcrypt('secret');
        $new_user->save();
    }
}
