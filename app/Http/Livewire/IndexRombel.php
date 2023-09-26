<?php

namespace App\Http\Livewire;

use App\Models\Jurusan;
use App\Models\Rombel;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class IndexRombel extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $paginate = 5;
    public $search;
    public $kelas, $kode_kelas, $jurusan_id, $user_id;

    protected function rules()
    {
        return [
            'kelas' => 'required',
            'kode_kelas' => 'required',
            'jurusan_id' => 'required',
            'user_id' => 'required',
        ];
    }

    protected $pesan = [
        'kelas.required' => 'Kelas tidak boleh kosong',
        'kode_kelas.required' => 'Kode Kelas tidak boleh kosong',
        'jurusan_id.required' => 'Jurusan tidak boleh kosong',
        'user_id.required' => 'Wali Kelas tidak boleh kosong',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    // public function showDetail($rombel_id) 
    // {
    //      $this->emit('navigateToRombelDetail', $rombel_id);
    // }

    public function createRombel() {
        $this->validate();

        Rombel::create([
            'kelas' => $this->kelas,
            'kode_kelas' => $this->kode_kelas,
            'jurusan_id' => $this->jurusan_id,
            'user_id' => $this->user_id,
        ]);

        $this->resetModal();
        return redirect('/tahun-akademik/rombel')->with([
            'toast_type' => 'success', // Jenis pesan (success, error, warning, info)
            'toast_message' => 'Berhasil Menambahkan Rombel', // Isi pesan
        ]);
    }
    
    public function resetModal() {
        $this->kelas = '';
        $this->kode_kelas = '';
        $this->jurusan_id = '';
        $this->user_id = '';    
    }

    public function render()
    {
        $walas = User::where('role_id', '=', '3')
            ->where('status', '=', 'active')
            ->get();
        
        $jurusan = Jurusan::all();

        $reguler = $this->search === null ?
            Rombel::latest()->paginate($this->paginate) :
            Rombel::latest()
                ->where('kelas', 'like', '%' . $this->search . '%')
                ->orWhere('kode_kelas', 'like', '%' . $this->search . '%')
                ->orWhereHas('walas', function ($query) {
                    $query->where('nama', 'like', '%' . $this->search . '%');
                })
                ->orWhereHas('jurusan', function ($query) {
                    $query->where('nama', 'like', '%' . $this->search . '%');
                })
                ->paginate($this->paginate);

        return view('livewire.index-rombel', [
            'reguler' => $reguler,
            'walas' => $walas,
            'jurusan' => $jurusan,
        ]);
    }
    
}
