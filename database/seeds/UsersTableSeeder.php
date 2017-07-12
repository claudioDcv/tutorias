<?php

use Illuminate\Database\Seeder;
use \HttpOz\Roles\Models\Role;
use \App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $director = Role::findBySlug('director');
      $alumno = Role::findBySlug('alumno');
      $secretaria = Role::findBySlug('secretaria');
      $inspector = Role::findBySlug('inspector');

      $dir1 = User::create([
        'name' => 'Oscar Mwanandimai',
        'email' => 'oscar@github.com',
        'password' => bcrypt('1234')
      ]);

      $alum = User::create([
          'name' => 'John Doe',
          'email' => 'john@github.com',
          'password' => bcrypt('1234')
      ]);

      $secre = User::create([
          'name' => 'Juanita Parra',
          'email' => 'juanita@gmail.com',
          'password' => bcrypt('1234')
      ]);

      $inspec = User::create([
          'name' => 'Gabriel Aguilar',
          'email' => 'g.aguilar@gmail.com',
          'password' => bcrypt('1234')
      ]);


      $dir1->attachRole($director);
      $alum->attachRole($alumno);
      $secre->attachRole($secretaria);
      $inspec->attachRole($inspector);
    }
}
