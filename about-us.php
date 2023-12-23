    <?php include('header.php'); ?>
    <style>
        img.atl {
            height: 353px;
        }

        .section-title {
            margin-top: 55px;
        }

        .features-right-02 li i,
        .features-left-02 li i {
            width: 68px;
            height: 68px;
            line-height: 68px;
            display: table;
            border-radius: 25px 0px 25px 0px;
            font-size: 26px;
            color: #ffffff;
            background-color: #ffa737;
            /*margin: 0 auto 22px;*/
            position: relative;
            text-align: center;
            z-index: 55;
            transition: .4s;
            padding: 0;
            top: 55px;
            left: 180px;
        }

        h4.ded-team {
            padding-top: 80px;
            margin-left: -100px;
            font-weight: bold;
            padding-bottom: 22px;
            color: #fff !important;
        }

        h4.ded-team-03 {
            padding-top: 80px;
            padding-left: 70px;
            font-weight: bold;
            padding-bottom: 22px;
            color: #fff !important;
        }

        h4.ded-team-02 {
            padding-top: 80px;
            padding-left: 44px;
            font-weight: bold;
            padding-bottom: 22px;
            color: #fff !important;
        }

        p.ab-para {
            min-width: 500px;
        }

        .col-md-6.values {
            margin-top: 100px;
        }

        .col-md-6.graphic-img {
            margin-top: 70px;
        }

        .message-box p {
            color: #999;
            font-size: 15px;
            font-family: 'poppins', sans-serif;
            line-height: 1.80857 !important;
        }

        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 13px;
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

        .vis {
            border: 1px solid #fff;
            margin-top: -19px !important;
        }

        @media (min-width: 1000px) and (max-width: 1100px) {
            h4.ded-team {
                padding-left: 130px !important;
            }

            h4.ded-team-02 {}
        }

        @media (min-width: 1100px) and (max-width: 1200px) {
            h4.ded-team {
                padding-left: 100px !important;
            }
        }

        @media (min-width: 1201px) and (max-width: 1300px) {
            h4.ded-team {
                padding-left: 60px !important;
            }
        }

        @media (min-width: 1300px) and (max-width: 1356px) {
            h4.ded-team {
                padding-left: 30px !important;
            }
        }

        @media (min-width: 700px) and (max-width: 750px) {
            h4.ded-team {
                margin-left: -300px;
            }
        }

        @media (min-width: 750px) and (max-width: 773px) {
            h4.ded-team {
                margin-left: -365px;
            }
        }

        @media (min-width: 773px) and (max-width: 800px) {
            h4.ded-team {
                margin-left: -375px;
            }
        }

        @media (min-width: 801px) and (max-width: 850px) {
            h4.ded-team {
                margin-left: -438px;
            }
        }

        @media (min-width: 851px) and (max-width: 900px) {
            h4.ded-team {
                margin-left: -470px;
            }
        }

        @media (min-width: 900px) and (max-width: 950px) {
            h4.ded-team {
                margin-left: -535px;
            }
        }

        @media (min-width: 950px) and (max-width: 991px) {
            h4.ded-team {
                margin-left: -585px;
            }
        }

        @media (min-width: 950px) and (max-width: 999px) {
            h4.ded-team {
                margin-left: 34px;
            }
        }

        @media (min-width: 1000px) and (max-width: 1026px) {
            h4.ded-team-02 {
                margin-left: 36px;
            }
        }

        @media (min-width: 400px) and (max-width: 450px) {
            h4.ded-team {
                margin-left: -20px;
            }
        }

        @media (min-width: 400px) and (max-width: 450px) {
            h4.ded-team {
                margin-left: -47px;
            }
        }

        @media (min-width: 450px) and (max-width: 500px) {
            h4.ded-team {
                margin-left: -90px;
            }
        }

        @media (min-width: 500px) and (max-width: 550px) {
            h4.ded-team {
                margin-left: -138px;
            }
        }

        @media (min-width: 550px) and (max-width: 600px) {
            h4.ded-team {
                margin-left: -185px;
            }
        }

        @media (min-width: 601px) and (max-width: 650px) {
            h4.ded-team {
                margin-left: -227px;
            }
        }

        @media (min-width: 650px) and (max-width: 699px) {
            h4.ded-team {
                margin-left: -268px;
            }
        }

        @media (min-width: 320px) and (max-width: 399px) {
            h4.ded-team {
                margin-left: 24px;
            }
        }

        @media screen and (max-width: 1300px) {
            img.atl {
                height: fit-content;
            }
        }

        .ml-55 {
            margin-left: 55px;
        }
        .fr-inner{
            margin-left:20px!important;    
        }
        li.wow.fadeInRight{
            margin-bottom:0px!important;
        }
    </style>
    <div class="banner-area banner-bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner">
                        <h2>About Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="whats-app-btn">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> <a href="https://wa.me/9999975795" class="float" target="_blank"> <i class="fa fa-whatsapp my-float"></i> </a>
    </div>
    <section>
        <div id="about" class="section wb">
            <div class="container">
                <!--<hr class="hr1" />-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="message-box">
                            <h2 style="color: #fe8101"> <b>Empowering businesses with innovation & passion</b> </h2>
                            <p> We are a rising IT staffing & software development company that helps organizations, startups, and well-established companies to create incredible IT products, apps, and solutions from start to finish. <br><br> We approach each project from all sides, considering brand identity, evaluating competitors, mapping out information architecture, and identifying target audiences. Our job is to ensure that your website or mobile application has a piece of solid ground to live on, with every aspect in line with your primary objectives. </p>
                            <p class="lead"> </p>
                            <!--<a href="#services" class="btn btn-light btn-radius btn-brd grd1"-->
                            <!-- >Learn More</a>-->
                        </div> <!-- end messagebox -->
                    </div> <!-- end col -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="features-right row">
                            <li class="wow fadeInRight col-md-12" style="display:flex;" data-wow-duration="1s" data-wow-delay="0.2s">
                                <!-- <i class="flaticon-pantone"></i> -->
                                <div style="background:#ff9700;padding:0px;border-radius:5px;width:50px;height:50px"> <img src="images/icons8-accuracy-50.png" style="width:auto;height:inherit;"> </div>
                                <div class="fr-inner">
                                    <h4 style="font-weight: bold;">Mission</h4>
                                    <p class=""> Striving to deliver ROI-driven solutions to customers, we believe in valuing the trust that our clients confide in us. </p>
                                </div>
                            </li>
                            <li class="wow fadeInRight col-md-12" style="display:flex;" data-wow-duration="1s" data-wow-delay="0.3s">
                                <div style="background:#ff9700;padding:0px;border-radius:5px;width:50px;height:50px"> <img src="images/icons8-vision-60.png" style="width:auto;height:inherit;"> </div>
                                <div class="fr-inner">
                                    <h4 style="font-weight: bold" ;>Vision</h4>
                                    <p class=""> We align with our client’s vision and turn it into a reality. </p>
                                </div>
                            </li>
                            <li class="wow fadeInRight col-md-12" style="display:flex;" data-wow-duration="1s" data-wow-delay="0.4s">
                                <div style="background:#ff9700;padding:0px;border-radius:5px;width:50px;height:50px"> <img src="images/icons8-australian-dollar-60.png" style="width:auto;height:inherit;"> </div>
                                <div class="fr-inner">
                                    <h4 style="font-weight: bold;">Values</h4>
                                    <p class=""> Radical Transparency | Customer-Centric Approach | Diligence </p>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- end col -->
    </section> <!-- new -->
    <section class="" style="background: url(images/bg.jpg); background-size: cover; background-repeat: no-repeat;">
        <div class="container-fluid new-02">
            <div class="row">
                <div class="new-sec-1">
                    <ul class="features-right feature-ul row">
                        <li class="wow fadeInRight col-md-4 col-sm-4 col-xs-12" style="display:grid;justify-content:center;padding-top:15px;" data-wow-duration="1s" data-wow-delay="0.2s">
                            <!-- <i class="flaticon-pantone"></i> --> <i class="fa fa-users" aria-hidden="true"></i>
                            <div class="">
                                <h4 style="font-weight: bold;">Dedicated Team</h4>
                                <!--<p class="index-right-para"> With the predictable and defined budget, Get a full-->
                                <!-- control over the management of the team. </p>-->
                            </div>
                        </li>
                        <li class="wow fadeInRight col-md-4 col-sm-4 col-xs-12" style="display:grid;justify-content:center;padding-top:15px;" data-wow-duration="1s" data-wow-delay="0.3s"> <i class="flaticon-cloud-computing"></i>
                            <div class="">
                                <h4 style="font-weight: bold;">Creative Minds</h4>
                                <!--<p> Great creative ideas are like expensive wines. We think out of the box and-->
                                <!-- deliver amazing designs & creative. </p>-->
                            </div>
                        </li>
                        <li class="wow fadeInRight col-md-4 col-sm-4 col-xs-12" style="display:grid;justify-content:center;padding-top:15px;margin-top:0px!important;" data-wow-duration="1s" data-wow-delay="0.4s"> <i class="flaticon-line-graph"></i>
                            <div class="">
                                <h4 style="font-weight: bold;">Business Collaboration</h4>
                                <!--<p> Collaboration is the fuel that allows common people to attain uncommon results.-->
                                <!--</p>-->
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> <!-- end media -->
    <!--</section>-->
    </div> <!-- end col -->
    <div id="features" class="section wb" style="padding: 18px 0;">
        <div class="container">
            <div class="section-title text-center">
                <h3>Our Team</h3>
                <p class="lead"> A team that works together, stays together, and finds greatness together. </p>
            </div> <!-- end title -->
            <!-- end row -->
            <div class="row text-center">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="service-widget">
                        <div class="post-media wow fadeIn" style="visibility: visible; animation-name: fadeIn"> <a href="images/1 (1).jpeg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a> </div>
                    </div> <!-- end service -->
                </div> <!-- end col -->
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="service-widget">
                        <div class="post-media wow fadeIn" style="visibility: visible; animation-name: fadeIn"> <a href="images/Atul-01.jpeg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a> <img class="atl" src="images/Atul-01.jpeg" alt="" class="img-responsive img-rounded" /> </div>
                        <h3>Atul Jain</h3>
                        <p style="margin-top: -10px;">Managing Partner</p>
                    </div> <!-- end service -->
                </div> <!-- end col -->
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="service-widget">
                        <div class="post-media wow fadeIn" style="visibility: visible; animation-name: fadeIn"> <a href="images/Nishant.jpeg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a> <img src="images/Nishant.jpeg" alt="" class="img-responsive img-rounded" /> </div>
                        <h3>Nishant Joshi</h3>
                        <p style="margin-top: -10px;">Business Head</p>
                    </div> <!-- end service -->
                </div> <!-- end col -->
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="service-widget">
                        <div class="post-media wow fadeIn" style="visibility: visible; animation-name: fadeIn"> <a href="images/2.jpeg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a> </div>
                    </div> <!-- end service -->
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </div>
    </div> <!-- end row -->
    </div>
    </section>
    <?php include('footer.php');?>