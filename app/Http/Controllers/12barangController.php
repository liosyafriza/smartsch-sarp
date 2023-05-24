<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\input_barang;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\DB;

class barangController extends Controller
{
    
    public function barang(){
        $barangs = input_barang::latest()->paginate(5);
        return view('inputbrg',compact('barangs'));
    }

}
