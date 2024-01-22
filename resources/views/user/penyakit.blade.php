@extends('layout/app')

@section('konten')
    <div class="container-fluid testimonial py-5">
        <div class="container py-2">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                <h5 class="mb-2 px-3 fs-2 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">
                    Daftar Penyakit
                </h5>
            </div>
            <div class="accordion" id="accordionPanelsStayOpenExample">
                @foreach ($data as $item)
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button fs-5" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseOne{{ $item->kd_penyakit }}"
                                aria-expanded="{{ $item->kd_penyakit == 'P001' ? 'true' : 'false' }}"
                                aria-controls="panelsStayOpen-collapseOne{{ $item->kd_penyakit }}">
                                {{ $item->nama_penyakit }}
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne{{ $item->kd_penyakit }}"
                            class="accordion-collapse collapse {{ $item->kd_penyakit == 'P001' ? 'show' : '' }}">
                            <div class="accordion-body">
                                <p class="fw-bold fs-5">Definisi</p>
                                <p class="fw-bold fs-6">{{ $item->definisi }}</p>
                                <p class="fw-bold fs-5">Solusi</p>
                                <p class="fw-bold fs-6">{{ $item->solusi }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
