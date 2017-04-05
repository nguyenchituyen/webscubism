<?php

use Illuminate\Database\Seeder;
use App\Role;

class rolesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'Role';
        $role->description = 'Role Resources';
        $role->save();

        $user = new Role();
        $user->name = 'User';
        $user->description = 'User Resources';
        $user->save();

        $job = new Role();
        $job->name = 'Job';
        $job->description = 'Job Resources';
        $job->save();

        $job = new Role();
        $job->name = 'Contact';
        $job->description = 'Contact Resources';
        $job->save();

        $job = new Role();
        $job->name = 'ACL';
        $job->description = 'Acess Control List Management';
        $job->save();
    }
}
