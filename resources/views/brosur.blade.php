<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Brosur</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="../user/landing/css/bootstrap.min.css" rel="stylesheet">
    <link href="../user/landing/css/style.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .header {
            background-color: #0066CC;
            color: white;
            padding: 10px;
            text-align: center;
        }
        .content {
            text-align: center;
            margin: 20px;
        }
        .brosur {
            background-color: white;
            border: 1px solid #ccc;
            padding: 20px;
            margin: 20px auto;
            max-width: 800px;
            overflow: hidden; /* Added to hide overflow */
            position: relative;
        }
        .brosur img {
            max-width: 100%;
            height: auto;
            transition: transform 0.25s ease; /* Smooth transition */
        }
        .zoom-buttons {
            position: absolute;
            top: 10px;
            right: 10px;
            display: flex;
            flex-direction: column;
        }
        .zoom-buttons button {
            margin: 5px;
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container-fluid bg-white">
        <div class="container">
            <nav class="navbar navbar-white navbar-expand-lg py-lg-0">
                <a href="#" class="text-dark fw-bold">
                    <img src="{{asset('static/images/SIMTARU.png')}}" width="150" alt="Logo"> 
                </a>
                <div class="navbar-collapse me-n3" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="/" class="nav-item nav-link">Beranda</a>
                        <a href="/peta" class="nav-item nav-link">Peta RTRW</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">KKPR</a>
                            <div class="dropdown-menu m-0 bg-white">
                                <a href="/brosur" class="dropdown-item">Brosur</a>
                                <a href="{{asset('pdf/Bukusaku.pdf')}}" class="dropdown-item" target="_blank">Buku Saku</a>
                            </div>
                        </div>
                        <a href="/kontak" class="nav-item nav-link">Kontak</a>
                        <a href="{{ url('login') }}" class="btn btn-info nav-item nav-link">admin</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="content">
        <div class="brosur">
            <img src="{{asset('static/images/Depan.png')}}" alt="Brosur KKPR Kota Pontianak" id="brosurImage">
        </div>
    </div>

    <script>
        let zoomLevel = 1;
        const img = document.getElementById('brosurImage');

</body>
</html>
