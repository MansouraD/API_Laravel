<?php

use Illuminate\Database\Seeder;
use App\Comptes;

class ComptesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Comptes::class, 10)->create();
    }
}
