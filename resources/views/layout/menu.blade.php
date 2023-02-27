@if($user->level == 1)
    {{--TODO : Menu Admin--}}
    <nav class="navbar navbar-dark d-lg-flex align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <div class="container-fluid d-flex flex-column p-0"><a
                class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#"
                style="width: 100%;">
                <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-lightbulb d-lg-flex"></i></div>
                <div class="sidebar-brand-text mx-3"><span class="text-start">Literasi SMEA</span></div>
            </a>
            <ul class="navbar-nav text-light" id="accordionSidebar-1">
                <li class="nav-item"><a class="nav-link active" href="{{url('home')}}"><i
                            class="fas fa-tachometer-alt"></i><span>&nbsp;Dashboard</span></a></li>
                <hr class="sidebar-divider">

                <div class="sidebar-heading"><p class="mb-0">Perpustakaan</p></div>
                <li class="nav-item">
                    <div><a class="btn btn-link nav-link" data-bs-toggle="collapse" aria-expanded="false"
                            aria-controls="collapse-1" href="#collapse-1" role="button"><i
                                class="fas fa-clipboard-list"></i>&nbsp;<span>Absensi</span></a>
                        <div class="collapse" id="collapse-1">
                            <div class="bg-white border rounded py-2 collapse-inner">
                                <h6 class="collapse-header">Absensi</h6><a class="collapse-item"
                                                                           href="{{url('show-qr')}}">Kode
                                    Pengunjung</a><a class="collapse-item" href="{{url('absensi')}}">Daftar Hadir</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div><a class="btn btn-link nav-link" data-bs-toggle="collapse" aria-expanded="false"
                            aria-controls="collapse-4" href="#collapse-4" role="button"><i class="fas fa-book"></i>&nbsp;<span>Karya Ilmiah</span></a>
                        <div class="collapse" id="collapse-4">
                            <div class="bg-white border rounded py-2 collapse-inner">
                                <h6 class="collapse-header">E - Karya Ilmiah</h6>
                                <a class="collapse-item" href="{{url('karya')}}">Daftar Karya</a>
                                <a class="collapse-item" href="{{url('karya-konfirmasi')}}">Permintaan</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{url('galeri')}}"><i class="far fa-images"></i><span>&nbsp;Galeri</span></a>
                <li class="nav-item"></li>
                <hr class="sidebar-divider">
                <div class="sidebar-heading"><p class="mb-0">Perpustakaan</p></div>
                <li class="nav-item">
                    <div><a class="btn btn-link nav-link" data-bs-toggle="collapse" aria-expanded="false"
                            aria-controls="collapse-3" href="#collapse-3" role="button"><i
                                class="fas fa-user-friends"></i>&nbsp;<span>Pengguna</span></a>
                        <div class="collapse" id="collapse-3">
                            <div class="bg-white border rounded py-2 collapse-inner">
                                <h6 class="collapse-header">Pengunjung</h6>
                                <a class="collapse-item" href="{{'add-tamu'}}">Tambah Tamu</a>
                                <a class="collapse-item" href="{{'add-guru'}}">Tambah Guru</a>
                                <a class="collapse-item" href="{{'add-siswa'}}">Tambah Siswa</a>
                                <a class="collapse-item" href="{{'data-user'}}">Data Pengunjung</a>
                                <h6 class="collapse-header">Admin</h6>
                                <a class="collapse-item" href="{{'admin-register'}}">Tambah Admin</a>
                                <a class="collapse-item" href="{{'admin-user'}}">Data Admin</a>
                            </div>
                        </div>
                    </div>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingTwo" aria-controls="collapsePages"
                         data-bs-parent="#accordionSidebar">
                        <div class="bg-white border rounded py-2 collapse-inner">
                            <h6 class="collapse-header">LOGIN SCREENS:</h6><a class="collapse-item" href="#">Login</a><a
                                class="collapse-item" href="#">Register</a><a class="collapse-item" href="#">Forgot
                                Password</a>
                            <h6 class="collapse-header">OTHER PAGES:</h6><a class="collapse-item" href="#">404
                                Page</a><a class="collapse-item" href="#">Blank Page</a>
                        </div>
                    </div>
                </li>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{url('laporan')}}"><i class="fas fa-print"></i><span>&nbsp;Laporan</span></a>
                </li>
                <hr class="sidebar-divider">
            </ul>
            <hr class="sidebar-divider my-0">
            <ul class="navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item"></li>
                <li class="nav-item"></li>
                <li class="nav-item"></li>
                <li class="nav-item"></li>
                <li class="nav-item"></li>
            </ul>
            <div class="sidebar-heading"></div>
            <div class="text-center d-none d-md-inline">
                <button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button>
            </div>
        </div>
    </nav>

