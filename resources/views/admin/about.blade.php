@extends('layout.main')

@section('title', 'Tambah Data Mahasiswa')
<style>
    #about{
        min-height: 300px;
    }
</style>
@section('container')

<!--album-->
<div class="section mt-5" id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">About</h2>
                    <hr width="100px">
                </div>
            </div>
            <div class="row">
                    <div class="col-md-5 offset-md-1">
                        <p>
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                      </p>
                    </div>
                    <div class="col-md-5">
                          <p>
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                          </p>
                    </div>
            </div>
        </div>
    </div>
<!--akhir album-->

<!--jumbotron-->
<div class="row">
    <div class="col-md-8 offset-md-2 ">
        <div class="jumbotron"></div>
    </div>
</div>
<!--akhir jumbotron-->

<!--card2-->
<div class="container mt-5">
  <div class="row">
          <div class="col-sm-12">
                  <h2 class="text-center">Album</h2>
                  <hr width="100px">
              </div>
              <div class="card-group">
                      <div class="card">
                        <img src="../../assets/img/doremi.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                      </div>
                      <div class="card">
                        <img src="../../assets/img/doremi.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                      </div>
                      <div class="card">
                        <img src="../../assets/img/doremi.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                      </div>
                    </div>
      </div>
  </div>
</div>
<!--akhir card2-->

<!--pesan-->
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-3">
            <h1 class="mt-3">Contact</h1>
                <form method="post" action="#">
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
                        <label for="email">Pesan</label>
                        <textarea rows="5" cols="60"></textarea>
                      </div>
                    </div>
                    <div class="col-md-6 text-center mt-3"> 
                    <button type="submit" class="btn btn-primary">Tambah Data!</button>
                    </div>
                  </form>
        </div>
    </div>
</div>

@endsection