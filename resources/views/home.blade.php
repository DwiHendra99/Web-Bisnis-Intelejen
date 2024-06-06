<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bisnin Intelejen</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
</head>

<body>
    <header>
        <nav>
            <div class="logo">HARGA PRODUSEN</div>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#featured-services">Producer Price</a></li>
                <li><a href="#features">Visualization</a></li>
                <li><a href="/login">Login</a></li>
            </ul>
        </nav>
    </header>
    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Welcome to Our Producer Price</h1>
            <p>{{ $contents->content }}</p>
            <a href="#features" class="btn">Learn More</a>
        </div>
    </section>

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-activity icon"></i></div>
                        <h4><a href="" class="stretched-link">Gula Aren Semut</a></h4>
                        <img src="{{ asset('images/gula aren.jpg') }}" alt="gula aren.jpg" class="card-image">
                        <p>Rp21.903</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
                        <h4><a href="" class="stretched-link">Gula Aren Merah Kelapa</a></h4>
                        <img src="{{ asset('images/gula aren merah kelapa.jpg') }}" alt="gula aren merah kelapa.jpg"
                            class="card-image">
                        <p>Rp11.944</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
                        <h4><a href="" class="stretched-link">Gula Aren Batok</a></h4>
                        <img src="{{ asset('images/gula aren batok.jpeg') }}" alt="gula aren batok.jpeg"
                            class="card-image">
                        <p>Rp16.645</p>
                    </div>
                </div><!-- End Service Item -->
            </div>
        </div>
    </section><!-- /Featured Services Section -->

    <section id="features" class="features">
        <iframe width="1366" height="2500"
            src="https://lookerstudio.google.com/embed/reporting/017af013-dd71-4d63-bf83-0b8e8cb84cde/page/1M"
            frameborder="0" style="border:0" allowfullscreen
            sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox">
        </iframe>
    </section>
    <footer id="contact">
        <p>Contact us at <a href="mailto:info@example.com">BISNIS INTELIJENT 2024</a></p>
    </footer>
</body>

</html>
