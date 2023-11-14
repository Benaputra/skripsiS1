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
    public function index(){
        return view('user.index');
    }
    
    public function getUserData(Request $request) {
        if ($request->ajax()) {
            $users = User::all();
                return DataTables::of($users)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                  // Update Button
                  $updateButton = "<button class='btn btn-sm btn-info updateUser' data-id='".$row->id."' data-bs-toggle='modal' data-bs-target='#updateModal' ><i class='fa fa-pencil-square'></i></button>";
                  // Delete Button
                  $deleteButton = "<button class='btn btn-sm btn-danger deleteUser' data-id='".$row->id."'><i class='fa fa-trash'></i></button>";
 
                  return $updateButton." ".$deleteButton;
                })
                ->rawColumns(['action'])
                ->make();
        }
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
    public function getUpdateData(Request $request, $id){
        // $id = $request->post('id');
        // $users = User::find($id);
        // $data = array();
        // if(!empty($users)) {
        //     $data['name'] = $users->name;
        //     $data['nim_nidn'] = $users->nim_nidn;
        //     $data['email'] = $users->email;
        //     $data['password'] = $users->password;
        // }
        // return response()->json($data);
        $user = User::find($id);
        return response()->json($user);
    }
}
    // public function update()
