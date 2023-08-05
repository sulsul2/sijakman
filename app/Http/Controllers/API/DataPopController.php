<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\DataPop;
use Illuminate\Http\Request;

class DataPopController extends Controller
{
    function all(request $request){
        $pop = DataPop::all();
        return $pop;
    }
}
