    <style>
        @media (max-width: 1120px) {
            h2.web-dev-head {
                padding-top: 20px;
            }
        }

        .banner-bg-11 {
            /*background: url(uploads/inner-bg.jpg);*/
            background: url(images/about-us-bg.jpg);
            padding: 120px 0;
            background-clip: initial;
            background-color: rgba(0, 0, 0, 0);
            background-origin: initial;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            z-index: 0;
        }

        .banner-bg-11::before {
            content: "";
            display: inline-block;
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: -1;
            background: rgba(34, 34, 34, 0.4);
        }

        .message-box h4 {
            display: none;
        }

        .message-box h2 {
            color: orange;
        }

        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 13px !important;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float {
            margin-top: 16px;
        }

        @media (min-width:500px) and (max-width: 700px) {

            .row-even {
                flex-direction: column-reverse;
                display: flex;
            }
        }

        @media (min-width:300px) and (max-width: 400px) {

            .row-even {
                flex-direction: column-reverse;
                display: flex;
            }
        }

        @media (min-width:400px) and (max-width: 500px) {

            .row-even {
                flex-direction: column-reverse;
                display: flex;
            }
        }

        @media (min-width:500px) and (max-width: 700px) {

            .row-even {
                flex-direction: column-reverse;
                display: flex;
            }
        }

        @media (min-width:300px) and (max-width: 400px) {

            .row-even {
                flex-direction: column-reverse;
                display: flex;
            }
        }

        @media (min-width:400px) and (max-width: 500px) {

            .row-even {
                flex-direction: column-reverse;
                display: flex;
            }
        }

        @media (min-width:500px) and (max-width: 700px) {

            .row-even {
                flex-direction: column-reverse;
                display: flex;
            }
        }

        @media (min-width:300px) and (max-width: 399px) {
            .row-even {
                flex-direction: column-reverse;
                display: flex;
            }
        }

        @media (min-width:400px) and (max-width: 500px) {
            .row-even {
                flex-direction: column-reverse;
                display: flex;
            }
        }

        .ml-55 {
            margin-left: 55px;
        }

        @media (max-width:492px) {
            hr.hr1 {
                margin: 10px 0 !important;
            }
        }

        .post-div {
            margin-bottom: 20px;
        }

        .post-div .row {
            margin-bottom: 10px;
        }

        .post-media {
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
        }
        .post-media img {
            width: inherit;
            height: inherit;
        }
    </style>
    <?php include('header.php');?>
    <div class="banner-area banner-bg-11">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner">
                        <h2>Our Services</h2>
                    </div>
                    <div id="1"></div>
                </div>
            </div>
        </div>
    </div> <!-- end section -->
    <div class="whats-app-btn">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> <a href="https://wa.me/9999975795" class="float" target="_blank"> <i class="fa fa-whatsapp my-float"></i> </a>
    </div> <!-- end section -->
    <div class="section wb post-div">
        <div class="container">
            <div class="row row-odd">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="message-box">
                        <h4>Service</h4>
                        <h2>Staff Augmentation</h2>
                        <p class="lead" style="text-align: justify"> At Candi Source, we are ready to augment your team or your client’s team with high-quality IT talent, ranging from entry-level to senior level.<br /> </p>
                        <ul>
                            <li>• Contract</li>
                            <li>• MSP/VMS</li>
                            <li>• Contract to hire</li>
                            <li>• Direct</li>
                            <li>• RPO</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="post-media wow fadeIn"> <img src="images/s1.jpg" alt="" class="img-responsive img-rounded" /> </div>
                </div>
            </div> <!-- end row -->
            <hr class="hr1">
            <div class="row row-even">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="post-media wow fadeIn-01"> <img src="images/d2.jpg" alt="" class="web-dev img-responsive img-rounded" /> </div> <!-- end media -->
                </div> <!-- end col -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="message-box">
                        <h2 class="web-dev-head">Website Development:</h2>
                        <div class="main">
                            <p class="lead-01" style="text-align: justify"> Developing high-level custom websites is our pride and joy. The website is designed and developed for your every need. Each of our custom websites is customized for its specific purpose and user experience. Built from the ground up, the sky is the limit. </p>
                            <li>• Corporate Website</li>
                            <li>• Ecommerce Website</li>
                            <li>• Product/Service Informative Website</li>
                            <li>• Portfolio Website</li>
                        </div>
                    </div> <!-- end messagebox -->
                </div> <!-- end col -->
            </div> <!-- end row -->
            <hr class="hr1"> <!-- 2st end -->
            <!-- end section -->
            <div class="row row-odd">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="message-box">
                        <h2>Mobile App Development</h2>
                        <p class="lead-01" style="text-align: justify"> Candi Source develops high-quality Native and Hybrid mobile apps for Android, IOS, and Windows platforms. More than half of mobile users browse the Internet on their devices, and many of them shop directly from their mobile devices. We design beautiful, innovative apps to help you take your business where your customers are. In today’s Mobile First business environment it is critical for businesses to offer a Reliable, Professional, and Feature Rich Mobile App to their customers
                        <div id="4"></div>
                        </p>
                    </div> <!-- end messagebox -->
                </div> <!-- end col -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="post-media wow fadeIn"> <img src="images/m1.jpg" alt="" class="img-responsive img-rounded" /> </div> <!-- end media -->
                </div> <!-- end col -->
            </div> <!-- end row -->
            <hr class="hr1">
            <div class="row row-even">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="post-media wow fadeIn-02"> <img src="images/d1.jpg" alt="" class="img-responsive img-rounded" /> </div> <!-- end media -->
                </div> <!-- end col -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="message-box">
                        <h2 class="web-dev-head-02">Digital Marketing</h2>
                        <div class="main-02">
                            <p class="lead-02" style="text-align: justify">We help brands connect with people more effortlessly, equipping them to navigate consumers and channels better. Our unconventional narratives and story-telling cut across digital, creative, content, strategy, and designing, helping brands realize their most daring vision. We are a 360-degree marketing Digital Marketing agency that offers the best blend of our deep and intuitive learnings, spanning media, data, insights, and more.</p>
                            <ul>
                                <li>• SEO</li>
                                <li>• SMO</li>
                                <li>• SMM</li>
                                <li>• PPC</li>
                            </ul>
                        </div>
                    </div> <!-- end messagebox -->
                </div>
            </div> <!-- end row -->
            <hr class="hr1">
            <div class="row row-odd">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="message-box">
                        <h2>Graphic Designing</h2>
                        <p class="lead-01" style="text-align: justify"> We at Candi Source believe that everything in this world starts with a thought and when these thoughts are expressed in a creative manner to create a visual it becomes a design. Graphic designing helps in conveying a specific message (or messages) to a targeted audience.</p>
                        <p>
                        <ul>
                            <li>• Logo Designing</li>
                            <li>• Business Stationery Designing</li>
                            <li>• Packaging Designing</li>
                            <li>• Catalogue Designing</li>
                        </ul>
                    </div> <!-- end messagebox -->
                </div> <!-- end col -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="post-media wow fadeIn"> <img src="uploads/about_01.jpg" alt="" class="img-responsive img-rounded" /> </div> <!-- end media -->
                </div> <!-- end col -->
            </div>
            <hr class="hr1">
            <div class="row row-even">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="post-media wow fadeIn-03"> <img src="uploads/about_02.jpg" alt="" class="img-responsive img-rounded" /> </div> <!-- end media -->
                </div> <!-- end col -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="message-box">
                        <h2>Web App Development</h2>
                        <p class="lead-01" style="text-align: justify"> Candi Source is among the first-rate web app development companies in Delhi, India, widely known in the B2B circuit for white-label application development and for offering completely managed development services to both budding businesses and established companies alike who want to extend their tech capabilities. Our dedicated team of expert app developers uses their goal-driven skills to leverage advanced tools and tech stack to transform your unique ideas into innovative, scalable, and robust applications.</p>
                    </div> <!-- end messagebox -->
                </div> <!-- end col -->
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
    <?php include('footer.php');?>