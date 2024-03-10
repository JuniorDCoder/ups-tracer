<?php 
session_start();
include 'db.php';
if (isset($_SESSION['track']) && $_SESSION['track'] !== null) {
    $tnumber = $_SESSION['track'];
    $select = mysqli_query($link, "SELECT * FROM tracking WHERE tracking_number = '$tnumber' ");
    if (mysqli_num_rows($select) > 0) {
        $data = mysqli_fetch_assoc($select);
    }
}else{
header("location: track-your-shipment.html");
}

?>
<!DOCTYPE html>
<html lang="en">
  


<!-- DesignClub -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="logistics, courier, shipping, shipping company" />
    <meta name="description" content="Rapid Express Agency Delivery Limited - We Deal With your Logistics & Shipping Needs!">
<meta property="og:image" content="https://rapidexpressagency.com/images/banner_1.png"/>
<meta property="twitter:image" content="https://rapidexpressagency.com/images/banner_1.png"/>
    <meta name="author" content="DesignClub" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tracking Details - Evergreen Transits</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="css/font-awesome/all.min.css" />
    <link rel="stylesheet" href="css/flaticon/flaticon.css" />
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature) -->
    <link rel="stylesheet" href="css/animate/animate.min.css"/>
    <link rel="stylesheet" href="css/swiper/swiper.min.css" />

    <!-- Template Style -->
    <link rel="stylesheet" href="css/style2.css" />

  </head>
  <body>

    <!--=================================
    Header -->
    <header class="header header-style-02 header-sticky">
      <div class="topbar">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 d-flex justify-content-center justify-content-lg-start">
              <a href="#">info@upstracer.com</a>
            </div>
            <div class="col-lg-6 d-sm-flex justify-content-center justify-content-lg-end">
              <ul class="list-unstyled d-flex justify-content-center mb-0 mr-sm-5">
                <li class="mr-4"><a href="#">                     <div class="">
                                    <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"></script>
                                   
                                </div></a></li>
                <!-- <li><a href="#">+44 7300 344422</a></li>

              </ul>
              <ul class="list-unstyled d-flex justify-content-center mb-0">
                <li><a href="#">+380 95 871 4516</a></li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="header-top" style="background-color:#fff
       ; text-decoration-color: darkblue!important">
        <div class="container">
          <nav class="navbar navbar-static-top navbar-expand-lg" style="text-decoration-color: darkblue!important">
            <div class="container-fluid position-relative px-0">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse"><i class="fas fa-align-left"></i></button>
            <a class="navbar-brand" href="index.html">
              <img class="img-fluid" src="images/everlogo.jpg" alt="logo">
            </a>
<div class="navbar-collapse collapse d-xl-flex justify-content-xl-center pl-0 pl-lg-5">
                <ul class="nav navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="index.html" id="" role="" data-toggle="" aria-haspopup="" aria-expanded="">Home<i class=""></i></a>
                  </li>

                  </li>
                  
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="about.html" >About Us<i class=""></i></a>
                    
                  </li>
                  
                 
                  
                  
                  <li><a class="nav-link" href="track.html">Track Parcel</a></li>
                  
                  <li><a class="nav-link" href="contact.html">Contact Us</a></li>
                  
                  
                </ul>
              </div>
              <a class="btn btn-sm btn-outline-white d-none d-lg-block" href="pages/contact.html">Get a quote</a>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!--=================================
    Header -->
    
          <!--Page Header-->
                <section class="inner-header bg-holder bg-overlay-dark-40" style="background-image: url('images/service/airterminal2.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h1 class="inner-title text-white mb-3">Tracking Details</h1>
