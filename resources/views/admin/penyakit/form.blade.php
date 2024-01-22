@extends('admin.layout.app')

@section('konten_admin')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Penyakit & Solusi</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Penyakit & Solusi</li>
                    <li class="breadcrumb-item active">{{ isset($edit) ? 'Edit Data' : 'Tambah Data' }}</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{isset($data) ? 'Edit Data' : 'Tambah Data'}} Penyakit & Solusi</h5>

                            <!-- Custom Styled Validation with Tooltips -->
                            <form action="{{ $ref['url'] }}" method="post" class="row needs-validation"
                                novalidate>
                                @csrf
                                @if (isset($data))
                                    @method('put')
                                @endif
                                <div class="col-md-12 position-relative mb-3">
                                    <label for="validationTooltip01" class="form-label">Kode Penyakit</label>
                                    <input type="text" class="form-control" id="validationTooltip01" name="kd_penyakit" placeholder="Masukkan kode Penyakit"
                                        value="{{ old('kd_penyakit', isset($data) ? $data['kd_penyakit'] : '') }}" required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-12 position-relative mb-3">
                                    <label for="validationTooltip01" class="form-label">Nama Penyakit</label>
                                    <input type="text" class="form-control" id="validationTooltip01" name="nama_penyakit" placeholder="Masukkan nama penyakit"
                                        value="{{ old('nama_penyakit', isset($data) ? $data['nama_penyakit'] : '') }}" required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-12 position-relative mb-3">
                                    <label for="validationTooltip02" class="form-label">Definisi Penyakit</label>
                                    <textarea class="form-control" placeholder="Masukkan definisi penyakit" name="definisi" id="validationTooltip02" cols="30" rows="7">{{ Str::ucfirst(old('definisi', isset($data) ? $data['definisi'] : '')) }}</textarea>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-12 position-relative mb-3">
                                    <label for="validationTooltip02" class="form-label">Solusi Penyakit</label>
                                    <textarea class="form-control" placeholder="Masukkan solusi penyakit" name="solusi" id="validationTooltip02" cols="30" rows="7">{{ Str::ucfirst(old('solusi', isset($data) ? $data['solusi'] : '')) }}</textarea>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-12 mt-5">
                                    <div class="float-end">
                                        <a href="{{route('penyakit-solusi.index')}}" class="btn btn-warning" >Kembali</a>
                                        <button class="btn btn-primary" type="submit">Simpan</button>
                                    </div>
                                </div>
                            </form><!-- End Custom Styled Validation with Tooltips -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
