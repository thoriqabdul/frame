<?php

use Illuminate\Database\Seeder;
use App\Http\Models\Role;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new = new Role();
        $new->name = "Super Admin";
        $new->save();

        $new = new Role();
        $new->name = "Admin";
        $new->save();

        $new = new Role();
        $new->name = "Finance";
        $new->save();
    }
}
