<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }
    
    //rerurn all customers from mysql table
    public function all() {

        //return Customer::all();
        $users = DB::table('customers')->simplePaginate(15);

        return $users;

    }


    /**
     * Retrieve the customer for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function getById($id)
    {
        

        try {
            $resp = Customer::findOrFail($id);
            return response(['status' => true, "data" =>$resp], 200);
        } catch(ModelNotFoundException $e) {
            return response(['status' => 'error', "message" => $e->getMessage()], 200);
        }
    }

    /**
     * Create a new record.
     *
     * @return void
     */
    public function createCustomer(Request $request)
    {
        $response = array();
        $parameters = $request->all();

        $rules =  array(
            'email'    => 'required'
        );
        $customer_name = $parameters['email'];
 
        $messages = array(
            'email.required' => 'email is required.'
        );
 
        $validator = \Validator::make(array('email' => $customer_name), $rules, $messages);
        if(!$validator->fails()) {
            $response = Customer::create($parameters);
            
            return response()->json($response, 201);
        } else {
         $errors = $validator->errors();
            return response()->json(["error" => 'Validation error(s) occurred', "message" =>$errors->all()], 400);
      }
    }

    public function updateCustomer($id, Request $request)
    {

 

        try {
            $resp = Customer::findOrFail($id);
            return response(['status' => true, "data" =>$resp], 200);
        } catch(ModelNotFoundException $e) {
            return response(['status' => 'error', "message" => $e->getMessage()], 200);
        }



        $response = array();
        $parameters = $request->all();

        $rules =  array(
            'email'    => 'required'
        );
        $customer_name = $parameters['email'];
 
        $messages = array(
            'email.required' => 'email is required.'
        );
       



        $validator = \Validator::make(array('email' => $customer_name), $rules, $messages);
        if(!$validator->fails()) {
            $response = $cust->update($parameters);
            
            return response()->json(['status' => $response, "message" => "Record has been updated successfully."], 200);
        } else {
         $errors = $validator->errors();
            return response()->json(["error" => 'Validation error(s) occurred', "message" =>$errors->all()], 400);
      }
      
    }

    public function deleteCustomer($id)
    { 
        try {
            $resp = Customer::findOrFail($id)->delete();
            return response(['status' => $resp, "message" =>'Record has been deleted Successfully'], 200);
        } catch(ModelNotFoundException $e) {
            return response(['status' => 'error', "message" => $e->getMessage()], 200);
        }
        
    }
}