@elseif($user->level == 2)
    {{--TODO : Menu Pengunjung Guru--}}
    <nav class="navbar navbar-dark d-lg-flex align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <div class="container-fluid d-flex flex-column p-0"><a
                class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#"
                style="width: 100%;">
                <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-lightbulb d-lg-flex"></i></div>
                <div class="sidebar-brand-text mx-3"><span class="text-start">Literasi SMEA</span></div>
            </a>
            <ul class="navbar-nav text-light" id="accordionSidebar-1">
                <li class="nav-item"><a class="nav-link active" href="{{url('home')}}"><i
                            class="fas fa-tachometer-alt"></i><span>&nbsp;Dashboard</span></a></li>
                <hr class="sidebar-divider">

                <div class="sidebar-heading"><p class="mb-0">Perpustakaan</p></div>
                <li class="nav-item">
                    <div><a class="btn btn-link nav-link" data-bs-toggle="collapse" aria-expanded="false"
                            aria-controls="collapse-1" href="#collapse-1" role="button"><i
                                class="fas fa-clipboard-list"></i>&nbsp;<span>Absensi</span></a>
                        <div class="collapse" id="collapse-1">
                            <div class="bg-white border rounded py-2 collapse-inner">
                                <h6 class="collapse-header">Absensi</h6><a class="collapse-item"
                                                                           href="{{url('show-qr')}}">Kode
                                    Pengunjung</a><a class="collapse-item" href="{{url('absensi')}}">Daftar Hadir</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div><a class="btn btn-link nav-link" data-bs-toggle="collapse" aria-expanded="false"
                            aria-controls="collapse-4" href="#collapse-4" role="button"><i class="fas fa-book"></i>&nbsp;<span>Karya Ilmiah</span></a>
                        <div class="collapse" id="collapse-4">
                            <div class="bg-white border rounded py-2 collapse-inner">
                                <h6 class="collapse-header">E - Karya Ilmiah</h6>
                                <a class="collapse-item" href="{{url('karya')}}">Daftar Karya</a>
                                <a class="collapse-item" href="{{url('karya-konfirmasi')}}">Permintaan</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{url('galeri')}}"><i class="far fa-images"></i><span>&nbsp;Galeri</span></a>
                <li class="nav-item"></li>
                <hr class="sidebar-divider">
                <div class="sidebar-heading"><p class="mb-0">Perpustakaan</p></div>
                <li class="nav-item">
                    <div><a class="btn btn-link nav-link" data-bs-toggle="collapse" aria-expanded="false"
                            aria-controls="collapse-3" href="#collapse-3" role="button"><i
                                class="fas fa-user-friends"></i>&nbsp;<span>Pengguna</span></a>
                        <div class="collapse" id="collapse-3">
                            <div class="bg-white border rounded py-2 collapse-inner">
                                <h6 class="collapse-header">Pengunjung</h6>
                                <a class="collapse-item" href="{{'add-tamu'}}">Tambah Tamu</a>
                                <a class="collapse-item" href="{{'add-guru'}}">Tambah Guru</a>
                                <a class="collapse-item" href="{{'add-siswa'}}">Tambah Siswa</a>
                                <a class="collapse-item" href="{{'data-user'}}">Data Pengunjung</a>
                                <h6 class="collapse-header">Admin</h6>
                                <a class="collapse-item" href="{{'admin-register'}}">Tambah Admin</a>
                                <a class="collapse-item" href="{{'admin-user'}}">Data Admin</a>
                            </div>
                        </div>
                    </div>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingTwo" aria-controls="collapsePages"
                         data-bs-parent="#accordionSidebar">
                        <div class="bg-white border rounded py-2 collapse-inner">
                            <h6 class="collapse-header">LOGIN SCREENS:</h6><a class="collapse-item" href="#">Login</a><a
                                class="collapse-item" href="#">Register</a><a class="collapse-item" href="#">Forgot
                                Password</a>
                            <h6 class="collapse-header">OTHER PAGES:</h6><a class="collapse-item" href="#">404
                                Page</a><a class="collapse-item" href="#">Blank Page</a>
                        </div>
                    </div>
                </li>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{url('laporan')}}"><i class="fas fa-print"></i><span>&nbsp;Laporan</span></a>
                </li>
                <hr class="sidebar-divider">
            </ul>
            <hr class="sidebar-divider my-0">
            <ul class="navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item"></li>
                <li class="nav-item"></li>
                <li class="nav-item"></li>
                <li class="nav-item"></li>
                <li class="nav-item"></li>
            </ul>
            <div class="sidebar-heading"></div>
            <div class="text-center d-none d-md-inline">
                <button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button>
            </div>
        </div>
    </nav>
