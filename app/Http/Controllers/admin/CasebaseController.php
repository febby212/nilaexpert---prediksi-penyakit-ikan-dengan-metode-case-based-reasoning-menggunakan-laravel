<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Gejala;
use App\Repository\CaseBaseRepository;
use App\Repository\GejalaRepository;
use App\Repository\PenyakitSolusiRepository;
use Exception;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class CasebaseController extends Controller
{
    private CaseBaseRepository $casebase;
    private PenyakitSolusiRepository $penyakit;
    private GejalaRepository $gejala;
    protected $data = array();

    public function __construct(CaseBaseRepository $casebase, GejalaRepository $gejala, PenyakitSolusiRepository $penyakit)
    {
        $this->penyakit = $penyakit;
        $this->gejala = $gejala;
        $this->casebase = $casebase;
        $this->data['directory'] = 'admin.casebase';
        $this->data['title'] = 'Case Base';
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ref = $this->data;
        $data = $this->casebase->getAll();
        return view($this->data['directory'] . '.index', compact('data', 'ref'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $gejala = $this->gejala->getAll();
        $penyakit = $this->penyakit->getAll();
        $ref = $this->data;
        $ref['url'] = route('casebase.store');
        return view($this->data['directory'] . '.form', compact('ref', 'gejala', 'penyakit'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "kd_gejala" => ['required'],
            "kd_penyakit" => ['required'],
            "bobot" => ['required', 'numeric'],
        ], [], [
            "kd_gejala" => "Kode Gejala",
            "kd_penyakit" => "Kode Penyakit",
            "bobot" => "Bobot",
        ]);

        $data['id'] = Uuid::uuid4()->toString();
        $data['created_by'] = 'admin';

        // dd($data);
        try {
            $this->casebase->store($data);
            return redirect()->route('casebase.index')->with('success', 'Berhasi menambah data case base');
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
        $ref['url'] = route('casebase.update', $id);
        $data = $this->casebase->getById($id);
        $gejala = $this->gejala->getAll();
        $penyakit = $this->penyakit->getAll();
        return view($this->data['directory'] . '.form', compact('data', 'ref', 'gejala', 'penyakit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            "kd_gejala" => ['required'],
            "kd_penyakit" => ['required'],
            "bobot" => ['required', 'numeric'],
        ], [], [
            "kd_gejala" => "Kode Gejala",
            "kd_penyakit" => "Kode Penyakit",
            "bobot" => "Bobot",
        ]);

        $data['updated_by'] = auth()->user()->id;

        try {
            $this->casebase->edit($id, $data);
            return redirect()->route('casebase.index')->with('success', 'Berhasi mengubah data surat keluar ');
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
            $this->casebase->destroy($id);
            return back()->with('success', 'Data gejala berhasil di hapus');
        } catch (Exception $e) {
            if (env('APP_DEBUG')) {
                return $e->getMessage();
            }
            return back()->with('error', "Oops..!! Terjadi keesalahan saat menghapus data");
        }
    }
}
