<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Booking;
use App\Models\Package;
use App\Models\Menu;


class db_count_controller extends Controller
{
    
    public function db_count(Request $request) 
    {
       //-----------count in employee----------//
       $employee = Employee::count();
       $booking = Booking::count();
       $package = Package::count();
        $menu = Menu::count();
       return view('admin/admin_dashboard', compact('employee','booking','package','menu'));
    }

}
