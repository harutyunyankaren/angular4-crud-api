<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::insert([
           [
               'name' => 'user1',
               'username' => 'username1',
               'email' => 'user1@mail.ru'
           ],
            [
                'name' => 'user2',
                'username' => 'username2',
                'email' => 'user222@mail.ru'
            ],
            [
                'name' => 'user33',
                'username' => 'username33',
                'email' => 'user333@mail.ru'
            ],
            [
                'name' => 'user444',
                'username' => 'username444',
                'email' => 'user444@mail.ru'
            ]
        ]);
    }
}
