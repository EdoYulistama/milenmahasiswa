@extends('layout.main')

@section('title', 'Tambah Data Mahasiswa')

@section('page-js')
<script>
  function getSelectValue()
  {
    var selectValue = document.getElementById("status").value;
    console.log('selctValue' selectValue);
  }
    getSelectValue();
</script>

@section('container')
    
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-3">
            <h1 class="mt-3">Tambah Data Mahasiswa</h1>
                <form method="post" action="{{url('/admin/mahasiswa/create')}}">
                    @csrf
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="nama">Nama</label>
                          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama" name="nama" value="{{old('nama')}}">
                          @error('nama')
                          <div class="invalid-feedback">{{$message}}</div>
                          @enderror
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="npm">Npm</label>
                        <input type="text" class="form-control @error('npm') is-invalid @enderror" id="npm" placeholder="Masukan Npm" name="npm" value="{{old('npm')}}">
                          @error('npm')
                          <div class="invalid-feedback">{{$message}}</div>
                          @enderror
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukan Email" name="email" value="{{old('email')}}">
                          @error('email')
                          <div class="invalid-feedback">{{$message}}</div>
                          @enderror
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="jurusan">Jurusan</label>
                          <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukan Jurusan" name="jurusan" value="{{old('jurusan')}}">
                          @error('jurusan')
                          <div class="invalid-feedback">{{$message}}</div>
                          @enderror
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control @error('status') is-invalid @enderror" id="status" name="status" onchange="getSelectValue();">
                                  {{-- @foreach ($students as $student) --}}
                                  <option value="aktif">aktif</option>
                                  <option value="cuti">cuti</option>
                                  <option value="do">do</option>
                                 {{-- @endforeach --}}
                            </select>
                          @error('status')
                          <div class="invalid-feedback">{{$message}}</div>
                          @enderror
                        </div>
                      </div>
                    </div>
                    {{-- <form>
                        <div class="form-group">
                          <label for="exampleFormControlFile1">Masukan Foto</label>
                          <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </form> --}}
                    <div class="col-md-6 text-center"> 
                    <button type="submit" class="btn btn-primary">Tambah Data!</button>
                    </div>
                  </form>
        </div>
    </div>
</div>

@endsection