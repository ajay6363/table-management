<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;
use App\Models\Menu;
use App\Models\Package;
use App\Models\Restaurant;
use App\Models\Banner;
use App\Models\Restaurant_index;
use Illuminate\Support\Facades\Redirect;

class index_controller extends Controller
{
    //----------------- Home page  view-------------------------------//
    public function home_view(Request $request) 
    {
        $data['index'] =  Restaurant_index::where('id', 2)->get();
        $data['menu'] = menu::select('*')->get();
        $data['me'] = menu::select('*')->get();
        $data['banner'] =  Banner ::where('id', 8)->get();
        $data['menu_b'] =  Banner ::where('id', 2)->get();  
        // $data['view'] = Package::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
        // $data['view_image'] = Restaurant::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
        // $data['view_emp'] = Employee::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
        return view('index/index', $data); 
    }
    
    public function gallery_view(Request $request) 
    {
        $data['view'] =  Banner ::where('id', 1)->get();
        $data['view_image'] = Restaurant::select('*')->get(); 
        return view('index/gallery', $data); 
    }

    public function menu_view(Request $request) 
    {
        $data['view'] =  Banner ::where('id', 2)->get();        
        $data['menu'] = menu::select('*')->get();

        return view('index/menu', $data); 
    }    

    public function  policy_view(Request $request) 
    {
        $data['view'] =  Banner ::where('id', 3)->get();
        return view('index/privacy_policy', $data); 
    }

    public function about_view(Request $request) 
    {
        $data['view'] =  Banner ::where('id', 4)->get();
        $data['view_emp'] = Employee::select('*')->get(); 
        return view('index/about', $data); 
    }
    
    public function contact_view(Request $request) 
    {
        $data['index'] =  Restaurant_index::where('id', 2)->get();
        $data['view'] =  Banner ::where('id', 5)->get();
        return view('index/contact', $data); 
    }

    public function booking_view(Request $request) 
    {
        $data['view'] =  Banner ::where('id', 6)->get();
        return view('index/table_booking', $data); 
    }

    public function terms_view(Request $request) 
    {
        $data['view'] =  Banner ::where('id', 7)->get();
        return view('index/terms_of_service', $data); 
    }

    public function package_view(Request $request) 
    {
        $data['view'] =  Banner ::where('id', 9)->get();
        $data['package'] = Package::select('*')->get();
        return view('index/package', $data); 
    }

        public function restaurant_index(Request $request) 
    {
        $data['view_index'] = Restaurant_index::select('*')->get();
        return view('index_header', $data)->with('index_footer', 'index'); 
    }

    // public function header_index(Request $request) 
    // {
    //     // $data['view_header'] = Restaurant_index::select('*')->get();
    //     // return view('connection/index_header', $data); 
    //     // $view_header = Restaurant_index::select('*')->get();

    //     // $v = session("id");
    //     // $tasks = Restaurant_index:::table('tasks')->where('id', $v)->get();
    //     // $view_header = Restaurant_index::all();
    // // return redirect('connection/index_header', compact('view_header'));
    // $id = $request->input('id');
    // $request->session()->put('inid', $id);  
    //         $id_session = $request->session()->get('inid');
    // return redirect('connection/index_header');
    // }

//     public function header_index(Request $request)
// {
//     $data['view_header'] = 
//     $id = $request->input('id');
//     $request->session()->put('inid', $id);
//     $request->session()->get('inid'); = Restaurant_index::select('*')->get();
//     return redirect('connection/index_header');
// }


    // <input type="hidden" class="form-control" id="exampleInputName1" name="id" value="{{$edit->id}}">
}
