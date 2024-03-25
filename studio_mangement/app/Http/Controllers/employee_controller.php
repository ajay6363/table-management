<?php

namespace App\Http\Controllers;
use App\Exports\EmployeeExport;
use Illuminate\Http\Request;
use App\Models\Employee;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Employee_role;
use Maatwebsite\Excel\Facades\Excel;

class employee_controller extends Controller
{
    
    //-----------------Employee register-------------------------------//
    public function employee(Request $request) 
        {
        $image = $request->file('upload');
        
      
        $data = array(
            'name' => $request->input('name'),
            'image'=> $image->getClientOriginalName(), 
            'gender'=> $request->input('gender'),    
            'role'=> $request->input('role'),     
            'email' => $request->input('email'),
            'number'=> $request->input('number'),  
            'address' => $request->input('address'),
            'pincode'=> $request->input('pincode'),  
                      
        );
     
        $destinationPath = 'public/assets/admin/assets/img/employee';
        $image->move($destinationPath,$image->getClientOriginalName());
       
        
        $lastInsertedId = Employee::insertGetId($data); 
        return redirect("employee/add_employee");
      // return view("add_employee"); 
      }


        //-----------------Employee view-------------------------------//
      public function employee_view(Request $request) {
     
        $data['view_emp'] = Employee::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
                return view('employee/view_employee', $data); 
          }

        //----------------- View Role(Add Employee) -------------------------------//
      public function employee_role_view(Request $request) {
    
        $data['view_role'] = Employee_role::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
        return view('employee/add_employee', $data); 
          }

       //-----------------Edit Employee-------------------------------//   
      public function edit_employee($edit=false) 
        {//name from web.php($anyname=false)   
          $data['edit'] = Employee::where('id', $edit)->select('*')->first(); //where( id-çolumn name',$id=>$id=false)
          $data['view_role'] = Employee_role::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
          //$anyname["anyname"]
          return view('employee/edit_employee', $data);  

        }

        //-----------------View Employee Details-------------------------------//   
      public function view_details($view=false) 
      {//name from web.php($anyname=false)   
        $data['view'] = Employee::where('id', $view)->select('*')->first(); //where( id-çolumn name',$id=>$id=false)
        //$anyname["anyname"]
        return view('employee/view_employee_details', $data);  

      }

        //-----------------update Employee-------------------------------//
      public function update_employee(Request $request) {
        if(empty($request->file('upload')))
        {
          $data = array(
            
            'name' => $request->input('name'),        
            'gender'=> $request->input('gender'),    
            'role'=> $request->input('role'),     
            'email' => $request->input('email'),
            'number'=> $request->input('number'),  
            'address' => $request->input('address'),
            'pincode'=> $request->input('pincode'),
        
        );
        
        
        $id=$request->input('id');
        
        $update = Employee::where('id', $id)->update($data);
        $data['view_emp'] = Employee::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
        return view('employee/view_employee', $data); 
        
        }
          else
          {
              $id=$request->input('id');
                //echo ($id);
                //die();
              $image = $request->file('upload');
              
              $employee=Employee::find($id);
              $image_path=public_path('assets/admin/assets/img/employee/'.$employee->image);
              
              if(file_exists($image_path))
                {
                  unlink($image_path);
                }
            
              $data = array(
                              'name' => $request->input('name'),
                              'image'=> $image->getClientOriginalName(),       
                              'gender'=> $request->input('gender'),    
                              'role'=> $request->input('role'),     
                              'email' => $request->input('email'),
                              'number'=> $request->input('number'),  
                              'address' => $request->input('address'),
                              'pincode'=> $request->input('pincode'), 
                            );
            
              $destinationPath = 'public/assets/admin/assets/img/employee';
              $image->move($destinationPath,$image->getClientOriginalName());
             // echo ($image->getClientOriginalName());
              //  die();
              
              $update = Employee::where('id', $id)->update($data);  
            
              $data['view_emp'] = Employee::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
              return view('employee/view_employee', $data); 
        
          }

        }
        
        //-----------------delete Employee-------------------------------//
        public function delete($id=false)
        {
          $employee=Employee::find($id);
          $image_path=public_path('assets/admin/assets/img/employee/'.$employee->image);
          
          if(file_exists($image_path))
          {
            unlink($image_path);
          }
          $employee->delete();
          $data['view_emp'] = Employee::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
          return view('employee/view_employee', $data);  
        
        }


        //----------------- PDF -------------------------------//
        public function exportData()
    {

        $data = Employee::all(); // Replace with your model and query
        $pdf = PDF::loadView('employee/employee_pdf', compact('data'));
        $pdf->setPaper('a4'); // Set paper size
        // $pdf->setTitle('Data Export'); // Set PDF title
        return $pdf->download('Employee details.pdf');
        // return $pdf->stream();
    }

    //----------------- Excel -------------------------------//

    public function export()
{
    return Excel::download(new EmployeeExport, 'Employee details.xlsx');
}



        //-----------------Approve Employee-------------------------------//
   
        public function approve($id = false)
        {
            $approve = Employee::find($id);
        
            $data = array(
                'status' => 1
            );
        
            $update = Employee::where('id', $id)->update($data);
        
            $data['view_emp'] = Employee::select('*')->get();
        
            // Use the 'with' method to pass data to the redirected view
            return redirect('employee/view_employee')->with($data);
        }

        //-------------------------------------------- Employee Role -------------------------------------//


         //-----------------Add Role -------------------------------//
    public function role(Request $request) 
    {   
    $data = array(
        'role' => $request->input('role'),       
    );
  
    $lastInsertedId = Employee_role::insertGetId($data); 
  return view("employee/add_employee_role"); 
  }

    //----------------- View Role -------------------------------//
  public function role_view(Request $request) {
 
    $data['view_role'] = Employee_role::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
            return view('employee/view_employee_role', $data); 
      }

      

   //-----------------Edit Role -------------------------------//   
  public function edit_role($edit=false) 
    {//name from web.php($anyname=false)   
      $data['edit'] = Employee_role::where('id', $edit)->select('*')->first(); //where( id-çolumn name',$id=>$id=false)
      //$anyname["anyname"]
      return view('employee/edit_employee_role', $data);  

    }

    //-----------------update Role -------------------------------//
  public function update_role(Request $request) {
    
      $data = array(
        
        'role' => $request->input('role'), 
    );

    $id=$request->input('id');
    
    $update = Employee_role::where('id', $id)->update($data);
    $data['view_role'] = Employee_role::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
    return view('employee/view_employee_role', $data); 
    }
    
    //-----------------delete Role -------------------------------//
    public function delete_role($id=false)
    {
      $employee=Employee_role::find($id);     
      $employee->delete();
      $data['view_role'] = Employee_role::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
      return view('employee/view_employee_role', $data);   
    
    }


    
}



