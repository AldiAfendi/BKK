<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function user()
    {
        return view('admin.user');
    }
    public function tambah()
    {
        return view('admin.tambah-user');
    }
    public function edit()
    {
        return view('admin.edit-user');
    }
    public function perusahaan()
    {
        return view('admin.perusahaan');
    }
    public function tambahperusahaan()
    {
        return view('admin.tambah-perusahaan');
    }
    public function lowongan()
    {
        return view('admin.lowongan');
    }
    public function tambahlowongan()
    {
        return view('admin.tambah-lowongan');
    }
    public function editlowongan()
    {
        return view('admin.edit-lowongan');
    }
    public function alumni()
    {
        return view('admin.alumni');
    }

}
