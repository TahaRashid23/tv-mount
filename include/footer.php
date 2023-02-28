<!-- footer -->
<footer class="footer banner-bg" id="output">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer-logo">
                    <a href="index.php" class="color-white">TvMountInstalls</a>
                </div>
                <div class="footer-main section-content">
                    <p class="color-white">Lorem Ipsum is simply dummy text of the printing and typesetting <br>
                        industry.
                        Lorem Ipsum has been the industry's.
                    </p>
                    <ul class="footer-main__nav header-main__nav">
                        <li><a href="index.php"
                                class="<?= (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : '' ?>">Home</a>
                        </li>
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
                    <ul class="footer-info contactInfo d-flex align-items-centermt-4">
                        <li><a href="tel:877-221-7051" class="color-white"><span><i
                                        class="fa-solid fa-phone"></i></span>877-221-7051</a>
                        </li>
                        <li><a href="mailto:dean@nextdaytechs.com" class="color-white"><span><i
                                        class="fa-solid fa-envelope"></i></span>dean@nextdaytechs.com</a></li>
                        <li><a href="javascirpt:void(0)" class="color-white"><span><i
                                        class="fa-solid fa-location-dot"></i></span>your
                                location here</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footerCopy-right">
        <div class="footerCopy-rightContent">
            <p class="color-white m-0">&copy; <span id="year"></span>
                <a href="index.php" class="color-white">TVMountInstalls.com</a> All Right Reserved
            </p>
        </div>
    </div>
</footer>
</main>

</body>
<?php include 'include/js.php'; ?>

</html>