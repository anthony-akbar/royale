<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index(){
        $sales = Sale::all();
        return view('admin.sales.index', compact('sales'));
    }
}
