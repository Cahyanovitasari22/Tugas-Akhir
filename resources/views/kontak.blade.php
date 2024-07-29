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
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


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
                                    <a href="price.html" class="dropdown-item">Brosur</a>
                                    <a href="blog.html" class="dropdown-item">Buku Saku</a>
                                </div>
                            </div>
                            <a href="/kontak" class="nav-item nav-link">Kontak</a>
                            <a href="/login" class="btn btn-info nav-item nav-link">admin</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->



        <!-- Contact Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                    <h1 class="mb-2 px-3 py-1 text-dark ">Dinas Pekerjaan Umum dan Tata Ruang</h1>
                </div>
                <div class="row g-5 mb-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="h-100">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31902.295633619862!2d109.95808233476562!3d-1.828410062781858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e0518439f9846f3%3A0x94f8ce420e7fc17b!2sKantor%20Dinas%20PU%20Ketapang!5e0!3m2!1sid!2sid!4v1707052011189!5m2!1sid!2sid" width="1100" height="500" style="border:0;" allowfullscreen="100" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                </div>
                <div class="row g-4 wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex bg-light p-3 rounded contact-btn-link">
                            <div class="flex-shrink-0 d-flex align-items-center justify-content-center bg-primary rounded-circle p-3 ms-3" style="width: 64px; height: 64px;">
                                <i class="fa fa-share text-dark"></i>
                            </div>
                            <div class="ms-3 contact-link">
                                <h4 class="text-dark">fallow Us</h4>
                                <div class="d-flex justify-content-center">
                                    <a class="pe-2" href="#"><i class="fab fa-facebook-f text-dark"></i></a>
                                    <a class="px-2" href="#"><i class="fab fa-twitter text-dark"></i></a>
                                    <a class="px-2" href="#"><i class="fab fa-instagram text-dark"></i></a>
                                    <a class="px-2" href="#"><i class="fab fa-linkedin-in text-dark"></i></a>
                                    <a class="px-2" href="#"><i class="fab fa-youtube text-dark"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex bg-light p-3 rounded contact-btn-link">
                            <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle p-3 ms-3" style="width: 64px; height: 64px;">
                                <i class="fas fa-map-marker-alt text-dark"></i>
                            </div>
                            <div class="ms-3 contact-link">
                                <h4 class="text-dark">Address</h4>
                                <a href="#">
                                    <h5 class="text-dark d-inline fs-6">123 Street, CA, USA</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex bg-light p-3 rounded contact-btn-link">
                            <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle p-3 ms-3" style="width: 64px; height: 64px;">
                                <i class="fa fa-phone text-dark"></i>
                            </div>
                            <div class="ms-3 contact-link">
                                <h4 class="text-dark">Call Us</h4>
                                <a class="h5 text-dark fs-6" href="tel:+0123456789">+012 3456 7890</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex bg-light p-3 rounded contact-btn-link">
                            <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle p-3 ms-3" style="width: 64px; height: 64px;">
                                <i class="fa fa-envelope text-dark"></i>
                            </div>
                            <div class="ms-3 contact-link">
                                <h4 class="text-dark">Email Us</h4>
                                <a class="h5 text-dark fs-6" href="#">info@example.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Contact End -->


        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="../user/landing/js/main.js"></script>
    </body>

</html>