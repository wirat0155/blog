<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Users extends Controller
{
    public function index($name = "") {
        $data = [
            'name' => $name,
            'users' => ['Paul', 'Jim', 'Sun']
        ];
        return view('users', $data);
    }

    public function getAllUsers() {
        return DB::select('select * from users');
    }
}
