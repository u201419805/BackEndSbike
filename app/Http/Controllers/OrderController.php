<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Operator;

class OrderController extends Controller
{
    //

    public function newOrder(Request $request){

        $order = new Order();

        $order->userid = $request->userid;
        $order->stationid = $request->stationid;
        //$order->status = $request->status;
        
        $result = $order->save();

        $status = $result > 0 ;
        
        return ["status" => $status];
    }

    public function updateOrder(Request $request){

        $order = Order::find($request->orderid);

        $order->startingprice = $request->startingprice;

        $result = $order->save();

        $status = $result > 0 ;
        
        return ["status" => $status];
    }

    public function lastOrder(Request $request){

        $userid = $request->userid;

        $result = Order::where("userid",$userid)->whereBetween("status", [0, 1])->count();
        $order = Order::where("userid",$userid)->whereBetween("status", [0, 1])->get();

        $state = $result > 0 ;
        
        return $order;
    }
    public function allOrdersByStation(Request $request){

        $userid = $request->userid;
        $status = $request->status;

        $operator = Operator::where("userid",$userid)->first();

        $order = Order::where("stationid",$operator->stationid)->where("status",$status)->get();

        //$state = $result > 0 ;
        
        return $order;
    }

}
