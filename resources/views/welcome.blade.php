<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="widtd=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>Prawitamacare</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="landing/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/landing/assets/css/font-awesome.css">

    <link rel="stylesheet" href="landing/assets/css/templatemo-softy-pinko.css">

    <link rel="shortcut icon" href="landing/assets/images/prawitamacare-logo.jpeg">


    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <a href="#" class="logo">
                            <img src="landing/assets/images/prawitamacare-logo.jpeg" alt="Prawitama" width= "40" height="40"/>
                            Prawitamacare
                        </a>
                        <ul class="nav">
                            <li><a href="#">Beranda</a></li>
                            <li><a href="#">Laporan</a></li>
                            <li><a href="#">Tentang Kami</a></li>
                            <li><a href="#">Hubungi Kami</a></li>
                            <a href="{{url('login')}}" class="btn btn-outline-success">Login</a>

                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <table id="table">
            <tr>
                <td>
                    <img src="landing/assets/images/poster.jpg" alt="">
                </td>
                <td>
                <div id="card" >
                    <div class="card-body">
                        <h10 class="card-title">Sedekah</h10>
                        <br>
                        <b class="card-text">MASJID AL IKRAM <br> SMK WIKRAMA</b>
                        <br>
                        <p>Sampai dengan <b>Tanpa Batas Waktu</b></p>
                        <hr>
                        
                        <div id ="dana">
                            <label >Dana terkumpul</label>
                            <br>
                            <b>Rp. 99.999.999</b>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p>Terkumpul <b>10%</b> dari <b>Rp.999.999.999</b> </p>
                        </div>

                        <hr>
                        <a href="{{ route('donasicreate') }}" id="button" class="btn btn-success" type="button">SEDEKAH SEKARANG</a>
                    </div>  
                </div>
                </td>
            </tr>
        </table>
    </div>

    <section class="section home">
        <div class="container" id="navbar">
            <h5>Bersedekah merupakan amalan yang akan memberikan pahala yang terus mengalir hingga ke surga kelak.</h4>
            <br>
            <ul class="nav nav-tabs" id="myTab" data-tabs="tabs">
                <li class="nav-item">
                    <a class="nav-link active"  data-toggle="tab" href="#detail" role="tab">Detail</a>
                </li>   
                <li class="nav-item">
                    <a class="nav-link"  data-toggle="tab" href="#donatur" role="tab">Donatur</a>
                </li>
            </ul>

            <br>
        <div class = "tab-content">
            <div id= "detail" class="tab-pane fade show active" role="tabpanel" >
                <img id ="detail" src="landing/assets/images/poster-2.jpg" alt="">
            </div>
            <div id="donatur" class="tab-pane fade show" role="tabpanel">
                <table class="table table-striped">
                <thead>
                        <tr>
                            <th>Tanggal dan Waktu</th>
                            <th>Kode Unik</th>
                            <th>Nominal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($donasi as $item)
                        <tr> 
                            <td>{{$item->created_at}}</td>
                            <td>{{ $item->kode_unik }}</td>
                            <td>{{ $item->nominal }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
        <br>
        <br>
        <button id="button" class="btn btn-success" type="button">SEDEKAH SEKARANG</button>
        </div>

    </section>
    <!-- Footer -->
    <footer >

    <section class="">
        <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <img src="landing/assets/images/prawitamacare-logo.jpeg" alt="Prawitama" width= "40" height="40"/>
            <br>
            <br>
            <h6 class="text-uppercase fw-bold mb-4">
                <i class="fas fa-gem me-3"></i>Prawitamacare
            </h6>

            <p>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam"
            </p>
            </div>

            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
                Progam
            </h6>
            <p>
                <a href="#!" class="text-reset">Donasi</a>
            </p>
            </div>
            
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
                Tautan
            </h6>
            <p>
                <a href="#!" class="text-reset">Beranda</a>
            </p>
            <p>
                <a href="#!" class="text-reset">Laporan</a>
            </p>
            <p>
                <a href="#!" class="text-reset">Tentang Kami</a>
            </p>
            </div>

            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
                Kontak
            </h6>
            <p> Prawitamacare</p>
            <p>

                prohumasi@smkwikrama.net            
            </p>
            <p>02518242411</p>
            <p>Jl. Raya Wangun No.21, RT.01/RW.06, Sindangsari, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16146</p>
            </div>
        </div>
        </div>
    </section>

    <!-- Copyright -->
            <div class="text-center p-4">
                <div class="col-lg-12 ">
                    <p class="copyright">Copyright &copy; 2021 SMK Wikrama</p>
                </div>
            </div>
    <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <!-- jQuery -->
    <script src="landing/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="landing/assets/js/popper.js"></script>
    <script src="landing/assets/js/bootstrap.min.js"></script>
    

    <!-- Plugins -->
    <script src="landing/assets/js/scrollreveal.min.js"></script>
    <script src="landing/assets/js/waypoints.min.js"></script>
    <script src="landing/assets/js/jquery.counterup.min.js"></script>
    <script src="landing/assets/js/imgfix.min.js"></script> 
    
    <!-- Global Init -->
    <script src="landing/assets/js/custom.js"></script>

    <script type="text/javascript">
       $('#myTab a').click(function(e) {
        e.preventDefault();
        $(this).tab('show');
        });

        // store the currently selected tab in the hash value
        $("ul.nav-tabs > li > a").on("shown.bs.tab", function(e) {
        var id = $(e.target).attr("href").substr(1);
        window.location.hash = id;
        });

        // on load of the page: switch to the currently selected tab
        var hash = window.location.hash;
        $('#myTab a[href="' + hash + '"]').tab('show');
    </script>

  </body>
</html>