@elseif($user->level == 3)
    {{--TODO : Menu Pengunjung Siswa--}}
    {{--TODO : Menu Admin--}}
    <nav class="navbar navbar-dark d-lg-flex align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <div class="container-fluid d-flex flex-column p-0"><a
                class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#"
                style="width: 100%;">
                <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-lightbulb d-lg-flex"></i></div>
                <div class="sidebar-brand-text mx-3"><span class="text-start">Literasi SMEA</span></div>
            </a>
            <ul class="navbar-nav text-light" id="accordionSidebar-1">
                <li class="nav-item"><a class="nav-link active" href="{{url('home')}}"><i
                            class="fas fa-tachometer-alt"></i><span>&nbsp;Dashboard</span></a></li>
                <hr class="sidebar-divider">

                <div class="sidebar-heading"><p class="mb-0">Perpustakaan</p></div>
                <li class="nav-item">
                    <div><a class="btn btn-link nav-link" data-bs-toggle="collapse" aria-expanded="false"
                            aria-controls="collapse-1" href="#collapse-1" role="button"><i
                                class="fas fa-clipboard-list"></i>&nbsp;<span>Absensi</span></a>
                        <div class="collapse" id="collapse-1">
                            <div class="bg-white border rounded py-2 collapse-inner">
                                <h6 class="collapse-header">Absensi</h6><a class="collapse-item"
                                                                           href="{{url('show-qr')}}">Kode
                                    Pengunjung</a><a class="collapse-item" href="{{url('absensi')}}">Daftar Hadir</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div><a class="btn btn-link nav-link" data-bs-toggle="collapse" aria-expanded="false"
                            aria-controls="collapse-4" href="#collapse-4" role="button"><i class="fas fa-book"></i>&nbsp;<span>Karya Ilmiah</span></a>
                        <div class="collapse" id="collapse-4">
                            <div class="bg-white border rounded py-2 collapse-inner">
                                <h6 class="collapse-header">E - Karya Ilmiah</h6>
                                <a class="collapse-item" href="{{url('karya')}}">Daftar Karya</a>
                                <a class="collapse-item" href="{{url('karya-konfirmasi')}}">Permintaan</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{url('galeri')}}"><i class="far fa-images"></i><span>&nbsp;Galeri</span></a>
                <li class="nav-item"></li>
                <hr class="sidebar-divider">
                <div class="sidebar-heading"><p class="mb-0">Perpustakaan</p></div>
                <li class="nav-item">
                    <div><a class="btn btn-link nav-link" data-bs-toggle="collapse" aria-expanded="false"
                            aria-controls="collapse-3" href="#collapse-3" role="button"><i
                                class="fas fa-user-friends"></i>&nbsp;<span>Pengguna</span></a>
                        <div class="collapse" id="collapse-3">
                            <div class="bg-white border rounded py-2 collapse-inner">
                                <h6 class="collapse-header">Pengunjung</h6>
                                <a class="collapse-item" href="{{'add-tamu'}}">Tambah Tamu</a>
                                <a class="collapse-item" href="{{'add-guru'}}">Tambah Guru</a>
                                <a class="collapse-item" href="{{'add-siswa'}}">Tambah Siswa</a>
                                <a class="collapse-item" href="{{'data-user'}}">Data Pengunjung</a>
                                <h6 class="collapse-header">Admin</h6>
                                <a class="collapse-item" href="{{'admin-register'}}">Tambah Admin</a>
                                <a class="collapse-item" href="{{'admin-user'}}">Data Admin</a>
                            </div>
                        </div>
                    </div>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingTwo" aria-controls="collapsePages"
                         data-bs-parent="#accordionSidebar">
                        <div class="bg-white border rounded py-2 collapse-inner">
                            <h6 class="collapse-header">LOGIN SCREENS:</h6><a class="collapse-item" href="#">Login</a><a
                                class="collapse-item" href="#">Register</a><a class="collapse-item" href="#">Forgot
                                Password</a>
                            <h6 class="collapse-header">OTHER PAGES:</h6><a class="collapse-item" href="#">404
                                Page</a><a class="collapse-item" href="#">Blank Page</a>
                        </div>
                    </div>
                </li>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{url('laporan')}}"><i class="fas fa-print"></i><span>&nbsp;Laporan</span></a>
                </li>
                <hr class="sidebar-divider">
            </ul>
            <hr class="sidebar-divider my-0">
            <ul class="navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item"></li>
                <li class="nav-item"></li>
                <li class="nav-item"></li>
                <li class="nav-item"></li>
                <li class="nav-item"></li>
            </ul>
            <div class="sidebar-heading"></div>
            <div class="text-center d-none d-md-inline">
                <button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button>
            </div>
        </div>
    </nav>
