<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class user extends Controller
{
    //
    function users(){
        return DB::select('select * from users');
    }
}
