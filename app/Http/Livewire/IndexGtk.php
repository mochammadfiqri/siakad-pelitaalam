<?php

namespace App\Http\Livewire;

use App\Models\JenisKelamin;
use App\Models\MataPelajaran;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class IndexGtk extends Component
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
  public $successMessage = '';
  public $mapel_id       = [];
  public $countGuru;

  public function mount()
  {
    $this->updateTotalCount();
  }

  public function updateTotalCount()
  {
    $this->countGuru = User::where('role_id', 3)->count();
  }

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
    'mapel_id' => 'required',
    ]);

    $this->currentStep = 3;
  }

  public function submitForm()
  {
    $pathFoto      = null;
    $defaultRoleId = 3;

    if ($this->foto !== null) {
      $newName  = now()->timestamp . '_' . $this->foto->getClientOriginalName();
      $pathFoto = $this->foto->storeAs('foto_guru', $newName, 'public'); // Simpan foto dengan penyimpanan publik
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
      'mapel_id'      => $this->mapel_id,
      'foto'          => $pathFoto,
    ];

    User::create($dataGuru);

    $this->clearForm();
    // $this->successMessage = 'You\'ve successfully added';
    return redirect('/gtk')->with([
      'toast_type' => 'success', // Jenis pesan (success, error, warning, info)
      'toast_message' => 'Berhasil Menambahkan Guru', // Isi pesan
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
    $this->mapel_id      = '';
    $this->foto          = '';
  }

  public function render()
  {
    $dataGuru = $this->search === null ?
    User::latest()
      ->where('role_id', 3) // Filter berdasarkan role_id 3
      ->paginate($this->paginate) :
    User::latest()
        ->where('role_id', 3) // Filter berdasarkan role_id 3
        ->where(function ($query) {
          $query->where('nip', 'like', '%' . $this->search . '%')
            ->orWhere('nama', 'like', '%' . $this->search . '%')
            ->orWhere('no_hp', 'like', '%' . $this->search . '%');
          })
        ->paginate($this->paginate);

      $mapel = $this->search === null ?
      MataPelajaran::latest()->paginate($this->paginate) :
      MataPelajaran::latest()
        ->where('kode_mapel', 'like', '%' . $this->search . '%')
        ->orWhere('name', 'like', '%' . $this->search . '%')
        ->paginate($this->paginate);

      return view('livewire.index-gtk', [
        'dataGuru' => $dataGuru,
        'mapel'    => $mapel,
      ]);
  }
}
