<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobile;
use App\Models\Customer;

class CustomerController extends Controller
{
    function add_customer(){
        $mobile = new Mobile();
        $mobile->model ="samsung s20 ultra";

        $customer = new Customer();
        $customer->name = "saqib";
        $customer->email = "saqib@gmail.com";  

        $customer->save();
        $customer->mobile()->save($mobile);
}

function show_mobile($id){
    $mobile = Customer::find($id)->mobile;
    return $mobile;
}


}
