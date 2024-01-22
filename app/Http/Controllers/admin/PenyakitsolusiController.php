<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repository\PenyakitSolusiRepository;
use Exception;
use Ramsey\Uuid\Uuid;

class PenyakitsolusiController extends Controller
{
    private PenyakitSolusiRepository $penyakit;
    protected $data = array();

    public function __construct(PenyakitSolusiRepository $penyakit)
    {
        $this->penyakit = $penyakit;
        $this->data['directory'] = 'admin.penyakit';
        $this->data['title'] = 'Penyakit & Solusi';
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ref = $this->data;
        $data = $this->penyakit->getAll();
        return view($this->data['directory'] . '.index', compact('data', 'ref'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ref = $this->data;
        $ref['url'] = route('penyakit-solusi.store');
        return view($this->data['directory'] . '.form', compact('ref'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "kd_penyakit" => ['required'],
            "nama_penyakit" => ['required', 'string'],
            "definisi" => ['required', 'string'],
            "solusi" => ['required', 'string'],
        ], [], [
            "kd_penyakit" => "Kode Gejala",
            "nama_penyakit" => "Nama penyakit",
            "definsi" => "Definisi penyakit",
            "solusi" => "Solusi penyakit",
        ]);
        $data['id'] = Uuid::uuid4()->toString();
        $data['created_by'] = 'admin';

        // dd($data);
        try {
            $this->penyakit->store($data);
            return redirect()->route('penyakit-solusi.index')->with('success', 'Berhasi menambah data case base');
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
        $data = $this->penyakit->getById($id);
        $ref['url'] = route('penyakit-solusi.update', $id);
        return view($this->data['directory'] . '.form', compact('data', 'ref', 'edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            "kd_penyakit" => ['required'],
            "nama_penyakit" => ['required', 'string'],
            "definisi" => ['required', 'string'],
            "solusi" => ['required', 'string'],
        ], [], [
            "kd_penyakit" => "Kode Gejala",
            "nama_penyakit" => "Nama penyakit",
            "definsi" => "Definisi penyakit",
            "solusi" => "Solusi penyakit",
        ]);
        $data['updated_by'] = auth()->user()->id;

        try {
            $this->penyakit->edit($id, $data);
            return redirect()->route('penyakit-solusi.index')->with('success', 'Berhasi mengubah data surat keluar ');
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
            $this->penyakit->destroy($id);
            return back()->with('success', 'Data gejala berhasil di hapus');
        } catch (Exception $e) {
            if (env('APP_DEBUG')) {
                return $e->getMessage();
            }
            return back()->with('error', "Oops..!! Terjadi keesalahan saat menghapus data");
        }
    }
}
