<?php

use Illuminate\Database\Seeder;

class createUserRoleAction extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dtb_roles_action')->insert([
            'controller' => 'Role',
            'action' => 'index',
            'type' => 0,
            'role_id' => 1
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'Role',
            'action' => 'show',
            'type' => 0,
            'role_id' => 1
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'Role',
            'action' => 'create',
            'type' => 1,
            'role_id' => 1
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'Role',
            'action' => 'edit',
            'type' => 2,
            'role_id' => 1
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'Role',
            'action' => 'update',
            'type' => 2,
            'role_id' => 1
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'Role',
            'action' => 'store',
            'type' => 2,
            'role_id' => 1
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'Role',
            'action' => 'destroy',
            'type' => 3,
            'role_id' => 1
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'Role',
            'action' => 'search',
            'type' => 0,
            'role_id' => 1
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'User',
            'action' => 'index',
            'type' => 0,
            'role_id' => 2
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'User',
            'action' => 'show',
            'type' => 0,
            'role_id' => 2
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'User',
            'action' => 'create',
            'type' => 1,
            'role_id' => 2
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'User',
            'action' => 'edit',
            'type' => 2,
            'role_id' => 2
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'User',
            'action' => 'update',
            'type' => 2,
            'role_id' => 2
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'User',
            'action' => 'destroy',
            'type' => 3,
            'role_id' => 2
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'User',
            'action' => 'search',
            'type' => 0,
            'role_id' => 2
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'User',
            'action' => 'store',
            'type' => 2,
            'role_id' => 2
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'ACL',
            'action' => 'index',
            'type' => 0,
            'role_id' => 5
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'ACL',
            'action' => 'show',
            'type' => 0,
            'role_id' => 5
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'ACL',
            'action' => 'create',
            'type' => 1,
            'role_id' => 5
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'ACL',
            'action' => 'edit',
            'type' => 2,
            'role_id' => 5
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'ACL',
            'action' => 'update',
            'type' => 2,
            'role_id' => 5
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'ACL',
            'action' => 'destroy',
            'type' => 3,
            'role_id' => 5
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'ACL',
            'action' => 'search',
            'type' => 0,
            'role_id' => 5
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'ACL',
            'action' => 'store',
            'type' => 0,
            'role_id' => 5
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'Job',
            'action' => 'index',
            'type' => 0,
            'role_id' => 3
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'Job',
            'action' => 'show',
            'type' => 0,
            'role_id' => 3
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'Job',
            'action' => 'create',
            'type' => 1,
            'role_id' => 3
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'Job',
            'action' => 'edit',
            'type' => 2,
            'role_id' => 3
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'Job',
            'action' => 'update',
            'type' => 2,
            'role_id' => 3
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'Job',
            'action' => 'store',
            'type' => 0,
            'role_id' => 3
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'Job',
            'action' => 'destroy',
            'type' => 3,
            'role_id' => 3
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'Job',
            'action' => 'search',
            'type' => 0,
            'role_id' => 3
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'Contact',
            'action' => 'index',
            'type' => 0,
            'role_id' => 4
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'Contact',
            'action' => 'show',
            'type' => 0,
            'role_id' => 4
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'Contact',
            'action' => 'create',
            'type' => 1,
            'role_id' => 4
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'Contact',
            'action' => 'edit',
            'type' => 2,
            'role_id' => 4
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'Contact',
            'action' => 'update',
            'type' => 2,
            'role_id' => 4
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'Contact',
            'action' => 'destroy',
            'type' => 3,
            'role_id' => 4
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'Contact',
            'action' => 'search',
            'type' => 0,
            'role_id' => 4
        ]);
        DB::table('dtb_roles_action')->insert([
            'controller' => 'Contact',
            'action' => 'store',
            'type' => 2,
            'role_id' => 4
        ]);
    }
}
