<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kota;

class KotaController extends Controller
{
    public function index()
    {
        return Kota::all();
    }
 
    public function show($id)
    {
        return Kota::find($id);
    }
    
}
