<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataTahunAjaranController extends Controller
{
    public function index()
    {
        return view('DataTahunAjaran/index');
    }
}
