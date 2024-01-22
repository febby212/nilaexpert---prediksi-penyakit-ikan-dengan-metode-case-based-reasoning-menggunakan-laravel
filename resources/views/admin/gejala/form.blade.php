@extends('admin.layout.app')

@section('konten_admin')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Gejala</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Gejala</li>
                    <li class="breadcrumb-item active">{{ isset($edit) ? 'Edit Data' : 'Tambah Data' }}</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{isset($data) ? 'Tambah Data' : 'Edit Data'}} Gejala</h5>

                            <!-- Custom Styled Validation with Tooltips -->
                            <form action="{{ $ref['url'] }}" method="post" class="row needs-validation"
                                novalidate>
                                @csrf
                                @if (isset($data))
                                    @method('put')
                                @endif
                                <div class="col-md-12 position-relative mb-3">
                                    <label for="validationTooltip01" class="form-label">Kode Gejala</label>
                                    <input type="text" class="form-control" id="validationTooltip01" name="kd_gejala" placeholder="Masukkan kode gejala"
                                        value="{{ old('kd_gejala', isset($data) ? $data['kd_gejala'] : '') }}" required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-12 position-relative">
                                    <label for="validationTooltip02" class="form-label">Kode Penyakit</label>
                                    <textarea class="form-control" placeholder="Leave a comment here" name="gejala" id="validationTooltip02" cols="30" rows="7">{{ Str::ucfirst(old('gejala', isset($data) ? $data['gejala'] : '')) }}</textarea>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-12 mt-5">
                                    <div class="float-end">
                                        <a href="{{route('gejala.index')}}" class="btn btn-warning" >Kembali</a>
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
