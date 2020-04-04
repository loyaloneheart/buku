<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HariController extends Controller
{
    public function index()
    {
        // return $data =["senin","selasa","rabu","kamis","jum'at","sabtu","minggu"];
        return view('hari.index');
    }
}
