<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\Facades\DataTables;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index( Request $request)
    {
        if ($request -> ajax()) {
            $data = Role::latest()->get();
            return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                 // Update Button
                 $updateButton = "<button class='btn btn-sm btn-info updateRole' data-id='".$row->id."' data-bs-toggle='modal' data-bs-target='#updateModal' ><i class='fa fa-pencil-square'></i></button>";
                 // Delete Button
                 $deleteButton = "<button class='btn btn-sm btn-danger deleteRole' data-id='".$row->id."'><i class='fa fa-trash'></i></button>";
                 
                 return $updateButton." ".$deleteButton;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('role.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Role::updateOrCreate([
            'id' => $request->id
        ],
        [
            'name' => $request->name,
            'guard_name' => $request->name,
        ]);
        return response()->json(['success'=> 'Role berhasil disimpan']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $role = Role::find($id);
        return response()->json($role);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Role::find($id)->delete();
        return response()->json(['success','Data Role berhasil dihapus']);
    }
}
