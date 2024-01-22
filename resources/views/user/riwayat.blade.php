@extends('layout\app')

@section('konten')
    @push('css')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    @endpush

    <div class="container-fluid testimonial py-5">
        <div class="container py-2">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                <h5 class="mb-2 px-3 fs-2 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">
                    Riwayat Konsultasi Anda
                </h5>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="p-3">
                        <table class="table" id="tabelRiwayat">
                            <thead>
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jenis Ikan</th>
                                    <th scope="col">Umur Ikan</th>
                                    <th scope="col">Kode Penyakit</th>
                                    <th scope="col">Kode Gejala</th>
                                    <th scope="col">Tanggal Konsltasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $hasil)
                                    <tr>
                                        <td>{{ Str::ucfirst($hasil->riwayat->name) }}</td>
                                        <td>{{ $hasil->jenis_ikan }}</td>
                                        <td>{{ $hasil->umur_ikan }}</td>
                                        <td>{{ $hasil->kd_penyakit }}</td>
                                        <td>{{ $hasil->kd_gejala }}</td>
                                        <td>{{ \Carbon\Carbon::parse($hasil->created_at)->locale('id')->isoFormat('LL') }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('script')
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script>
            new DataTable('#tabelRiwayat');
        </script>
    @endpush
@endsection
