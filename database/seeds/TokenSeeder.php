<?php

use Illuminate\Database\Seeder;

class TokenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oauth_clients')->insert([
            [
                'user_id'                => 1,
                'name'                   => "Laravel Personal Access Client",
                'secret'                 => '23SQFZzHDIiWA4daGQte5bsmejVtb0bXubudkelL',
                'redirect'               => 'http://localhost',
                'personal_access_client' => '1',
                'password_client'        => '0',
                'revoked'                => '0'
            ],
            [
                'user_id'                => 1,
                'name'                   => "Laravel Password Grant Client",
                'secret'                 => '6OAb98kLrYcFo4Km1WZOjjswTQyC220MUDDWd0Ux',
                'redirect'               => 'http://localhost',
                'personal_access_client' => '0',
                'password_client'        => '1',
                'revoked'                => '0'
            ]   
        ]);
    }
}
