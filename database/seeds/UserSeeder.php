<?php

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
        $user_list = [
            [
                'id' => 1,
                'lname' => 'Peligro',
                'fname' => 'Vincent',
                'address' => 'Bohol',
                'phone' => '09245125',
                'email' => 'Vincent@email.com',
                'password' => bcrypt('Vincent')
            ],
            [
                'id' => 2,
                'lname' => 'Tiktokerist',
                'fname' => 'Vincent',
                'address' => 'Cadana',
                'phone' => '02144124',
                'email' => 'Vincent@email.com',
                'password' => bcrypt('Vincent')
            ],
            [
                'id' => 3,
                'lname' => 'Michel',
                'fname' => 'Mitty',
                'address' => 'USA',
                'phone' => '12515',
                'email' => 'Vincent@email.com',
                'password' => bcrypt('Vincent')
            ],
        ];
        foreach ($user_list as $user) {
            \App\User::create($user);

        }
    }
}
