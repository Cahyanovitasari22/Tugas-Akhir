<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>SIMTARU</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700;800&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="../user/landing/lib/animate/animate.min.css" rel="stylesheet">
        <link href="../user/landing/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="../user/landing/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="../user/landing/css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-dark" role="status"></div>
        </div>



        <!-- Navbar Start -->
        <div class="container-fluid bg-white">
            <div class="container">
                <nav class="navbar navbar-white navbar-expand-lg py-lg-0">
                    <a href="" class="text-dark fw-bold">
				<img src="{{asset('static/images/SIMTARU.png')}}" width="150" alt="Logo">
			</a>
                   
                    <div class="navbar-collapse me-n3" id="navbarCollapse">
                        <div class="navbar-nav ms-auto">
                            <a href="/" class="nav-item nav-link ">Beranda</a>
                            <a href="/peta" class="nav-item nav-link">Peta RTRW</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">KKPR</a>
                                <div class="dropdown-menu m-0 bg-white">
                                    <a href="/brosur" class="dropdown-item">Brosur</a>
                                    <a href="{{asset('pdf/Bukusaku.pdf')}}" class="dropdown-item" target='_blank'>Buku Saku</a>
                                </div>
                            </div>
                            <a href="/pola" class="nav-item nav-link">Kontak</a>
                            <a href="{{ url('login') }}" class="btn btn-info nav-link">admin</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->


        <!-- Carousel Start -->
        <div class="container-fluid carousel px-0 mb-5 pb-5">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="{{asset('user/landing/img/dputr1.png')}}" class="img-fluid w-100" alt="First slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h3 class="text-white display-4 mb-3 animated slideInDown">Sistem Informasi Geografis Tata Ruang Kabupaten Ketapang</h3>
                                <!--<a href="" class="me-2"><button type="button" class="px-5 py-3 btn-dark border-2 rounded-pill animated slideInDown">Read More</button></a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        
        <!-- Get In Touch Start 
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay=".3s">
            <div class="container py-5">
                <div class="bg-light px-4 py-5 rounded">
                    <div class="text-center">
                        <h1 class="display-5 mb-5">Find Your Pest Control Services</h1>
                    </div>
                    <form class="text-center mb-4" action="#">
                        <div class="row g-4">
                            <div class="col-xl-10 col-lg-12">
                                <div class="row g-4">
                                    <div class="col-md-6 col-xl-3">
                                        <select class="form-select p-3 border-0">
                                            <option value="Type Of Service" class="">Type Of Service</option>
                                            <option value="Pest Control-2">Pest Control-2</option>
                                            <option value="Pest Control-3">Pest Control-3</option>
                                            <option value="Pest Control-4">Pest Control-4</option>
                                            <option value="Pest Control-5">Pest Control-5</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-xl-3">
                                        <input type="text" class="form-control p-3 border-0" placeholder="Name">
                                    </div>
                                    <div class="col-md-6 col-xl-3">
                                        <input type="text" class="form-control p-3 border-0" placeholder="Phone">
                                    </div>
                                    <div class="col-md-6 col-xl-3">
                                        <input type="email" class="form-control p-3 border-0" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-12">
                                <input type="button" class="btn btn-primary w-100 p-3 border-0" value="GET STARTED">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>-->
        <!-- Get In Touch End -->


        <!-- About Start -->
         <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".3s">
                        <!--<div class="about-img">
                            <div class="rotate-left bg-dark"></div>
                            <div class="rotate-right bg-dark"></div>
                            <img src="../user/landing/img/dputr.png" class="img-fluid h-100" alt="img">
                            <div class="bg-white experiences">
                                <h1 class="display-3">20</h1>
                                <h6 class="fw-bold">Years Of Experiences</h6>
                            </div>-->
                        </div>
                    </div>
                    <div class="text-center col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".6s">
                        <div class="about-item overflow-hidden">
                            <!--<h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-info">Pembahasan</h5>-->
                           <br></br>
                            <h1 class="display-10 mb-2">Sistem Informasi Geografis</h1>
                            <h1 class="display-10 mb-2">Bidang Tata Ruang dan Pertanahan?</h1>
                            <p class="fs-5" style="text-align: justify;">
                                Sistem informasi bidang tata ruang adalah informasi mengenai bidang tata ruang terkait dengan Peta RTRW, Brosur KKPR, dan Buku Saku KKPR yang bisa dimanfaatkan oleh masyarakat terkait informasi tersebut. Data pada sistem informasi ini merupakan data yang diambil pada Dinas Pekerjaan Umum dan Tata Ruang Kabupaten Ketapang pada bidang tata ruang. Didalam admin terdapat pengadministrasian berkas SPPD khusus pegawai bidang tata ruang.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../user/landing/lib/wow/wow.min.js"></script>
        <script src="../user/landing/lib/easing/easing.min.js"></script>
        <script src="../user/landing/lib/waypoints/waypoints.min.js"></script>
        <script src="../user/landing/lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="../user/landing/js/main.js"></script>
    </body>

</html>