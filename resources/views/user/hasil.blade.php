@extends('layout.app')

@section('konten')
    <div class="container-fluid testimonial py-5">
        <div class="container py-2">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                <h5 class="mb-2 px-3 fs-2 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Hasil
                </h5>
            </div>
            <div class="row justify-between">
                <div class="col-12">
                    <div class="card shadow p-3">
                        <div class="card-body">
                            <div class="testimonial-item">
                                <div class="testimonial-content rounded mb-4 p-4">
                                    <p class="fs-5 m-0">
                                        Halo {{ Str::ucfirst(Auth::user()->name) }},
                                    <p>
                                        Berdasarkan gejala yang Anda berikan, yaitu:
                                        <ul>
                                            @foreach ($has as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                        </ul>


                                        Ikan nila Anda yang berjenis <b>{{ Str::ucfirst($req['jenis_ikan']) }}</b> dan berumur <b>{{ $req['umur_ikan'] }}</b> didiagnosis
                                        mengidap penyakit <b>{{ $result1[0]['nama_penyakit'] }}</b> dengan persentase <b>{{ number_format($nilaiTertinggi1) }}%</b> atau <b>{{ $result2[0]['nama_penyakit'] }}</b> dengan persentase <b>{{ number_format($nilaiTertinggi2) }}%</b>. Saya akan menjelaskan definisi penyakit
                                        tersebut beserta solusinya di bawah ini.
                                    </p>
                                    </p>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center  mb-4" style="padding: 0 0 0 25px;">
                                            <div class="ms-3">
                                                <h4 class="mb-1">{{ $result1[0]['nama_penyakit'] }}</h4>
                                                <p class="mb-1 fs-5">Definisi</p>
                                                <p class="mb-1 fs-6">{{ $result1[0]['definisi'] }}</p>
                                                <p class="mb-1 fs-5">Solusi</p>
                                                <p class="mb-1 fs-6">{{ $result1[0]['solusi'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center  mb-4" style="padding: 0 0 0 25px;">
                                            <div class="ms-3">
                                                <h4 class="mb-1">{{ $result2[0]['nama_penyakit'] }}</h4>
                                                <p class="mb-1 fs-5">Definisi</p>
                                                <p class="mb-1 fs-6">{{ $result2[0]['definisi'] }}</p>
                                                <p class="mb-1 fs-5">Solusi</p>
                                                <p class="mb-1 fs-6">{{ $result2[0]['solusi'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p>Semoga informasi ini bermanfaat untuk perawatan ikan nila Anda. Jika Anda memiliki pertanyaan lebih lanjut atau perlu bantuan lebih lanjut, jangan ragu untuk bertanya.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
