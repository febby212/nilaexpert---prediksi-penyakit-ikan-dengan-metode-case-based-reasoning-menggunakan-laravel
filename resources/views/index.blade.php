@extends('layout/app')

@section('konten')
    <div id="article">
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".3s">
                        <div class="about-img">
                            <div class="rotate-left bg-dark"></div>
                            <div class="rotate-right bg-dark"></div>
                            <img src="{{asset('img/ikan_nila.jpg')}}" class="img-fluid h-100" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".6s">
                        <div class="about-item overflow-hidden">
                            <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">
                                Artikel</h5>
                            <h1 class="display-5 mb-2">Optimasi Budidaya Ikan Nila</h1>
                            <p class="fs-5" style="text-align: justify;">Pengelolaan tambak ikan nila merupakan salah satu
                                aspek penting dalam budidaya ikan air tawar yang telah menjadi salah satu pilar utama sektor
                                perikanan di berbagai negara. Untuk mencapai kesuksesan dalam budidaya ikan nila, penting
                                bagi petani ikan nila untuk memiliki pengetahuan dan pemahaman yang baik tentang aspek-aspek
                                teknis dan manajemen yang terkait. Ikan nila (Oreochromis niloticus) dikenal sebagai ikan
                                air tawar yang memiliki pertumbuhan cepat, adaptabilitas yang baik terhadap berbagai kondisi
                                air, serta tingkat produktivitas yang tinggi.</p>
                            <p class="fs-5" style="text-align: justify;">Perkembangan teknologi memberi dampak terhadap
                                bidang perikanan, untuk membantu kegiatan pendampingan dan monitoring, salah satunya dengan
                                sistem pakar untuk mendiagnosa penyakit ikan nila, petani hanya memilih gejala-gejala
                                penyakit ikan nila, lalu sistem pakar akan mendiagnosa penyakit ikan nila sesuai gejala yang
                                terjangkit pada ikan nila. Sistem antar muka dibuat semudah mungkin agar petani ikan dapat
                                menggunakan dan memahami penggunaan sistem lebih mudah.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
