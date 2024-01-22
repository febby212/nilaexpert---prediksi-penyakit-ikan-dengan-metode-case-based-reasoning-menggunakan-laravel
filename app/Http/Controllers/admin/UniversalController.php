<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repository\HasilRepository;

class UniversalController extends Controller
{
    private HasilRepository $hasil;
    protected $data = array();

    public function __construct(HasilRepository $hasil)
    {
        $this->data['directory'] = 'admin.hasil';
        $this->data['title'] = 'Hasil Konsultasi';
        $this->hasil = $hasil;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ref = $this->data;
        $data = $this->hasil->getAll();

        return view($this->data['directory'] . '.index', compact('ref', 'data'));
    }

}
