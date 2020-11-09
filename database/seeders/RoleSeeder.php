<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::create(['name'=>'Admin'])->allowTo('manage_users')->allowTo('create_post');
        Role::create(['name'=>'Moderator'])->allowTo('create_post');
        Role::create(['name'=>'Creator'])->allowTo('create_post');
        Role::create(['name'=>'Guest'])->allowTo('create_post');

    }
}
