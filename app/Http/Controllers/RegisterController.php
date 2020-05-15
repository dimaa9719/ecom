<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\ShopkeeperRequest;


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

    public function StoreRequest(Request $request){
        $this -> validate( $request, [
            'firstname'=>'required',
            'lastname'=>'required',
            'PhoneNumber'=>'required',
            'Address'=>'required',
            'NIC'=>'required',
            'NameOftheBusinessOrganization'=>'required',
            'businessType'=>'required',
            'merchant'=>'required',
            'MainSellingItem'=>'required',
            'Organizationemail'=>'required',
            'file'=>'',
            'email'=>'required',
            'agreement'=>'required'
        ]);
        //return 'Validation Passed ';
    
        $shopkeeperrequest = new ShopkeeperRequest ;
        $shopkeeperrequest->firstname= $request->input('firstname');
        $shopkeeperrequest->lastname=$request->input('lastname');
        $shopkeeperrequest->PhoneNumber=$request->input('PhoneNumber');
        $shopkeeperrequest->Address=$request->input('Address');
        $shopkeeperrequest->NIC=$request->input('NIC');
        $shopkeeperrequest->NameOftheBusinessOrganization=$request->input('NameOftheBusinessOrganization');
        $shopkeeperrequest->businessType= $request->input('businessType');
        $shopkeeperrequest->merchant=$request->input('merchant');
        $shopkeeperrequest->MainSellingItem=$request->input('MainSellingItem');
        $shopkeeperrequest->Organizationemail=$request->input('Organizationemail');
        $shopkeeperrequest->email=$request->input('email');
        $shopkeeperrequest->agreement=$request->input('agreement');
        $shopkeeperrequest->save();
        return redirect('/')->with('response','Register Successfully');

        }
        

            

}