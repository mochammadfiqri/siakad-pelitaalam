<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Rombel;
use App\Models\Jurusan;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class IndexSiswa extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public $nis, $nisn, $nama, $jenis_kelamin, $tgl_lahir, $alamat, $email, $username, $password,
    $no_hp, $foto, $role_id, $rombel_id, $siswa_id, $siswaName;
    public $search;
    public $currentStep    = 1;
    public $paginate = 5;

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
        'nis'      => 'required',
        'nisn'     => 'required',
        'email'    => 'required',
        'username' => 'required',
        'password' => 'required',
        'no_hp'    => 'required|numeric',
        'rombel_id'=> 'required',
        ]);

        $this->currentStep = 3;
    }

    public function submitForm()
    {
        $pathFoto      = null;
        $defaultRoleId = 2;

        if ($this->foto !== null) {
            $newName  = now()->timestamp . '_' . $this->foto->getClientOriginalName();
            $pathFoto = $this->foto->storeAs('foto_siswa', $newName);
        }

        $hashedPassword = Hash::make($this->password);

        $dataSiswa = [
        'nama'          => $this->nama,
        'jenis_kelamin' => $this->jenis_kelamin,
        'tgl_lahir'     => $this->tgl_lahir,
        'alamat'        => $this->alamat,
        'nis'           => $this->nis,
        'nisn'          => $this->nisn,
        'email'         => $this->email,
        'username'      => $this->username,
        'password'      => $hashedPassword,
        'no_hp'         => $this->no_hp,
        'role_id'       => $defaultRoleId,
        'rombel_id'     => $this->rombel_id,
        'foto'          => $pathFoto,
        ];

        User::create($dataSiswa);

        $this->clearForm();
        // $this->successMessage = 'You\'ve successfully added';
        return redirect('/siswa')->with([
        'toast_type' => 'success', // Jenis pesan (success, error, warning, info)
        'toast_message' => 'Berhasil Menambahkan Siswa', // Isi pesan
        ]);

    }

    public function back($step)
    {
        $this->currentStep = $step;
    }

    public function clearForm()
    {
        $this->nama          = '';
        $this->jenis_kelamin = null;
        $this->tgl_lahir     = '';
        $this->alamat        = '';
        $this->nis           = '';
        $this->nisn          = '';
        $this->email         = '';
        $this->username      = '';
        $this->password      = '';
        $this->no_hp         = '';
        $this->rombel_id     = null;
        $this->foto          = '';
    }
 
    public function deleteSiswa(int $siswa_id)
    {
        $this->siswa_id = $siswa_id;
        $siswa = User::find($this->siswa_id);
        if ($siswa) {
            $this->siswaName = $siswa->nama;
        }
    }

    public function destroySiswa()
    {
        $siswa = User::find($this->siswa_id);
        if ($siswa) {
            $this->siswaName = $siswa->nama;
        }

        if ($siswa->foto) {
            Storage::delete($siswa->foto);
        }
        // if ($siswa->foto) {
        //     Storage::delete('public/foto_siswa/' . $siswa->foto);
        // }

        
        // Hapus data dalam tabel "books"
        $siswa->delete();

        return redirect('/siswa')->with([
        'toast_type' => 'success', // Jenis pesan (success, error, warning, info)
        'toast_message' => 'Berhasil Menghapus Siswa', // Isi pesan
        ]);
    }

    public function render()
    {
        $dataSiswa = $this->search === null ?
        User::latest()
        ->where('role_id', 2) // Filter berdasarkan role_id 2
        ->paginate($this->paginate) :
        User::latest()
            ->where(function ($query) {
            $query->where('nisn', 'like', '%' . $this->search . '%')
                ->orWhere('nis', 'like', '%' . $this->search . '%')
                ->orWhere('nama', 'like', '%' . $this->search . '%')
                ->orWhere('no_hp', 'like', '%' . $this->search . '%');
            })
            ->orWhereHas('rombel', function ($query) {
                $query->where('kelas', 'like', '%' . $this->search . '%');
            })
            ->paginate($this->paginate);

        $dataRombel = Rombel::all();
        $jurusan = Jurusan::all();

        return view('livewire.index-siswa', [
            'dataSiswa' => $dataSiswa,
            'dataRombel' => $dataRombel,
            'jurusan' => $jurusan,
        ]);
    }
}
