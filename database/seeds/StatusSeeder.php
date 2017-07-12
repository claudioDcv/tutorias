<?php

use Illuminate\Database\Seeder;
use \App\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
          'name' => 'confirmada',
        ]);
        Status::create([
          'name' => 'anulada',
        ]);
        Status::create([
          'name' => 'perdida',
        ]);
        Status::create([
          'name' => 'realizada',
        ]);
    }
}