<!--            <p class="inner-subtitle text-white">For those of you who are serious about having more, doing more, giving more and being more, success is achievable. Yes for more we do it through shipping, fastest shipping network accross the globe fast and safe</p>-->
          </div>
        </div>
      </div>
    </section>
    <section class="py-2 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ol class="breadcrumb bg-transparent mb-0">
              <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home mr-1"></i>Home</a></li>
              <li class="breadcrumb-item active"><span>Tracking Details</span></li>
            </ol>
          </div>
        </div>
      </div>
    </section>
        <!--Page Header end-->
  <section class="feature-area section-gap" style="margin-bottom: 120px">
            <!-- Wrap the rest of the page in another container to center all the content. -->
            <!-- Example row of columns -->
                  <div class="container">
          <?php 
            if (isset($_SESSION['track']) && $_SESSION['track'] !== null) {
         ?>
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            <h3>Shipment Details / Information</h3>
                        </p>
                        <hr>
                    </div>
                    <div class="col-md-6">
                        <b>Welcome,</b>   | <a href="/"> Back to Homepage </a></div>
                 

  
                



                                <div class="col-md-6 text-center">
                        <h4><b>Tracking No : <?php echo $data['tracking_number'] ?></b>  </h4>
                    </div>
                    <hr>
                    <br>
                    <br>
                    <div class="col-md-12 col-md-offset-0">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading bg-warning p-2">
                                        <h4 class="panel-title">Sender's Details</h4>
                                    </div>
                                    <table class="table table-hover" id="dev-table">
                                        <tbody>
                                            <tr>
                                                <td><b>Name:</b> </td>
                                                <td> <?php echo $data['sender_name'] ?></td>
                                            </tr>
                                            <!-- <tr>
                                                <td><b>Contact:</b> </td>
                                                <td> <?php echo $data['sender_contact'] ?></td>
                                            </tr> -->
                                            <tr>
                                                <td><b>Email:</b> </td>
                                                <td> <?php echo $data['sender_email'] ?> </td>
                                            </tr>
                                            <tr>
                                                <td><b>Address:</b> </td>
                                                <td> <?php echo $data['sender_address'] ?> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading bg-warning p-2">
                                        <h4 class="panel-title">Receiver's Details</h4>
                                    </div>
                                    <table class="table table-hover" id="dev-table">
                                        <tbody>
                                            <tr>
                                                <td><b>Name:</b> </td>
                                                <td> <?php echo $data['receiver_name'] ?></td>
                                            </tr>
                                           <!-- <tr>
                                                <td><b>Contact:</b> </td>
                                                <td> <?php echo $data['receiver_contact'] ?> </td>
                                            </tr> -->
                                            <tr>
                                                <td><b>Email:</b> </td>
                                                <td><?php echo $data['receiver_email'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Address:</b></td>
                                                <td> <?php echo $data['receiver_address'] ?> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--Table-->

                        <div class="panel-heading bg-warning p-2">
                            <h4 class="panel-title">More Details</h4>
                        </div>

                        <table class="table table-striped table-bordered table-condensed">
                        <tbody>
                            <tr>
                                    <td class="text-center"><b>Declared Items </b></td>
                                    <td> <?php echo $data['pdesc'] ?></td>
                                </tr>
                                
                                <tr>
                                <td class="text-center"><b>Declared Weight </b></td>
                                <td> <?php echo $data['sender_contact'] ?> </td>
                            </tr>
                            
                            <tr>
                                <td class="text-center"><b>Origin Port </b></td>
                                <td> <?php echo $data['dispatch_location'] ?> </td>
                            </tr>
                  
                             <tr>
                                <td class="text-center"><b>Courier Status </b></td>
                                <td> <b> <?php echo $data['status'] ?> </b></td>
                            </tr> 
                            <tr>
                                <td class="text-center"><b>Dispatch Date </b></td>
                                <td> <?php echo $data['dispatch_date'] ?> </td>
                            </tr>
                            <tr>
                                <td class="text-center"><b>Estimated Delivery Date </b></td>
                                <td> <?php echo $data['delivery_date'] ?> </td>
                            </tr>
                           
                            <tr>
                                <?php 

                                ?>
                                <td class="text-center"><b>Current Location  <img src="../loading.gif" style="height: 30px; width: 50px"> </b></td>
                                <td class="col-xs-6"><marquee> <?php echo $data['current_location'] == "" ? $data['dispatch_location'] : $data['current_location'] ?> &nbsp; </marquee></td>
                            </tr>
                          
                            
                        </tbody> 
                    </table>
                    </div>
             <table class="table table-striped table-bordered table-condensed">
                <tbody>
                  <iframe class="map" src="https://maps.google.com/maps?q=<?php echo $data['current_location'] == "" ? $data['dispatch_location'] : $data['current_location'] ?>&amp;t=k&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" style="border:0; width: 100%; height: 527px;"></iframe>
                </tbody>
             </table>
                    <!-- <div class="row">
                        <div class="col-md-12 col-lg-12 col-xl-12 ">
                            <iframe class="map" src="https://maps.google.com/maps?q=Mount%20Pleasant,%20Breach%20Lane,%20Sittingbourne,%20ME9%207DB&amp;t=k&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" style="border:0; width: 100%; height: 527px;"></iframe>
                        </div>
                    </div> -->
                    
               
                        <br><br>
                        

<?php } ?>
<br><br>
        <form action="" method="post" style="margin bottom:50px">
             <div class="form-group">
               
               <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Tracking Code" name="tnumber"  value="" style="width:350px; background-color: lightgrey" >
              </div>
             <button type="submit" name="submit" class="btn btn-primary">Track</button>
            </form>
    
    
    
          </div>
                
      </div>
    </section>
        <!--Track Your Shipment -->
       
        <!--Track Your Shipment end-->

<!-- footer-->
    <footer class="footer space-pt bg-dark mt-n5 log-mt-md-n4 log-mt-lg-n5 log-mt-xl-n7">
      <div class="container space-pt">
        <div class="row">
          <div class="col-sm-6 col-lg-3 order-lg-1 mb-5 mb-lg-0">
            <h6 class="text-white mb-3 mb-md-5">Locate Us </h6>
            <ul class="footer-contact list-unstyled">
              <li>
                <div class="footer-contact-icon">
                  <i class="fas fa-sign"></i>
                </div>
                <div class="footer-contact-info">
                  <span>120, King Street, Manchester, United Kingdom</span>
                  
                </div>
              </li>
              <li>
                <div class="footer-contact-icon">
                  <i class="fas fa-headphones-alt"></i>
                </div>
                <div class="footer-contact-info" >
                 <a href="https://wa.me/+447300344422"><style="image src: url(images/whatsap.png)"
                  <span>+44 7451277251
</span></a>
<p class="mb-0">Mon-Sat 5:30am-6:30pm</p>
                </div>
              </li>
              <li>
                <div class="footer-contact-icon">
                  <i class="far fa-envelope"></i>
                </div>
                <div class="footer-contact-info">
                  <span>info@upstracer.com</span>
                  <p class="mb-0">24 X 7 online support</p>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-sm-6 col-lg-3 offset-xl-1 order-lg-3 mb-5 mb-sm-0">
            <h6 class="text-white mb-3 mb-md-5">Call Center</h6>
            <div class="call-center">
              <h2>+44 7451277251</h2>
              <h3>and get a free estimate</h3>
            </div>
            <div class="footer-social-icon">
              <p>You can also follow us on our social Media Platform.</p>
              <ul class="list-unstyled mb-0">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-dropbox"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-5 order-lg-2">
            <div class="footer-newsletter">
              <h3 class="text-white">Signup for our newsletter </h3>
              <p>Sign up to our newsletter to get the latest news and offers.</p>
              <form class="form-inline dark-form">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Enter email">
                </div>
                <button type="submit" class="btn btn-primary">Subscribe Now</button>
              </form>
            </div>

          </div>
        </div>
      </div>
      <div class="container" style="background-color: #ff99000">
        <div class="copyright">
          <div class="row d-flex align-items-center">
            <div class="col-md-6">
              <a class="footer-brand" href="index.html">
                
              </a>
            </div>
            <div class="col-md-6 text-left text-md-right mt-4 mt-md-0">
              <p class="mb-0 text-white">©️ 2023. All rights reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--=================================
    footer-->

    <!--=================================
    Back To Top -->
    <div id="back-to-top" class="back-to-top">
      <a href="#"><i class="fas fa-chevron-up"></i></a>
    </div>
    <!--=================================
    Back To Top -->

<div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">-->
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form>
                <input type="search" id="s" name="s" placeholder="Search here...">
                <button>
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
   </div>
</div>


    <!--=================================
    Javascript -->

    <!-- JS Global Compulsory (Do not remove)-->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="js/jquery.appear.js"></script>
    <script src="js/swiper/swiper.min.js"></script>
    <script src="js/swiperanimation/SwiperAnimation.min.js"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src="js/custom.js"></script>
 <script>
    $("#exampleModal").modal('show');
 </script>
  </body>

</html>

<div class="gtranslate_wrapper"></div>
<script>window.gtranslateSettings = {"default_language":"en","detect_browser_language":true,"wrapper_selector":".gtranslate_wrapper","horizontal_position":"left","vertical_position":"bottom"}</script>
<script src="https://cdn.gtranslate.net/widgets/latest/popup.js" defer></script>

