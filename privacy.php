<?php include("./inc/header.inc.php"); ?>
<!-- Meta Tags For Each Page -->
<meta name="description" content="Your friendly and reliable window cleaning company">
<meta name="title" content="Bolton's Window Cleaning - Privacy Policy">
<!-- /Meta Tags -->
<link rel="canonical" href="https://<?=$domain_name;?>/privacy">
<!-- OG Meta Tags -->
<meta property="og:title" content="Bolton's Window Cleaning Privacy Policy">
<meta property="og:description" content="Your friendly and reliable window cleaning company">
<meta property="og:image" content="your_image_url">
<!-- /OG Meta Tags -->
<!-- Theme Color for safari and mobile browsers -->
<meta name="theme-color" content="red" />
<!-- / -->
<!-- Page Title -->
<title>Bolton's Window Cleaning - Privacy Policy</title>
<!-- /Page Title -->
</head>

<body>
    <!-- Nav Bar -->
    <?php
    include("./inc/nav.inc.php");
    include("./inc/settings.php");
    ?>
    <!-- /nav bar -->
    <main>
        <!-- Hero Section -->
        <div class="hero privacy-hero">
            <div class="hero-container">
                <div class="hero-text">
                    <h1 class="hero-title display-4">Our Privacy Policy</h1>


                </div>

            </div>
        </div>
        <!-- /Hero Section -->
        <!-- Main Body Of Page -->

        <section class="container">
            <h2 class="text-center my-3 display-4">Our Privacy and Cookie Policy</h2>

            <h2>The type of personal information we collect</h2>
            <p>We currently collect and process the following information:</p>
            <ul>
                <li>Personal details, such as your Name, email address and telephone number.</li>
            </ul>

            <h2>How we get the personal information and why we have it</h2>
            <p>Most of the personal information we process is provided to us directly by you for one of the following reasons:</p>
            <ul>
                <li>Filling out our contact form on our website.</li>

                <li>Contacting us directly via our contact details.</li>
            </ul>
            <p>We use the information that you have given us in order to reply to the message you submitted to us on our forms.</p>
            <p>This information will not be shared with anyone outside of our organisation.</p>

            <p>Under the General Data Protection Regulation (GDPR), the lawful bases we rely on for processing this information are: </p>
            <p><strong>Your consent. You are able to remove your consent at any time. You can do this by <a href="contact">contacting us via our website </a>or by emailing: <a href="mailto:<?= $emailaddress ?>"><?= $emailaddress; ?></a></strong></p>

            <h2>How we store your personal information</h2>
            <p>Your information is securely stored within our secure email servers.</p>
            <p>We keep contact details for 3 years. We will then dispose of your information by deleting it permanently from our email servers.</p>

            <h2>Your data protection rights</h2>
            <p>Under data protection law, you have rights including:</p>
            <ul>
                <li><strong>Your right of access -</strong> You have the right to ask us for copies of your personal information. </li>
                <li><strong>Your right to rectification -</strong> You have the right to ask us to rectify personal information you think is inaccurate. You also have the right to ask us to complete information you think is incomplete. </li>
                <li><strong>Your right to erasure -</strong> You have the right to ask us to erase your personal information in certain circumstances. </li>
                <li><strong>Your right to restriction of processing -</strong> You have the right to ask us to restrict the processing of your personal information in certain circumstances. </li>
                <li><strong>Your right to object to processing -</strong> You have the the right to object to the processing of your personal information in certain circumstances.</li>
                <li><strong>Your right to data portability </strong>- You have the right to ask that we transfer the personal information you gave us to another organisation, or to you, in certain circumstances.</li>
            </ul>

            <p>You are not required to pay any charge for exercising your rights. If you make a request, we have one month to respond to you.</p>
            <p>Please contact us at <a href="mailto:<?=$emailaddress;?>"><?=$emailaddress;?></a> if you wish to make a request.</p>

            <h2>How to complain</h2>
            <p>If you have any concerns about our use of your personal information, you can make a complaint to us at <a href="mailto:<?=$emailaddress;?>"><?=$emailaddress;?></a></p>
            <p>You can also complain to the ICO if you are unhappy with how we have used your data.</p>
            <p>The ICO's address:</p>
            <p><strong>Information Commissioner’s Office</strong> <br>
                Wycliffe House <br>
                Water Lane <br>
                Wilmslow <br>
                Cheshire <br>
                SK9 5AF
            </p>
            <p>Helpline number: 0303 123 1113</p>
            <p>ICO website: <a href="https://www.ico.org.uk" target="_blank" rel="noopener">www.ico.org.uk</a></p>

            <h2>How We Use Cookies</h2>
            <p>We do not use any cookies on this website that would track you.</p>
            <p>Cookies are simply used on this website to allow 3rd party integrations to run, such as our Map embed on our contact page or the Font styles that we use.</p>
        </section>




    </main>
    <!-- /Main Body Of Page -->
    <!-- Footer -->
    <?php include("./inc/footer.inc.php"); ?>
    <!-- /Footer -->

</body>

</html>