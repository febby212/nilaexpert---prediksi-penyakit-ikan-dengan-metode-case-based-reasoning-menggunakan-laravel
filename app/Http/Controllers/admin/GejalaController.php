<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repository\GejalaRepository;
use Exception;
use Ramsey\Uuid\Uuid;

class GejalaController extends Controller
{
    private GejalaRepository $gejala;
    protected $data = array();

    public function __construct(GejalaRepository $gejala,)
    {
        $this->gejala = $gejala;
        $this->data['directory'] = 'admin.gejala';
        $this->data['title'] = 'Gejala';
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ref = $this->data;
        $data = $this->gejala->getAll();
        return view($this->data['directory'] . '.index', compact('data', 'ref'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ref = $this->data;
        $ref['url'] = route('gejala.store');
        return view($this->data['directory'] . '.form', compact('ref'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "kd_gejala" => ['required'],
            "gejala" => ['required', 'string'],
        ], [], [
            "kd_gejala" => "Kode Gejala",
            "Gejala" => "Deskripsi Gejala",
        ]);
        $data['id'] = Uuid::uuid4()->toString();
        $data['created_by'] = 'admin';

        try {
            $this->gejala->store($data);
            return redirect()->route('gejala.index')->with('success', 'Berhasi menambah data case base');
        } catch (Exception $e) {
            if (env('APP_DEBUG')) {
                return $e->getMessage();
            }
            return back()->with('error', "Oops..!! Terjadi keesalahan saat menyimpan data")->withInput($request->input);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = 'edit';
        $ref = $this->data;
        $data = $this->gejala->getById($id);
        $ref['url'] = route('gejala.update', $id);
        return view($this->data['directory'] . '.form', compact('data', 'ref', 'edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            "kd_gejala" => ['required'],
            "gejala" => ['required', 'string'],
        ], [], [
            "kd_gejala" => "Kode Gejala",
            "Gejala" => "Deskripsi Gejala",
        ]);
        $data['updated_by'] = auth()->user()->id;

        try {
            $this->gejala->edit($id, $data);
            return redirect()->route('gejala.index')->with('success', 'Berhasi mengubah data surat keluar ');
        } catch (Exception $e) {
            if (env('APP_DEBUG')) {
                return $e->getMessage();
            }
            return back()->with('error', "Oops..!! Terjadi keesalahan saat mengubah data")->withInput($request->input);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $this->gejala->destroy($id);
            return back()->with('success', 'Data gejala berhasil di hapus');
        } catch (Exception $e) {
            if (env('APP_DEBUG')) {
                return $e->getMessage();
            }
            return back()->with('error', "Oops..!! Terjadi keesalahan saat menghapus data");
        }
    }
}
