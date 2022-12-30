<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobile;
use App\Models\Customer;

class MobileController extends Controller
{
    function show_customer($id){

        //$customer  = mobile::class($id)->Customer; 
        $customer = Mobile::whereId($id)->get();
        return $customer;
    }
}
