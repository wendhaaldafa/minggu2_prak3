<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function sarana_kantor(){
        return view ('sarana kantor');
    }
    public function sarana_lab(){
        return view ('sarana lab');
    }
    public function sarana_kelas(){
        return view ('sarana kelas');
    }
    public function sarana_lainnya(){
        return view ('sarana lainnya');
    }
}