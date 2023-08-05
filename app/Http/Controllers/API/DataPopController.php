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
    
    function add(request $request){
        $data_pop = DataPop::create([
            'POPID' => $request->pop_kode,
            'POPName' => $request->nama,
            'POPCoordinat' => $request->koordinat,
            'POPAddress' => $request->alamat,
            'kelurahan' => $request->kelurahan,
            'kecamatan' => $request->kecamatan,
            'POPKota' => $request->kota,
            'POPKind' => $request->building,
            'POPType' => $request->tipe,
        ]);
        return $data_pop;
    }
}
