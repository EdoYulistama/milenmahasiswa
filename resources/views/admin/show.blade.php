@extends('layout.main')

@section('title', 'Detail Mahasiswa')

@section('container')
    
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-3">
            <h1 class="mt-3">Detail Mahasiswa</h1>
                  <div class="card mb-3" style="max-width: 540px;">
                      <div class="row no-gutters">
                        <div class="col-md-4">
                          <img src="../../assets/img/doremi.png" class="card-img mt-4">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">{{$students['nama']}}</h5>
                            <p class="card-text">{{$students['npm']}}</p>
                            <p class="card-text">{{$students['jurusan']}}</p>
                            <a href="{{url('/admin/mahasiswa/'.$students['id'].'/edit')}}" class="btn btn-primary">Edit</a>
                            <form action="{{url('/admin/mahasiswa/'.$students['id'])}}" method="post" class="d-inline">
                              @method('delete')
                              @csrf  
                              <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                              <a href="{{url('/admin/dashboard')}}" class="card-link">Kembali</a>
                          </div>
                        </div>
                      </div>
                    </div>
        </div>
    </div>
</div>

@endsection