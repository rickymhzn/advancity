<?php

use Illuminate\Database\Seeder;

class CounterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Counter::create([
            'background'=>'',
            'Title'=>'Counter',
            'subtitle'=>'This is counter section.',
            'name1'=>'Institutions',
            'value1'=>'1000',
            'name2'=>'Countries',
            'value2'=>'100',
            'name3'=>'Courses',
            'value3'=>'500',
            'name4'=>'Students',
            'value4'=>'200000',
        ]);
    }
}
