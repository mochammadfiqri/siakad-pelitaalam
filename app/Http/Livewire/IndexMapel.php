<?php

namespace App\Http\Livewire;

use App\Models\KelompokPembelajaran;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\MataPelajaran;

class IndexMapel extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $paginate = 5;
    public $search;
    public $kode_mapel, $name, $kkm, $user_id, $kelompok_id;

    protected function rules()
    {
        return [
            'kode_mapel' => 'required',
            'name' => 'required',
            'kkm' => 'required',
        ];
    }

    protected $pesan = [
        'kode_mapel.required' => 'Kode Mapel tidak boleh kosong',
        'name.required' => 'Nama tidak boleh kosong',
        'kkm.required' => 'KKM tidak boleh kosong',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function createMapel() {
        $this->validate();

        $mapel = MataPelajaran::create([
            'kode_mapel' => $this->kode_mapel,
            'name' => $this->name,
            'kkm' => $this->kkm,
            'kelompok_id' => $this->kelompok_id,
        ]);

        $mapel->users()->sync($this->user_id);

        $this->resetModal();
        return redirect('/tahun-akademik/mapel')->with([
            'toast_type' => 'success', // Jenis pesan (success, error, warning, info)
            'toast_message' => 'Berhasil Menambahkan Mata Pelajaran', // Isi pesan
        ]);
    }

    public function resetModal() {
        $this->kode_mapel = '';
        $this->name = '';
        $this->kkm = '';
    }

    public function render()
    {
        $kelompok_pemb = KelompokPembelajaran::all();

        $guru = User::where('role_id', '=', '3')
            ->where('status', '=', 'active')
            ->get();
            
        $mapelKelompokA = $this->search === null ?
        MataPelajaran::latest()
            ->where('kelompok_id', 1) // Filter berdasarkan Kelompok A
            ->paginate($this->paginate) :
        MataPelajaran::latest()
            ->where('kode_mapel', 'like', '%' . $this->search . '%')
            ->orWhere('name', 'like', '%' . $this->search . '%')
            ->orWhere('kkm', 'like', '%' . $this->search . '%')
            ->paginate($this->paginate);
        
        $mapelKelompokB = $this->search === null ?
        MataPelajaran::latest()
            ->where('kelompok_id', 2) // Filter berdasarkan Kelompok B
            ->paginate($this->paginate) :
        MataPelajaran::latest()
            ->where('kode_mapel', 'like', '%' . $this->search . '%')
            ->orWhere('name', 'like', '%' . $this->search . '%')
            ->orWhere('kkm', 'like', '%' . $this->search . '%')
            ->paginate($this->paginate);

        $mapelKelompokC = $this->search === null ?
        MataPelajaran::latest()
            ->where('kelompok_id', 3) // Filter berdasarkan Kelompok C
            ->paginate($this->paginate) :
        MataPelajaran::latest()
            ->where('kode_mapel', 'like', '%' . $this->search . '%')
            ->orWhere('name', 'like', '%' . $this->search . '%')
            ->orWhere('kkm', 'like', '%' . $this->search . '%')
            ->paginate($this->paginate);

        return view('livewire.index-mapel', [
            'mapelKelompokA' => $mapelKelompokA,
            'mapelKelompokB' => $mapelKelompokB,
            'mapelKelompokC' => $mapelKelompokC,
            'guru' => $guru,
            'kelompok_pemb' => $kelompok_pemb
        ]);
    }
}
