<?php

namespace App\Http\Livewire\Partials\Components;

use Livewire\Component;
use Illuminate\Http\Request;

class AccountDropdown extends Component
{
    protected $listeners = ['toggled' => 'toggleDark'];
    
    public function render()
    {
        return view('livewire.partials.components.account-dropdown');
    }

    public function toggleDark(Request $request)
    {
        $isDark = $request->session()->get('isDark') ?? false;

        $request->session()->put('isDark', !$isDark);

        return redirect()->to(route('dashboard.store.index'));
    }
}
