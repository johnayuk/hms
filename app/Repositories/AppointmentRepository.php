<?php

namespace App\Repositories;

use App\Models\Appointment;
use App\Models\User;
use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;
use App\Models\Patient;
use FontLib\Table\Type\name;

class AppointmentRepository{

    public function create($data)
    {

        $user = Auth::user()->patients->first()->id;
        $appointments = new Appointment();
        $appointments->time = $data['time'];
        $appointments->service = $data['service'];
        $appointments->doctor_id = $data['doctor_id'];
        $appointments->patient_id =  $user;
        // dd($user);

        // $appointments=Appointment::create([
        //     'patient_id' => $user,
        //     'service'=>$data['service'],
        //     'doctor_id'=>$data['doctor_id'],
        //     'time'=>$data['time'],
        //     ]);

// dd($appointments);
        
        $appointments->save();
        // dd($appointments);

        // return  $appointments;

    }



    public function admin_create($data)
    {
        $appointments = new Appointment();
        $appointments->time = $data['time'];
        $appointments->service = $data['service'];
        $appointments->doctor_id = $data['doctor_id'];
        $appointments->patient_id = $data['patient_id'];
        // dd($user);

        // $appointments=Appointment::create([
        //     'patient_id' => $user,
        //     'service'=>$data['service'],
        //     'doctor_id'=>$data['doctor_id'],
        //     'time'=>$data['time'],
        //     ]);

// dd($appointments);
        
        $appointments->save();
        // dd($appointments);

        // return  $appointments;

    }

    public function update($data, $id)
    {
       

        $appointment = Appointment::where('id',$id)->firstorFail();

        // $appointment->update(request(['patient_id','doctor_id','time','service']));
        $appointment->time = $data['time'];
        $appointment->service = $data['service'];
        $appointment->doctor_id = $data['doctor_id'];
        // $appointment->patient_id =  $data['patient_id'];
        // dd($appointment);

        $appointment->save();

        return  $appointment;

    }


    public function delete($id)
    {
        $appointment = Appointment::where('id',$id)->delete();
    }

    


}