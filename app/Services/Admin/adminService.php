<?php

namespace App\Services\Admin;

use App\Models\User;

class AdminService {
    public function getAllUsers(){
        $users = User::all();
        return $users;
    }
}