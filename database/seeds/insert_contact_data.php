<?php
require_once 'vendor\autoload.php';
use Illuminate\Database\Seeder;

class insert_contact_data extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i = 0; $i<20; $i++) {
            DB::table('dtb_contacts')->insert([
                'name' => $faker->name,
                'email' => $faker->unique->email,
                'message' => $faker->text,
                'del_flg' => 0,
                'status' => 0,
            ]);
        }
    }
}
