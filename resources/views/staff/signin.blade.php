@extends('layout_staff.main')

@section('title', 'signin')

@section('page-js')

    <style>
   .jumbotron {
    /* //   background: url('http://placekitten.com/800/500') no-repeat center center; */
      background-size: cover;
      height: 600px;
      /* padding-top: 20%;
      padding-bottom: 20%; */
    }
    </style>

@endsection

@section('container')

<div class="row">
    <div class="col-md-8">
        <!--jumbotron-->
            <div class="jumbotron" style="background-color:#00F3FF">
                <div class="container">
                   <h1 class="display-4">Welcome</h1>
                   <p class="lead">This is a dashboard for monitoring data student university by Tamtam.</p>
                </div>
            </div>
        <!--akhir jumbotron-->
    </div>
    <div class="col-sm-4">
                <div class="container mt-5">
                    <div class="mt-auto" style="width:350px">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                        <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                        <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            
        </div>
    </div>
</div>


@endsection