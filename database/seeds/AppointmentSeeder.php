<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'case_type'=> 'critical',
            'room' => 'Room4 ICU',
            'patient_id' => 'a',
            'doctor_id'=>'a',

        ]);
    }
}
