<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user= App\User::create([
            'name' => 'Ricky Maharjan',
            'email' => 'maharjanricky@gmail.com',
            'password' => Hash::make('password'),
            'admin' => 1,
        ]);

        App\Models\Profile::create([
            'user_id'=>$user->id,
             'avatar'=>'link of image',
             'about'=>'This is about the user',
             'facebook'=>'facebook.com',
             'youtube'=>'youtube.com'
         ]);
     
    }
}
