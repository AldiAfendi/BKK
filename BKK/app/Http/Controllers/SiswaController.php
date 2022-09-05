<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->siswa = new siswa();
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index()
    {
        return view('tampilan.index');
    }
    public function listing()
    {
        return view('tampilan.listing');
    }
    public function blog()
    {
        return view('tampilan.blog');
    }
    public function bekerja()
    {
        return view('tampilan.bekerja');
    }
    public function kuliah()
    {
        return view('tampilan.kuliah');
    }
    public function wirausaha()
    {
        return view('tampilan.wirausaha');
    }
    public function profile()
    {
        return view('tampilan.profile');
    }
}
