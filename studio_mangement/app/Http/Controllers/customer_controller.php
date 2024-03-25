<?php

namespace App\Http\Controllers;

use Validator;

use Illuminate\Http\Request;

use App\Models\Customer;

use App\Models\Subscribe;

class customer_controller extends Controller
{
   
    
   //-----------------Customer login-------------------------------//
    public function cs_login(Request $request) 
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $customer_user = Customer::where('customer.email', '=', $email)
            ->where('customer.password', '=', $password)
            ->first();
        $count = count((array)$customer_user);
 
        if (!$customer_user) 
        {
            // Display "no record found" message
            return redirect()->back()->withErrors([
                'email' => 'Please check your email and password.'
            ]);
        }
          

            if ($count > 0) 
                {

                    return view('index');
                }

                
            else
                {
                    return view('customer/customer_login');
                }
    }

    
   //-----------------Customer check email-------------------------------//

    public function checkEmail(Request $request)
    {
        $input = $request->only(['email']);

        $request_data = [
            'email' => 'required|email|unique:users,email',
        ];

        $validator = Validator::make($input, $request_data);

        // json is null
        if ($validator->fails()) {
            $errors = json_decode(json_encode($validator->errors()), 1);
            return response()->json([
                'success' => false,
                'message' => array_reduce($errors, 'array_merge', array()),
            ]);
        } else {
            return response()->json([
                'success' => true,
                'message' => 'The email is available'
            ]);
        }
    }


   //-----------------Customer register-------------------------------//
    public function cs_register(Request $request) 
    {
       $data = array(
           'name' => $request->input('name'),       
           'email' => $request->input('email'),           
           'password' => $request->input('password'),
       );
       
       $lastInsertedId = Customer::insertGetId($data); 
     return view("customer/customer_login"); 
    }

     //-----------------Customer view-------------------------------//
     public function cs_view(Request $request) 
     {
         $data['view'] = Customer::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
             return view('customer/customer_login_list', $data); 
     }

      //-----------------Customer Subscribe-------------------------------//
    public function cs_subscribe(Request $request) 
    {
       $data = array(                 
           'subscribe' => $request->input('subscribe'),
       );     
           // Add this line for debugging
    // dd($data);  
       $lastInsertedId = Subscribe::insertGetId($data); 
       return redirect("index_footer");
    }
}

