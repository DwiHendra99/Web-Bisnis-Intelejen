<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bisnin Intelejen</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header>
        <nav>
            <div class="logo">HARGA PRODUSEN</div>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#contact">Contact</a></li>
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
