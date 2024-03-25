<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\booking_controller;
use App\Http\Controllers\employee_controller;
use App\Http\Controllers\menu_controller;
use App\Http\Controllers\contact_controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// -------------------- index web -------------------------------------------------//

Route::get('/', function () {
    return view('index/index');
});

// Route::get('/menu', function () {
//     return view('index/menu');
// });

// Route::get('/gallery', function () {
//     return view('gallery');
// });

Route::get('/contact', function () {
    return view('index/contact');
});

Route::get('/index_footer', function () {
    return view('connection/index_footer');
});



// Route::get('/terms', function () {
//     return view('index/terms_of_service');
// });
// -------------------- End index web -------------------------------------------------//


//-------------------- admin web---------------------------------------------------//

Route::get('/admin', function () {
    return view('admin/admin_index');
});

// Route::get('/create', function () {
//     return view('admin_register');
// });

Route::get('/forgot_password', function () {
    return view('admin/admin_forgot_password');
});

//-----------logout--------//
Route::get('/login_action', function () {
    return view('admin/admin_index');
});

//-------------------- end admin web------------------------------------------------//



//--------------------employee web--------------------------------------------------//

Route::get('/addemployee', function () {
    return view('employee/add_employee');
});


Route::get('/view_employee', function () {
    return view('employee/view_employee');
});
    //---------------- Employee Role ------------------//

    Route::get('/addrole', function () {
        return view('employee/add_employee_role');
    });

    
    Route::get('/role', function () {
        return view('employee/view_employee_role');
    });
    //---------------- End Employee Role ------------------//

//-------------------- end employee web---------------------------------------------//



//-------------------- menu web--------------------------------------------------//

Route::get('/admenu', function () {
    return view('menu/add_menu');
});

Route::get('/view_menu_list', function () {
    return view('menu/view_menu_list');
});

    //---------------- Menu Type ------------------//

    Route::get('/addtype', function () {
        return view('/menu/add_menu_type');
    });

    
    // Route::get('/type', function () {
    //     return view('employee/view_employee_role');
    // });
    //---------------- End Menu Type ------------------//
//-------------------- end menu web----------------------------------------------//

//-------------------- Package web--------------------------------------------------//

Route::get('/add_package', function () {
    return view('package/add_package');
});

Route::get('/view_package_list', function () {
    return view('package/view_package_list');
});
//-------------------- end Package web----------------------------------------------//

//-------------------- Restaurant Index web--------------------------------------------------//

Route::get('/index_add', function () {
    return view('restaurant/restaurant_add_index');
});


//-------------------- end Restaurant Index web----------------------------------------------//

//-------------------- Restaurant Image web--------------------------------------------------//

Route::get('/add_image', function () {
    return view('restaurant/add_restaurant_image');
});

Route::get('/restaurant_image', function () {
    return view('restaurant/restaurant_image_list');
});
//-------------------- end Restaurant Image web----------------------------------------------//



//-------------------- table booking web----------------------------------------------------//
// Route::get('/table_booking', function () {
//     return view('table_booking_list');
// });

// Route::get('/booking', function () {
//     return view('index/table_booking');
// });

//-------------------- end table booking web------------------------------------------------//


//---------------------- customer web-----------------------------------------------//
Route::get('/cus_login', function () {
    return view('customer_login');
});

Route::get('/cus_register', function () {
    return view('customer_login');
});

// Route::get('/view_contact', function () {
//     return view('customer/contact_view');
// });



//-------------------- end customer web--------------------------------------------//


//<<<<<<<----------------------------------------- Admin Action section ----------------------------------------------->>>>>>>//

//<<<<<<<--------- admin action page --------->>>>>>>//
Route::post('/login_action', 'App\Http\Controllers\logincontroller@login'); 
Route::post('/register_action', 'App\Http\Controllers\logincontroller@register');
Route::get('/logout_action', 'App\Http\Controllers\logincontroller@logout'); 
Route::get('/create', 'App\Http\Controllers\logincontroller@get_country');
Route::get('/admin_view', 'App\Http\Controllers\logincontroller@view');
//<<<<<<<------- end admin action page ------->>>>>>>//

//<<<<<<<--------- Customer action page --------->>>>>>>//
 
