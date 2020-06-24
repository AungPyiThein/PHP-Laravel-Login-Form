<?php

use Illuminate\Database\Seeder;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'               =>  'Aung Pyi Thein',
            'email'              =>  'aungpyaethein007@gmail.com',
            'password'           =>  Hash::make('password'),
            'remember_token'     =>  str_random(10)
            ]);
    }
}
