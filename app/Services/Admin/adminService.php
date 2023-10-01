<?php

namespace App\Services\Admin;

use App\Models\Rol;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminService {
    public function getAllUsers(){
        $users = User::all();
        return $users;
    }

    public function createAdministrator(string $rol, $request){
        $administrator = new User;

        $data = request()->except('_token', '_method');
        $administrator['rol_id'] = Rol::where('name', $rol)->first()->id;
        $administrator['password'] = Hash::make($request->password);
        $administrator->fill($data);
        $administrator->save();
    }

    // Funciones aparte
    public function getTotalAdministrators(){
        $total = User::whereHas('rol', function ($query) {
            $query->where('name', 'Administrator');
        })->count();

        return $total;
    }
}