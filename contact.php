<?php

// $result = "";
// if(isset($_POST['submit'])){
//     require 'phpmailer/PHPMailerAutoload.php';
//     require 'phpmailer/Exception.php';
//     require 'phpmailer/class.smtp.php';
//     require 'phpmailer/class.phpmailer.php';
    
//     $mail = new PHPMailer;

//     $mail->Host = 'mail.tanzeemeitehaad.org';
//     $mail->Port = 465;
//     $mail->SMTPAuth = ture;
//     $mail->SMTPSecure = 'tls';
//     $mail->Username = 'contact@insights360.tanzeemeitehaad.org';
//     $mail->Password = 'fR}kch+L8mR)'; //Yha oper mention email ka password aye ga

//     $mail->setFfrom($_POST['email'], $_POST['name']);
//     $mail->addAddress('contact@insights360.tanzeemeitehaad.org');
//     $mail->addReplyTo($_POST['email'], $_POST['name']);

//     $mail->isHTML(true);
//     $mail->subject = 'Form Submission: '.$_POST['subject'];
//     $mail->Body = '<h1 align=center>Name :'.$_POST['name']. '<br>Email :'.$_POST['email'].'<br>Message : '.$_POST['message'].'</h1>';

//     if (!$mail->send()) {
//         $result = "Something went wrong. Please try again";
//     }
//     else{
//         $result = "Thanks ".$_POST['name']." for contacting us. We'll get back to you soon";
//     }
// }
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>

    <!--========= Required meta tags =========-->

    <meta name="description" content="">
   

    <!--====== Title ======-->
    <title>Contact - Insights360</title>

   <?php include 'includes/header.php'; ?>

</head>

<body>
   <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- preloader  -->
 <?php include 'includes/navbar.php'; ?>
    <!-- header end -->

    <!-- breadcrumb area start -->
    <section class="breadcrumb pt-150 pb-150 bg_img" data-background="assets/images/bg/breadcrumb-bg-1.jpg"
        data-overlay="dark" data-opacity="5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__wrap">
                        <h2 class="title">Contact Us</h2>
                        <div class="breadcrumb__nav">
                            <ul>
                                <li><span><i class="fal fa-hand-o-right"></i></span></li>
                                <li><a href="https://insights360.tanzeemeitehaad.org/">Home</a></li>
                                <li>|</li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->
  



    <!-- cotact area start -->
    <div class="contact__area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 p-10">
                    <div class="about__wrap about__wrap--4">
                        <div class="section__heading mb-20 pb-20">
                            <h4 class="section__heading--title-small"><span class="mr-10"><i class="fal fa-hand-o-right"></i></span>Discuss Your Business Idea</h4>
                            <h2 class="section__heading--title">Get <span>In Touch.</span></h2>
                           
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="contact__wrap pt-95 pb-95">
                        <div class="row justify-content-center">
                            <div class="col-xl-10">
                                <div class="contact__form">
                                    <form id="contacts-us-form" action="function/sendmail.php" method="POST">
                                        <div class="row mt-none-30">
                                            <div class="col-xl-6 mt-30">
                                                <div class="form__group">
                                                    <label for="name"><i class="fal fa-user"></i></label>
                                                    <input name="name" type="text" id="name" placeholder="Enter your full name">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 mt-30">
                                                <div class="form__group">
                                                    <label for="email"><i class="fal fa-envelope"></i></label>
                                                    <input name="email" type="email" id="email" placeholder="Enter email address">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 mt-30">
                                                <div class="form__group">
                                                    <label for="tel"><i class="fal fa-phone"></i></label>
                                                    <input name="mobile" type="tel" id="tel" placeholder="Add phone number">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 mt-30">
                                                <div class="form__group">
                                                    <label for="subject"><i class="fal fa-book"></i></label>
                                                    <input name="subject" type="text" id="subject" placeholder="Enter the service name">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 mt-30">
                                                <div class="form__group">
                                                    <label for="message"><i class="fal fa-pen"></i></label>
                                                    <textarea name="message" id="message" placeholder="Enter your message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 mt-30 text-center">
                                                <button class="site-btn" type="submit" name="submit">Get Free Consultancy</button>
                                                <p class="ajax-response mt-15" style="color: #fff;"></p>
                                            </div>
                                            <?php
                                                if(isset($_SESSION['msg']) && isset($_SESSION['msg']) != ''){
                                                   echo '<h5>'.$_SESSION['msg'].'</h5>';
                                                }
                                            ?>
                                        </div>
                                    </form>
                                </div>
                                 <?php //echo $result; ?>
                               
                               
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cotact area end -->

    <!-- contact info area start -->
    <div class="contactinfo__area pt-50">
        <div class="container">
            <div class="row mt-none-30">
                <div class="col-xl-4 col-lg-6 mt-30">
                    <div class="contact__info animate__animated animate__fadeInLeft animate__delay-2s animate__slow">
                        <div class="icon">
                            <i class="fal fa-map"></i>
                            <span><i class="fal fa-check"></i></span>
                        </div>
                        <div class="content">
                            <h2 class="title">Office Address</h2>
                            <p>99 NY Address street, Brooklyn, <br>
                            United State</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mt-30">
                    <div class="contact__info contact__info--black animate__animated animate__fadeInUp animate__delay-2s animate__slow">
                        <div class="icon">
                            <i class="fal fa-phone" style="color:#fff;"></i>
                            <span><i class="fal fa-check"></i></span>
                        </div>
                        <div class="content">
                            <h2 class="title">Phone Number</h2>
                            <a href="tel:00923111169458">0092 311 11 69 458</a>
                            <a href="tel:76564856798">765 648 567 98</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mt-30">
                    <div class="contact__info contact__info--blue animate__animated animate__fadeInRight animate__delay-2s animate__slow">
                        <div class="icon">
                            <i class="fal fa-globe"></i>
                            <span><i class="fal fa-check"></i></span>
                        </div>
                        <div class="content">
                            <h2 class="title">Web Connect</h2>
                            <a href="mailto:info@insights360.com">info@insights360.com</a>
                            <a href="https://insights360.tanzeemeitehaad.org">https://insights360.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact info area end -->

    <!-- map area start -->
    <div id="contact-map"></div>
    <!-- map area end -->

    <!-- footer area start -->
    <!-- footer area start -->
  <?php include 'includes/footer.php'; ?>
    <!-- footer area end -->

    <!-- Fullscreen search -->
    <?php include 'includes/fullscreen-search.php'; ?>
    <!-- end fullscreen search -->

    <!--========= JS Here =========-->
      <?php include 'includes/resources.php'; ?>
</body>



</html>