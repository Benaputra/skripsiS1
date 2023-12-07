<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request -> ajax()) {
            $data = Prodi::latest()->get();
            return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                 // Update Button
                 $updateButton = "<button class='btn btn-sm btn-info updateProdi' data-id='".$row->id."' data-bs-toggle='modal' data-bs-target='#updateModal' ><i class='fa fa-pencil-square'></i></button>";
                 // Delete Button
                 $deleteButton = "<button class='btn btn-sm btn-danger deleteProdi' data-id='".$row->id."'><i class='fa fa-trash'></i></button>";
                 
                 return $updateButton." ".$deleteButton;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('prodi.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Prodi::updateOrCreate([
            'id' => $request->id
        ],
        [
            'name' => $request->name,
        ]);
        return response()->json(['success'=> 'Data user berhasil disimpan']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prodi = Prodi::find($id);
        return response()->json($prodi);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prodi $prodi)
    {
        $prodi->delete();
        // return response()->json(['success' => 'Team deleted successfully.']);
    }
}
