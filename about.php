<?php include("./inc/header.inc.php"); ?>
<!-- Meta Tags For Each Page -->
<meta name="description" content="Find out a bit more about Bolton's Window Cleaning">
<meta name="title" content="Bolton's Window Cleaning - About Us">
<!-- /Meta Tags -->
<link rel="canonical" href="https://www.<?= $_SERVER['SERVER_NAME']; ?>/about">
<!-- OG Meta Tags -->
<meta property="og:title" content="Bolton's Window Cleaning">
<meta property="og:description" content="Your friendly and reliable window cleaning company">
<meta property="og:image" content="your_image_url">
<!-- /OG Meta Tags -->
<!-- Page Title -->
<title>Bolton's Window Cleaning</title>
<!-- /Page Title -->
</head>

<body>
    <!-- Nav Bar -->
    <?php include("./inc/nav.inc.php"); ?>
    <!-- /nav bar -->
    <main>
        <!-- Hero Section -->
        <div class="hero about-hero">
            <div class="hero-container">
                <div class="hero-text">
                    <h1 class="hero-title display-4">About Us</h1>
                    <p class="hero-subtitle">Reliable, Efficient and Professional </p>
                    <p>Established in 2015 by Luke Bolton, Bolton's Window Cleaning has gone from strength to strength. Starting out cleaning domestic windows, Bolton's Window Cleaning now take on commercial work including schools.</p>

                </div>

            </div>
        </div>
        <!-- /Hero Section -->
        <!-- Main Body Of Page -->
        <div class="container-fw bg-tertiary-col">
            <div class="row flex-reverse-md">
            <div class="col-50">
                    <img src="./assets/img/gallery/before-after-gutters.webp" alt="Gutter Cleaning before and after by Bolton's Window Cleaning">
                </div>
            <div class="col-50">
                    <div class="card-outer border-0">
                        <div class="card-body">
                            <h2 class="card-title text-color-white">What We Do</h2>
                            <p class="card-text text-color-white">Since 2015, Bolton's Window Cleaning has provided a friendly and dependable service to your home or business. We are a small firm that provides you with excellent personal service.</p>
                            <a href="contact">Contact US</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <h2 class="text-center my-3">Our Services</h2>
        <div class="container">

            <div class="grid-row-3col my-3">
                <div class="card-outer">
                    <div class="card-imgcap">
                        <img src="./assets/img/services/window-cleaning.jpg" alt="">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Window Cleaning</h3>
                        <p class="card-text text-color-muted">Our window cleaning service for Cambridgeshire and Norfolk. This is our primary service and is where we started our business in 2015! We pride ourselves in this service and we pay attention to every detail. From the traditional methods we use such as ladders, poles and squeegees to the way we also clean your window frames and not just the glass. Giving you a streak free finish for your windows and doors at home. </p>
                        <a href="services#window-cleaning">Find out More</a>
                    </div>
                </div>
                <div class="card-outer">
                    <div class="card-imgcap">
                        <img src="./assets/img/services/gutter-cleaning.jpg" alt="">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Gutter Cleaning</h3>
                        <p class="card-text text-color-muted">Our gutter cleaning service will leave not only your gutters looking as good as the day they were installed, our gutter cleaning service will also leave your fascia's and soffits looking spotless too. We use a gutter vac to remove all the debris that has built up such as leaves and moss from your roof, and then we will clean with poles and brushes leaving an amazing finish.</p>
                        <a href="services#gutter-cleaning">Find out More</a>
                    </div>
                </div>
                <div class="card-outer">
                    <div class="card-imgcap">
                        <img src="./assets/img/services/conservatory-cleaning.jpg" alt="">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Conservatory Roof Cleaning</h3>
                        <p class="card-text text-color-muted">Our conservatory roof cleaning service will leave your conservatory looking sparkling new. And we also apply an anti-mould treatment to make sure your conservatory roof looks amazing for even longer.</p>
                        <a href="services#conservatory-roof-cleaning">Find out More</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fw bg-tertiary-col">
            <div class="row my-3">
                <div class="col-50">
                    <img src="./assets/img/van2.jpg" alt="">
                </div>
                <div class="col-50">
                    <div class="card-outer border-0">
                        <div class="card-body">
                            <h2 class="card-title text-color-white">How We Work</h2>
                            <p class="card-text text-color-white">Once you are happy with a quotation that we provide, we will then commence your cleaning schedule as agreed. We will also contact you first to make sure you are going to be at home. Our methods are using traditional poles and ladders, we find this gives a great finish and we also clean your plastic frames as well. Payment can be by cash or bank transfer.</p>
                            <a href="contact">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- /Main Body Of Page -->
    <!-- Footer -->
    <?php include("./inc/footer.inc.php"); ?>
    <!-- /Footer -->

</body>

</html>