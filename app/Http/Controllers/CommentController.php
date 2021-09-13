<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment($nama, $pesan) {
        return "Nama: '$nama' <br>
            Pesan: $pesan";
    }
}
