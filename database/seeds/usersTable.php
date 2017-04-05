<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class usersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'User')->first();
        $role_author = Role::where('name', 'Author')->first();
        $role_admin = Role::where('name', 'Admin')->first();

        $admin = new User();
        $admin->name = 'System Admin';
        $admin->email = 'admin@scubism.jp';
        $admin->password = bcrypt('admin');
        $admin->save();
        $admin->roles()->attach($role_admin);

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
        $author->roles()->attach($role_author);
    }
}
