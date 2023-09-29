<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\Admin\AdminService;

class UserController extends Controller
{
    public function __construct()
    {
        $this->adminService = new AdminService();
    }

    public function allUsers(){
        $users = $this->adminService->getAllUsers();
        return view('admin.allUsers', compact('users'));
    }

    public function addNewAdministrator(){
        return view('admin.addNewAdministrator');
    }

    public function createAdministrator(Request $request){
        // Logic to create an Administrator
        $this->adminService->createAdministrator('Administrator', $request);

        return redirect()->route('admin.allUsers');
    }
}
