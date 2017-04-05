<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'User')->first();
        $role_job = Role::where('name', 'Job')->first();
        $role_acl = Role::where('name', 'ACL')->first();

        $admin = new User();
        $admin->name = 'System Admin';
        $admin->email = 'admin@scubism.jp';
        $admin->password = bcrypt('admin');
        $admin->save();
        $admin->roles()->attach($role_acl);

        $user = new User();
        $user->name = 'Customer';
        $user->email = 'customer@scubism.jp';
        $user->password = bcrypt('customer');
        $user->save();
        $user->roles()->attach($role_user);

        $author = new User();
        $author->name = 'Recruitment';
        $author->email = 'recruit@scubism.jp';
        $author->password = bcrypt('recruit');
        $author->save();
        $author->roles()->attach($role_job);
    }
}