<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::where('email', 'admin@s-cubism.jp')->delete();
        $user = new User;
        $user->name = 'admin';
        $user->email = 'admin@s-cubism.jp';
        $user->password = bcrypt('123456');
        $user->save();
    }
}
