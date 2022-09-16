<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/styles.css">

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <title>Bolton's Window Cleaning</title>
</head>

<body>

    <nav class="nav" role="navigation">
        <div class="nav-container">
            <div class="brand">
                <?php include("./inc/logo.inc.php"); ?>


            </div>

            <div class="nav-links" id="nav-links">
                <ul class="nav-menu">
                    <li class="nav-link">
                        <a href="">About Us</a>
                    </li>
                    <li class="nav-link">
                        <a href="">Contact</a>
                    </li>
                    <li class="nav-link">
                        <a href="">Prices</a>
                    </li>

                </ul>
            </div>
            <div class="contact-header">
                <span class="contact-number">Call: 07845 845857</span>
            </div>
            <div class="nav-btn" id="nav-btn">
                <span class="line1"></span>
                <span class="line2"></span>
                <span class="line3"></span>


            </div>
        </div>
    </nav>

    <div class="hero index-hero">
        <div class="hero-container">
            <div class="hero-text">
                <h1 class="hero-title display-4">Window Cleaning Services</h1>
                <p class="hero-subtitle">Reliable, Efficient and Professional </p>
                <p>Providing window and gutter cleaning services to domestic and commercial properties in Spalding and the surrounding areas.</p>
            </div>
            <div class="quote-request">
                <h2>Request A Quote</h2>
                <form action="">
                    <div class="form-row">
                        <div class="form-col">
                            <label for="fname" class="form-label">First Name</label>
                            <input type="text" class="form-control" placeholder="First Name" aria-label="First Name" aria-describedby="fname" name="fname" id="fname">
                        </div>
                        <div class="form-col">
                            <label for="lname" class="form-label">Last Name</label>
                            <input type="text" class="form-control  me-2" placeholder="Last Name" aria-label="Last Name" aria-describedby="lname" name="lname" id="lname">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" placeholder="Email Address" aria-label="Email" aria-describedby="email" name="email" id="email">
                        </div>
                        <label for="propertytype" class="form-label">Property Type</label>
                        <div class="form-col mb-3">

                            <select class="form-select" aria-label="Default select example" name="propertytype" id="propertytype">
                                <option selected>Select Property Type</option>
                                <option value="detached">Detached</option>
                                <option value="semi detached">Semi Detached</option>
                                <option value="bungalow">Bungalow</option>
                                <option value="Commercial Property">Commercial Property</option>
                            </select>
                        </div>


                    </div>
                    <div class="form-col mb-3">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Let us know a bit more information" id="furtherinfo"></textarea>
                            <label for="furtherinfo">Further Information:</label>
                        </div>
                    </div>
                    <div class="button-section">
                        <button type="button" class="btn btn-primary">Submit Request</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
    <div class="container card-container">
        <h2 class="text-center my-3">Our Services</h2>
        <div class="card-horizontal-outer my-3 ">
            <div class="card-horizontal-imgcap">
                <img src="./assets/img/window-cleaning.jpg" alt="Bolton's Window Cleaning">
            </div>
            <div class="card-horizontal-body bg-droplets-img text-color-primary">
                <h3 class="card-title">Window Cleaning</h3>
                <p class="card-text text-color-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta laudantium quidem hic cumque dolore nisi.</p>
                <a href="#">Find Out More</a>
            </div>
        </div>

        <div class="card-horizontal-outer mb-3">
            <div class="card-horizontal-imgcap">
                <img src="./assets/img/window-cleaning.jpg" alt="Bolton's Window Cleaning">
            </div>
            <div class="card-horizontal-body bg-droplets-img text-color-primary">
                <h3 class="card-title">Gutter Cleaning</h3>
                <p class="card-text text-color-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta laudantium quidem hic cumque dolore nisi.</p>
                <a href="#">Find Out More</a>
            </div>


        </div>
        <div class="card-horizontal-outer my-3">
            <div class="card-horizontal-imgcap">
                <img src="./assets/img/window-cleaning.jpg" alt="Bolton's Window Cleaning">
            </div>
            <div class="card-horizontal-body bg-droplets-img text-color-primary">
                <h3 class="card-title">Roof Cleaning</h3>
                <p class="card-text text-color-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta laudantium quidem hic cumque dolore nisi.</p>
                <a href="#">Find Out More</a>
            </div>
        </div>

        <div class="card-horizontal-outer my-3">
            <div class="card-horizontal-imgcap">
                <img src="./assets/img/window-cleaning.jpg" alt="Bolton's Window Cleaning">
            </div>
            <div class="card-horizontal-body bg-droplets-img text-color-primary">
                <h3 class="card-title">Conservatory Cleaning</h3>
                <p class="card-text text-color-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta laudantium quidem hic cumque dolore nisi.</p>
                <a href="#">Find Out More</a>
            </div>
        </div>




    </div>
    <div class="container">
        <div class="card-fw bg-secondary-col text-color-primary py-5 my-3">
            <div class="card-body text-center">
                <h3 class="card-title">Reliable Window Cleaning Services Since 0000</h3>
                <p class="card-text text-color-white">Your local friendly and reliable window cleaning company serving Cambridgeshire and Norfolk.</p>
                <button class="btn btn-primary">Contact Us!</button>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <h2 class="text-center my-3">What We Do Best!</h2>
        <div class="gallery my-3">
            <?php
            $files = glob('./assets/img/gallery/*.{jpeg,gif,png}', GLOB_BRACE);
            if ($files !== false) {
                foreach ($files as $img) :
                    if ($img == '..' || $img == '.')
            ?>



                    <img src="<?= $img ?>" alt="">
            <?php endforeach;
            };
            ?>


        </div>
    </div>
    <footer class="bg-secondary-col">
        <div class="footer-container">
            <img class="logo" src="./assets/img/logo/logo.svg" alt="">
            <div class="footer-links">
                <p class="footer-subtitle">Company Info</p>
                <ul>
                    <li><a href="#">Window Cleaning</a></li>
                    <li><a href="#">Gutter Cleaning</a></li>
                    <li><a href="#">Request Quote</a></li>
                    <li><a href="#">About Us</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <p class="footer-subtitle">Help</p>
                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms</a></li>
                </ul>
            </div>

            <div class="footer-links">
                <p class="footer-subtitle">Contact Us</p>
                <ul>
                    <li>07946 742580</li>
                    <li>email:</li>

                </ul>
            </div>

        </div>
        <div class="copyright container">
            <p>&copy; Bolton's Window Cleaning <?php echo date("Y"); ?></p>
            <p>Website lovingly created by <a href="http://www.parrotmedia.co.uk" target="blank">Parrot Media</a></p>
        </div>
    </footer>

    <script src="./assets/js/app.js"></script>
</body>

</html>