    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link {{ $ref['title'] == 'Dashboard' ? '' : 'collapsed'}}" href="{{route('admin')}}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ $ref['title'] == 'Case Base' ? '' : 'collapsed'}}" href="{{route('casebase.index')}}">
                    <i class="bi bi-grid"></i>
                    <span>Case Base</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ $ref['title'] == 'Gejala' ? '' : 'collapsed'}}" href="{{route('gejala.index')}}">
                    <i class="bi bi-grid"></i>
                    <span>Gejala</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ $ref['title'] == 'Penyakit & Solusi' ? '' : 'collapsed'}}" href="{{route('penyakit-solusi.index')}}">
                    <i class="bi bi-grid"></i>
                    <span>Penyakit & Solusi</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ $ref['title'] == 'Hasil Konsultasi' ? '' : 'collapsed'}}" href="{{route('hasil')}}">
                    <i class="bi bi-grid"></i>
                    <span>Hasil Konsultasi</span>
                </a>
            </li>

        </ul>

    </aside><!-- End Sidebar-->
