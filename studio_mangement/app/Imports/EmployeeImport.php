<?php

namespace App\Imports;
use App\Models\Employee;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class EmployeeImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row)
        {
            $customer = Employee::where('email', $row['email'])->first();
            if($customer){

                $customer->update([
                    'name' => $row['name'],
                    'phone' => $row[''],
                ]);

            }else{

                Employee::create([
                    'name' => $row['name'],
                    'email' => $row['email'],
                    'phone' => $row['phone'],
                ]);
            }

        }
    }
}
