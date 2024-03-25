<?php

namespace App\Http\Controllers;

use App\Exports\BookingExport;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Country;
use App\Models\State;
use App\Models\Banner;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;

class booking_controller extends Controller
{


    //-----------------Country view-------------------------------//
    public function get_country(Request $request) 
    {
        $data['countries'] = Country::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
                return view('table', $data); 
          }    

    //--------------state view---------------------//
    public function fetchState(Request $request)
        {
            $data['states'] = State::where("country_id", $request->country_id)
                                ->get(["sname", "id"]);

            return response()->json($data);
        }

 //--------------------table booking----------------------//
 public function booking_table(Request $request) 
 {
    // echo($request->input('name'));
    // die();
  $data = array(
                  'name' => $request->input('name'),
                  'email' => $request->input('email'),
                  'number'=> $request->input('number'), 
                  'date'=> $request->input('date'),    
                  'time'=> $request->input('time'),     
                  'people'=> $request->input('people'),
                  'message' => $request->input('message'),
              );
  $lastInsertedId = Booking::insertGetId($data); 
  $data['view'] =  Banner ::where('id', 6)->get();
  return view("index/table_booking",$data); 
  }

  
      //-----------------Menu view-------------------------------//
      public function booking_view(Request $request) 
        {
            $data['view_booking'] = Booking::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
                return view('booking/table_booking_list', $data); 
        }


      //-----------------Menu Details-------------------------------//   
      public function booking_details($view=false) 
      {
        //name from web.php($anyname=false)   
        $data['view'] = Booking::where('id', $view)->select('*')->first(); //where( id-çolumn name',$id=>$id=false)
        //$anyname["anyname"]
        return view('booking/table_booking_details', $data);  

      }

      
        //----------------- PDF -------------------------------//
        public function exportData()
    {

        $data = Booking::all(); // Replace with your model and query
        $pdf = PDF::loadView('booking/pdf', compact('data'));
        $pdf->setPaper('a4'); // Set paper size
        // $pdf->setTitle('Data Export'); // Set PDF title
        return $pdf->download('Booking details.pdf');
        // return $pdf->stream();
    }

    //----------------- Excel -------------------------------//

    public function export()
{
    return Excel::download(new BookingExport, 'Booking details.xlsx');
    // return Excel::download(new -export name call-, 'Employee details.xlsx');
}
   
  //-----------------delete Role -------------------------------//
  public function delete($id=false)
  {
    $employee=Booking::find($id);     
    $employee->delete();
    $data['view_booking'] = Booking::select('*')->get();
        //$anyname["anyname"]
        return view('booking/table_booking_list', $data);   
  
  }
}
