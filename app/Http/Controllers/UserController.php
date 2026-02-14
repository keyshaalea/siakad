<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\models\dosen;

class UserController extends Controller
{
    public function index() {
        $data = DB::connection()->table('dosen')->get();
        //return $data;
            
    
        return view('admin/user/index', compact('data'));
    }
}
