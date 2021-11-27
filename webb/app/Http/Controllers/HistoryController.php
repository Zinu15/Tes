<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index(){
        return view('halamanindex.history');
    }
    public function list()
    {
        $data = Order::all();
        return view('halamanindex/history',['orders'=>$data]);
    }
}
