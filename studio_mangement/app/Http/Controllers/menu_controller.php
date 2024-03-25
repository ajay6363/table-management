<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exports\MenuExport;
use App\Models\Menu;
use App\Models\Menu_type;
use App\Models\Package;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;

class menu_controller extends Controller
{
    //-----------------Add Menu-------------------------------//
    public function menu(Request $request) 
        {
            $image = $request->file('upload');
            
        
            $data = array(
                'menu_name' => $request->input('name'),
                'type'=> $request->input('type'),
                'image'=> $image->getClientOriginalName(), 
                'currency_symbol'=>$request->input('symbol'),
                'price'=> $request->input('price'),     
                'description' => $request->input('description'),
            );
            // echo($request->input('name'));
            // die();
            $destinationPath = 'public/assets/admin/assets/img/menu';
            $image->move($destinationPath,$image->getClientOriginalName());
        
            
            $lastInsertedId = Menu::insertGetId($data); 
            return redirect("menu/add_menu"); 
        }


        public function aeddmenu(Request $request) 
        {
            $image = $request->file('upload');
            
        
            $data = array(
                'menu_name' => $request->input('name'),
                'type'=> $request->input('type'),
                'image'=> $image->getClientOriginalName(), 
                'currency_symbol'=>$request->input('symbol'),
                'price'=> $request->input('price'),     
                'description' => $request->input('description'),
            );
            // echo($request->input('name'));
            // die();
            $destinationPath = 'public/assets/admin/assets/img/menu';
            $image->move($destinationPath,$image->getClientOriginalName());
        
            
            $lastInsertedId = Menu::insertGetId($data); 
            return view("menu/menu"); 
        }

           //----------------- View Menu Type -------------------------------//
    public function menu_type_view(Request $request) {
  
      $data['view_type'] = Menu_type::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
              return view('menu/add_menu', $data); 
        }

      //-----------------Menu view-------------------------------//
      public function menu_view(Request $request) 
        {
            $data['view_menu'] = Menu::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
                return view('menu/view_menu_list', $data); 
        }


      //-----------------Menu Details-------------------------------//   
      public function menu_details($view=false) 
      {
        //name from web.php($anyname=false)   
        $data['view'] = Menu::where('id', $view)->select('*')->first(); //where( id-çolumn name',$id=>$id=false)
        //$anyname["anyname"]
        return view('menu/view_menu_details', $data);  

      }

      //-----------------Menu Edit-------------------------------//   
      public function menu_edit($edit=false) 
      {   
        $data['edit'] = Menu::where('id', $edit)->select('*')->first(); 
        $data['view_type'] = Menu_type::select('*')->get();
        return view('menu/edit_menu', $data);  

      }

       //-----------------update Menu-------------------------------//
       public function update_menu(Request $request) {
        if(empty($request->file('upload')))
        {
         
          $data = array(
            
            'menu_name' => $request->input('name'),
            'type'=> $request->input('type'),        
            'price'=> $request->input('price'), 
            'currency_symbol'=>$request->input('symbol'),   
            'description'=> $request->input('description'),              
        
        );
        
        $id=$request->input('id');
        $update = Menu::where('id', $id)->update($data);
        $data['view_menu'] = Menu::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
        return view('menu/view_menu_list', $data); 
        
        }
          else
          {
              $id=$request->input('id');
                //echo ($id);
                // die();
              $image = $request->file('upload');

              $menu=Menu::find($id);
              $image_path=public_path('assets/admin/assets/img/menu/'.$menu->image);
              
              if(file_exists($image_path))
                {
                  unlink($image_path);
                }              
            
              $data = array(
                                'menu_name' => $request->input('name'),
                                'type'=> $request->input('type'), 
                                'image'=> $image->getClientOriginalName(),
                                'currency_symbol'=>$request->input('symbol'),       
                                'price'=> $request->input('price'),    
                                'description'=> $request->input('description'),
                            );
            
              $destinationPath = 'public/assets/admin/assets/img/menu';
              $image->move($destinationPath,$image->getClientOriginalName());
             // echo ($image->getClientOriginalName());
              //  die();
              
              $update = Menu::where('id', $id)->update($data);  
            
              $data['view_menu'] = Menu::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
              return view('menu/view_menu_list', $data); 
        
          }

        }

        //----------------- PDF -------------------------------//
        public function exportData()
    {

        $data = Menu::all(); // Replace with your model and query
        $pdf = PDF::loadView('menu/pdf', compact('data'));
        $pdf->setPaper('a4'); // Set paper size
        // $pdf->setTitle('Data Export'); // Set PDF title
        return $pdf->download('Menu details.pdf');
        // return $pdf->stream();
    }

    //----------------- Excel -------------------------------//

    public function export()
{
    return Excel::download(new MenuExport, 'Menu details.xlsx');
    // return Excel::download(new -export name call-, 'Employee details.xlsx');
}
        
