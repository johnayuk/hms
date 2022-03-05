<?php

namespace App\Repositories;

use App\Models\Doctor;
use App\Models\User;
use Intervention\Image\Facades\Image;

class DoctorRepository
{


    public function createDoctor($data)
    {

        $image   = $data->file('image');
        $filename   = $image->getClientOriginalName();
        //Fullsize
        $image->move('full/',$filename);

        $image_resize = Image::make('full/'.$filename);

        $image_resize->fit(300, 300);

        $image_resize->save();


        $user1= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'role' => 'doctor',
            'image' => $filename,           
        ]);
        $patient=Doctor::create([
            'user_id' => $user1->id,
            // 'fullname' => $user1->name,
            'gender'=>$data['Gender'],
            'dob'=>$data['dob'],
            'address'=>$data['Address'],
            'city'=>$data['City'],
            'phone_number'=>$data['phone_number'],
            // 'email' => $user1->email,
            // 'password' => $user1->password,
            'employed' => $data['employed'],
            'specialization' => $data['specialization'],
            'department_id' => $data['department_id'],
            'salary' => $data['salary'],
            ]);
            return $user1;

        // $doctor = new Doctor();
        // $doctor->age= $request['age'];
        // $doctor->salary = $request['salary'];
        // $doctor->address = $request['address'];
        // $doctor->specialization = $request['specialization'];
        // $doctor->dateEmployed = $request['dateEmployed'];
        // $doctor->department_id = $request['department_id'];
        // $doctor->user_id = $request['user_id'];
        // $doctor->city = $request['city'];
        // $doctor->country = $request['country'];
        // $doctor->postal_code = $request['postal_code'];

       

        //         $doctor->save();
        //         return $doctor;
    }

    public function update($id)
    {

    //     $user1 = User::where('id',$id)->firstorFail()
    //     ->update(request([
    //         'name',
    //         'email',
    //     ]));

    // $doctor = Doctor::where('id',$id)->firstorFail()
    // ->update(request([
    //     'fullname' => $user1->name,
    //     'gender',
    //     'dob',
    //     'address',
    //     'city',
    //     'phone_number'


    //     'user_id' => $user1->id,
    //         'fullname' => $user1->name,
    //         'gender'=>$data['Gender'],
    //         'dob'=>$data['dob'],
    //         'address'=>$data['Address'],
    //         'city'=>$data['City'],
    //         'phone_number'=>$data['phone_number'],
    //         'email' => $user1->email,
    //         'password' => $user1->password,
    //         'employed' => $data['employed'],
    //         'specialization' => $data['specialization'],
    //         'department_id' => $data['department_id'],
    //         'salary' => $data['salary'],
    // ]));



    // $user1 = User::where('id',$id)->first();
    // $user1->name = request('name');
    // $user1->email = request('email');

    // $user1->save();

  

  
    // $where = array('id' => $doctorId);
    $doctor = Doctor::where('id',$id)->first();

    
    $doctor->gender = request('gender');
    $doctor->address = request('address');
    $doctor->specialization = request('specialization');
    $doctor->department_id = request('department_id');
    $doctor->employed = request('employed');
    $doctor->dob = request('dob');
    $doctor->phone_number = request('phone_number');
    $doctor->city = request('city');
    $doctor->salary = request('salary');

// dd($doctor);

    // $user1->save();
    $doctor->save();


    return $doctor;

    }

    public function delete($id)
    {
        $appointment = Doctor::where('id',$id)->delete();
    }

}