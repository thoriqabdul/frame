<?php

use App\Http\Models\Role;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pub = Role::where('name', 'Publish')->first();

        $new_user = new \App\User;
        $new_user->name = "Mizan Publishing House";
        $new_user->email = "info@mizan.com";
        $new_user->role_id = $pub->id;
        $new_user->link = 'https://mizanpublishing.com/profile';
        $new_user->password =bcrypt('secret123');
        $new_user->save();

        $new_user = new \App\User;
        $new_user->name = "Muffin Graphics";
        $new_user->email = "muffin.graphics@gmail.com";
        $new_user->role_id = $pub->id;
        $new_user->link = 'https://muffingraphics.com/';
        $new_user->password =bcrypt('secret123');
        $new_user->save();

        $new_user = new \App\User;
        $new_user->name = "Bentang Pustaka";
        $new_user->email = "redaksi@bentangpustaka.com";
        $new_user->role_id = $pub->id;
        $new_user->link = 'https://bentangpustaka.com/our-story/';
        $new_user->password =bcrypt('secret123');
        $new_user->save();

        $new_user = new \App\User;
        $new_user->name = "Noura Publishing";
        $new_user->email = "redaksi@noura.mizan.com";
        $new_user->role_id = $pub->id;
        $new_user->link = 'https://nourabooks.co.id/tentang-kami/';
        $new_user->password =bcrypt('secret123');
        $new_user->save();
    }
}
