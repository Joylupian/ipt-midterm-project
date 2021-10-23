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
                'lname' => 'Lupian',
                'fname' => 'Joy',
                'address' => 'Bohol',
                'phone' => '09245125',
                'email' => 'Joy@email.com',
                'password' => bcrypt('Joy')
            ],
            [
                'id' => 2,
                'lname' => 'Tiktokerist',
                'fname' => 'Joy',
                'address' => 'Cadana',
                'phone' => '02144124',
                'email' => 'Joy@email.com',
                'password' => bcrypt('Joy')
            ],
            [
                'id' => 3,
                'lname' => 'Michel',
                'fname' => 'Mitty',
                'address' => 'USA',
                'phone' => '12515',
                'email' => 'Joy@email.com',
                'password' => bcrypt('Joy')
            ],
        ];
        foreach ($user_list as $user) {
            \App\User::create($user);

        }
    }
}
