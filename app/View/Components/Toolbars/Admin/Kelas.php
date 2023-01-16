<?php

namespace App\View\Components\Toolbars\Admin;

use App\Models\Tingkat;
use Illuminate\View\Component;

class Kelas extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $tingkat = Tingkat::select(['id', 'nama'])
                ->orderBy('nama')
                ->get();

        return view('components.toolbars.admin.kelas', [
            'tingkat' => $tingkat
        ]);
    }
}
