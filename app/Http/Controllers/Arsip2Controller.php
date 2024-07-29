<?php

namespace App\Http\Controllers;
use App\Models\Arsip2;

use Illuminate\Http\Request;
use App\Services\AlertService;

class Arsip2Controller extends Controller
{

    protected $alertService;

    function __construct(AlertService $alertService)
    {
        $this->alertService = $alertService;
    }

    function index()
    {
        $data['list_arsip2'] = Arsip2::all();
        return view('arsip2.index', $data);
    }

    function create()
    {
        return view('arsip2.create');
    }

    function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nomor_surat' => 'required',
            'tujuan' => 'required',
           
        ], [
            'nama.required' => 'Kolom nama harus diisi.',
            'nomor_surat.required' => 'Kolom nomor surat harus diisi.',
            'tujuan.required' => 'Kolom tujuan harus diisi.',

        ]);

      $arsip2 = new Arsip2;
      $arsip2->nama = request('nama');
        $arsip2->nomor_surat= request('nomor_surat');
        $arsip2->tujuan = request('tujuan');
        $arsip2->file = request('file');
        $arsip2->save();
        
         $this->alertService->success('Data SPPD Dalam Kota Berhasil Di tambahkan');
        return redirect('arsip2');
    }

     function show(Arsip2 $arsip2)
    {
        $data['arsip2'] = $arsip2;
        return view('arsip2.show', $data);
    }

    function edit(Arsip2 $arsip2)
    {
        $data['arsip2'] = $arsip2;
        return view('arsip2.edit', $data);
    }

    function update(Request $request, Arsip2 $arsip2)
    {
         $request->validate([
            'nama' => 'required',
            'nomor_surat' => 'required',
            'tujuan' => 'required',
           
        ], [
            'nama.required' => 'Kolom nama harus diisi.',
            'nomor_surat.required' => 'Kolom nomor surat harus diisi.',
            'tujuan.required' => 'Kolom tujuan harus diisi.',

        ]);

        $arsip2->nama = request('nama');
        $arsip2->nomor_surat= request('nomor_surat');
        $arsip2->tujuan = request('tujuan');
        $arsip2->file = request('file');
        $arsip2->save();
        
        $this->alertService->info('Data SPPD Dalam Kota Berhasil Di Edit');
        return redirect('arsip2');
    }

    function delete(Arsip2 $arsip2)
    {
        $arsip2->delete();
        
        $this->alertService->success('Data Berhasil Dihapus');
        return redirect('arsip2');
    }
}

