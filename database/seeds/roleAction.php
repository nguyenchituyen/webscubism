<?php

use Illuminate\Database\Seeder;

class roleAction extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dtb_user_roles')->insert([
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
            'role_action_id' => 17,
            'user_id' => 1,
            'role_id' => 5
        ]);
        DB::table('dtb_user_roles')->insert([
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
            'role_action_id' => 18,
            'user_id' => 1,
            'role_id' => 5
        ]);
        DB::table('dtb_user_roles')->insert([
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
            'role_action_id' => 19,
            'user_id' => 1,
            'role_id' => 5
        ]);
        DB::table('dtb_user_roles')->insert([
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
            'role_action_id' => 20,
            'user_id' => 1,
            'role_id' => 5
        ]);
        DB::table('dtb_user_roles')->insert([
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
            'role_action_id' => 21,
            'user_id' => 1,
            'role_id' => 5
        ]);
        DB::table('dtb_user_roles')->insert([
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
            'role_action_id' => 22,
            'user_id' => 1,
            'role_id' => 5
        ]);
        DB::table('dtb_user_roles')->insert([
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
            'role_action_id' => 23,
            'user_id' => 1,
            'role_id' => 5
        ]);
        DB::table('dtb_user_roles')->insert([
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
            'role_action_id' => 24,
            'user_id' => 1,
            'role_id' => 5
        ]);
        DB::table('dtb_user_roles')->insert([
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
            'role_action_id' => 9,
            'user_id' => 1,
            'role_id' => 2
        ]);
    }
}