Route::get('/view_contact', 'App\Http\Controllers\contact_controller@contact_view'); 
Route::get('/contact_details/{type}', 'App\Http\Controllers\contact_controller@view_details');
Route::get('/contact_delete/{type}', 'App\Http\Controllers\contact_controller@delete'); 
Route::get('/export-contact', [contact_controller::class, 'exportData']);
Route::get('/contact-export', [contact_controller::class, 'export']);

Route::post('/customer_login', 'App\Http\Controllers\customer_controller@cs_login'); 
Route::post('/customer_register', 'App\Http\Controllers\customer_controller@cs_register');
Route::get('/customer_view', 'App\Http\Controllers\customer_controller@cs_view');  
Route::post('/subscribe', 'App\Http\Controllers\customer_controller@cs_subscribe');
//<<<<<<<------- end Customer action page ------->>>>>>>//

//<<<<<<<--------- employee action page --------->>>>>>>//
Route::post('/ademployee_action', 'App\Http\Controllers\employee_controller@employee'); 
Route::get('/employee/add_employee', 'App\Http\Controllers\employee_controller@employee_role_view'); 
Route::get('/employee/view_employee', 'App\Http\Controllers\employee_controller@employee_view'); 
Route::get('/view/{type}', 'App\Http\Controllers\employee_controller@view_details'); 
Route::get('/edit/{type}', 'App\Http\Controllers\employee_controller@edit_employee'); 
Route::post('/update', 'App\Http\Controllers\employee_controller@update_employee');
Route::get('/delete/{type}', 'App\Http\Controllers\employee_controller@delete');
Route::get('/approve_employee/{type}', 'App\Http\Controllers\employee_controller@approve');
Route::get('/export-data', [employee_controller::class, 'exportData']);
Route::get('/export-users', [employee_controller::class, 'export']);


        //<<<<<<< ------------------- Employee Role --------------->>>>>>>//
Route::post('/add_role', 'App\Http\Controllers\employee_controller@role'); 
Route::get('/employee/view__employee_role', 'App\Http\Controllers\employee_controller@role_view'); 
Route::get('/edit_role/{type}', 'App\Http\Controllers\employee_controller@edit_role'); 
Route::post('/update_role', 'App\Http\Controllers\employee_controller@update_role');
Route::get('/delete_role/{type}', 'App\Http\Controllers\employee_controller@delete_role');
        //<<<<<<< ------------------- End Employee Role --------------->>>>>>>//
//<<<<<<<------- end employee action page ------->>>>>>>//


//<<<<<<<--------- menu action page --------->>>>>>>// 
Route::post('/addmenu', 'App\Http\Controllers\menu_controller@menu'); 
Route::get('/menu/add_menu', 'App\Http\Controllers\menu_controller@menu_type_view'); 
Route::get('/menu/view_menu_list', 'App\Http\Controllers\menu_controller@menu_view'); 
Route::get('/menu_view/{type}', 'App\Http\Controllers\menu_controller@menu_details'); 
Route::get('/edit_menu/{type}', 'App\Http\Controllers\menu_controller@menu_edit');
Route::post('/menuupdate', 'App\Http\Controllers\menu_controller@update_menu'); 
Route::get('/menu_delete/{type}', 'App\Http\Controllers\menu_controller@delete');  
Route::get('/menu_pdf', [menu_controller::class, 'exportData']);
Route::get('/menu_excel', [menu_controller::class, 'export']);
        //<<<<<<< ------------------- Menu Type --------------->>>>>>>//
Route::post('/add_type', 'App\Http\Controllers\menu_controller@type'); 
Route::get('/view__menu_type_list', 'App\Http\Controllers\menu_controller@type_view'); 
Route::get('/edit_type/{type}', 'App\Http\Controllers\menu_controller@edit_type'); 
Route::post('/update_type', 'App\Http\Controllers\menu_controller@update_type');
Route::get('/delete_type/{type}', 'App\Http\Controllers\menu_controller@delete_type');
        //<<<<<<< ------------------- End Menu Type --------------->>>>>>>//
//<<<<<<<------- end menu action page ------->>>>>>>//


//<<<<<<<--------- Restaurant Index action page --------->>>>>>>// 
Route::post('/addindex', 'App\Http\Controllers\restaurant_controller@index'); 
Route::get('/index_details', 'App\Http\Controllers\restaurant_controller@index_view'); 
Route::get('/edit_index/{type}', 'App\Http\Controllers\restaurant_controller@edit_index');
Route::post('/index_update', 'App\Http\Controllers\restaurant_controller@update_index'); 
Route::get('/delete_index/{type}', 'App\Http\Controllers\restaurant_controller@delete_index');
//<<<<<<<--------- End Restaurant Index action page --------->>>>>>>// 

