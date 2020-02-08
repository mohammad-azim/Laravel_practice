<?php

use Illuminate\Database\Seeder;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);

        $this->call(TokenSeeder::class);
        
        $this->call(TestSeeder::class);

        $this->call(NameSeeder::class);
    }
}
