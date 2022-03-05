<?php

namespace App\Repositories;


use App\Models\User;
use App\Models\Appoinment;
use App\Models\Doctor;
use App\Models\Patient;
use Intervention\Image\Facades\Image;
use Symfony\Component\HttpFoundation\Request;

use Illuminate\Support\Facades\Auth;

class UserRepository{

    public function create($data)
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
            'role' => 'patient',
        ]);
        $patient=Patient::create([
            'user_id' => $user1->id,
            'fullname' => $data['name'],
            'gender'=>$data['Gender'],
            'dob'=>$data['dob'],
            'address1'=>$data['Address1'],
            'city'=>$data['City'],
            'phone'=>$data['phone-number'],
            'email' => $data['email'],
            'username' => $data['Username'],
            'password' => $data['password'],
            'image' => $filename,


            ]);
            return $user1;
        
    }


    
    public function update($request,$id)
    {
    // $doctor = Doctor::where('id',$doctorId)->firstorFail()
    // ->update(request(['first_name','last_name','email','time','specialization','department_id']));

  
    // $where = array('id' => $doctorId);

    $user = User::where('id',$id)->first();

    $image   = $request->file('image');
        $filename   = $image->getClientOriginalName();
        //Fullsize
        $image->move('full/',$filename);

        $image_resize = Image::make('full/'.$filename);

        $image_resize->fit(300, 300);

        $image_resize->save();


        $user->name = $request->name;
        $user->email = $request->email;
        $user->image = $filename;
// dd($user);
    $user->save();
    return  $user;

    }


    public function delete($id)
    {
        $user = User::where('id',$id)->delete();
    }

}