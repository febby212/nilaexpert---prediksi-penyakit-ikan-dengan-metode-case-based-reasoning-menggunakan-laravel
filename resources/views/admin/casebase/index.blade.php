@extends('admin.layout.app')

@section('konten_admin')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Case Base</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Case Base</li>
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
                                    <h5 class="card-title">Case Base</h5>
                                </div>
                                <div class="col-6 pt-3">
                                    <div class="float-end">
                                        <a href="{{route('casebase.create')}}" class="btn btn-info">Tambah Data</a>
                                    </div>
                                </div>
                            </div>
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Kode Gejala</th>
                                        <th scope="col">Kode Penyakit</th>
                                        <th scope="col">Bobot</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $item['kd_gejala'] }}</td>
                                            <td>{{ $item['kd_penyakit'] }}</td>
                                            <td>{{ $item['bobot'] }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a class="btn btn-primary me-2"
                                                        href="{{ route('casebase.edit', $item['id']) }}"
                                                        role="button"><i class="bi bi-pencil-square"></i></a>
                                                    <form action="{{ route('casebase.destroy', $item['id']) }}"
                                                        method="post"> @csrf @method('DELETE')
                                                        <button class="btn btn-danger" type="submit"><i class="bi bi-trash-fill"></i></button>
                                                    </form>
                                                </div>
                                            </td>
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
