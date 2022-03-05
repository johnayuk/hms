<?php

use App\AdminModel as AppAdminModel;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\Department;
use App\Models\Nurse;
use App\Models\AboutUs;
use App\Models\Admin;
use App\Models\AdmitedPatient;
use App\Models\ExperienceDoctor;

// use DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    Route::group(['middleware' => ['auth']], function () {

    
      



        Route::get('/homepage', function () {
            $doctors = Doctor::all();
            $exp_doctors = ExperienceDoctor::all();
            // $about = AboutUs::all();\\
            return view('homepage', compact("doctors","exp_doctors"));
        });
        
        Route::get('/blog','BlogController@index');

        // Route::get('appointment','AppointmentController@appointment');


        Route::get('/contact','BlogController@contact');
        Route::get('pharmacy','PharmacyController@index');
        
        
        Route::get('/profilePage', function () {
            $doctors = Doctor::all();
            $patients = Patient::all();
            $user = Auth::user();
            

            if ($user->role == 'admin') {
                return view('admin.adminProfile');

            }elseif ($user->role == 'patient') {
                return view('patientProfilePage');
            }
            return view('profilePage')->with("doctors", $doctors);
        });


        // Route::get('/PatientprofilePage', function () {
        //     $doctors = Doctor::all();
        //     $patients = Patient::all();
        //     // $doctors = Auth::user()->doctors->first()->appointments;
        //     // dd($doctors);

        //     return view('patientProfilePage');
        // });



        Route::get('/view_bookings', function () {
            // $user = Auth::user();
            $patients = Patient::all();
            $doctors = Doctor::all();
            $appointments = Appointment::all();
            // dd($appointments);
            $admitedpatients = AdmitedPatient::all();


            // if ($appointments === null) {
            //     return view('bookAppointment')
            //     ->withErrors(['status' => 'If Your Satus is Empty it means You have no appointment yet' ]);
            // }
        
            // dd($appointments);
        //     if(Auth::user()->role=="admin"){
        //     return view('bookAppointment',compact('patients','doctors','appointments'));
        
        //     } elseif (Auth::user()->role=="patient") {
        //         $appointments = Auth::user()->patients->first()->appointments;
        //         return view('bookAppointment',compact('patients','doctors','appointments'))
        //         ->withErrors(['status' => 'If Your Satus is Empty it means You have no appointment yet' ]);

        //         // dd($appointments);
        //     }
        //       else{
        //           $appointments = Auth::user()->doctors->first()->appointments;
        //     // dd($appointments);
        
        //         return view('bookAppointment',compact('patients','doctors','appointments'))
        //         ->withErrors(['status' => 'If Your Satus is Empty it means You have no appointment yet' ]);
        //       }
                
        //    return redirect('homepage');


           if (Auth::user()->role=="patient") {
            $appointments = Auth::user()->patients->first()->appointments;
            return view('bookAppointment',compact('patients','doctors','appointments','admitedpatients'))
                ->withErrors(['status' => 'If Your Satus is Empty it means You have no appointment yet' ]);

            // dd($appointments);
        }
          elseif(Auth::user()->role=="doctor"){
            $appointments = Auth::user()->doctors->first()->appointments;
        // dd($admitedpatients);
    
            return view('bookAppointment',compact('patients','doctors','appointments','admitedpatients'))
            ->withErrors(['status' => 'If Your Satus is Empty it means You have no appointment yet' ]);
          }

          return view('bookAppointment',compact('patients','doctors','appointments','admitedpatients'));
        
        });

        
        

        // Route::get('/user_patient', function () {
        //     $admitedpatients = AdmitedPatient::all();
        //     $doctors = Doctor::all();
        //     $patients = Patient::all();
        
        //     if(Auth::user()->role=="admin" || Auth::user()->role=="doctor" ){
        //     return view('admin.patientdeck',compact('patients','doctors','admitedpatients'));
            
        //         }
        //         else {
        //             $admitedpatients = Auth::user()->patients->first()->admitedPatient;

        //             return view('admin.patientdeck',compact('patients','doctors','admitedpatients'))
        //             ->withErrors(['status' => 'If Your Satus is Empty it means you are not an admited patient' ]);

        //             // dd($admitedpatients);
        //         }
          
        // });

        
        Route::get('/user_patient', function () {
            $admitedpatients = AdmitedPatient::all();
            $doctors = Doctor::all();
            $patients = Patient::all();
            $appointments = Appointment::all();
            // dd($patients);


            if (Auth::user()->role=="patient") {
                $admitedpatients = Auth::user()->patients->first()->admitedpatient;
                return view('admin.patientdeck',compact('patients','doctors','admitedpatients','appointments'))
                ->withErrors(['status' => 'If Your Satus is Empty it means You are not an admited patient' ]);

                // dd($appointments);
            }
              elseif(Auth::user()->role=="doctor"){
                $admitedpatients = Auth::user()->doctors->first()->admitedpatient;
            // dd($admitedpatients);
        
                return view('admin.patientdeck',compact('patients','doctors','admitedpatients','appointments'))
                ->withErrors(['status' => 'If Your Satus is Empty it means You have no patient assigned to You']);
              }
        
            // if(Auth::user()->role=="admin" ){
            // return view('admin.patientdeck',compact('patients','doctors','admitedpatients'));
            
            //     }
            //     else {
            //         $admitedpatients = Auth::user()->patients->first()->admitedpatient;

            //         return view('admin.patientdeck',compact('patients','doctors','admitedpatients'))
            //         ->withErrors(['status' => 'If Your Satus is Empty it means you are not an admited patient' ]);

            //         // dd($admitedpatients);
            //     }
            // $doctors = Doctor::with(['admitedpatients'])->get();
            // $patients = Patient::with(['admitedpatients'])->get();
            // dd($admitedpatients);
        
            return view('admin.patientdeck',compact('patients','doctors','admitedpatients','appointments'))
            ->withErrors(['status' => 'If Your Satus is Empty it means No patient has been admited yet']);
        });



     
        
        Route::get('patientpdf/{id}','PdfController@downloadPDF');
        Route::get('doctorpdf/{id}','PdfController@doctorPDF');

        
        
        Route::put('createAppointment','AppointmentController@createAppointment');
        Route::put('/userAppointment','AppointmentController@userAppointment');
        
        Route::put('updateAppointment/{id}','AppointmentController@updateAppointment');
        Route::delete('deleteAppointment/{id}','AppointmentController@deleteAppointment');
        


    });


    Route::post('/sendMail','SendEmailController@sendMail');
    Route::post('/doctorsMail/{id}','SendEmailController@DoctorsMail');
    Route::post('/nursesMail/{id}','SendEmailController@NursesMail');
    

    

