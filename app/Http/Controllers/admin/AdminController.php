<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Repository\GejalaRepository;
use App\Repository\CaseBaseRepository;
use App\Repository\HasilRepository;
use App\Repository\PenyakitSolusiRepository;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $data = array();
    private CaseBaseRepository $casebase;
    private PenyakitSolusiRepository $penyakit;
    private GejalaRepository $gejala;
    private HasilRepository $hasil;

    public function __construct(HasilRepository $hasil, CaseBaseRepository $casebase, PenyakitSolusiRepository $penyakit, GejalaRepository $gejala)
    {
        $this->penyakit = $penyakit;
        $this->gejala = $gejala;
        $this->casebase = $casebase;
        $this->hasil = $hasil;
        $this->data['directory'] = 'admin';
        $this->data['title'] = 'Dashboard';
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ref = $this->data;
        $penyakit = $this->penyakit->getAll()->count();
        $gejala = $this->gejala->getAll()->count();
        $hasil = $this->hasil->getAll()->count();
        $casebase = $this->casebase->getAll()->count();
        return view($this->data['directory'] . '.index', compact('ref', 'penyakit', 'gejala', 'hasil', 'casebase'));
    }

}
