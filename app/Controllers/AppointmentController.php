<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Doctor;
use App\Requests\AppointmentRequest;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;
use Validator;
use App\Repositories\AppointmentRepository;

class AppointmentController extends Controller
{

    protected $appointmentRepository;
    
    public function __construct(appointmentRepository $appointmentRepository)
    {
       $this->appointmentRepository = $appointmentRepository;
   
    }

    public function createAppointment(AppointmentRequest $request)
    {

        $validated = $request->validated();

        $appointment = $this->appointmentRepository->admin_create($request);

      
        return redirect('/view_bookings')->withErrors(['status' => 'Appointment successfully schedule']);

    }



    public function userAppointment(AppointmentRequest $request)
    {

        $validated = $request->validated();

        $appointment = $this->appointmentRepository->create($request);

      
        return redirect('/homepage')->withErrors(['status' => 'Appointment successfully schedule']);

    }

    public function updateAppointment(AppointmentRequest $request,$id)
    {
        $validated = $request->validated();

        $appointment = $this->appointmentRepository->update($request,$id);

        // dd($appointment);

        return redirect('/view_bookings')->withErrors(['status' => 'Appointment successfully updated']);
    }

    public function deleteAppointment($id)
    {
        $appointment = $this->appointmentRepository->delete($id);

        return redirect('/view_bookings')->withErrors(['status' => 'Appointment deleted successfully']);
    }


   

}
