<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ContactExport;
use App\Models\Contact;
use App\Models\Restaurant_index;
use App\Models\Banner;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;

class contact_controller extends Controller
{
    
     //--------------------contact----------------------//
 public function contact(Request $request) 
 {
    //echo($request->input('name'));
    //die();
  $data = array(
                  'name' => $request->input('name'),
                  'email' => $request->input('email'),                      
                  'subject'=> $request->input('subject'),
                  'number'=> $request->input('number'),
                  'message' => $request->input('message'),
              );
  $lastInsertedId =Contact::insertGetId($data); 
  $data['index'] =  Restaurant_index::where('id', 2)->get();
        $data['view'] =  Banner ::where('id', 5)->get();
  return view("index/contact",$data);
  
  // return redirect("index/contact",);
  }

  //----------------- Contact View -------------------------------//
  public function contact_view(Request $request) {
    
    $data['view'] = Contact::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
    return view('customer/contact_view', $data); 
      }

      //-----------------View Contact Details-------------------------------//   
      public function view_details($view=false) 
      {//name from web.php($anyname=false)   
        $data['key'] = Contact::where('id', $view)->select('*')->first(); //where( id-çolumn name',$id=>$id=false)
        //$anyname["anyname"]
        return view('customer/contact_details', $data);  

      }
      //----------------- Delete ----------------------------------------//
      public function delete($id=false)
      {
        $contact=Contact::find($id);     
        $contact->delete();
        $data['view'] = Contact::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
        return view('customer/contact_view', $data); 
      
      }

       //----------------- PDF -------------------------------//
       public function exportData()
       {
   
           $data = Contact::all(); // Replace with your model and query
           $pdf = PDF::loadView('customer/pdf', compact('data'));
           $pdf->setPaper('a4'); // Set paper size
           // $pdf->setTitle('Data Export'); // Set PDF title
           return $pdf->download('Contact details.pdf');
           // return $pdf->stream();
       }
   
       //----------------- Excel -------------------------------//
   
       public function export()
   {
       return Excel::download(new ContactExport, 'Contact details.xlsx');
       // return Excel::download(new -export name call-, 'Employee details.xlsx');
   }
}
