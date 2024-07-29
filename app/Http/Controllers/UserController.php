<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Services\AlertService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $alertService;

    function __construct(AlertService $alertService)
    {
        $this->alertService = $alertService;
    } 

    function index()
    {
        $data['list_user'] = User::all();
        return view('pengguna.index', $data);
    }

    function create()
    {
        return view('pengguna.create');
    }

    function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'email' => 'required',
           'password' => 'required',
        ], [
            'nama.required' => 'Kolom nama harus diisi.',
            'username.required' => 'Kolom username harus diisi.',
            'email.required' => 'Kolom email harus diisi.',
            'password.required' => 'Kolom password harus diisi.',

        ]);

        $user = new User;
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email= request('email');
        $user->password = bcrypt(request('password'));
        $user->save();
        
        $this->alertService->success('Data Administrator Berhasil Di tambahkan');
        return redirect('pengguna');
    }

     function show(User $user)
    {
        $data['user'] = $user;
        return view('pengguna.show', $data);
    }

    function edit(User $user)
    {
        $data['user'] = $user;
        return view('pengguna.edit', $data);
    }

    function update(Request $request, User $user)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
           
        ], [
            'nama.required' => 'Kolom nama harus diisi.',
            'username.required' => 'Kolom username surat harus diisi.',
            'email.required' => 'Kolom email harus diisi.',
            'password.required' => 'Kolom password harus diisi.',

        ]);

        $user->nama = request('nama');
        $user->username = request('username');
        $user->email= request('email');
        $user->password = request('password');
        $user->save();
        
        $this->alertService->info('Data Administrator Berhasil Di Edit');
        return redirect('pengguna');
    }

    function delete(User $user)
    {
        $user->delete();

        $this->alertService->success('Data Berhasil Dihapus');
        return redirect('pengguna');
    }
}

