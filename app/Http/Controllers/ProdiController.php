<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function MI_page(){
        return view ('Prodi Manajemen Informatika');
    }
    public function TI_page(){
        return view ('Prodi Teknik Informatika');
    }
}