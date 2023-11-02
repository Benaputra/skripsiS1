<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index() {
        return view('register');
    }
    
    public function store(Request $request){
        $ex = User::create([
            'name' => $request->name,
            'nim_nidn' => $request->nim_nidn,
            'email' => $request->email,
            'password' => Hash::make($request -> password),
        ]);
        return redirect('/');
    }

    public function show(Request $request){
        if($request->ajax){
            $data = User::select('*'); {
                return DataTables::of($data)
                ->addIndexColumn();
            }
        }
    }
}
