<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('travels')->insert([    
            'Name' => 'João Silva',
            'DateFrom' => '2017-10-27', 
            'DateTo' => '2016-10-29', 
            'Origin' => 'Aeroporto de Belo Horizonte/Pampulha - Carlos Drummond de Andrade', 
            'Destination' => 'Budapest Liszt Ferenc Nemzetközi Repülőtér',
            'NumberPeople' => '6',
        ]);
    }
}