<?php

namespace App\Livewire\Admin;
use App\Services\Admin\AdminService;

use Livewire\Component;

class Dashboard extends Component
{
    public $totalAdministrators;

    public function __construct()
    {
        $this->adminService = new AdminService;
    }

    public function mount(){
        $this->totalAdministrators = $this->adminService->getTotalAdministrators();
    }

    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
