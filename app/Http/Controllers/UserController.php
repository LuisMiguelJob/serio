<?php

namespace App\Http\Controllers;

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
}
