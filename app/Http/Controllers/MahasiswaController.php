<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index() {
        $data = array (
            'title' => 'Data User',
            'menuAdminMahasiswa' =>'active'
        );
        return view('admin/mahasiswa/index',$data);
    }
}


