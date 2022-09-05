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
        $perusahaan = DB::table('perusahaan')->get();
        return view('admin/perusahaan',['perusahaan' => $perusahaan]);
    }
    public function tambahperusahaan()
    {
        $perusahaan = DB::table('perusahaan')->first();
        return view('admin/tambah-perusahaan')->with(compact('perusahaan'));
    }
    public function createperusahaan(Request $request)
    {
        DB::table('perusahaan')->insert([
            'nama_perusahaan'=>$request->nama_perusahaan,
            'tahun_awal'=>$request->tahun_awal,
            'tahun_akhir'=>$request->tahun_akhir,
            'bidang'=>$request->bidang,
        ]);
        return redirect('perusahaan');
    }
    public function lowongan()
    {
        return view('admin.lowongan');
    }
    public function tambahlowongan()
    {
        $lowongan = DB::table('lowongan')->first();
        return view('admin/tambah-lowongan')->with(compact('lowongan'));
    }
    // public function createlowongan(Request $request)
    // {
    //     //upload gambar
    //     $file = $request->foto;
    //     $fileName = time() . '.'. $file->extension();
    //     $file->move(public_path('foto'), $fileName);

    //     DB::table('lowongan')->insert([
    //         'nama_perusahaan' => $request->nama_perusahaan,
    //         'kebutuhan' => $request->kebutuhan,
    //         'foto' => $fileName,
    //         'tangal_awal' => $request->tanggal_awal,
    //         'tanggal_akhir' => $request->tanggal_akhir,
    //     ]);

        
    //     return redirect('admin/lowongan');
    // }
    public function editlowongan()
    {
        return view('admin.edit-lowongan');
    }
    public function alumni()
    {
        $alumni = DB::table('alumni')->get();
        return view('admin/alumni',['alumni' => $alumni]);
    }
    public function tambahalumni()
    {
        $alumni = DB::table('alumni')->first();
        return view('admin/tambah-alumni')->with(compact('alumni'));
    }
    public function createalumni(Request $request)
    {
        DB::table('alumni')->insert([
            'nama_siswa'=>$request->nama_siswa,
            'tahun_awal'=>$request->tahun_awal,
            'tahun_akhir'=>$request->tahun_akhir,
            'jurusan'=>$request->jurusan,
            'status'=>$request->status,
        ]);
        return redirect('alumni');
    }
    public function editalumni($id)
    {
        $data = DB::table('alumni')->where('id',$id)->first();
        
        return view('admin.edit-alumni')->with(compact('data'));
    }

}
