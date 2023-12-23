        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-12">
                        <div class="widget clearfix">
                            <div class="widget-title"> <img src="images/Final Logo-01.png" width="250" /> </div>
                            <p> EMPOWERING BUSINESSES WITH INNOVATION & PASSION </p>
                            <p> We are a rising IT staffing & software development company that helps organizations, startups, and well-established companies to create incredible IT products, apps, and solutions from start to finish.
                            </p>
                        </div>
                        <!-- end clearfix -->
                    </div>
                    <!-- end col -->
                    <div class="col-md-2 col-md-offset-1 col-sm-6 col-xs-6 col-xss-12">
                        <div class="widget clearfix">
                            <div class="widget-title">
                                <h3>Useful Links</h3>
                            </div>
                            <ul class="footer-links hov">
                                <li> <a href="index.php">Home <span class="icon icon-arrow-right2"></span></a> </li>
                                <li> <a href="about-us.php">About <span class="icon icon-arrow-right2"></span></a>
                                </li>
                                <li> <a href="services.php">Services <span class="icon icon-arrow-right2"></span></a>
                                </li>
                                <li> <a href="#">Candi.ai <span class="icon icon-arrow-right2"></span></a> </li>
                                <li> <a href="our_clients.php">Our Clients<span
                                            class="icon icon-arrow-right2"></span></a> </li>
                                <li> <a href="contact.php">Contact Us <span class="icon icon-arrow-right2"></span></a>
                                </li>
                            </ul>
                            <!-- end links -->
                        </div>
                        <!-- end clearfix -->
                    </div>
                    <!-- end col -->
                    <!--soical icon links-->
                    <div class="col-md-4 col-md-offset-1 col-sm-6 col-xs-6 col-xss-12">
                        <div class="widget clearfix">
                            <div class="widget-title">
                                <h3>Contact Address</h3>
                            </div>
                            <ul class="footer-links hov">
                                <li> <a href="#"><i class="icon icon-location2"> </i> Delhi-NCR (India) | Delaware (US) <span
                                            class="icon icon-arrow-right2"></span></a> </li>

                                <li> <a href="#"><i class="fa fa-phone"> </i>+91 9999975795<span class="icon icon-arrow-right2"></span></a> </li><!--+91 9953081170,-->
                                <li> <a href="info@candisource.com"><i class="fa fa-envelope"></i>
                                        info@candisource.com</span></a> </li>
                                <li class="social">
                                    <a target="_balnk" href="https://www.facebook.com/CandiSource-Technology-Solutions-103212759052328"><i
                                            class="fa fa-facebook-square fa-3x"></i></a>
                                    <a target="_balnk" href=" https://www.instagram.com/candisource/"><i
                                            class="fa fa-instagram fa-3x"></i></a>
                                    <a target="_balnk" href=" https://www.linkedin.com/company/candisource"><i
                                            class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i> </a>
                                </li>
                            </ul>
                            <!-- end links -->

                            <!-- end clearfix -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <div class="footer-left">
                    <p>
                        <a href="#" class="text-white"> CandiSource Technology Solutions </a>
                        <a href="disclaimer.html" class="text-white-01"> | Disclaimer </a>
                        <a href="#" class="text-white-01"> | Terms & Conditions </a>
                    </p>
                </div>
            </div>
        </footer>
    
        <!--Social Media Change 10-05-2022 Start-->
        <div id="fixed-social">
            <div>
                <a href="https://wa.me/919999975795" class="fixed-whatsapp" target="_blank"><i class="fa fa-whatsapp"></i> <span>Whatsapp</span></a>
            </div>
            <div>
                <a href="https://www.facebook.com/CandiSource-Technology-Solutions-103212759052328" class="fixed-facebook" target="_blank"><i class="fa fa-facebook"></i> <span>Facebook</span></a>
            </div>
            <div>
                <a href="https://www.instagram.com/candisource/" class="fixed-instagrem" target="_blank"><i class="fa fa-instagram"></i> <span>Instagram</span></a>
            </div>
            <div>
                <a href="https://www.linkedin.com/company/candisource" class="fixed-linkedin" target="_blank"><i class="fa fa-linkedin"></i> <span>LinkedIn</span></a>
            </div>
        </div>
        <!--Social Media Change 10-05-2022 Stop -->
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

        <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
        <script src="js/all.js"></script>
        <!-- ALL PLUGINS -->
        <script src="js/custom.js"></script>
        <script src="js/portfolio.js"></script>
        <script src="js/hoverdir.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script>
            jQuery(document).ready(function ($) {
                "use strict";
                //  TESTIMONIALS CAROUSEL HOOK
                $('#customers-testimonials').owlCarousel({
                    loop: true,
                    center: true,
                    items: 3,
                    margin: 0,
                    autoplay: true,
                    dots: true,
                    autoplayTimeout: 8500,
                    smartSpeed: 450,
                    responsive: {
                        0: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        1170: {
                            items: 3
                        }
                    }
                });
            });
        </script>

        <!-- new slider scirpt -->

        <script>
            $(document).ready(function () {

                $('#itemslider').carousel({ interval: 3000 });

                $('.carousel-showmanymoveone .item').each(function () {
                    var itemToClone = $(this);

                    for (var i = 1; i < 6; i++) {
                        itemToClone = itemToClone.next();

                        if (!itemToClone.length) {
                            itemToClone = $(this).siblings(':first');
                        }

                        itemToClone.children(':first-child').clone()
                            .addClass("cloneditem-" + (i))
                            .appendTo($(this));
                    }
                });
            });
        </script>
        <!------------------------------------new slider script end------------------->



    </body>

</html>
