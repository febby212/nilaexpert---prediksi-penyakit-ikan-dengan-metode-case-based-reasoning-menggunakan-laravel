@extends('layout/app')

@section('konten')
    <div class="container-fluid py-3">
        <div class="container py-3">
            <div class="text-center mb-3 wow fadeInUp" data-wow-delay=".3s">
                <h5 class="mb-3 px-5 py-2 text-dark rounded-pill d-inline-block border border-2 border-primary fs-4">Tim
                    Pengembang</h5>
            </div>
            <div class="row g-2">
                <div class="col-xxl-3 col-lg-3 col-md-3 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="rounded team-item">
                        <img src="{{asset('img/yumarlin.jpeg')}}" class="img-fluid w-100 rounded-top border border-bottom-0"
                            alt="">
                        <div class="team-content bg-primary text-dark text-center py-3">
                            <span class="fs-6 fw-bold">Yumarlin MZ, S.Kom., M.Pd., M.Kom</span>
                            <p class="text-muted mb-0">0504077303</p>
                            <p class="text-muted mb-0">Dosen Pengampu</p>
                        </div>
                        <div class="team-icon d-flex flex-column ">
                            <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-primary border-0"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-3 col-md-3 col-sm-12 wow fadeInUp" data-wow-delay=".6s">
                    <div class="rounded team-item">
                        <img src="{{asset('img/5.jpg')}}" class="img-fluid w-100 rounded-top border border-bottom-0" alt="">
                        <div class="team-content bg-primary text-dark text-center py-3">
                            <span class="fs-6 fw-bold">Beka Hani Susanti</span>
                            <p class="text-muted mb-0">20330001</p>
                            <p class="text-muted mb-0">Mahasiswa Informatika A</p>
                        </div>
                        <div class="team-icon d-flex flex-column ">
                            <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-primary border-0"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-3 col-md-3 col-sm-12 wow fadeInUp" data-wow-delay=".9s">
                    <div class="rounded team-item">
                        <img src="{{asset('img/12.jpg')}}" class="img-fluid w-100 rounded-top border border-bottom-0" alt="">
                        <div class="team-content bg-primary text-dark text-center py-3">
                            <span class="fs-6 fw-bold">Sabila Nafisah Amallia</span>
                            <p class="text-muted mb-0">20330045</p>
                            <p class="text-muted mb-0">Mahasiswa Informatika A</p>
                        </div>
                        <div class="team-icon d-flex flex-column ">
                            <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-primary border-0"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-3 col-md-3 col-sm-12 wow fadeInUp" data-wow-delay=".12s">
                    <div class="rounded team-item">
                        <img src="{{asset('img/allysa.jpg')}}" class="img-fluid w-100 rounded-top border border-bottom-0" alt="">
                        <div class="team-content bg-primary text-dark text-center py-3">
                            <span class="fs-6 fw-bold">Allysa Radhwa Windiana</span>
                            <p class="text-muted mb-0">20330052</p>
                            <p class="text-muted mb-0">Mahasiswa Informatika A</p>
                        </div>
                        <div class="team-icon d-flex flex-column ">
                            <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-primary border-0"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
