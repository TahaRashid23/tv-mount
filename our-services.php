<!-- Header -->
<?php $title = "Our Services";
include 'include/header.php'; ?>

<main id="bg_div">
    <!-- servicesBanner -->
    <section class="servicesBanner innerBanner banner-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="servicesBanner-title innerBanner-title text-center">
                        <h2 class="color-white">Our Services</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- servicesDetials -->
    <section class="servicesDetials">
        <div class="container-fluid reveal">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 offset-lg-2">
                    <div class="section-content">
                        <h4>Book A Service Today</h4>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and <br> industry's standard dummy text
                            ever since
                            the 1500s, when <br> an unknown printer took a galley of type and scrambled it <br> to make
                            a type
                            specimen book. It has survived <br> not only five centuries.
                        </p>
                        <a href="javascirpt:void(0)" class="themeBtn">Schedule Now <span><i
                                    class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
                <div class="col-12 col-lg-4 pr-0">
                    <div class="services-screen">
                        <img src="images/Services-screen.png" alt="image" class="imgFluid object-fit">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- services -->
    <section class="services mar-y">
        <div class="container reveal">
            <div class="serviceTitle section-content text-center">
                <h6 class="color-primary">our services</h6>
                <h4>Your Title Goes Here</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and industry's standard <br>
                    dummy text ever since the 1500s, when an unknown pris.</p>
            </div>
            <div class="row mt-5">
                <div class="col-12 col-lg-4">
                    <div class="servicesCard num-1">
                        <div class="servicesCard-content text-right section-content">
                            <h5>Title Goes Here</h5>
                            <p>Lorem Ipsum is simply dummy text of <br> the printing and industry's standard <br> dummy
                                text
                                ever
                                since the </p>
                            <a href="book-a-service.php" class="themeBtn d-inline-block">Book A Service <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                    <div class="servicesCard num-1 num-4">
                        <div class="servicesCard-content text-right section-content">
                            <h5>Title Goes Here</h5>
                            <p>Lorem Ipsum is simply dummy text of <br> the printing and industry's standard <br> dummy
                                text
                                ever
                                since the </p>
                            <a href="book-a-service.php" class="themeBtn d-inline-block">Book A Service <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="services-img">
                        <img src="images/services-img.png" alt="image" class="imgFluid object-fit">
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="servicesCard servicesCard-respon num-1 num-2">
                        <div class="servicesCard-content section-content">
                            <h5>Title Goes Here</h5>
                            <p>Lorem Ipsum is simply dummy text of <br> the printing and industry's standard <br> dummy
                                text
                                ever
                                since the </p>
                            <a href="book-a-service.php" class="themeBtn">Book A Service <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                    <div class="servicesCard num-1 num-2 num-5">
                        <div class="servicesCard-content section-content">
                            <h5>Title Goes Here</h5>
                            <p>Lorem Ipsum is simply dummy text of <br> the printing and industry's standard <br> dummy
                                text
                                ever
                                since the </p>
                            <a href="book-a-service.php" class="themeBtn">Book A Service <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- partner-logo -->
    <section class="partner-logo mar-y reveal">
        <div class="container">
            <div class="section-content mb-5">
                <h4>Featured In</h4>
            </div>
            <div class="partnerLogo-img">
                <img src="images/partnerLogo-img.png" alt="image" class="imgFluid object-fit">
            </div>
        </div>
    </section>

    <script>
        let touchArea = document.getElementById("bg_div");
        let output = document.getElementById("output");

        //Initial mouse X and Y positions are 0

        let mouseX,
            initialX = 0;
        let mouseY,
            initialY = 0;
        let isSwiped;

        //Events for touch and mouse
        let events = {
            mouse: {
                down: "mousedown",
                move: "mousemove",
                up: "mouseup",
            },
            touch: {
                down: "touchstart",
                move: "touchmove",
                up: "touchend",
            },
        };

        let deviceType = "";

        //Detect touch device

        const isTouchDevice = () => {
            try {
                //We try to create TouchEvent (it would fail for desktops and throw error)
                document.createEvent("TouchEvent");
                deviceType = "touch";
                return true;
            } catch (e) {
                deviceType = "mouse";
                return false;
            }
        };

        //Get left and top of touchArea
        let rectLeft = touchArea.getBoundingClientRect().left;
        let rectTop = touchArea.getBoundingClientRect().top;

        //Get Exact X and Y position of mouse/touch
        const getXY = (e) => {
            mouseX = (!isTouchDevice() ? e.pageX : e.touches[0].pageX) - rectLeft;
            mouseY = (!isTouchDevice() ? e.pageY : e.touches[0].pageY) - rectTop;
        };

        isTouchDevice();

        //Start Swipe
        touchArea.addEventListener(events[deviceType].down, (event) => {
            isSwiped = true;
            //Get X and Y Position
            getXY(event);
            initialX = mouseX;
            initialY = mouseY;
        });

        //Mousemove / touchmove
        touchArea.addEventListener(events[deviceType].move, (event) => {
            if (!isTouchDevice()) {
                event.preventDefault();
            }
            if (isSwiped) {
                getXY(event);
                let diffX = mouseX - initialX;
                let diffY = mouseY - initialY;
                if (Math.abs(diffY) > Math.abs(diffX)) {
                    output.innerText = diffY > 0 ? "Down" : "Up";
                } else {
                    output.innerText = diffX > 0 ? location.href = 'index.php' : location.href = 'our-work.php';
                }


            }
        });

        //Stop Drawing
        touchArea.addEventListener(events[deviceType].up, () => {
            isSwiped = false;
        });

        touchArea.addEventListener("mouseleave", () => {
            isSwiped = false;

        });

        window.onload = () => {
            isSwiped = false;
        };
    </script>

    <!-- Footer -->
    <?php include 'include/footer.php'; ?>