@extends('admin.layout.app')

@section('konten_admin')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Case Base</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Case Base</li>
                    <li class="breadcrumb-item active">{{ isset($edit) ? 'Edit' : 'Tambah Data' }}</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tambah Data Case Base</h5>

                            <!-- Custom Styled Validation with Tooltips -->
                            <form action="{{ $ref['url'] }}" method="post" class="row needs-validation" novalidate>
                                @csrf
                                @if (isset($data))
                                    @method('put')
                                @endif
                                <div class="col-md-12 position-relative">
                                    <label for="validationTooltip04" class="form-label">Kode Gejala</label>
                                    <select class="form-select" name="kd_gejala" id="validationTooltip04" required>
                                        <option selected disabled value="">Silahkan pilih kode gejala</option>
                                        @foreach ($gejala as $gj)
                                            <option value="{{ $gj->kd_gejala }}"
                                                {{ old('kd_gejala', isset($data['kd_gejala']) ? ($gj->kd_gejala == $data['kd_gejala'] ? 'selected' : '') : '' ) }}>
                                                {{ $gj->kd_gejala }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-tooltip">
                                        Tolong masukkan pilihan anda.
                                    </div>
                                </div>
                                <div class="col-md-12 position-relative">
                                    <label for="validationTooltip04" class="form-label">Kode Penyakit</label>
                                    <select class="form-select" name="kd_penyakit" id="validationTooltip04" required>
                                        <option selected disabled value="">Silahkan pilih kode penyakit</option>
                                        @foreach ($penyakit as $py)
                                            <option value="{{ $py->kd_penyakit }}"
                                                {{ old('kd_penyakit', isset($data['kd_penyakit']) ? ($py->kd_penyakit == $data['kd_penyakit'] ? 'selected' : '') : '') }}>
                                                {{ $py->kd_penyakit }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-tooltip">
                                        Tolong masukkan pilihan anda.
                                    </div>
                                </div>
                                <div class="col-md-12 position-relative">
                                    <label for="validationTooltip02" class="form-label">Bobot</label>
                                    <input type="number" class="form-control" id="validationTooltip02" name="bobot"
                                        value="{{ old('bobot', isset($data) ? $data['bobot'] : '') }}" required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-12 mt-5">
                                    <div class="float-end">
                                        <a href="{{ route('casebase.index') }}" class="btn btn-warning">Kembali</a>
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
