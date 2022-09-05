<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{
    public function index()
    {
        return view('admin.laporan');
    }
    public function datakerja()
    {
        return view('admin.data-kerja');
    }
    public function datakuliah()
    {
        return view('admin.data-kuliah');
    }
    public function datawirausaha()
    {
        return view('admin.data-wirausaha');
    }
    public function databelumkerja()
    {
        return view('admin.data-belumkerja');
    }
}