Route::get('login' ,'Auth\LoginController@index');
Route::post('postLogin','Auth\LoginController@login');
Route::get('logout','Auth\LoginController@logout');

Route::get('/register', 'RegisterController@index')->name('register');
Route::put('/create', 'RegisterController@create')->name('create');
// });



Route::get('/', function () {
    return view('welcome');
});














Route::group(['middleware'=>['admin']], function () {

    Route::get('/adminPage', function () {
        $users = User::all();
        $doctors = Doctor::all();
        $patients = Patient::all();
        $appointments = Appointment::all();
        $departments = Department::all();
        $nurses = Nurse::all();
        $admitedpatients = AdmitedPatient::all();
        // $users = User::count();
        // dd($doctors);
        return view('admin.adminPage', compact('users','admitedpatients','doctors','patients','appointments','departments','nurses'));
        // ->with('users',$users, $doctors, );
    });

    Route::get('/registered', function () {
        $users = User::all();
        return view('admin.registered')->with('users',$users);
    });

    Route::get('/department', function () {
        $departments = Department::all();
        return view('department')->with('departments',$departments);
    });

    Route::get('/nurse', function () {
        $nurses = Nurse::all();
        $departments = Department::with(['doctors'])->get();
        $users = User::all();
        return view('nurse',compact('nurses','departments','users'));
    });

   

    Route::get('/doctor', function () {
        $doctors = Doctor::with(['department'])->get();
        $departments = Department::with(['doctors'])->get();
        $users = User::all();
        // dd($doctors);
        // $departments = Department::all();
        return view('doctor',compact('departments','doctors','users'));
    });
     
    // Route::get('aboutUs', 'AboutUsController@index');
    Route::put('/updateAbout/{id}','AboutUsController@updateAbout');




   

    Route::get('/admin', function () {
        $admins = Admin::all();
        $users = User::all();
        return view('/admin.admin',compact('admins','users'));
    });



    Route::put('/createDepartment', 'DepartmentController@createDepartment');
    Route::put('/createNurse', 'NurseController@createNurse');

    Route::put('createPatientData','AdmitedPatientController@createPatient');

    Route::put('/update_patient/{id}','AdmitedPatientController@updatePatient');

    Route::delete('delete_patient/{id}','AdmitedPatientController@delete');

    // Route::get('/role-register', 'DashboardController@registered');

    Route::delete('/delete_user/{id}','DashboardController@delete');

    Route::put('/update-users/{id}','DashboardController@updateUser');

    Route::put('/createUser', 'DashboardController@createUser');

    Route::put('/createDoctor', 'DoctorController@createDoctor');

    Route::put('/updateDoctor/{id}','DoctorController@updateDoctor');

    Route::delete('/deleteDoctor/{id}','DoctorController@deleteDoctor');

    Route::put('/createAdmin', 'AdminController@createAdmin');
    Route::put('/updateAdmin/{id}','AdminController@updateAdmin');
    Route::delete('/deleteAdmin/{id}','AdminController@deleteAdmin');

    Route::put('/updateNurse/{id}', 'NurseController@updateNurse');
    Route::delete('/deleteNurse/{id}','NurseController@deleteNurse');


     Route::get('experianceDoctor','ExperienceDoctorController@index');
     Route::put('create_experienceDoc','ExperienceDoctorController@createExperienceDoctors');
     Route::delete('delete/{id}','ExperienceDoctorController@removeDoctor');

});