@elseif($user->level == 3)
    {{--TODO : Menu Pengunjung Luar--}}
    {{--TODO : Menu Admin--}}
    <nav class="navbar navbar-dark d-lg-flex align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <div class="container-fluid d-flex flex-column p-0"><a
                class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#"
                style="width: 100%;">
                <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-lightbulb d-lg-flex"></i></div>
                <div class="sidebar-brand-text mx-3"><span class="text-start">Literasi SMEA</span></div>
            </a>
            <ul class="navbar-nav text-light" id="accordionSidebar-1">
                <li class="nav-item"><a class="nav-link active" href="{{url('home')}}"><i
                            class="fas fa-tachometer-alt"></i><span>&nbsp;Dashboard</span></a></li>
                <hr class="sidebar-divider">

                <div class="sidebar-heading"><p class="mb-0">Perpustakaan</p></div>
                <li class="nav-item">
                    <div><a class="btn btn-link nav-link" data-bs-toggle="collapse" aria-expanded="false"
                            aria-controls="collapse-1" href="#collapse-1" role="button"><i
                                class="fas fa-clipboard-list"></i>&nbsp;<span>Absensi</span></a>
                        <div class="collapse" id="collapse-1">
                            <div class="bg-white border rounded py-2 collapse-inner">
                                <h6 class="collapse-header">Absensi</h6><a class="collapse-item"
                                                                           href="{{url('show-qr')}}">Kode
                                    Pengunjung</a><a class="collapse-item" href="{{url('absensi')}}">Daftar Hadir</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div><a class="btn btn-link nav-link" data-bs-toggle="collapse" aria-expanded="false"
                            aria-controls="collapse-4" href="#collapse-4" role="button"><i class="fas fa-book"></i>&nbsp;<span>Karya Ilmiah</span></a>
                        <div class="collapse" id="collapse-4">
                            <div class="bg-white border rounded py-2 collapse-inner">
                                <h6 class="collapse-header">E - Karya Ilmiah</h6>
                                <a class="collapse-item" href="{{url('karya')}}">Daftar Karya</a>
                                <a class="collapse-item" href="{{url('karya-konfirmasi')}}">Permintaan</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{url('galeri')}}"><i class="far fa-images"></i><span>&nbsp;Galeri</span></a>
                <li class="nav-item"></li>
                <hr class="sidebar-divider">
                <div class="sidebar-heading"><p class="mb-0">Perpustakaan</p></div>
                <li class="nav-item">
                    <div><a class="btn btn-link nav-link" data-bs-toggle="collapse" aria-expanded="false"
                            aria-controls="collapse-3" href="#collapse-3" role="button"><i
                                class="fas fa-user-friends"></i>&nbsp;<span>Pengguna</span></a>
                        <div class="collapse" id="collapse-3">
                            <div class="bg-white border rounded py-2 collapse-inner">
                                <h6 class="collapse-header">Pengunjung</h6>
                                <a class="collapse-item" href="{{'add-tamu'}}">Tambah Tamu</a>
                                <a class="collapse-item" href="{{'add-guru'}}">Tambah Guru</a>
                                <a class="collapse-item" href="{{'add-siswa'}}">Tambah Siswa</a>
                                <a class="collapse-item" href="{{'data-user'}}">Data Pengunjung</a>
                                <h6 class="collapse-header">Admin</h6>
                                <a class="collapse-item" href="{{'admin-register'}}">Tambah Admin</a>
                                <a class="collapse-item" href="{{'admin-user'}}">Data Admin</a>
                            </div>
                        </div>
                    </div>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingTwo" aria-controls="collapsePages"
                         data-bs-parent="#accordionSidebar">
                        <div class="bg-white border rounded py-2 collapse-inner">
                            <h6 class="collapse-header">LOGIN SCREENS:</h6><a class="collapse-item" href="#">Login</a><a
                                class="collapse-item" href="#">Register</a><a class="collapse-item" href="#">Forgot
                                Password</a>
                            <h6 class="collapse-header">OTHER PAGES:</h6><a class="collapse-item" href="#">404
                                Page</a><a class="collapse-item" href="#">Blank Page</a>
                        </div>
                    </div>
                </li>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{url('laporan')}}"><i class="fas fa-print"></i><span>&nbsp;Laporan</span></a>
                </li>
                <hr class="sidebar-divider">
            </ul>
            <hr class="sidebar-divider my-0">
            <ul class="navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item"></li>
                <li class="nav-item"></li>
                <li class="nav-item"></li>
                <li class="nav-item"></li>
                <li class="nav-item"></li>
            </ul>
            <div class="sidebar-heading"></div>
            <div class="text-center d-none d-md-inline">
                <button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button>
            </div>
        </div>
    </nav>
@endif
