<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;
use App\Models\Employee;
use App\Models\Country;
use App\Models\Package;
use App\Models\Booking;
use App\Models\Menu;
use App\Models\Banner;
use App\Models\Restaurant_index;

use session;

use Auth;

class logincontroller extends Controller
{
     //-----------------Admin login-------------------------------

     public function login(Request $request) 
     {

        //-----------count in employee----------//
        $employee = Employee::count();
        $booking = Booking::count();
        $package = Package::count();
        $menu = Menu::count();
        //return view('admin_dashboard', compact('productCount'));
        
         $email = $request->input('email');
         $password = $request->input('password');
 
         $admin_user = Admin::where('admin.email', '=', $email)
             ->where('admin.password', '=', $password)
             ->first();
         $count = count((array)$admin_user);


//-----------------Admin session-------------------------------//
            $request->session()->put('emailid', $email);  
            $email_session = $request->session()->get('emailid');

           
            if (!$admin_user) 
            {
                // Display "no record found" message
                return redirect()->back()->withErrors([
                    'email' => 'Please check your email and password.'
                ]);
            }
 
             if ($count > 0) 
                 {
 
                     return view('admin/admin_dashboard',compact('employee','booking','package','menu'));
                 }

                 
             else
                 {
                     return view('admin/admin_index');
                 }
                 
     }



    //-----------------Admin register-------------------------------
     public function register(Request $request) {

       
        
      
        $data = array(
            'name' => $request->input('name'),       
            'email' => $request->input('email'),           
            'password' => $request->input('password'),
            'country_code' => $request->input('country'),
          
      
        );
        
        $lastInsertedId = Admin::insertGetId($data); 
      return view("admin/admin_index"); 
      }



      //-----------------Country view-------------------------------//
    public function get_country(Request $request) 
    {
        $data['co'] = Country::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
                return view('admin/admin_register', $data); 
          }    



    //-----------------Country view-------------------------------//
    public function view(Request $request) 
    {
        $data['view'] = Admin::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
                return view('admin/admin_login_list', $data); 
          }  

//       //----------------logout-------------------//

public function logout(Request $request) {
   //session::flush();   Auth::logout();  return redirect('admin_index');
    Auth::logout();
    $request->session()->invalidate(); 
    return redirect(\URL::previous());
}




}

