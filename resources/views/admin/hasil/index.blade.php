@extends('admin.layout.app')

@section('konten_admin')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Hasil Konsultasi</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Hasil Konsultasi</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-between">
                                <div class="col-6">
                                    <h5 class="card-title">Hasil Konsultasi</h5>
                                </div>
                                <div class="col-6 pt-3">
                                    <div class="float-end">
                                        {{-- <a href="{{ route('penyakit-solusi.create') }}" class="btn btn-info">Tambah Data</a> --}}
                                    </div>
                                </div>
                            </div>
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Pengguna</th>
                                        <th scope="col">Jenis Ikan</th>
                                        <th scope="col">Umur Ikan</th>
                                        <th scope="col">Kode Gejala</th>
                                        <th scope="col">Kode Penyakit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $item->riwayat->name }}</td>
                                            <td>{{ $item['kd_gejala'] }}</td>
                                            <td>{{ $item['kd_penyakit'] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
