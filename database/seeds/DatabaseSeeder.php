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
        // $this->call(UsersTableSeeder::class);
        $this->call(UserRolesSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(AsignatureSeeder::class);
        $this->call(ProfesorSeeder::class);
        $this->call(InfoAlumnoSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(TutoriaSeeder::class);
    }
}