        //-----------------delete Menu-------------------------------//
        public function delete($id=false)
        {
          $menu=Menu::find($id);
          $image_path=public_path('assets/admin/assets/img/menu/'.$menu->image);
          
          if(file_exists($image_path))
          {
            unlink($image_path);
          }
          $menu->delete();
          $data['view_menu'] = Menu::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
          return view('menu/view_menu_list', $data);  
        
        }

         //-------------------------------------------- Menu Type -------------------------------------//


         //-----------------Add Menu Type -------------------------------//
    public function type(Request $request) 
    {   
    $data = array(
        'type' => $request->input('type'),       
    );
  
    $lastInsertedId = Menu_type::insertGetId($data); 
  return view("menu/add_menu_type"); 
  }

    //----------------- View Menu Type -------------------------------//
  public function type_view(Request $request) {
 
    $data['view_type'] = Menu_type::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
            return view('menu/view_menu_type_list', $data); 
      }
      

   //-----------------Edit Menu Type -------------------------------//   
  public function edit_type($edit=false) 
    {//name from web.php($anyname=false)   
      $data['edit'] = Menu_type::where('id', $edit)->select('*')->first(); //where( id-çolumn name',$id=>$id=false)
      //$anyname["anyname"]
      return view('menu/edit_menu_type', $data);  

    }

    //-----------------update Menu Type -------------------------------//
  public function update_type(Request $request) {
    
      $data = array(
        
        'type' => $request->input('type'), 
    );

    $id=$request->input('id');
    
    $update = Menu_type::where('id', $id)->update($data);
    $data['view_type'] = Menu_type::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
    return view('menu/view_menu_type_list', $data); 
    }
    
    //-----------------delete Menu Type -------------------------------//
    public function delete_type($id=false)
    {
      $employee=Menu_type::find($id);     
      $employee->delete();
      $data['view_type'] = Menu_type::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
      return view('menu/view_menu_type_list', $data);   
    
    }


        //-----------------Package-------------------------------//

         //-----------------Add Package-------------------------------//
    public function package(Request $request) 
    {
        $image = $request->file('upload');
        
    
        $data = array(
            'package' => $request->input('name'),
            'image'=> $image->getClientOriginalName(), 
            'price'=> $request->input('price'),              
            'currency_symbol'=>$request->input('symbol'),    
            'description' => $request->input('description'),
            
                    
        );
    
        $destinationPath = 'public/assets/admin/assets/img/package';
        $image->move($destinationPath,$image->getClientOriginalName());
    
        
        $lastInsertedId = Package::insertGetId($data); 
        return view("package/add_package"); 
    }


  //-----------------Package view-------------------------------//
  public function package_view(Request $request) 
    {
        $data['view'] = Package::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
            return view('package/view_package_list', $data); 
    }

    


  //-----------------Package Details-------------------------------//   
  public function package_details($view=false) 
  {
    //name from web.php($anyname=false)   
    $data['view'] = Package::where('id', $view)->select('*')->first(); //where( id-çolumn name',$id=>$id=false)
    //$anyname["anyname"]
    return view('package/view_package_details', $data);  

  }

  //-----------------Package Edit-------------------------------//   
  public function Package_edit($edit=false) 
  {
    //name from web.php($anyname=false)   
    $data['edit'] = Package::where('id', $edit)->select('*')->first(); //where( id-çolumn name',$id=>$id=false)
    //$anyname["anyname"]
    return view('package/edit_package', $data);  

  }

   //-----------------update Package-------------------------------//
   public function update_package(Request $request) {
    if(empty($request->file('upload')))
    {
      $data = array(
        
        'package' => $request->input('name'),        
        'price'=> $request->input('price'),  
        'currency_symbol'=>$request->input('symbol'),   
        'description'=> $request->input('description'),              
    
    );
    
    
    $id=$request->input('id');
    
    $update = Package::where('id', $id)->update($data);
    $data['view'] = Package::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
    return view('package/view_package_list', $data); 
    
    }
      else
      {
          $id=$request->input('id');
            // echo ($id);
            // die();
          $image = $request->file('upload');

          $package=Package::find($id);
          $image_path=public_path('assets/admin/assets/img/package/'.$package->image);
          
          if(file_exists($image_path))
            {
              unlink($image_path);
            }
                  
          $data = array(
                            'package' => $request->input('name'), 
                            'image'=> $image->getClientOriginalName(),       
                            'price'=> $request->input('price'),    
                            'currency_symbol'=>$request->input('symbol'), 
                            'description'=> $request->input('description'),
                        );
        
          $destinationPath = 'public/assets/admin/assets/img/package';
          $image->move($destinationPath,$image->getClientOriginalName());
         // echo ($image->getClientOriginalName());
          //  die();
          
          $update = Package::where('id', $id)->update($data);  
          $data['view'] = Package::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
          return view('package/view_package_list', $data); 
    
      }

    }
    
    //-----------------delete Package-------------------------------//
    public function package_delete($id=false)
    {
      $package=Package::find($id);
      $image_path=public_path('assets/admin/assets/img/package/'.$package->image);
      
      if(file_exists($image_path))
      {
        unlink($image_path);
      }
      $package->delete();
      $data['view'] = Package::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
      return view('package/view_package_list', $data); 
    }


        
}
