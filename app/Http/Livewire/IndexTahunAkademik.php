<?php

namespace App\Http\Livewire;

use App\Models\Semester;
use App\Models\User;
use Livewire\Component;
use App\Models\TahunAkademik;

class IndexTahunAkademik extends Component
{
    public $tahun_awal, $tahun_akhir, $tgl_awal, $tgl_akhir;
    public $search;
    public $semester_id = [];
    public $user_id = [];

    protected function rules()
    {
        return [
            'tahun_awal' => 'required|max:4',
            'tahun_akhir' => 'required|max:4',
            'tgl_awal' => 'required',
            'tgl_akhir' => 'required',
        ];
    }

    protected $pesan = [
        'tahun_awal.required' => 'Tahun awal tidak boleh kosong',
        'tahun_akhir.required' => 'Tahun akhir boleh kosong',
        'tahun_awal.max' => 'Harap isikan tahun awal yang benar',
        'tahun_akhir.max' => 'Harap isikan tahun akhir yang benar',
        'tgl_awal.required' => 'Tanggal awal tidak boleh kosong',
        'tgl_akhir.required' => 'Tanggal akhir tidak boleh kosong'
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function createTA() {
        $this->validate();

        // $tahun_akademik = [
        //     'tahun_awal' => $this->tahun_awal,
        //     'tahun_akhir' => $this->tahun_akhir,
        //     'tgl_awal' => $this->tgl_awal,
        //     'tgl_akhir' => $this->tgl_akhir,
        // ];
        
        // TahunAkademik::create($tahun_akademik);

        $tahun_akademik = TahunAkademik::create([
            'tahun_awal' => $this->tahun_awal,
            'tahun_akhir' => $this->tahun_akhir,
            'semester_id' => $this->semester_id,
            'tgl_awal' => $this->tgl_awal,
            'tgl_akhir' => $this->tgl_akhir,
        ]);
        $tahun_akademik->users()->sync($this->user_id);

        $this->resetInput();
        return redirect('/tahun-akademik')->with([
            'toast_type' => 'success', // Jenis pesan (success, error, warning, info)
            'toast_message' => 'Berhasil Menambahkan Tahun Akademik', // Isi pesan
        ]);
    }

    public function closeModal() {
        $this->tahun_awal = '';
        $this->tahun_akhir = '';
        $this->tgl_awal = null;
        $this->tgl_akhir = null;
    }
    public function render()
    {
        $semester = Semester::all();

        $users = User::where('role_id', '=', '4')
            ->where('status', '=', 'active')
            ->get();

        $dataTA = $this->search === null ?
        TahunAkademik::latest()->get() :
        TahunAkademik::latest()
            ->where('tgl_awal', 'like', '%' . $this->search . '%')
            ->orWhere('tgl_akhir', 'like', '%' . $this->search . '%')
            ->orWhere('tahun_awal', 'like', '%' . $this->search . '%')
            ->orWhere('tahun_akhir', 'like', '%' . $this->search . '%')
            ->get();

        return view('livewire.index-tahun-akademik', [
            'dataTA' => $dataTA,
            'users' => $users,
            'semester' => $semester,
        ]);
    }
}
