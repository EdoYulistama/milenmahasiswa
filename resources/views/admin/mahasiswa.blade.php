@extends('layout.main')

@section('title', 'mahasiswa')

@section('container')
    
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <h1 class="mt-3">Daftar Mahasiswa</h1>
                <a href="{{url('/admin/mahasiswa/create')}}" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Npm</th>
                                <th scope="col">Email</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Aksi</th>
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
                                <a href="{{url('/admin/mahasiswa/'.$student['id'])}}" class="badge badge-info">Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
        </div>
    </div>
</div>

@endsection