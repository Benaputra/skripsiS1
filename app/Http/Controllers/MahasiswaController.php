<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $prodis = Prodi::all();
        $mhs = Mahasiswa::latest()->get();
        if ($request -> ajax()) {
            $data = Mahasiswa::latest()->get();
            return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                 // Update Button
                 $updateButton = "<button class='btn btn-sm btn-info updateMahasiswa' data-id='".$row->id."' data-bs-toggle='modal' data-bs-target='#updateModal' ><i class='fa fa-pencil-square'></i></button>";
                 // Delete Button
                 $deleteButton = "<button class='btn btn-sm btn-danger deleteMahasiswa' data-id='".$row->id."'><i class='fa fa-trash'></i></button>";
                 
                 return $updateButton." ".$deleteButton;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('mahasiswa.index',compact('prodis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Mahasiswa::updateOrCreate([
            'id' => $request->id
        ],
        [
            'name' => $request->name,
            'nim' => $request->nim,
            'handphone' => $request->handphone,
            'prodi_id' => $request->prodi_id
        ]);
        return response()->json(['success'=> 'Data mahasiswa berhasil disimpan']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return response()->json($mahasiswa);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        // return response()->json(['success' => 'Team deleted successfully.']);
    }
}
