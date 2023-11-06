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
        // $data = User::all();
        // return $data;
        if($request->ajax){
            $data = User::all(); {
                return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href = "#" class="edit btn btn-sucess btn-sm">Edit</a><a href = "#" class="edit btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumn(['action'])
                ->make(true);
            }
            return view('user.index');
        }
    }
}
