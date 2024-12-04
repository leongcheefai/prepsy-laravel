<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
#[Title('Admin Dashboard')]
class AdminDashboard extends Component
{
    public $recipes = [];

    public function render()
    {
        return view('livewire.admin-dashboard', [
            'recipes' => $this->recipes,
        ]);
    }
}
