<?php include("./inc/header.inc.php"); ?>
<!-- Meta Tags For Each Page -->
<meta name="description" content="Window and gutter cleaning services from your friendly and reliable window cleaning company, we cover Cambridgeshire and Norfolk - Bolton's Window Cleaning">
<meta name="title" content="Window and Gutter Cleaning in Cambridgeshire and Norfolk">
<!-- /Meta Tags -->
<link rel="canonical" href="https://<?= $domain_name; ?>">
<!-- / -->
<!-- OG Meta Tags -->
<meta property="og:title" content="Window and Gutter Cleaning in Cambridgeshire and Norfolk">
<meta property="og:description" content="Window and gutter cleaning services from your friendly and reliable company, we cover Cambridgeshire and Norfolk - Bolton's Window Cleaning">
<!-- /OG Meta Tags -->
<!-- Page Title -->
<title>Window and Gutter Cleaning services in Cambridgeshire and Norfolk</title>
<!-- /Page Title -->
</head>

<body>
    <!-- Nav Bar -->
    <?php include("./inc/nav.inc.php"); ?>
    <!-- /nav bar -->
    <main>
        <!-- Hero Section -->
        <div class="hero index-hero">
            <div class="hero-container">
                <div class="hero-text">
                    <h1 class="hero-title display-2">Window and Gutter Cleaning Services</h1>
                    <p class="hero-subtitle">Reliable, Efficient and Professional </p>
                    <div itemscope itemtype="https://schema.org/Service">
                        <meta itemprop="serviceType" content="Home cleaning" />

                        <p>
                            <span itemprop="provider" itemscope itemtype="https://schema.org/LocalBusiness">
                                <span itemprop="name">Bolton's Window Cleaning</span>
                            </span>
                            provide window and gutter cleaning services to domestic and commercial properties in and around
                            <span itemprop="areaServed" itemscope itemtype="https://schema.org/State">
                                <span itemprop="name">Cambridgeshire</span> and
                            </span>
                            <span itemprop="areaServed" itemscope itemtype="https://schema.org/State">
                                <span itemprop="name">Norfolk</span>
                            </span>
                            We are a small business focussed on providing a first class service to domestic, commercial and public sector clients.
                        </p>
                    </div>

                </div>
                <div class="quote-request">
                    <h2>Request A Quote</h2>
                    <form action="./scripts/index.script.php" method="POST" autocomplete="on" id="index-quote-request-form">
                        <div class="form-row">
                            <div class="form-col">
                                <label for="fname" class="form-label">First Name</label>
                                <input type="text" class="form-control" autocomplete="given-name" placeholder="First Name" aria-label="First Name" aria-describedby="fname" name="fname" id="fname">
                            </div>
                            <div class="form-col">
                                <label for="lname" class="form-label">Last Name</label>
                                <input type="text" class="form-control  me-2" autocomplete="family-name" placeholder="Last Name" aria-label="Last Name" aria-describedby="lname" name="lname" id="lname">
                            </div>
                            <div class="form-col">
                                <label for="tel" class="form-label">Phone No.</label>
                                <input type="text" class="form-control  me-2" autocomplete="tel" placeholder="Phone Number" aria-label="Phone Number" aria-describedby="lname" name="tel" id="tel">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-col">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" autocomplete="email" placeholder="Email Address" aria-label="Email" aria-describedby="email" name="email" id="email">
                            </div>
                            <label for="propertytype" class="form-label">Property Type</label>
                            <div class="form-col mb-3">
                                <select class="form-select" aria-label="Default select example" name="propertytype" id="propertytype">
                                    <option value="">Select Property Type</option>
                                    <option value="Detached">Detached</option>
                                    <option value="Semi Detached">Semi Detached</option>
                                    <option value="Bungalow">Bungalow</option>
                                    <option value="Commercial">Commercial</option>
                                    <option value="Commercial">Park Home</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-col mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Let us know a bit more information" id="furtherinfo" name="furtherinfo"></textarea>
                                <label for="furtherinfo">Further Information:</label>
                            </div>
                        </div>
                        <input class="recaptcha-token" name="token" id="token"></input>
                        <div class="button-section">
                            <button type="submit" class="btn btn-primary" data-sitekey="6LfHhz4iAAAAAJWBTMM2AQDSscsqAAyAedhwBTpk" data-callback='onSubmit' data-action='submit'>Submit Request</button>

                        </div>
                        <div class="google-policy">
                            <p>Our website is protected by reCAPTCHA and the Google</p>
                            <a href="https://policies.google.com/privacy" target="_blank">Privacy Policy</a> and
                            <a href="https://policies.google.com/terms" target="_blank">Terms of Service</a> apply.
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- /Hero Section -->
        <!-- Main Body Of Page -->
        <div class="container card-container">
            <h2 class="text-center my-3 display-3">Our Services</h2>
            <div class="card-horizontal-outer my-3 ">
                <div class="card-horizontal-imgcap">
                    <img src="./assets/img/services/window-cleaning.jpg" alt="Window Cleaning Services">
                </div>
                <div class="card-horizontal-body bg-droplets-img text-color-primary">
                    <h3 class="card-title">Window Cleaning</h3>
                    <p class="card-text text-color-white">Our primary service is Window Cleaning, we cover Cambridgeshire and Norfolk. Using traditional methods we take pride in what we do and our Window Cleaning service will leave your windows sparkling clean!</p>
                    <a href="window-cleaning-services-cambridgeshire#window-cleaning">Find Out More</a>
                </div>
            </div>
            <div class="card-horizontal-outer mb-3">
                <div class="card-horizontal-imgcap">
                    <img src="./assets/img/services/gutter-cleaning.jpg" alt="Gutter Cleaning Services">
                </div>
                <div class="card-horizontal-body bg-droplets-img text-color-primary">
                    <h3 class="card-title">Gutter Cleaning</h3>
                    <p class="card-text text-color-white">Our Gutter Cleaning service will leave not only your gutters looking as good as new, but also your fascia's and soffits too!</p>
                    <a href="window-cleaning-services-cambridgeshire#gutter-cleaning">Find out about our gutter cleaning service</a>
                </div>
            </div>
            <div class="card-horizontal-outer my-3">
                <div class="card-horizontal-imgcap">
                    <img src="./assets/img/services/roof-cleaning.jpg" alt="Roof Cleaning Services">
                </div>
                <div class="card-horizontal-body bg-droplets-img text-color-primary">
                    <h3 class="card-title">Roof Cleaning</h3>
                    <p class="card-text text-color-white">We ensure a perfect finish with our Roof Cleaning service, making sure we remove all moss before we clean your roof using traditional methods.</p>
                    <a href="window-cleaning-services-cambridgeshire#roof-cleaning">Find out about our roof cleaning service</a>
                </div>
            </div>
            <div class="card-horizontal-outer my-3">
                <div class="card-horizontal-imgcap">
                    <img src="./assets/img/services/conservatory-cleaning.jpg" alt="Conservatory Roof Cleaning">
                </div>
                <div class="card-horizontal-body bg-droplets-img text-color-primary">
                    <h3 class="card-title">Conservatory Roof Cleaning</h3>
                    <p class="card-text text-color-white">Our Conservatory Roof Cleaning service will leave your conservatory roof looking as good as the day it was installed, using traditional methods and environmentally friendly chemicals. </p>
                    <a href="window-cleaning-services-cambridgeshire#conservatory-roof-cleaning">Find out about our conservatory roof cleaning</a>
                </div>
            </div>
            <div class="card-horizontal-outer my-3">
                <div class="card-horizontal-imgcap">
                    <img src="./assets/img/services/lodge-cleaning.jpg" alt="Park Home Cleaning">
                </div>
                <div class="card-horizontal-body bg-droplets-img text-color-primary">
                    <h3 class="card-title">Park Home Cleaning</h3>
                    <p class="card-text text-color-white">Our Park Home cleaning service can not only clean your windows but all of your external surfaces and hand rails.</p>
                    <a href="window-cleaning-services-cambridgeshire#park-home-cleaning">Find out about our park home cleaning</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card-fw bg-secondary-col text-color-primary py-5 my-3">
                <div class="card-body text-center">
                    <h3 class="card-title">Reliable Window Cleaning Services Since 2015!</h3>
                    <p class="card-text text-color-white">Your local friendly and reliable window cleaning company serving Cambridgeshire and Norfolk.</p>
                    <a class="btn btn-primary" href="contact">Contact Us!</a>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <h2 class="text-center my-3">What We Do Best!</h2>
            <div class="gallery my-3">
                <?php
                $files = glob('./assets/img/gallery/*.{jpeg,gif,png,webp}', GLOB_BRACE);
                if ($files !== false) {
                    foreach ($files as $img) :
                        if ($img == '..' || $img == '.')
                ?>



                        <img src="<?= $img ?>" alt="Window and Gutter Cleaning services from Bolton's Window Cleaning">
                <?php endforeach;
                };
                ?>


            </div>
        </div>
        <!--Modal for form responses -->
        <div class="modal">

            <div class="modal-body">
                <div class="modal-close">
                    <button type="button" class="btn-close" aria-label="Close"></button>
                </div>
                <div class="form-response">
                    <!-- Response from php script is inserted here -->
                </div>
                <div class="modal-button-section">
                    <button class="btn btn-primary btn-confirm" type="button">Confirm</button>
                </div>
            </div>
        </div>
    </main>
    <!-- /Main Body Of Page -->
    <!-- Quote request form script -->
    <script>
        $('#index-quote-request-form').submit(function(event) {
            event.preventDefault(); //prevent form default submit
            //bring in recaptcha scripts and request token
            grecaptcha.ready(function() {
                grecaptcha.execute('6LevFFEiAAAAAPcel_AlRmOSMRgDSXCN5vT0lbmC', {
                    action: 'submit'
                }).then(function(token) {

                    $('#token').val(token);

                    const data = new FormData(event.target); //declare form data
                    const values = Object.fromEntries(data.entries()); //select data

                    console.log(values);

                    $.ajax({ //start ajax post
                        type: "POST",
                        url: "./scripts/index.script.php",
                        data: values,
                        encode: true,
                        success: function(data, responseText) {
                            $(".form-response").html(data);
                            $(".modal").toggleClass("modal-active"); //bring in modal to display messages from php script
                            // $('#index-quote-request-form')[0].reset(); //reset the form
                        }
                    })




                });
            });




        });





        //close modal when close button is clicked
        $(".btn-close").on("click", function() {
            $(".modal").removeClass("modal-active");

        })
        //close modal when confirm button is clicked
        $(".btn-confirm").on("click", function() {
            $(".modal").removeClass("modal-active");
        })
        //close modal when clicking off the dialog box
        $(".modal").on("click", function() {
            if ($(event.target).is(".modal")) {
                $(".modal").removeClass("modal-active");
            }

        })
    </script>
    <!-- /Quote request form script -->
    <!-- Footer -->
    <?php include("./inc/footer.inc.php"); ?>
    <!-- /Footer -->

</body>

</html>