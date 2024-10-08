<!-- includes/header.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <script src="https://kit.fontawesome.com/073d59762d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/assets/stylesheets/style.css" />
    <link rel="stylesheet" href="/assets/stylesheets/footer.css" />
    <link rel="stylesheet" href="/assets/stylesheets/services.css" />
    <link rel="stylesheet" href="/assets/stylesheets/contact-us.css" />
    <link rel="stylesheet" href="/assets/stylesheets/about-us.css" />
    <link rel="stylesheet" href="/assets/stylesheets/owl-carousel.css" />
    <script src="/scripts/jquery.js" defer></script>
    <script src="/scripts/owl-carousel.js" defer></script>
    <script src="/scripts/animation.js" defer></script>
    <script src="/scripts/main.js" defer></script>
    <title>Digital Agency</title>
</head>

<body>
    <!-- announcement bar -->
    <div class="announcement wrapper">
        <div class="left">
            <p>YOUR LOCAL DIGITAL MARKETING AGENCY</p>
        </div>
        <div class="right contact-info">
            <div class="message">
                <img class="announcement-icon" src="/assets/icons/msg.png" alt="Message Icon" />
                <span class="phone-number">0 (877) 123-4567</span>
            </div>
            <div class="email">
                <img class="announcement-icon" src="/assets/icons/mail.png" alt="Message Icon" />
                <a href="mailto:info@yoursite.com">info@yoursite.com</a>
            </div>
            <ul class="follow">
                <img class="announcement-icon" src="/assets/icons/share.png" alt="Message Icon" />
                <li>FOLLOW US</li>
                <!-- Add social media links here -->
            </ul>
        </div>
    </div>
    <!-- announcement bar -->

    <header class="wrapper">
        <div class="logo">
            <a href="/">
                <img src="/assets/images/logo.png" alt="Digital Agency Logo" />
            </a>
        </div>


        <?php include 'includes/navigation.php'; ?>
        <button class="nav-btn">Free Quote</button>
    </header>