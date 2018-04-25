<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Fillie',
            'systemID' => 1,
            'email' => 'fill@fill.com',
            'imageFileName' => 'image.jpg',
            'password' => bcrypt('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Dude',
            'systemID' => 2,
            'email' => 'dude@dude.com',
            'imageFileName' => 'dude.jpg',
            'password' => bcrypt('dudedude'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
