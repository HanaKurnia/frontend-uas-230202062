<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class DashboardController extends Controller
{
public function index()
{
    $matkul = DB::table('matkul')->get(); 
    $mahasiswa = DB::table('mahasiswa')->get();    

    return view('dashboard', compact('matkul', 'mahasiswa'));
}
}