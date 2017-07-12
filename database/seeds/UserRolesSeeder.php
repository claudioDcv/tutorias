<?php

use Illuminate\Database\Seeder;
use \HttpOz\Roles\Models\Role;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Role::create([
        'name' => 'Director',
        'slug' => 'director',
        'description' => 'director', // optional
        'group' => 'default' // optional, set as 'default' by default
      ]);

      Role::create([
        'name' => 'Inspector',
        'slug' => 'inspector',
        'description' => 'inspector', // optional
        'group' => 'default' // optional, set as 'default' by default
      ]);

      Role::create([
        'name' => 'Secretaria',
        'slug' => 'secretaria',
        'description' => 'secretaria', // optional
        'group' => 'default' // optional, set as 'default' by default
      ]);

      Role::create([
        'name' => 'Alumno',
        'slug' => 'alumno',
        'description' => 'Alumno', // optional
        'group' => 'default' // optional, set as 'default' by default
      ]);
    }
}
