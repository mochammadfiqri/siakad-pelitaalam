<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Rombel;
use Livewire\Component;
use Livewire\WithPagination;

class DetailRombel extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search, $rombel_id;
    public $paginate = 5;

    public function mount()
    {
        $this->rombel_id = request()->route('id');
    }

    public function render()
    {
        // $rombel = Rombel::find($this->rombel_id);

        // $userIds = Rombel::where('rombel_id', $this->rombelId)->pluck('user_id')->toArray();
        // $walas = User::whereIn('id', $userIds)->get();

        // $walas = Rombel::find($this->rombel_id);
        
        // $walas = User::where('role_id', '=', '3')
        //     ->where('status', '=', 'active')
        //     ->get();

        // $walas = $this->search === null ?
        //     Rombel::latest()
        //         ->where('id', $this->rombel_id)
        //         ->paginate($this->paginate) :
        //     Rombel::latest()
        //         ->where('kelas', 'like', '%' . $this->search . '%')
        //         ->orWhere('kode_kelas', 'like', '%' . $this->search . '%')
        //         ->orWhereHas('walas', function ($query) {
        //             $query->where('nama', 'like', '%' . $this->search . '%');
        //         })
        //         ->paginate($this->paginate);

        $kelas = Rombel::where('id', $this->rombel_id)->get();

        $walas = $this->search === null ?
        User::latest()
            ->where('role_id', 3)
            ->where('status', 'active')
            ->whereHas('rombel', function ($query) {
                $query->where('id', $this->rombel_id);
            })
            ->paginate($this->paginate) :
        User::latest()
            ->where('kelas', 'like', '%' . $this->search . '%')
            ->orWhere('kode_kelas', 'like', '%' . $this->search . '%')
            ->orWhereHas('rombel', function ($query) {
                $query->where('kelas', 'like', '%' . $this->search . '%')
                    ->where('id', $this->rombel_id);
            })
            ->paginate($this->paginate);

        $siswa = $this->search === null ?
        User::latest()
            ->where('role_id', 2) // Filter berdasarkan role_id 2
            ->where('rombel_id', $this->rombel_id)
            ->where('status', '=', 'active')
            ->paginate($this->paginate) :
        User::latest()
            ->where('nama', 'like', '%' . $this->search . '%')
            ->paginate($this->paginate);

        return view('livewire.detail-rombel', [
            // 'rombel' => $rombel,
            'kelas' => $kelas,
            'walas' => $walas,
            'siswa' => $siswa,
        ]);
    }
}
