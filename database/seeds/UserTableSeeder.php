<?php

use Illuminate\Database\Seeder;
use ORM\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Ismael Haytam',
            'gender' => 'm'
        ]);
        factory(User::class, 99)->create();
    }
}
