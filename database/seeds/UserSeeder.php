<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'     => 'Romberries',
            'email'    => 'salvador@gmail.com',
            'password' => '2545'
        ]);

        User::create([
            'name'     => 'Romberries 2',
            'email'    => 'romberries@gmail.com',
            'password' => '5060'
        ]);
    }
}
