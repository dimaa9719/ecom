<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class RegisterController extends Controller
{
    public function userregister(Request $request){
        
        $this -> validate($request, [
            'firstName'=>'required',
            'LastName'=>'required',
            'PhoneNumber'=>'required',
            'Address'=>'required',
            'NIC'=>'required',
            'email'=>'required',
            'password'=>'required',
            'confirm_pwd'=>'required',
            'agreement'=>'required',
    
    ] );
           
            $customer = new Customer;
            $customer->firstName = $request->input('firstName');
            $customer->LastName = $request->input('LastName');
            $customer->PhoneNumber = $request->input('PhoneNumber');
            $customer->Address = $request->input('Address');
            $customer->NIC = $request->input('NIC');
            $customer->email = $request->input('email');
            $customer->password = $request->input('password');
            $customer->confirm_pwd = $request->input('confirm_pwd');
            $customer->agreement = $request->input('agreement');
            $customer->save();
            return redirect('/')->with('response','Register Successfully');
    }
}
