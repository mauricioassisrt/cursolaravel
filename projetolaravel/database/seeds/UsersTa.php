<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' =>'Mauricio de Assis',
            'email'=>'mauricioassisrt@gmail.com',
            'password'=> bcrypt('123456'),
            
            
        ]);
    }
}