//<<<<<<<--------- Restaurant Image action page --------->>>>>>>// 
Route::post('/addimage', 'App\Http\Controllers\restaurant_controller@restaurant'); 
Route::get('/image_list', 'App\Http\Controllers\restaurant_controller@restaurant_view'); 
Route::get('/edit_image/{type}', 'App\Http\Controllers\restaurant_controller@image_edit');
Route::post('/image_update', 'App\Http\Controllers\restaurant_controller@update_image'); 
Route::get('/image_delete/{type}', 'App\Http\Controllers\restaurant_controller@delete');  
//<<<<<<<------- end Restaurant Image action page ------->>>>>>>//

//<<<<<<<--------- Package action page --------->>>>>>>// 
Route::post('/addpackage', 'App\Http\Controllers\menu_controller@package'); 
Route::get('/package_list', 'App\Http\Controllers\menu_controller@package_view'); 
Route::get('/package_view/{type}', 'App\Http\Controllers\menu_controller@package_details'); 
Route::get('/edit_package/{type}', 'App\Http\Controllers\menu_controller@package_edit');
Route::post('/packageupdate', 'App\Http\Controllers\menu_controller@update_package'); 
Route::get('/package_delete/{type}', 'App\Http\Controllers\menu_controller@package_delete'); 
//<<<<<<<------- end Package action page ------->>>>>>>//

//<<<<<<<--------- Data base count action page --------->>>>>>>// 
Route::get('/dashboard', 'App\Http\Controllers\db_count_controller@db_count');
//<<<<<<<--------- End Data base count action page --------->>>>>>>//   

//-------------------- table booking web----------------------------------------------------//
Route::get('/booking_action', 'App\Http\Controllers\booking_controller@booking_table');
Route::get('/table_booking', 'App\Http\Controllers\booking_controller@booking_view'); 
Route::get('/booking_details/{type}', 'App\Http\Controllers\booking_controller@booking_details'); 
Route::get('/booking_pdf', [booking_controller::class, 'exportData']);
Route::get('/booking_excel', [booking_controller::class, 'export']);
Route::get('/booking_delete/{type}', 'App\Http\Controllers\booking_controller@delete');
Route::get('/tb', 'App\Http\Controllers\booking_controller@get_country');

Route::post('api/fetch-states', [booking_controller::class, 'fetchState']);
//-------------------- end table booking web------------------------------------------------//


//<<<<<<<--------- Banner action page --------->>>>>>>// 
Route::get('/banner_view', 'App\Http\Controllers\banner_controller@banner_view'); 
Route::get('/edit_banner/{type}', 'App\Http\Controllers\banner_controller@edit_banner');
Route::post('/update_banner', 'App\Http\Controllers\banner_controller@update_banner'); 
Route::get('/banner_details/{type}', 'App\Http\Controllers\banner_controller@view_details'); 
//<<<<<<<--------- End Banner action page --------->>>>>>>// 
 

//<<<<<<<----------------------------------------- End Admin Action section ----------------------------------------------->>>>>>>//

//<<<<<<<--------- Index action page --------->>>>>>>//
Route::get('/', 'App\Http\Controllers\index_controller@home_view');
Route::get('/menu', 'App\Http\Controllers\index_controller@menu_view');
Route::get('/about', 'App\Http\Controllers\index_controller@about_view');
Route::get('/client_contact', 'App\Http\Controllers\contact_controller@contact');
Route::get('/gallery', 'App\Http\Controllers\index_controller@gallery_view');
Route::get('/policy', 'App\Http\Controllers\index_controller@policy_view');
Route::get('/contact', 'App\Http\Controllers\index_controller@contact_view');
Route::get('/booking', 'App\Http\Controllers\index_controller@booking_view');
Route::get('/package', 'App\Http\Controllers\index_controller@package_view');
Route::get('/terms', 'App\Http\Controllers\index_controller@terms_view');
Route::get('/head', 'App\Http\Controllers\IndexController@headerIndex')->name('head');

// Route::get('/head', 'App\Http\Controllers\index_controller@header_index');
// Route::get('/', [index_controller::class, 'restaurant_index']);
//<<<<<<<---------  End Index action page --------->>>>>>>//









