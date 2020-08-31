<?php

use Illuminate\Database\Seeder;
use App\Clients;


class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Clients::class, 10)->create();
    
    }
}
