<?php

namespace App\Controllers;

use App\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Providers\RouteServiceProvider;
use App\Requests\UserRequest;
use App\Repositories\UserRepository;
use Validator;
use App\Models\User;

class RegisterController extends Controller
{
    

  protected $userRepository;
    
  public function __construct(userRepository $userRepository)
  {
     $this->userRepository = $userRepository;
 
  }



  public function index()
  {
    return view('auth.register');
  }



  public function create(UserRequest $request)
  {
    $validated = $request->validated();
  
    $user = $this->userRepository->create($request);

  
    return redirect('/login')->withErrors(['status' => 'You have Succesfully Registered, login to continue']);
  }



}