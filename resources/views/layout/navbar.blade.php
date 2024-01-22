        <!-- Navbar Start -->
        <div class="container-fluid bg-dark">
            <div class="container">
                <nav class="navbar navbar-dark navbar-expand-lg py-lg-0">
                    <a href="/" class="navbar-brand">
                        <h1 class="text-primary mb-0 display-5">Nila<span class="text-white">Expert</span><i class="fa fa-fish text-primary ms-2"></i></h1>
                    </a>
                    <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-dark"></span>
                    </button>
                    <div class="collapse navbar-collapse me-n3" id="navbarCollapse">
                        <div class="navbar-nav ms-auto">
                            <a href="/" class="nav-item nav-link {{$ref == 'Home' ? 'active' : ''}}">Home</a>
                            <a href="{{ route('konsul') }}" class="nav-item nav-link {{$ref == 'Kosultasi' ? 'active' : ''}}">Konsultasi</a>
                            <a href="{{route('penyakit')}}" class="nav-item nav-link {{$ref == 'Daftar Penyakit' ? 'active' : ''}}">Daftar Penyakit</a>
                            <a href="{{Route('petunjuk')}}" class="nav-item nav-link {{$ref == 'Petunjuk' ? 'active' : ''}}">Petunjuk</a>
                            <a href="{{route('pengembang')}}" class="nav-item nav-link {{$ref == 'Tim Pengembang' ? 'active' : ''}}">Tim Pengembang</a>
                            @auth
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{Str::Ucfirst(Auth::user()->name)}}</a>
                                    <div class="dropdown-menu m-0 bg-primary">
                                        <a href="{{route('riwayat')}}" class="dropdown-item">Riwayat</a>
                                        <form action="{{ route('logout')}}" method="post">
                                            @csrf
                                            <button class="dropdown-item">Logout</button>
                                        </form>
                                    </div>
                                </div>
                            @else
                                <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
                            @endauth
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->
