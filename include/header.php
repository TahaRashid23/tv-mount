<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/css.php'; ?>
    <title><?php echo isset($title) ? $title : 'Home';  ?></title>
</head>

<body>
    <!-- loader -->
    <!-- <div class="wrapper">
        <div class="loader"></div>
    </div>     -->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="header-main__logo text-center py-4">
            <div class="header-main__logo header-sideNav-logo">
                <a href="index.php">TvMountInstalls</a>
            </div>
        </div>
        <ul class="header-main__nav header-main__navresponsive text-center">
            <li><a href="index.php"
                    class="<?= (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : '' ?>">Home</a></li>
            <li><a href="our-services.php"
                    class="<?= (basename($_SERVER['PHP_SELF']) == 'our-services.php') ? 'active' : '' ?>">Our
                    Services</a>
            </li>
            <li><a href="our-work.php"
                    class="<?= (basename($_SERVER['PHP_SELF']) == 'our-work.php') ? 'active' : '' ?>">Our
                    Work</a>
            </li>
            <li><a href="our-reviews.php"
                    class="<?= (basename($_SERVER['PHP_SELF']) == 'our-reviews.php') ? 'active' : '' ?>">Our
                    Reviews</a>
            </li>
            <li><a href="contact-us.php"
                    class="<?= (basename($_SERVER['PHP_SELF']) == 'contact-us.php') ? 'active' : '' ?>">Contact
                    Us</a>
            </li>
        </ul>
        <ul class="headerBtn headerSub-btn-responsive">
            <li><a href="contact-us.php" class="themeBtn hvr-hang">Get Started</a></li>
        </ul>
    </div>
    <header class="header wow fadeIn">
        <div class="container-fluid">
            <div class="header-main">
                <div class="header-main__logo">
                    <a href="index.php">TvMountInstalls</a>
                </div>
                <ul class="header-main__nav header-main__nav-none">
                    <li>
                        <a href="index.php"
                            class="<?= (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : '' ?>">Home
                        </a>
                    </li>
                    <li>
                        <a href="our-services.php"
                            class="<?= (basename($_SERVER['PHP_SELF']) == 'our-services.php') ? 'active' : '' ?>">Our
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="our-work.php"
                            class="<?= (basename($_SERVER['PHP_SELF']) == 'our-work.php') ? 'active' : '' ?>">Our
                            Work
                        </a>
                    </li>
                    <li>
                        <a href="our-reviews.php"
                            class="<?= (basename($_SERVER['PHP_SELF']) == 'our-reviews.php') ? 'active' : '' ?>">Our
                            Reviews
                        </a>
                    </li>
                    <li>
                        <a href="contact-us.php"
                            class="<?= (basename($_SERVER['PHP_SELF']) == 'contact-us.php') ? 'active' : '' ?>">Contact
                            Us
                        </a>
                    </li>
                </ul>
                <ul class="headerBtn headerSub-btn-none">
                    <li><a href="contact-us.php" class="themeBtn hvr-hang">Get Started</a></li>
                </ul>
                <div class="header-menu">
                    <ul>
                        <li><a href="javascript:void(0)" onclick="openNav()"><i class='bx bx-menu-alt-right'></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>