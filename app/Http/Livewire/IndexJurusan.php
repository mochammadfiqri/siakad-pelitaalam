<?php

namespace App\Http\Livewire;

use App\Models\Jurusan;
use Livewire\Component;
use Livewire\WithPagination;

class IndexJurusan extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $paginate = 5;
    public $jurusan_id, $kode_jurusan, $nama;

    protected function rules()
    {
        return [
            'kode_jurusan' => 'required',
            'nama' => 'required',
        ];
    }

    protected $pesan = [
        'kode_jurusan.required' => 'Kode Jurusan tidak boleh kosong',
        'nama.required' => 'Nama tidak boleh kosong'
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function createJurusan() {
        $this->validate();

        $jurusan = [
            'kode_jurusan' => $this->kode_jurusan,
            'nama'         => $this->nama,
        ];
        
        Jurusan::create($jurusan);

        $this->resetInput();
        return redirect('/jurusan')->with([
            'toast_type' => 'success', // Jenis pesan (success, error, warning, info)
            'toast_message' => 'Berhasil Menambahkan Jurusan', // Isi pesan
        ]);
    }

    public function updateJurusan() {
        $validatedData = $this->validate();
        // $jurusan = Jurusan::findOrFail($this->jurusan_id);

        // $updateData = [
        //     'kode_jurusan' => $validatedData['kode_jurusan'],
        //     'nama' => $validatedData['nama'],
        // ];

        // $jurusan->update($updateData);

        Jurusan::where('id', $this->jurusan_id)->update([
            'kode_jurusan' => $validatedData['kode_jurusan'],
            'nama' => $validatedData['nama'],
        ]);

        $this->resetInput();
        return redirect('/jurusan')->with([
            'toast_type' => 'success', // Jenis pesan (success, error, warning, info)
            'toast_message' => 'Berhasil Memperbaharui Jurusan', // Isi pesan
        ]);
    }

    public function editJurusan(int $jurusan_id) {
        $jurusan = Jurusan::find($jurusan_id);
        if ($jurusan) {
            $this->jurusan_id = $jurusan->id;
            $this->kode_jurusan = $jurusan->kode_jurusan;
            $this->nama = $jurusan->nama;
        } else {
            return redirect()->to('/jurusan');
        }
    }

    private function resetInput()
    {
        $this->kode_jurusan = '';
        $this->nama = '';
    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function render()
    {
        $dataJurusan = $this->search === null ?
        Jurusan::latest()->paginate($this->paginate) :
        Jurusan::latest()
            ->where('kode_jurusan', 'like', '%' . $this->search . '%')
            ->orWhere('nama', 'like', '%' . $this->search . '%')
            ->paginate($this->paginate);

        return view('livewire.index-jurusan', [
            'dataJurusan' => $dataJurusan,
        ]);
    }
}
