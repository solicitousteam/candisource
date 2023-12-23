    <style>
        .main-right-3 {
            /*border: 1px solid red;*/
            width: 100%;
            float: left;
        }

        .inner-left-3 {
            /*border: 1px solid red;*/
            width: 20%;
            float: left;
        }

        .main-right-3 {
            /*border: 1px solid red;*/
            width: 100%;
            float: left;
            margin-bottom: 30px;
        }

        .main-right-2 {
            /*border: 1px solid red;*/
            width: 100%;
            float: left;
            margin-bottom: 30px;
        }

        .inner-left-2 {
            /*border: 1px solid red;*/
            width: 20%;
            float: left;
        }

        .inner-right-2 {
            /*border: 1px solid red;*/
            width: 20%;
            float: left;
        }

        .main-right {
            width: 100%;
            /* border: 1px solid red;*/
            float: left;
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .inner-left {
            /* border: 1px solid red;*/
            width: auto;
            padding-right:15px;
            float: left;
        }

        .inner-right {
            /* border: 1px solid red;*/
            width: 80%;
            float: left;
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

        .contact-form {
            padding: 30px;
        }

        @media (min-width: 300px) and (max-width: 400px) {
            h3.textcontact-title {
                /*margin-left: 31px;*/
            }

            p.textcontact {
                /*margin-left: 33px;*/
            }

            .separate {
                margin-left: 55px;
            }

            .contact-form {
                padding: 0px;
            }

            .contact_form {
                padding: 15px !important;
                background-color: #ffffff !important;
                border: solid 1px #dfe3e4;
                border-radius: 8px;
                -webkit-box-shadow: 0 2px 10px rgb(0 0 0 / 5%);
                box-shadow: 0 2px 10px rgb(0 0 0 / 5%);
                margin-bottom: 0px !important;
            }

            .contact_form .form-control {
                margin-bottom: 20px !important;
                padding: 10px !important;
                height: 45px !important;
            }
        }

        .ml-55 {
            margin-left: 55px;
        }
    </style>
    <?php include('header.php');?>
    <div class="banner-area banner-bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">-->
    <!--<a href="https://wa.me/9999975795" class="float" target="_blank">-->
    <!-- <i class="fa fa-whatsapp my-float"></i>-->
    <!--</a>-->
    <div id="contact" class="section wb" style="padding: 0px 0px; margin-top:20px;">
        <div class="container-fluid">
            <div class="row contact-form">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form class="row" action="savecontact.php" method="post">
                            <fieldset class="row-fluid">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Full Name" /> </div>
                                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12"> <input type="text" name="company_name" id="company_name" class="form-control" placeholder="Company Name" /> </div>
                                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12"> <input type="email" name="email" id="email" class="form-control" placeholder="Email" /> </div>
                                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12"> <input type="tel" name="phone" id="phone" class="form-control" placeholder="Contact Number" /> </div>
                                <!--new-->
                                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12"> <input type="text" name="service" id="service" class="form-control" placeholder="Service interested in" /> </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> <label class="sr-only">Select Service</label> </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> <textarea class="form-control" name="message" id="message" rows="6" placeholder="Give us more details.."></textarea> </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center"> <button type="submit" value="send" class="btn btn-light btn-radius btn-brd grd1 btn-block"> Submit </button> </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <h2 style="font-size: 43px !important; font-weight: bold; padding-top: 35px !important;"> Get in touch</h2>
                    <p class="lead" style=""> Please fill the form above and let us get in touch with you. </p>
                    <!-- Let us give you more details about the special offer website you want us. Please fill out the form below. <br />We have million of website owners who happy to work with us! -->
                    <div class="main-right">
                        <div class="inner-left">
                            <div class="address-icon"> <i class="icon icon-location2"></i> </div>
                        </div>
                        <div class="inner-right">
                            <h3 class="textcontact-title">Location</h3>
                            <p class="textcontact"> Delhi-NCR (India) | Delaware (US) </p>
                        </div>
                    </div>
                    <div class="main-right-2">
                        <div class="inner-left">
                            <div class="address-icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
                        </div>
                        <div class="inner-right">
                            <h3 class="textcontact-title">Email Us</h3>
                            <p class="textcontact"> <a href="info@candisource.com">info@candisource.com</a>
                        </div>
                    </div>
                    <div class="main-right-2">
                        <div class="inner-left">
                            <div class="address-icon"> <i class="icon icon-headphones"></i> </div>
                        </div>
                        <div class="inner-right">
                            <h3 class="textcontact-title">Call Us</h3>
                            <p class="textcontact"> <a href="tel:+91 9999975795">+91-9999975795</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>