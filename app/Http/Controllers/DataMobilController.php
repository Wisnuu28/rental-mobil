<?php

namespace App\Http\Controllers;

use App\Picture;
use Illuminate\Http\Request;

class DataMobilController extends Controller
{
    public function index()
    {
        $data_mobil = Picture::latest()->paginate(5);
        return view('pages.dashboard', compact('data_mobil'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_mobil' => 'required',
            'harga_sewa' => 'required',
            'keterangan' => 'required',
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
            $file = $request->file('file');

            $nama_file = time()."_".$file->getClientOriginalName();

            $tujuan_upload = 'data_file';
            $file->move($tujuan_upload,$nama_file);

            Picture::create([
                'nama_mobil' => $request->nama_mobil,
                'harga_sewa' => $request->harga_sewa,
                'keterangan' => $request->keterangan,
                'file' => $nama_file
            ]);
        return redirect('/dashboard')->with('success','Data Added Successfully');
    }

    public function edit($id)
    {
        $data_mobil = Picture::find($id);
        return view ('pages.edit');
    }
    public function upload($id, Request $request)
    {
        $this->validate($request, [
            'nama_mobil' => 'required',
            'harga_sewa' => 'required',
            'keterangan' => 'required',
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]); 
        $file = $request->file('file');

        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);

        $data_mobil = Picture::find($id);
        $data_mobil->nama_mobil = $request->nama_mobil;
        $data_mobil->harga_sewa = $request->harga_sewa;
        $data_mobil->keterangan = $request->keterangan;
        $data_mobil->file = $nama_file;
        $data_mobil->save();
        return redirect ('/dashboard');
    }
}
