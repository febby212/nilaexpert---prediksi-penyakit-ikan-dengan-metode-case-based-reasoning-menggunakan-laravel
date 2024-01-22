<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Repository\CaseBaseRepository;
use App\Repository\GejalaRepository;
use App\Repository\HasilRepository;
use App\Repository\PenyakitSolusiRepository;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class UserController extends Controller
{
    private CaseBaseRepository $case_base;
    private GejalaRepository $gejala;
    private PenyakitSolusiRepository $penyakit_solusi;
    private HasilRepository $hasil;
    protected $data = array();

    public function __construct(
        CaseBaseRepository $case_base,
        GejalaRepository $gejala,
        PenyakitSolusiRepository $penyakit_solusi,
        HasilRepository $hasil,
    ) {
        $this->hasil = $hasil;
        $this->penyakit_solusi = $penyakit_solusi;
        $this->gejala = $gejala;
        $this->case_base = $case_base;
        $this->data['directory'] = 'user';
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ref = 'Home';
        return view($this->data['directory'] . '.index', compact('ref'));
    }

    public function petunjuk()
    {
        $ref = "Petunjuk";
        return view($this->data['directory'] . '.petunjuk', compact('ref'));
    }

    public function pengembang()
    {
        $ref = 'Tim Pengembang';
        return view($this->data['directory'] . '.pengembang', compact('ref'));
    }

    public function riwayat()
    {
        $ref = 'Riwayat';
        $id_user = auth()->user()->id;
        $data = $this->hasil->findByIdUser($id_user);
        // dd($data);
        return view($this->data['directory'] . '.riwayat', compact('data', 'ref'));
    }

    public function penyakit()
    {
        $data = $this->penyakit_solusi->getAll();
        $ref = 'Daftar Penyakit';

        return view($this->data['directory'] . '.penyakit', compact('data', 'ref'));
    }

    public function konsultasi()
    {
        $gejala = $this->gejala->getAll();
        $ref = "Kosultasi";
        return view($this->data['directory'] . '.Konsultasi', compact('ref', 'gejala'));
    }

    public function hitungKonsul(Request $request)
    {
        $ref = 'Hasil';
        $data = $request->input('gejala');

        $hasil = [];
        foreach ($data as $dat) {
            $case = $this->case_base->getByGejala($dat)->value('kd_penyakit');
            $hasil[] = $case;
        }

        $bobot = [];
        foreach ($data as $bt) {
            $bo = $this->case_base->getByGejala($bt)->value('bobot', 'kd_gejala');
            $bobot[] = $bo;
        }

        $final = [];
        foreach ($hasil as $has) {
            $penyakit = $this->case_base->getByPenyakit($has);
            $final[] = $penyakit;
        }

        $coba = [];
        for ($i = 0; $i < count($final); $i++) {
            $he = $final[$i]->pluck('bobot')->toArray();
            $totalBobot = array_sum($he);
            $coba[] = $totalBobot;
        }

        $hasilPembagian = [];

        for ($i = 0; $i < count($bobot); $i++) {
            if ($coba[$i] != 0) {
                $hasilPembagian[] = ($bobot[$i] / $coba[$i]) * 100;
            } else {
                $hasilPembagian[] = 0;
            }
        }

        $nilaiTertinggi1 = -1;
        $nilaiTertinggi2 = -1;

        $indeksTertinggi1 = -1;
        $indeksTertinggi2 = -1;

        for ($i = 0; $i < count($hasilPembagian); $i++) {
            $nilai = $hasilPembagian[$i];

            if ($nilai > $nilaiTertinggi1) {
                $nilaiTertinggi2 = $nilaiTertinggi1;
                $indeksTertinggi2 = $indeksTertinggi1;

                $nilaiTertinggi1 = $nilai;
                $indeksTertinggi1 = $i;
            } elseif ($nilai > $nilaiTertinggi2) {
                $nilaiTertinggi2 = $nilai;
                $indeksTertinggi2 = $i;
            }
        }

        $highst_val1 = $final[$indeksTertinggi1][0]->kd_penyakit;
        $highst_val2 = $final[$indeksTertinggi2][0]->kd_penyakit;

        $result1 = $this->penyakit_solusi->getSolusi($highst_val1);
        $result2 = $this->penyakit_solusi->getSolusi($highst_val2);

        $req = $request->validate([
            "jenis_ikan" => ['required'],
            "umur_ikan" => ['required']
        ], [], [
            "jenis_ikan" => "Jenis Ikan",
            "umur_ikan" => "Umur Ikan",
        ]);

        $hasilKonsul = [
            'id' => Uuid::uuid4()->toString(),
            'user_id' => auth()->user()->id,
            'jenis_ikan' => $req['jenis_ikan'],
            'umur_ikan' => $req['umur_ikan'],
            'kd_penyakit' => implode(',', [$highst_val1, $highst_val2]),
            'kd_gejala' => implode(',', $data),
        ];
        $this->hasil->store($hasilKonsul);

        $has = [];
        foreach ($data as $it) {
            $fin = $this->gejala->getBaseGejala($it);
            $has[] = $fin;
        }

        // dd($data, $bobot, $hasil, $coba, $hasilPembagian, $highst_val1, $highst_val2, $result1, $result2);

        return view($this->data['directory'] . '.hasil', compact('ref', 'nilaiTertinggi1', 'nilaiTertinggi2', 'result1', 'result2', 'has', 'req'));
    }
}
