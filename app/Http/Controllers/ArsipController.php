<?php

namespace App\Http\Controllers;
use App\Models\Arsip;


use Illuminate\Http\Request;
use App\Services\AlertService;

class ArsipController extends Controller
{
    protected $alertService;

    function __construct(AlertService $alertService)
    {
        $this->alertService = $alertService;
    }

    function index(Request $request)
    {
        $search = $request->get('search');
        $perPage = $request->get('perPage', 10); // Default 10 jika perPage tidak ada

        $list_arsip = Arsip::query()
            ->when($search, function($query, $search) {
                return $query->where('nama', 'like', "%{$search}%")
                            ->orWhere('nomor_surat', 'like', "%{$search}%");
            })
            ->paginate($perPage);

        return view('arsip.index', compact('list_arsip', 'search', 'perPage'));
    }
    

    function create()
    {
        return view('arsip.create');
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
        
    
      $arsip = new Arsip;
      $arsip->nama = request('nama');
        $arsip->nomor_surat= request('nomor_surat');
        $arsip->tujuan = request('tujuan');
        $arsip->file = request('file');
        $arsip->save();
        
        $this->alertService->success('Data SPPD Dalam Kota Berhasil Di tambahkan');
        return redirect('arsip');
    }

     function show(Arsip $arsip)
    {
        $data['arsip'] = $arsip;
        return view('arsip.show', $data);
    }

    function edit(Arsip $arsip)
    {
        $data['arsip'] = $arsip;
        return view('arsip.edit', $data);
    }

    function update(Request $request, Arsip $arsip)
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
        
        $arsip->nama = request('nama');
        $arsip->nomor_surat= request('nomor_surat');
        $arsip->tujuan = request('tujuan');
        $arsip->file = request('file');
        $arsip->save();

        $this->alertService->info('Data SPPD Dalam Kota Berhasil Di Edit');

        return redirect('arsip');
    }

    function delete(Arsip $arsip)
    {
        $arsip->delete();

        $this->alertService->success('Data Berhasil Dihapus');
        return redirect('arsip');
    }
}

