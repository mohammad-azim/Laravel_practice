<?php

use Illuminate\Database\Seeder;
use App\Name; 

class NameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Name::class, 20)->create();
    }
}
