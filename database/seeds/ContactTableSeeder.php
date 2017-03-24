<?php

use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++){
            DB::table('contacts')->insert([
                'name' => 'user'.str_random(10),
                'email' => 'user'.str_random(3).'@gmail.com',
                'message' => str_random(20),
            ]);
        }
    }
}
