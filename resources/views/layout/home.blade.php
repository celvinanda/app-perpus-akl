@extends('layout.main')
@section('judul')
    Dashboard
@endsection

@section('dashboard-box')
    <div class="container-fluid">
        <div class="d-sm-flex justify-content-between align-items-center mb-4">
            <h3 class="text-dark mb-0">@yield('judul')</h3>
            @if($user->level ==1)
                <a class="btn btn-primary btn-sm d-none d-sm-inline-block"
                    role="button" href="{{url('show-qr')}}"><i
                        class="fas fa-qrcode fa-sm text-white-50"></i>&nbsp;Kode Pengunjung</a>
            @elseif($user->level ==4)
                <a class="btn btn-primary btn-sm d-none d-sm-inline-block"
                    role="button" href="{{url('scan-qr')}}"><i
                        class="fas fa-qrcode fa-sm text-white-50"></i>&nbsp;Scan Buku Tamu</a>
            @else
                <a
                    class="btn btn-primary btn-sm d-none d-sm-inline-block"
                    role="button" href="{{url('scan-qr')}}"><i
                        class="fas fa-qrcode fa-sm text-white-50"></i>&nbsp;Scan Absensi</a>
            @endif
        </div>
        {{--    <div class="row">--}}
        {{--        <div class="col-md-6 col-xl-3 mb-4">--}}
        {{--            <div class="card shadow border-start-info py-2">--}}
        {{--                <div class="card-body">--}}
        {{--                    <div class="row align-items-center no-gutters">--}}
        {{--                        <div class="col me-2">--}}
        {{--                            <div class="text-uppercase text-info fw-bold text-xs mb-1">--}}
        {{--                                <span>Pengunjung</span></div>--}}
        {{--                            <div class="row g-0 align-items-center">--}}
        {{--                                <div class="col-auto">--}}
        {{--                                    <div class="text-dark fw-bold h5 mb-0 me-3"><span>50</span></div>--}}
        {{--                                </div>--}}
        {{--                                <div class="col">--}}
        {{--                                    <div class="progress progress-sm">--}}
        {{--                                        <div class="progress-bar bg-info" aria-valuenow="50"--}}
        {{--                                             aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span--}}
        {{--                                                class="visually-hidden">50%</span></div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                        <div class="col-auto"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        <div class="col-md-6 col-xl-3 mb-4">--}}
        {{--            <div class="card shadow border-start-warning py-2">--}}
        {{--                <div class="card-body">--}}
        {{--                    <div class="row align-items-center no-gutters">--}}
        {{--                        <div class="col me-2">--}}
        {{--                            <div class="text-uppercase text-warning fw-bold text-xs mb-1">--}}
        {{--                                <span>Karya Ilmiah</span></div>--}}
        {{--                            <div class="text-dark fw-bold h5 mb-0"><span>18</span></div>--}}
        {{--                        </div>--}}
        {{--                        <div class="col-auto"><i class="fas fa-book fa-2x text-gray-300"></i></div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--    </div>--}}
        {{--    <div class="row">--}}
        {{--        <div class="col-lg-7 col-xl-8">--}}
        {{--            <div class="card shadow mb-4">--}}
        {{--                <div class="card-header d-flex justify-content-between align-items-center">--}}
        {{--                    <h6 class="text-primary fw-bold m-0">Stastistik Pengunjung</h6>--}}
        {{--                    <div class="dropdown no-arrow">--}}
        {{--                        <button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false"--}}
        {{--                                data-bs-toggle="dropdown" type="button"><i--}}
        {{--                                class="fas fa-ellipsis-v text-gray-400"></i></button>--}}
        {{--                        <div class="dropdown-menu shadow dropdown-menu-end animated--fade-in">--}}
        {{--                            <p class="text-center dropdown-header">dropdown header:</p><a--}}
        {{--                                class="dropdown-item" href="#">&nbsp;Action</a><a class="dropdown-item"--}}
        {{--                                                                                  href="#">&nbsp;Another--}}
        {{--                                action</a>--}}
        {{--                            <div class="dropdown-divider"></div>--}}
        {{--                            <a class="dropdown-item" href="#">&nbsp;Something else here</a>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--                <div class="card-body">--}}
        {{--                    <div class="chart-area">--}}
        {{--                        <canvas--}}
        {{--                            data-bss-chart="{&quot;type&quot;:&quot;line&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Jan&quot;,&quot;Feb&quot;,&quot;Mar&quot;,&quot;Apr&quot;,&quot;May&quot;,&quot;Jun&quot;,&quot;Jul&quot;,&quot;Aug&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Earnings&quot;,&quot;fill&quot;:true,&quot;data&quot;:[&quot;0&quot;,&quot;10000&quot;,&quot;5000&quot;,&quot;15000&quot;,&quot;10000&quot;,&quot;20000&quot;,&quot;15000&quot;,&quot;25000&quot;],&quot;backgroundColor&quot;:&quot;rgba(78, 115, 223, 0.05)&quot;,&quot;borderColor&quot;:&quot;rgba(78, 115, 223, 1)&quot;}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false,&quot;labels&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}},&quot;title&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;},&quot;scales&quot;:{&quot;xAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;],&quot;drawOnChartArea&quot;:false},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;fontStyle&quot;:&quot;normal&quot;,&quot;padding&quot;:20}}],&quot;yAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;]},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;fontStyle&quot;:&quot;normal&quot;,&quot;padding&quot;:20}}]}}}"></canvas>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        <div class="col-lg-5 col-xl-4">--}}
        {{--            <div class="card shadow mb-4">--}}
        {{--                <div class="card-header d-flex justify-content-between align-items-center">--}}
        {{--                    <h6 class="text-primary fw-bold m-0">Presentase Pengunjung</h6>--}}
        {{--                    <div class="dropdown no-arrow">--}}
        {{--                        <button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false"--}}
        {{--                                data-bs-toggle="dropdown" type="button"><i--}}
        {{--                                class="fas fa-ellipsis-v text-gray-400"></i></button>--}}
        {{--                        <div class="dropdown-menu shadow dropdown-menu-end animated--fade-in">--}}
        {{--                            <p class="text-center dropdown-header">dropdown header:</p><a--}}
        {{--                                class="dropdown-item" href="#">&nbsp;Action</a><a class="dropdown-item"--}}
        {{--                                                                                  href="#">&nbsp;Another--}}
        {{--                                action</a>--}}
        {{--                            <div class="dropdown-divider"></div>--}}
        {{--                            <a class="dropdown-item" href="#">&nbsp;Something else here</a>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--                <div class="card-body">--}}
        {{--                    <div class="chart-area">--}}
        {{--                        <canvas--}}
        {{--                            data-bss-chart="{&quot;type&quot;:&quot;doughnut&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Guru&quot;,&quot;Siswa&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;&quot;,&quot;backgroundColor&quot;:[&quot;#4e73df&quot;,&quot;#1cc88a&quot;],&quot;borderColor&quot;:[&quot;#ffffff&quot;,&quot;#ffffff&quot;],&quot;data&quot;:[&quot;50&quot;,&quot;30&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false,&quot;labels&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}},&quot;title&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}}}"></canvas>--}}
        {{--                    </div>--}}
        {{--                    <div class="text-center small mt-4"><span class="me-2"><i--}}
        {{--                                class="fas fa-circle text-success"></i>&nbsp;Guru</span><span--}}
        {{--                            class="me-2"><i class="fas fa-circle text-info"></i>&nbsp;Siswa</span></div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--    </div>--}}
        {{--    <div class="row">--}}
        {{--        <div class="col-lg-6 mb-4" style="width: 100%;">--}}
        {{--            <div class="card shadow mb-4"></div>--}}
        {{--            <div class="card shadow mb-4">--}}
        {{--                <div class="card-header py-3">--}}
        {{--                    <h6 class="text-primary fw-bold m-0">Daftar Tugas</h6>--}}
        {{--                </div>--}}
        {{--                <ul class="list-group list-group-flush">--}}
        {{--                    <li class="list-group-item">--}}
        {{--                        <div class="row align-items-center no-gutters">--}}
        {{--                            <div class="col me-2">--}}
        {{--                                <h6 class="mb-0"><strong>Lunch meeting</strong></h6><span class="text-xs">10:30 AM</span>--}}
        {{--                            </div>--}}
        {{--                            <div class="col-auto">--}}
        {{--                                <div class="form-check"><input class="form-check-input" type="checkbox"--}}
        {{--                                                               id="formCheck-1"><label--}}
        {{--                                        class="form-check-label" for="formCheck-1"></label></div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </li>--}}
        {{--                    <li class="list-group-item">--}}
        {{--                        <div class="row align-items-center no-gutters">--}}
        {{--                            <div class="col me-2">--}}
        {{--                                <h6 class="mb-0"><strong>Lunch meeting</strong></h6><span class="text-xs">11:30 AM</span>--}}
        {{--                            </div>--}}
        {{--                            <div class="col-auto">--}}
        {{--                                <div class="form-check"><input class="form-check-input" type="checkbox"--}}
        {{--                                                               id="formCheck-2"><label--}}
        {{--                                        class="form-check-label" for="formCheck-2"></label></div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </li>--}}
        {{--                    <li class="list-group-item">--}}
        {{--                        <div class="row align-items-center no-gutters">--}}
        {{--                            <div class="col me-2">--}}
        {{--                                <h6 class="mb-0"><strong>Lunch meeting</strong></h6><span class="text-xs">12:30 AM</span>--}}
        {{--                            </div>--}}
        {{--                            <div class="col-auto">--}}
        {{--                                <div class="form-check"><input class="form-check-input" type="checkbox"--}}
        {{--                                                               id="formCheck-3"><label--}}
        {{--                                        class="form-check-label" for="formCheck-3"></label></div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </li>--}}
        {{--                </ul>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--    </div>--}}
    </div>
@endsection