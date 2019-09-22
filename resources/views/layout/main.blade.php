<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>@yield('title')</title>
    <script src="{{asset('assets/Chart.js/Chart.js')}}"></script>
    <script src="{{asset('global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js')}}"></script>

    <style>
        .footer {
           position: fixed;
           left: 0;
           bottom: 0;
           width: 100%;
           background-color: #f8f9fa;
           color: black;
           text-align: center;
           margin-top: 200px;
        }
        </style>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{url('admin/dashboard')}}">Milen</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="{{url('admin/dashboard')}}">Home <span class="sr-only">(current)</span></a>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Mahasiswa</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{url('admin/mahasiswa/aktif')}}">Mahasiswa Aktif</a>
                          <a class="dropdown-item" href="{{url('admin/mahasiswa/cuti')}}">Mahasiswa Cuti</a>
                          <a class="dropdown-item" href="{{url('admin/mahasiswa/do')}}">Mahasiswa DO</a>
                        </div>
                    </li>
                  
                    <a class="nav-item nav-link" href="{{url('admin/about')}}">About</a>
                  </div>
                </div>
            </div>
        </nav>
        @yield('container')

        <div class="section mt-5">
          <div class="footer">
              <p>GangsMilen @2019</p>
            </div>

        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    @yield('page-js')
  </body>
</html>
<script  type="text/javascript">
  var ctx = document.getElementById("piechart").getContext("2d");
  var data = {
            labels: ["Aktif","Cuti","DO"],
            datasets: [
            {
              label: "Penjualan Barang",
              data: [10, 20, 30],
              backgroundColor: [
                '#29B0D0',
                '#2A516E',
                '#F07124',
                '#CBE0E3',
                '#979193'
              ]
            }
            ]
            };

  var myPieChart = new Chart(ctx, {
                  type: 'doughnut',
                  data: data,
                  options: {
                    responsive: true
                }
              });

</script>