<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Customers extends Controller
{
    public function getAllCustomers(){
        // $customers = Customers::all();
        // dd($customers);
        return 'hello';
    }
    public function getCustomers(){
        return 'yop';
    }
    public function addCustomer(Request $request){
        $query = $request->input('prenom');
        dd($query);
    } 
}
