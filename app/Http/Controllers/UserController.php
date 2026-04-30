<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return "Daftar mahasiswa";
    }

    public function show($id) {
        return "Detail Nama  Mahasiswa dengan ID : ".$id;
    }
}
