<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\User;
use Livewire\Component;
use App\Models\TahunAkademik;

class IndexTahunAkademik extends Component
{
    public $tahun_awal, $tahun_akhir, $tgl_awal, $tgl_akhir, $user_id, $semester, $status, $ta_id;
    public $search;

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

    public function validDeactivation(int $ta_id) {
        $this->ta_id = $ta_id;
        $tahun_akademik = TahunAkademik::find($this->ta_id);
        $tahun_akademik->status = 'inactive';
        $tahun_akademik->save();
        return redirect('/tahun-akademik')->with([
            'toast_type' => 'success', // Jenis pesan (success, error, warning, info)
            'toast_message' => 'Berhasil Memperbaharui Status', // Isi pesan
        ]);
    }
    public function validActivation(int $ta_id) {
        $this->ta_id = $ta_id;
        $tahun_akademik = TahunAkademik::find($this->ta_id);
        $tahun_akademik->status = 'active';
        $tahun_akademik->save();
        return redirect('/tahun-akademik')->with([
            'toast_type' => 'success', // Jenis pesan (success, error, warning, info)
            'toast_message' => 'Berhasil Memperbaharui Status', // Isi pesan
        ]);
    }
    public function updateTA() {
        $validatedData = $this->validate();
        $tahun_akademik = TahunAkademik::findOrFail($this->ta_id);
        $updateData = [
            // 'tahun_awal' => $validatedData['tahun_awal'],
            // 'tahun_akhir' => $validatedData['tahun_akhir'],
            'tgl_awal' => $validatedData['tgl_awal'],
            'tgl_akhir' => $validatedData['tgl_akhir'],
            // 'semester' => $validatedData['semester'],
            // 'status' => $validatedData['status'],        
        ];

        $tahun_akademik->update($updateData);

        if ($this->user_id) {
            $tahun_akademik->users()->sync($this->user_id);
        }

        return redirect('/tahun-akademik')->with([
            'toast_type' => 'success', // Jenis pesan (success, error, warning, info)
            'toast_message' => 'Berhasil Memperbaharui Tahun Akademik', // Isi pesan
        ]);
    }

    public function editTA(int $ta_id) {
        $editTA = TahunAkademik::find($ta_id);
        if ($editTA) {
            $this->ta_id = $editTA->id;
            $this->tahun_awal = $editTA->tahun_awal;
            $this->tahun_akhir = $editTA->tahun_akhir;
            $this->tgl_awal = $editTA->tgl_awal;
            $this->tgl_akhir = $editTA->tgl_akhir;
            $this->semester = $editTA->semester;
            $this->user_id = $editTA->users->pluck('id')->toArray();
            $this->status = $editTA->status;
            // dd($this->status);
        } else {
            return redirect()->to('/tahun-akademik');
        }
    }

    public function createTA() {
        $this->validate();

        $tahun_akademik = TahunAkademik::create([
            'tahun_awal' => $this->tahun_awal,
            'tahun_akhir' => $this->tahun_akhir,
            'semester' => $this->semester,
            'tgl_awal' => $this->tgl_awal,
            'tgl_akhir' => $this->tgl_akhir,
        ]);

        $tahun_akademik->users()->sync($this->user_id);

        $this->closeModal();
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
        $this->semester = '';
        $this->user_id = '';
    }
    public function render()
    {
        $kepsek = User::where('role_id', '=', '4')
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
        
        // Loop through $dataTA to add the formatted date and day name
        foreach ($dataTA as $tahunAkademik) {
            $tahunAkademik->formatted_tgl_awal = Carbon::parse($tahunAkademik->tgl_awal)->locale('id_ID')->isoFormat('dddd, DD MMMM YYYY');
            $tahunAkademik->formatted_tgl_akhir = Carbon::parse($tahunAkademik->tgl_akhir)->locale('id_ID')->isoFormat('dddd, DD MMMM YYYY');
        }

        return view('livewire.index-tahun-akademik', [
            'dataTA' => $dataTA,
            'kepsek' => $kepsek,
        ]);
    }
}
