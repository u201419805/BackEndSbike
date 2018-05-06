<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Station;

class StationController extends Controller
{
    //

    public function allStations(){

        return Station::all();
        
    }

    public function findStation(Request $request){

        $station = Station::find($request->stationid);
        
        return $station;
    }

}
