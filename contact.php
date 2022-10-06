<?php include("./inc/header.inc.php"); ?>
<!-- Meta Tags For Each Page -->
<meta name="description" content="Your friendly and reliable window cleaning company">
<meta name="title" content="Bolton's Window Cleaning - About Us">
<!-- /Meta Tags -->
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
        <div class="hero conact-hero">
            <div class="hero-container">
                <div class="hero-text">
                    <h1 class="hero-title display-4">Contact Us</h1>
                    <p>Get in touch with us to request a quote or to make contact with us. Simply fill out the form below or use the contact details provided and we will get in touch with you.</p>
                </div>

            </div>
        </div>
        <!-- /Hero Section -->
        <!-- Main Body Of Page -->
        <div class="container ">
            <div class="row my-3">
                <div class="col-50">
                    <div class="card-outer">
                        <div class="card-imgcap-icon">
                            <svg width="auto" height="75" viewBox="0 0 640 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_65_27)">
                                    <path d="M416 176C416 78.8 322.9 0 208 0C93.0999 0 -9.91672e-05 78.8 -9.91672e-05 176C-9.91672e-05 215.57 15.6199 251.96 41.6699 281.4C25.2799 314.16 2.4399 338.72 2.0799 339.08C-0.0200992 341.285 -0.590099 344.555 0.638901 347.434C1.8999 350.3 4.6019 352 7.6599 352C46.0099 352 78.4199 340.88 103.4 327.96C134.2 343.1 169.8 352 208 352C322.9 352 416 273.2 416 176ZM599.6 443.7C624.8 413.9 640 376.6 640 336C640 238.8 554 160 448 160C447.685 160 447.381 160.041 447.066 160.043C447.5 165.3 448 170.6 448 176C448 274.62 368.32 357.2 261.9 378.5C282.7 455.1 357.1 512 448 512C481.69 512 513.32 503.992 540.85 490.02C565.2 502 596.1 512 632.3 512C635.359 512 638.06 510.275 639.32 507.395C640.549 504.516 639.978 501.247 637.879 499.041C637.6 498.7 615.9 475.3 599.6 443.7Z" fill="#03B0FA" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_65_27">
                                        <rect width="640" height="512" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="card-body pt-0 ">
                            <h2 class="card-title text-center">Message Us</h2>
                            <p class="card-text text-color-muted">The <strong>quickest</strong> way to contact us is via our secure messaging service on this page. These messages are delivered direct to our email box and avoid any spam filters.</p>
                            <div class="card-btn-section"><button class="btn btn-primary card-cta-btn" id="msg-btn">Message Us Now</button></div>
                            <div class="contact-form my-3">
                            <button type="button" class="btn-close close" aria-label="Close"></button>
                                <form action="" autocomplete="on" id="contact-form">
                                    <div class="form-row">
                                        <div class="">
                                            <label for="fname" class="form-label">First Name</label>
                                            <input type="text" class="form-control" autocomplete="given-name" placeholder="First Name" aria-label="First Name" aria-describedby="fname" name="fname" id="fname">
                                        </div>
                                        <div class="">
                                            <label for="lname" class="form-label">Last Name</label>
                                            <input type="text" class="form-control  me-2" autocomplete="family-name" placeholder="Last Name" aria-label="Last Name" aria-describedby="lname" name="lname" id="lname">
                                        </div>
                                        <div class="">
                                            <label for="lname" class="form-label">Phone No.</label>
                                            <input type="text" class="form-control  me-2" autocomplete="tel" placeholder="Phone Number" aria-label="Phone Number" aria-describedby="lname" name="tel" id="tel">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="text" class="form-control" autocomplete="email" placeholder="Email Address" aria-label="Email" aria-describedby="email" name="email" id="email">
                                        </div>
                                        <label for="msgtype" class="form-label">Message Subject</label>
                                        <div class="mb-3">
                                            <select class="form-select" aria-label="Message regarding" name="msgtype" id="msgtype">
                                                <option value="">Message Subject</option>
                                                <option value="Window Cleaning">Window Cleaning</option>
                                                <option value="Gutter Cleaning">Gutter Cleaning</option>
                                                <option value="Conservatory Cleaning">Conservatory Cleaning</option>
                                                <option value="My Scheduled Clean">My Scheduled Clean</option>
                                                <option value="My Payments">My Payments</option>
                                                <option value="Something Else">Something Else</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Let us know a bit more information" id="message" name="message"></textarea>
                                            <label for="message">Your Message:</label>
                                        </div>
                                    </div>
                                    <input class="recaptcha-token" name="token" id="token"></input>
                                    <div class="button-section">
                                        <button type="submit" class="btn btn-primary accept">Submit Request</button>
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

                </div>

                <div class="col-50">
                    <div class="card-outer" id="contact-us">
                        <div class="card-imgcap-icon">
                            <svg width="75" height="75" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_65_29)">
                                    <path d="M74.8828 56.6895L71.4771 71.4551C70.9986 73.5425 69.1641 75.0029 67.0151 75.0029C30.0586 75 0 44.9414 0 7.98341C0 5.83595 1.4603 3.99903 3.54785 3.52296L18.3135 0.117195C20.4639 -0.381145 22.6611 0.735066 23.5547 2.77149L30.3691 18.665C31.1657 20.5371 30.6284 22.7183 29.0537 24.0044L21.167 30.3369C26.1445 40.4766 34.3887 48.7207 44.5312 53.7012L50.9883 45.8203C52.2609 44.2412 54.4585 43.6948 56.3306 44.5056L72.2241 51.3186C74.1357 52.3242 75.3809 54.5508 74.8828 56.6895Z" fill="#03B0FA" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_65_29">
                                        <rect width="75" height="75" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>

                        </div>
                        <div class="card-body pt-0">
                            <h2 class="card-title text-center">Contact Us</h2>
                            <p class="card-text text-color-muted">We are available on the phone number below, or you can email us. Alternatively, you can use the message us now button.</p>
                            <div class="contact-details">
                                <div class="contact-details-item">
                                    <span><i class="fa-solid fa-phone"></i></span><span><a href="<?= $contactnum; ?>"><?= $contactnum; ?></a></span>
                                </div>
                                <div class="contact-details-item">
                                    <span><i class="fa-solid fa-at"></i></span><span><a href="mailto:<?= $emailaddress; ?>"><?= $emailaddress; ?></a></span>
                                </div>
                                <div class="contact-details-item">
                                    <span><i class="fa-brands fa-facebook"></i></span><span><a href="<?= $facebookurl; ?>" target="_blank">Facebook</a></span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
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
    <script>
        $('#contact-form').submit(function(event) {
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
                        url: "./scripts/contact.script.php",
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

        })
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


        //script for showing contact form
        $('#msg-btn').on("click", function() {
            $('.contact-form').slideDown(500);
            $('#msg-btn').fadeOut(700);
        });
        $('.close').on("click", function() {
            $('.contact-form').slideUp(500);
            $('#msg-btn').fadeIn(700);
        });
    </script>
    <!-- Footer -->
    <?php include("./inc/footer.inc.php"); ?>
    <!-- /Footer -->

</body>

</html>