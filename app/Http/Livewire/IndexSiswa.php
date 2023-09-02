<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class IndexSiswa extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public $nis, $nisn, $nama, $jenis_kelamin, $tgl_lahir, $alamat, $email, $username, $password,
    $no_hp, $foto, $role_id;
    public $search;
    public $paginate = 5;

    public function render()
    {
        $dataSiswa = $this->search === null ?
        User::latest()
        ->where('role_id', 2) // Filter berdasarkan role_id 2
        ->paginate($this->paginate) :
        User::latest()
            ->where('role_id', 2) // Filter berdasarkan role_id 2
            ->where(function ($query) {
            $query->where('nisn', 'like', '%' . $this->search . '%')
                ->orWhere('nis', 'like', '%' . $this->search . '%')
                ->orWhere('nama', 'like', '%' . $this->search . '%')
                ->orWhere('no_hp', 'like', '%' . $this->search . '%');
            })
            ->paginate($this->paginate);

        return view('livewire.index-siswa', [
            'dataSiswa' => $dataSiswa,
        ]);
    }
}
