<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function register() {
        return view('register');
    }

    public function storeRegister(Request $request){
        $ex = User::create([
            'name' => $request->name,
            'nim_nidn' => $request->nim_nidn,
            'email' => $request->email,
            'password' => Hash::make($request -> password),
        ]);
        return redirect('/');
    }

    public function index(Request $request)
    {
        if ($request -> ajax()) {
            $data = User::latest()->get();
            return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                 // Update Button
                 $updateButton = "<button class='btn btn-sm btn-info updateUser' data-id='".$row->id."' data-bs-toggle='modal' data-bs-target='#updateModal' ><i class='fa fa-pencil-square'></i></button>";
                 // Delete Button
                 $deleteButton = "<button class='btn btn-sm btn-danger deleteUser' data-id='".$row->id."'><i class='fa fa-trash'></i></button>";
                 
                 return $updateButton." ".$deleteButton;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('user.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::updateOrCreate([
            'id' => $request->id
        ],
        [
            'name' => $request->name,
            'nim_nidn' => $request->nim_nidn,
            'email' => $request->email,
            'password' => Hash::make($request -> password),
        ]);
        return response()->json(['success'=> 'Data user berhasil disimpan']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return response()->json($user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::find($id)->delete();
        return response()->json(['success','Data User berhasil dihapus']);
    }
}
