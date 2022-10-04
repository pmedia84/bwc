<nav class="nav" role="navigation">
    <div class="nav-container">
        <a href="index">
            <div class="brand">
                <?php include("./inc/logo.inc.php"); ?>
            </div>
        </a>
        <div class="nav-links" id="nav-links">
            <ul class="nav-menu">
                <li class="nav-link">
                    <a href="index">Home</a>
                </li>
                <li class="nav-link">
                    <a href="about">About Us</a>
                </li>
                <li class="nav-link">
                    <a href="services">Services</a>
                </li>
                <li class="nav-link">
                    <a href="contact">Contact</a>
                </li>

            </ul>
        </div>
        <div class="contact-header">
            <span class="contact-number">Call: <?=$contactnum;?></span>
        </div>
        <div class="nav-btn" id="nav-btn">
            <span class="line1"></span>
            <span class="line2"></span>
            <span class="line3"></span>
        </div>
    </div>
</nav>