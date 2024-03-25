<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class banner_controller extends Controller
{
    
//------------------------------------------------ Banner ---------------------------------------------------------------//

    //----------------- Banner view-------------------------------//
    public function banner_view(Request $request)
    {

        $data['view_banner'] = Banner::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
        return view('banner/view', $data);
    }


    //-----------------View Employee Details-------------------------------//   
    public function view_details($view=false) 
    {
      $data['view'] = Banner::where('id', $view)->select('*')->first(); 
      return view('banner/view_details', $data);  

    }
    //-----------------Edit Banner -------------------------------//   
    public function edit_banner($edit = false)
    { //name from web.php($anyname=false)   
        $data['edit'] = Banner::where('id', $edit)->select('*')->first(); //where( id-çolumn name',$id=>$id=false)         
        return view('banner/edit', $data);
    }


    //----------------- Update Banner -------------------------------//
    public function update_banner(Request $request)
    {
        if (empty($request->file('upload'))) {
            $data = array(

                'title' => $request->input('title'),
                'description' => $request->input('description'),

            );


            $id = $request->input('id');

            $update = Banner::where('id', $id)->update($data);
            $data['view_banner'] = Banner::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
            return view('banner/view', $data);
        } else {
            $id = $request->input('id');
            //echo ($id);
            //die();
            $image = $request->file('upload');

            $banner = Banner::find($id);
            $image_path = public_path('assets/admin/assets/img/banner/' . $banner->banner);

            if (file_exists($image_path)) {
                unlink($image_path);
            }

            $data = array(
                'banner' => $image->getClientOriginalName(),
                'title' => $request->input('title'),
                'description' => $request->input('description'),
            );

            $destinationPath = 'public/assets/admin/assets/img/banner';
            $image->move($destinationPath, $image->getClientOriginalName());
            // echo ($image->getClientOriginalName());
            //  die();

            $update = Banner::where('id', $id)->update($data);

            $data['view_banner'] = Banner::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
            return view('banner/view', $data);
        }
    }

    //------------------------------------------------ End Banner  ---------------------------------------------------------------//


}
