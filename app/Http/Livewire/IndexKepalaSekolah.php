<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\JenisKelamin;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;

class IndexKepalaSekolah extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public $nip, $nama, $tgl_lahir, $alamat, $email, $username, $password,
    $no_hp, $foto, $role_id;
    public $jenis_kelamin = [];
    public $search;
    public $paginate       = 5;
    public $currentStep    = 1;
    
    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
        'nama'          => 'required',
        'jenis_kelamin' => 'required',
        'tgl_lahir'     => 'required',
        'alamat'        => 'required',
        'foto'          => 'nullable|max:1024',
        ]);

        $this->currentStep = 2;
    }

    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
        'nip'      => 'nullable',
        'email'    => 'required',
        'username' => 'required',
        'password' => 'required',
        'no_hp'    => 'required|numeric',
        ]);

        $this->currentStep = 3;
    }

    public function submitForm()
    {
        $pathFoto      = null;
        $defaultRoleId = 4;

        if ($this->foto !== null) {
        $newName  = now()->timestamp . '_' . $this->foto->getClientOriginalName();
        $pathFoto = $this->foto->storeAs('foto_kepsek', $newName, 'public'); // Simpan foto dengan penyimpanan publik
        }

        $hashedPassword = Hash::make($this->password);

        $dataGuru = [
        'nip'           => $this->nip,
        'nama'          => $this->nama,
        'jenis_kelamin' => $this->jenis_kelamin,
        'tgl_lahir'     => $this->tgl_lahir,
        'alamat'        => $this->alamat,
        'email'         => $this->email,
        'username'      => $this->username,
        'password'      => $hashedPassword,
        'no_hp'         => $this->no_hp,
        'role_id'       => $defaultRoleId,
        'foto'          => $pathFoto,
        ];

        User::create($dataGuru);

        $this->clearForm();
        // $this->successMessage = 'You\'ve successfully added';
        return redirect('/kepala-sekolah')->with([
        'toast_type' => 'success', // Jenis pesan (success, error, warning, info)
        'toast_message' => 'Berhasil Menambahkan Kepala Sekolah', // Isi pesan
        ]);

    }

    public function back($step)
    {
        $this->currentStep = $step;
    }

    public function clearForm()
    {
        $this->nip           = '';
        $this->nama          = '';
        $this->jenis_kelamin = null;
        $this->tgl_lahir     = '';
        $this->alamat        = '';
        $this->email         = '';
        $this->username      = '';
        $this->password      = '';
        $this->no_hp         = '';
        $this->foto          = '';
    }
  
    public function render()
    {
        $dataKS = $this->search === null ?
        User::latest()
            ->where('role_id', 4) // Filter berdasarkan role_id 4
            ->paginate($this->paginate) :
        User::latest()
            ->where('role_id', 4) // Filter berdasarkan role_id 4
            ->where(function ($query) {
            $query->where('nip', 'like', '%' . $this->search . '%')
                ->orWhere('nama', 'like', '%' . $this->search . '%')
                ->orWhere('no_hp', 'like', '%' . $this->search . '%');
            })
            ->paginate($this->paginate);

        return view('livewire.index-kepala-sekolah', [
            'dataKS' => $dataKS,
        ]);
    }
}
