<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>kinlab | making miracles happen every day</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="images/favicon.png" type="image/png"  />

    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-procedure.css">
    <link rel="stylesheet" href="css/style-clients.css">
    <link rel="stylesheet" href="css/style-staff.css">
    <link rel="stylesheet" href="css/kinlab-modal.css">

</head>
<body onload="init();">

<header>
    <a name="top"></a>
    <div class="container">
        <div class="row">
            <div class="two columns">
                <a href="index.php">
                    <img src="images/logowhite.png" alt="kinlab logo" class="u-max-full-width">
</a>
            </div>

            <nav class="navigation ten columns">
<!--                <a href="#" class="menu-icon">-->
<!--                    <i class="fa fa-bars"></i>-->
<!--                </a>-->
                <ul class="main-navigation">
<!--                    <li><a href="index.php">Home</a></li>-->
                    <li><a href="index.php#mission">Our Mission</a></li>
                    <li class="submenu"><a href="index.php#clients">Our Clients</a>
                        <ul class="sub-navigation">
                            <li><a href="clients.php">Testimonials</a></li>
                        </ul>
                    </li>
                    <li class="submenu"><a href="index.php#staff">Our Staff</a>
                        <ul class="sub-navigation">
                            <li><a href="staff.php#intro">Introduction</a></li>
                            <li><a href="staff.php#ourstaff">Meet Our Staff</a></li>
                        </ul>
                    </li>
                    <li class="submenu"><a href="index.php#contact">Contact Us</a>
                        <ul class="sub-navigation">
                            <li><a href="contact.php#location">Location</a></li>
                            <li><a href="contact.php#message">Message Us</a></li>
                        </ul>
                    </li>
                    <li><a href="procedure.php">Get Started</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<!-- where the body opens-->
<main>

    <!-- all content will be wrapped in this container -->
<!--    <div class="container">-->
<!-- all content will be wrapped in this container -->
    <div class="container">
        <span id="totop">
            <a href="#top" onclick="$('html,body').animate({scrollTop: target.offset().top}, 1000);">
                <i class="fa fa-chevron-up up-arrow" aria-hidden="true"></i>
            </a>
        </span>

