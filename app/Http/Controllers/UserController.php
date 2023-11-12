<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Contracts\DataTable;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function register() {
        return view('register');
    }
    
    public function index(Request $request) {
        if ($request->ajax()) {
            $users = User::all();
                return DataTables::of($users)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                $actionBtn = '<a href = "#" class="edit btn btn-success"><i class="fe fe-edit"></i></a><a href = "#" class="edit btn btn-danger"><i class="fe fe-delete"></i></a>';
                return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make();
        }
        return view('user.index');
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
}
