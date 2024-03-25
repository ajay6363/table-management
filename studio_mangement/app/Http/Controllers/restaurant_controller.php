<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Restaurant;
use App\Models\Gallery;

use App\Models\Restaurant_index;

use Illuminate\Support\Facades\Session;

class restaurant_controller extends Controller
{
   //-----------------Add Restaurant Images-------------------------------//
   public function restaurant(Request $request) 
   {
       $image = $request->file('upload');
       
   
       $data = array(
            'image'=> $image->getClientOriginalName(), 
            );
   
       $destinationPath = 'public/assets/admin/assets/img/restaurant';
       $image->move($destinationPath,$image->getClientOriginalName());
   
       
       $lastInsertedId = Restaurant::insertGetId($data); 
       return view("restaurant/add_restaurant_image"); 
   }


 //-----------------Restaurant Image view-------------------------------//
 public function restaurant_view(Request $request) 
   {
       $data['view'] = Restaurant::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
           return view('restaurant/restaurant_image_list', $data); 
   }


 


 //-----------------Restaurant Image Edit-------------------------------//   
 public function image_edit($edit=false) 
 {
   //name from web.php($anyname=false)   
   $data['edit'] = Restaurant::where('id', $edit)->select('*')->first(); //where( id-çolumn name',$id=>$id=false)
   //$anyname["anyname"]
   return view('restaurant/edit_restaurant_image', $data);  

 }

  //-----------------update Image Restaurant-------------------------------//
  public function update_image(Request $request)
   {
   
         $id=$request->input('id');
          //  echo ($id);
          //  die();
         $image = $request->file('upload');
         $restaurant=Restaurant::find($id);
         $image_path=public_path('assets/admin/assets/img/restaurant/'.$restaurant->image);
        
        if(file_exists($image_path))
          {
            unlink($image_path);
          }
                
         $data = array(                          
                       'image'=> $image->getClientOriginalName(),       
                      );
       
         $destinationPath = 'public/assets/admin/assets/img/restaurant/';
         $image->move($destinationPath,$image->getClientOriginalName());
        // echo ($image->getClientOriginalName());
         //  die();
         
         $update = Restaurant::where('id', $id)->update($data);  
         
         $data['view'] = Restaurant::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
         return view('restaurant/restaurant_image_list', $data);
     
   }
   
   //-----------------Delete Restaurant Image-------------------------------//
   public function delete($id=false)
   {
     $restaurant=Restaurant::find($id);
     $image_path=public_path('assets/admin/assets/img/restaurant/'.$restaurant->image);
     
     if(file_exists($image_path))
     {
       unlink($image_path);
     }
     $restaurant->delete();
     $data['view'] = Restaurant::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
     return view('restaurant/restaurant_image_list', $data);  
   
   }


// ------------------------------------------------------------------------------------------------------------------------------------------//

   //-----------------Restaurant_index register-------------------------------//
   public function index(Request $request) 
   {
    // Store the input values in the session
    // $request->session()->put('name', $request->input('name'));
    // $request->session()->put('email', $request->input('email'));
    // $request->session()->put('number', $request->input('number'));
    // $request->session()->put('address', $request->input('address'));
   $data = array( 
       'name' => $request->input('name'),      
       'email' => $request->input('email'),
       'number'=> $request->input('number'),  
       'address' => $request->input('address'),
   );

   $lastInsertedId = Restaurant_index::insertGetId($data); 
 return view("restaurant/restaurant_add_index"); 
 }


   //-----------------Restaurant_index view-------------------------------//
 public function index_view(Request $request) {

   $data['view_in'] = Restaurant_index::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
           return view('restaurant/restaurant_index_details', $data); 
     }
     

  //----------------- Edit Restaurant_index -------------------------------//   
 public function edit_index($edit=false) 
   {//name from web.php($anyname=false)   
     $data['edit'] = Restaurant_index::where('id', $edit)->select('*')->first(); //where( id-çolumn name',$id=>$id=false)
     //$anyname["anyname"]
     return view('restaurant/restaurant_edit_index', $data);  

   }

   //-----------------View Restaurant_index Details-------------------------------//   
//  public function view_details($view=false) 
//  {//name from web.php($anyname=false)   
//    $data['view'] = Restaurant_index::where('id', $view)->select('*')->first(); //where( id-çolumn name',$id=>$id=false)
//    //$anyname["anyname"]
//    return view('view_employee_details', $data);  

//  }

   //-----------------update Restaurant_index-------------------------------//
 public function update_index(Request $request) {

     $data = array(
      'name' => $request->input('name'),
       'email' => $request->input('email'),
       'number'=> $request->input('number'),  
       'address' => $request->input('address'),
       'start_time' => $request->input('st'),
       'end_time' => $request->input('end'),
       'week_start' => $request->input('weekst'),
       'week_end' => $request->input('weekend'),

   );
   
   $id=$request->input('id');
   
   $update = Restaurant_index::where('id', $id)->update($data);
   $data['view_in'] = Restaurant_index::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
   return view('restaurant/restaurant_index_details', $data); 
   
   }
  
   
   //-----------------delete Restaurant_index-------------------------------//
   public function delete_index($id=false)
   {
     $employee=Restaurant_index::find($id);    
     $employee->delete();
     $data['view_in'] = Restaurant_index::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
     return view('restaurant/restaurant_index_details', $data);  
   
   }
//    public function session()
// {
//     $session_code = Restaurant_index::getId();
//     return view('index_header', ['name' => $session_code]);
// }




}
