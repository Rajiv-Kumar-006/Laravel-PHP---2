<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataBaseBuilder extends Controller
{
    //
    function queries()
    {

        //1. get the data from database
        $result = DB::table('users')->get();
        return $result;

        // 2. insert hte data into database
        //     $newUser = [
        //         'name' => 'John Doe',
        //         'email' => 'john@gmail.com',
        //         'password' => 54323456,
        //     ];
        //     $inserted = DB::table('users')->insert($newUser);
        //     if($inserted){
        //         return "Data inserted successfully";
        //     } else {
        //         return "Failed to insert data";
        //     }
        // }


    }
}
