@extends('layout.main')

@section('judul')
    Data Pengguna
@endsection

@section('contain-box')
    <div class="container-fluid">
        <div class="d-sm-flex justify-content-between align-items-center mb-4">
            <h3 class="text-dark mb-0">@yield('judul')</h3>

        </div>
        <div class="card-body">
{{--            <div class="row">--}}
{{--                <div class="col-md-6 text-nowrap">--}}
{{--                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable">--}}
{{--                        <label class="form-label">Data&nbsp;--}}
{{--                            <select class="d-inline-block form-select form-select-sm">--}}
{{--                                <option value="1" selected="">Semua</option>--}}
{{--                                <option value="2">Guru</option>--}}
{{--                                <option value="3">Siswa</option>--}}
{{--                                <option value="4">Tamu</option>--}}
{{--                            </select>&nbsp;--}}
{{--                        </label>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="text-md-end dataTables_filter" id="dataTable_filter"><label--}}
{{--                            class="form-label"><input type="search" class="form-control form-control-sm"--}}
{{--                                                      aria-controls="dataTable"--}}
{{--                                                      placeholder="Search"></label></div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="table-responsive table mt-2" id="dataTable" role="grid"
                 aria-describedby="dataTable_info">
                <table class="table my-0" id="dataTable">
                    <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Status</th>
                        <th>Jurusan</th>
                        <th>Tahun Ajaran</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($showUser = 0)
                    @foreach($users as $u)
                        @if($u->level !=1)
                            @php($showUser ++)
                            <tr>
                                <td>
                                    {{--<img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/avatar1.jpeg">--}}
                                    {{$u->name}}
                                </td>
                                @if($u->level ==2)
                                    <td>Guru</td>
                                    <td></td>
                                @elseif($u->level ==3)
                                    <td>Siswa</td>
                                    @if($u->jurusan == 'akn')
                                        <td>Akutansi</td>
                                    @elseif($u->jurusan == 'bdp')
                                        <td>Pemasaran</td>
                                    @elseif($u->jurusan == 'tkj')
                                        <td>TKJ</td>
                                    @elseif($u->jurusan == 'tkr')
                                        <td>TKR</td>
                                    @endif
                                @elseif($u->level ==4)
                                    <td>Tamu</td>
                                    <td>{{$u->jurusan}}</td>
                                @endif
                                @if($u->angkatan != 'staf')
                                    <td>{{$u->angkatan}}</td>
                                @endif
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">
                        Menampilkan
                        {{$showUser}} dari {{count($users)}}</p>
                </div>
                <div class="col-md-6">
                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link" href="#"
                                                              aria-label="Previous"><span
                                        aria-hidden="true">«</span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span
                                        aria-hidden="true">»</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>
@endsection
