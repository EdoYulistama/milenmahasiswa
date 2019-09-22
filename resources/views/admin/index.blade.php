@extends('layout.main')

@section('title', 'dashboard')

@section('container')
    
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            
                <!--jumbotron-->
                    <div class="jumbotron jumbotron-fluid mt-5" style="background-color:#00F3FF">
                        <div class="container">
                        <h1 class="display-4">Welcome</h1>
                        <p class="lead">This is a dashboard for monitoring data student university by Tamtam.</p>
                        </div>
                    </div>
                <!--akhir jumbotron-->

                <!--card-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Mahasiswa Aktif</h5>
                                        <h1 class="card-text">10</h1>
                                        <p class="card-text">Populasi Mahasiswa Aktif</p>
                                        <a href="{{url('admin/mahasiswa/aktif')}}" class="btn btn-primary" style="background-color:#29B0D0">Go Aktif</a>
                                    </div>
                                </div>
                        </div>
                        <div class="col-sm-4">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Mahasiswa Cuti</h5>
                                        <h1 class="card-text">20</h1>
                                        <p class="card-text">Populasi Mahasiswa Cuti</p>
                                        <a href="{{url('admin/mahasiswa/cuti')}}" class="btn btn-primary" style="background-color:#2A516E">Go Cuti</a>
                                    </div>
                                </div>
                        </div>
                        <div class="col-sm-4">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Mahasiswa DO</h5>
                                        <h1 class="card-text">30</h1>
                                        <p class="card-text">Populasi Mahasiswa Drop Out</p>
                                        <a href="{{url('admin/mahasiswa/do')}}" class="btn btn-primary"  style="background-color:#F07124">Go DO</a>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <!--akhir card-->

                <!--chart Doughnut -->
                <div class="container mt-3">
                    <canvas id="piechart" width="" height=""></canvas>
                    <hr>
                </div>
                <!--akhir chart Doughnut -->

                <!--tabel-->
                <div class="container mt-3">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="mt-3">Daftar Mahasiswa</h1>
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">Npm</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Jurusan</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($students as $student)
                                                <tr>
                                                    <th scope="row">{{$loop->iteration}}</th>
                                                    <td>{{$student['nama']}}</td>
                                                    <td>{{$student['npm']}}</td>
                                                    <td>{{$student['email']}}</td>
                                                    <td>{{$student['jurusan']}}</td>
                                                    <td>
                                                        @if($student['status'] === "aktif")
                                                            <a href="{{url('/admin/mahasiswa/aktif')}}" class="badge badge-info">Aktif</a>
                                                         @endif
                                                         @if($student['status'] === "cuti")
                                                         <a href="{{url('/admin/mahasiswa/cuti')}}" class="badge badge-info" style="background-color:#2A516E">Cuti</a>
                                                         @endif
                                                         @if($student['status'] === "do")
                                                             <a href="{{url('/admin/mahasiswa/do')}}" class="badge badge-info" style="background-color:#F07124">DO</a>
                                                          @endif
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                            </div>
                        </div>
                    </div>
                <!--akhir tabel-->
                
        </div>
    </div>
</div>

@endsection