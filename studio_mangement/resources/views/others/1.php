<?

use App\Models\Menu;
use App\Models\Menu_type;

$data = Menu_type::table('type')
    ->join('type', 'type.id', '=', 'type.type_id')
    ->select('type.id', 'type.filter_methods', 'type.view', 'type.full_details')
    ->get();

    // $ids = Menu::pluck('id')->toArray(); 
        // $evenIds = array_filter($ids, function($id) { return $id % 2 == 0; }); 
        // $data['even'] = Menu::whereIn('id', $evenIds)->get();
        // $oddIds = array_filter($ids, function($id) { return $id % 2 != 0; });
        // $data['odd'] = Menu::whereIn('id', $oddIds)->get(); 
        return view('index/menu', $data); 
         