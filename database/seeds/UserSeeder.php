<?php

use App\Models\User;
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
        
        User::find(1)->forceDelete();
        User::create(array(
            'id'       =>  1,
            'name'     =>  'Test User',
            'email'    =>  'test@test.com',
            'password' =>  bcrypt('testpass'),
        ));
        
        factory(User::class, 20)->create();
    }
}
