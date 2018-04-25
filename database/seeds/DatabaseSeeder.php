<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->call(UserTableSeeder::class);
        $this->call(SystemsTableSeeder::class);
        $this->call(PlantsTableSeeder::class);
        $this->call(NotesTableSeeder::class);
        $this->call(PlantTypesTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
    }
}
