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
            'POPCluster' => "-",
            'POPFeeder' => 0,
            'POPPlanner' => 0,
            'POPConstruct' => "-",
            'CyberKey' => "-",
            'Perapihan' => "-",
            'PIC' => "-",
            'POPWilayah' => "-",
            'kawasan' => "-",
            'padlock' => "-",
            'keymanual' => 0,
            'areahar' => "-",
            'mipop' => "-",
            'popstat' => "-",
            'sdh' => 0,
            'dwdm' => 0,
            'L3' => 0,
            'kaki' => 0,
            'trunk_kota' => 0,
            'trunk_reg' => 0,
            'trunk_island' => 0,
            'trunk_intl' => 0,
            'bw_trunk_10g' => 0,
            'olt' => 0,
            'flagPM' => 0,
            'popProject' => "-",
        ]);
        return $data_pop;
    }
}
