<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use App\Models\Customer;

class CustomerController extends Controller
{

    public function openPage(){
        return view('CustomerRegister');
    }

    public function insertData(Request $request){
        $customer = new Customer();
        $customer->name=$request->name;
        $customer->email=$request->email;
        $customer->password=$request->pwd;

        $customer->save();
        return redirect('/customer/tableview');
    }

    public function showData(){

        $custs = Customer::all();
        return view('CustomerTableView',compact('custs'));
    }
}
