<?php


use Illuminate\Database\Seeder;
use App\Operations;

class OperationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Operations::class, 10)->create();
        
    }
}
