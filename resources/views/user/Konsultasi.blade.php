@extends('layout/app')

@section('konten')
    <div class="container-fluid testimonial py-5">
        <div class="container py-2">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                <h5 class="mb-2 px-3 fs-2 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">
                    Konsultasi
                </h5>
            </div>
            <div class="card shadow">
                <div class="card-body p-4">
                    <form action="{{ route('hitung') }}" method="post">
                        @csrf

                        <div class="row justify-content-center ms-2">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="jenis_ikan" class="form-label">Jenis Ikan</label>
                                    <select name="jenis_ikan" id="jenis_ikan" class="form-select" required>
                                        <option value="0" selected="selected">Masukkan Jenis Ikan</option>
                                        <option value="Nila Best">Nila Best</option>
                                        <option value="Nila Srikandi">Nila Srikandi</option>
                                        <option value="Nila Nirwana 2">Nila Nirwana 2</option>
                                        <option value="Nila Gesit">Nila Gesit</option>
                                        <option value="Nila Jatimbulan">Nila Jatimbulan</option>
                                        <option value="Nila Larasati">Nila Larasati</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="umur_ikan" class="form-label">Umur Ikan (Bulan)</label>
                                    <input type="umur_ikan" class="form-control" name="umur_ikan" id="umur_ikan"
                                        placeholder="Masukkan umur ikan anda" required>
                                </div>
                            </div>
                        </div>

                        <div class="card ms-3">
                            <div class="card-body">
                                <p class="ms-1">Pilih gejala pada ikan:</p>
                                <ul class="list-group list-group-flush">
                                    @foreach ($gejala as $gjl)
                                        <li class="list-group-item">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="gejala[]"
                                                    value="{{ $gjl->kd_gejala }}" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    {{$gjl->kd_gejala}} {{ Str::ucfirst($gjl->gejala) }}
                                                </label>
                                            </div>
                                        </li>
                                    @endforeach
                            </div>
                        </div>
                        <div class="float-end mt-5">
                            <button type="submit" class="btn btn-primary">Prediksi</button>
                            <a href="/" class="btn btn-secondary">Kembali</a>
                        </div>
                    </form>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
