<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provinsi;

class ProvinsiController extends Controller
{
    public function index()
    {
        return Provinsi::all();
    }
 
    public function show($id)
    {
        return Provinsi::find($id);
    }

}
