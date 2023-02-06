<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function create(){
        return view('customer');
    }

    public function store(Request $request)
    {
        echo "<pre>";
        print_r($request->all());
        //create object or customer class
        //insert query
        
        $customer = new Customer;
        $customer ->name = $request['name'];
        $customer ->email = $request['email'];
        $customer ->gender = $request['gender'];
        $customer ->address = $request['address'];
        $customer ->state = $request['state'];
        $customer ->country = $request['country'];
        $customer ->dob = $request['dob'];
        $customer ->password = md5($request['password']);
        $customer ->save();

        return redirect('/customer/view');
    }
    public function view(){
        $customers = customer::all();
        // echo"<pre>";
        // print_r($customers);
        // echo"</pre>";
        // die;
        $data = compact('customers');
        return view('customer-view')->with ($data);
    }
}
