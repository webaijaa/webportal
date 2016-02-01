
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<meta name = "format-detection" content = "telephone=no" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<!--CSS-->
<link rel="stylesheet" href="../assets/lib/bootstrap/3.3.6/css/bootstrap.css">
<link rel="stylesheet" href="../assets/lib/bootstrap/3.3.6/css/bootstrap-theme.css">
<!--<link rel="stylesheet" href="../assets/css/responsive.css">-->
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="../assets/css/flexslider.css">
<link rel="stylesheet" href="../assets/css/font-awesome.css">
<link rel="stylesheet" href="../assets/css/login-style.css">
<link rel="stylesheet" href="../assets/css/header-style.css">
<link rel="stylesheet" href="../assets/css/team-style.css">
<!-- Owl carousel -->
<link rel="stylesheet" href="../assets/css/owl.carousel.css">
<!--JS-->
<script src="../assets/lib/jquery/1.11.3/jquery-1.11.3.min.js"></script>
<script src="../assets/lib/superfish.js"></script>
<script src="../assets/lib/jquery.mobilemenu.js"></script>
<script src="../assets/lib/jquery.cookie.js"></script>
<script src="../assets/lib/jquery.easing.1.3.js"></script>
<script src="../assets/lib/jquery.ui.totop.js"></script>
<script src="../assets/lib/jquery.flexslider.js"></script>
<script src="../assets/lib/bootstrap/3.3.6/js/bootstrap.js"></script>
<script src="../assets/lib/owl.carousel.min.js"></script>

<script>
$(window).load(function() {
    $('#slides-pagination').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
	    prevText: "",
	    nextText: "",
        itemWidth: 253,
        itemMargin: 1,
        asNavFor: '#flexslider'
      });
	$('#flexslider').flexslider({
    	animation: "slide",
    	slideshow: true,
    	slideshowSpeed: 7000,
    	animationDuration: 600,
    	prevText: "",
    	nextText: "",
    	controlNav: false,
        sync: "#slides-pagination"
	})
})
</script>
<!--[if lt IE 8]>
		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>
<![endif]-->
<!--[if lt IE 9]>
  <link rel="stylesheet" href="css/ie.css">
  <link rel="stylesheet" href="css/docs.css">
  <script src="js/html5shiv.js"></script>
    <![endif]-->
<!-- Place either at the bottom in the <head> of your page or inside your CSS -->
<style type="text/css">
.aijaa-title {
    display: inline-block;
    color: #fff;
    width: 85px;
    height: 85px;
    font-size: 45px;
    line-height: 85px;
    margin: 10px 5px;
    background: #fff;
    border-radius: 3px;
    font-weight: 600;
    border-radius: 100%;
    text-align: center;
    font-family: 'Open Sans', sans-serif;
}
.bg-green {
    background-color: #51d466 !important;
}
</style>
</head>
<body>
<div class="global">
<section class="margBot1">
    <!--header-->
    <?php include 'common.php';?>
</section>
<!--content-->
<div class="container">
    <div class="row">
        <article class="sliderBox">
            <div id="slider">
                <div id="flexslider">
                    <ul class="slides">
                        <li>
                            <img alt="" style="width:100%;height:400px;" src="../assets/img/nvs-integration-meet-pic1.jpg">
                            <p class="flex-caption">NVS National Integration Meet - Hyderabad</p>
                        </li>
                        <li>
                                <iframe width="100%" height="400px" src="https://www.youtube.com/embed/45i9fP_pawM" frameborder="0" allowfullscreen></iframe>
                                <p class="flex-caption" >AIJAA Short films</p>
                        </li>
                        <li>
                                <img style="width:100%;height:400px;" alt="" src="../assets/img/aijaa-mp.jpg">
                                <p class="flex-caption">AIJAA Madhya pradesh Meet</p>
                        </li>
                        <li>
                                <img style="width:100%;height:400px;" alt="" src="../assets/img/aptgmeet.jpg">
                                <p class="flex-caption">AIJAA AP-TG Meet</p>
                        </li>
                        <li>
                                <img style="width:100%;height:400px;" alt="" src="../assets/img/integrationmeet.jpg">
                                <p class="flex-caption">Limca book of Records</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="slides-pagination">
                <ul class="slides clearfix">
                     <li><a class="title1">NVS National Integration Meet - Jan 2016</a><p class="title2">National integration meeting of NVS at hyderabad</p></li>
                    <li><a class="title1" >AIJAA Short Films</a><p class="title2">Life of Novodayan - Yaadien</p></li>
                    <li><a class="title1">AIJAA MP Chapter Meet</a><p class="title2">Madhya pradesh chapter formed on jan 12</p></li>
                    <li><a class="title1">APTG  Convention</a><p class="title2">Recent Convention of APTG at hyderbad JNAUU</p></li>
                    <li><a class="title1">Limca Book of Records</a><p class="title2">AIJAA in Limca book of records</p></li>

                </ul>
            </div>
        </article>
    </div>
</div>
<div class="container padBot">
    <div class="row">
        <section class="col-md-4" >
            <div class="banner2" style="height:155px">
                <p class="title1">Welcome!</p>
                <p class="title2">Welcome to the worlds and indias largest alumni network AIJAA, Navodaya Vidyalayas - Incubators of social scientists ,humanitarians and patriots .</p>
            </div>
            <div class="banner" style="height:255px">
                <p class="title1">Our Motto</p>
                <p><span class="fa fa-hand-o-right">&nbsp;</span><span>To help Navodayan alumni to excel in there respective fileds</span><br>
                <span><span class="fa fa-hand-o-right">&nbsp;</span> Support Navodaya vidyalayas with career guidence and other required help</span><br>
                <span><span class="fa fa-hand-o-right">&nbsp;</span>Establish national wide network for knowledge sharing and activities</span><br>
                </p>
            </div>


        </section>
        <section class="col-md-4" >
            <article class="contentSpan" >
                <div class="holder">
                    <h2>Activities</h2>
                    <em></em>
                </div>
                <div class="contentHolder" style="height:360px">
                    <ul class="list2" >
                        <li><span class="fa fa-hand-o-right"></span><div><a href="#">Carrer Guidence</a></div></li>
                        <li ><span class="fa fa-hand-o-right"></span>
                        <div><a href="#">PAn India Job Mela</a></div></li>
                        <li><span class="fa fa-hand-o-right"></span><div><a href="#">Blood Donation Drives</a></div></li>
                        <li><span class="fa fa-hand-o-right"></span><div><a href="#">Health Camps</a></div></li>
                        <li><span class="fa fa-hand-o-right"></span><div><a href="#">Knowledge Bank : Learing Resources</a></div></li>
                        <li><span class="fa fa-hand-o-right last" ></span><div><a href="#">National Integration Mission</a></div></li>
                    </ul>
                    <a href="#" class="btn btn-primary">read more</a>
                </div>
            </article>
        </section>
        <section class="col-md-4">
            <article class="contentSpan"  >
                <div class="holder">
                    <h2>News & Events</h2>
                    <em></em>
                </div>
                <div class="contentHolder" style="height:360px">
                   <marquee style="position: relative;" behavior="scroll" align="center" direction="up" scrollamount="6" scrolldelay="1" onmouseover="this.stop()" onmouseout="this.start()" margin-bottom="10px">

                        <div class="row">
                            <a class='col-md-12' href="profile.html" target="_blank">
                           AIJAA  Event 1: Jan 31 : National integration event at hyderabad. Students from all states will be performing at the Hyderabad convention center.
                            </a>
                        </div>
                          <div class="row">
                            <a class='col-md-12' href="profile.html" target="_blank">
                           AIJAA  Event 1: Jan 31 : National integration event at hyderabad. Students from all states will be performing at the Hyderabad convention center.
                            </a>
                        </div>

                        <div class="row">
                            <a class='col-md-12' href="profile.html" target="_blank">
                           AIJAA  Event 1: Jan 31 : National integration event at hyderabad. Students from all states will be performing at the Hyderabad convention center.
                            </a>
                        </div>
                        <div class="row">
                            <a class='col-md-12' href="profile.html" target="_blank">
                           AIJAA  Event 1: Jan 31 : National integration event at hyderabad. Students from all states will be performing at the Hyderabad convention center.
                            </a>
                        </div>


                    </marquee>
                      <div class="row" style="height:10px">&nbsp;</div>
                    <a href="#" class="btn btn-primary"  >Read More</a>
                </div>

            </article>

        </section>

     </div>
     <div class="row">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner ui-x" role="listbox">
                <div class="item active">
                    <div class="carousel-caption" style="position: static;">
                            <h4>Web Support Team</h4>
                            <p>Web Support Team of AIJAA.</p>
                    </div>
                   <div class="col-md-3 col-sm-6 col-xs-6 col-mob">
                                        <!-- Item -->
                                        <a href="#" class="ui-item">
                                            <!-- User Image -->
                                            <img src="../assets/img/default-avatar.png" alt="" class="ui-front ui-flip img-responsive" />
                                            <!-- Flip Back -->
                                            <span class="ui-back ui-flip">
                                                <!-- User Name -->
                                                <span class="ui-name">Varun</span>
                                                <!-- Designation -->
                                                <span class="ui-desig">Web Project manager</span>
                                                <!-- Social Media -->
                                                <span class="ui-social">
                                                    <!-- Facebook -->
                                                    <i class="fa fa-facebook facebook"></i>
                                                    <i class="fa fa-linkedin linkedin"></i>
                                                    <!-- Google-Plus -->
                                                    <i class="fa fa-google-plus google-plus"></i>
                                                </span>
                                            </span>
                                        </a>

                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 col-mob">
                                        <!-- Item -->
                                        <a href="#" class="ui-item">
                                            <!-- User Image -->
                                            <img src="../assets/img/default-avatar.png" alt="" class="ui-front ui-flip img-responsive" />
                                            <!-- Flip Back -->
                                            <span class="ui-back ui-flip">
                                                <!-- User Name -->
                                                <span class="ui-name">Venkat Parsi</span>
                                                <!-- Designation -->
                                                <span class="ui-desig">Developer</span>
                                                <!-- Social Media -->
                                                <span class="ui-social">
                                                    <!-- Facebook -->
                                                    <i class="fa fa-facebook facebook"></i>
                                                    <!-- Google-Plus -->
                                                    <i class="fa fa-google-plus google-plus"></i>
                                                </span>
                                            </span>
                                        </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 col-mob">
                                        <!-- Item -->
                                        <a href="#" class="ui-item">
                                            <!-- User Image -->
                                            <img src="../assets/img/default-avatar.png" alt="" class="ui-front ui-flip img-responsive" />
                                            <!-- Flip Back -->
                                            <span class="ui-back ui-flip">
                                                <!-- User Name -->
                                                <span class="ui-name">Rammurthy</span>
                                                <!-- Designation -->
                                                <span class="ui-desig">Multimedia Specialist</span>
                                                <!-- Social Media -->
                                                <span class="ui-social">
                                                    <!-- Facebook -->
                                                    <i class="fa fa-facebook facebook"></i>
                                                    <!-- LinkedIn -->
                                                    <i class="fa fa-linkedin linkedin"></i>
                                                    <!-- Google-Plus -->
                                                    <i class="fa fa-google-plus google-plus"></i>
                                                </span>
                                            </span>
                                        </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 col-mob">
                                        <!-- Item -->
                                        <a href="#" class="ui-item">
                                            <!-- User Image -->
                                            <img src="../assets/img/default-avatar.png" alt="" class="ui-front ui-flip img-responsive" />
                                            <!-- Flip Back -->
                                            <span class="ui-back ui-flip">
                                                <!-- User Name -->
                                                <span class="ui-name">Padmaja</span>
                                                <!-- Designation -->
                                                <span class="ui-desig">Site Administrator</span>
                                                <!-- Social Media -->
                                                <span class="ui-social">
                                                    <!-- Facebook -->
                                                    <i class="fa fa-facebook facebook"></i>
                                                    <!-- LinkedIn -->
                                                    <i class="fa fa-linkedin linkedin"></i>
                                                    <!-- Google-Plus -->
                                                    <i class="fa fa-google-plus google-plus"></i>
                                                </span>
                                            </span>
                                        </a>
                        </div>


                </div>

                <div class="item">

                   <div class="carousel-caption" style="position: static;">
                        <h3>Management Team</h3>
                        <p>AIJAA PAN India Managment Team.</p>
                    </div>

                     <div class="col-md-3 col-sm-6 col-xs-6 col-mob">
                                        <!-- Item -->
                                        <a href="#" class="ui-item">
                                            <!-- User Image -->
                                            <img src="../assets/img/default-avatar.png" alt="" class="ui-front ui-flip img-responsive" />
                                            <!-- Flip Back -->
                                            <span class="ui-back ui-flip">
                                                <!-- User Name -->
                                                <span class="ui-name">Anuj Goswami</span>
                                                <!-- Designation -->
                                                <span class="ui-desig">President</span>
                                                <!-- Social Media -->
                                                <span class="ui-social">
                                                    <!-- Facebook -->
                                                    <i class="fa fa-facebook facebook"></i>
                                                    <!-- LinkedIn -->
                                                    <i class="fa fa-linkedin linkedin"></i>
                                                     <!-- Google-Plus -->
                                                    <i class="fa fa-google-plus google-plus"></i>
                                                </span>
                                            </span>
                                        </a>

                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 col-mob">
                                        <!-- Item -->
                                        <a href="#" class="ui-item">
                                            <!-- User Image -->
                                            <img src="../assets/img/default-avatar.png" alt="" class="ui-front ui-flip img-responsive" />
                                            <!-- Flip Back -->
                                            <span class="ui-back ui-flip">
                                                <!-- User Name -->
                                                <span class="ui-name">Loknath Reddy</span>
                                                <!-- Designation -->
                                                <span class="ui-desig">Vice President</span>
                                                <!-- Social Media -->
                                                <span class="ui-social">
                                                    <!-- Facebook -->
                                                    <i class="fa fa-facebook facebook"></i>
                                                    <!-- LinkedIn -->
                                                    <i class="fa fa-linkedin linkedin"></i>
                                                    <!-- Google-Plus -->
                                                    <i class="fa fa-google-plus google-plus"></i>
                                                </span>
                                            </span>
                                        </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 col-mob">
                                        <!-- Item -->
                                        <a href="#" class="ui-item">
                                            <!-- User Image -->
                                            <img src="../assets/img/default-avatar.png" alt="" class="ui-front ui-flip img-responsive" />
                                            <!-- Flip Back -->
                                            <span class="ui-back ui-flip">
                                                <!-- User Name -->
                                                <span class="ui-name">Ravinder</span>
                                                <!-- Designation -->
                                                <span class="ui-desig">Treseury</span>
                                                <!-- Social Media -->
                                                <span class="ui-social">
                                                    <!-- Facebook -->
                                                    <i class="fa fa-facebook facebook"></i>
                                                    <!-- Twitter -->
                                                    <i class="fa fa-twitter twitter"></i>
                                                    <!-- LinkedIn -->
                                                    <i class="fa fa-linkedin linkedin"></i>
                                                    <!-- Google-Plus -->
                                                    <i class="fa fa-google-plus google-plus"></i>
                                                </span>
                                            </span>
                                        </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 col-mob">
                                        <!-- Item -->
                                        <a href="#" class="ui-item">
                                            <!-- User Image -->
                                            <img src="../assets/img/default-avatar.png" alt="" class="ui-front ui-flip img-responsive" />
                                            <!-- Flip Back -->
                                            <span class="ui-back ui-flip">
                                                <!-- User Name -->
                                                <span class="ui-name">Mukesh Jaiswal</span>
                                                <!-- Designation -->
                                                <span class="ui-desig">Secretary</span>
                                                <!-- Social Media -->
                                                <span class="ui-social">
                                                    <!-- Facebook -->
                                                    <i class="fa fa-facebook facebook"></i>
                                                    <!-- LinkedIn -->
                                                    <i class="fa fa-linkedin linkedin"></i>
                                                    <!-- Google-Plus -->
                                                    <i class="fa fa-google-plus google-plus"></i>
                                                </span>
                                            </span>
                                        </a>
                        </div>

                </div>

                <div class="item">

                   <div class="carousel-caption" style="position: static;">
                        <h3>Southeren Region Coordinators</h3>
                        <p>AIJAA Executive body of southern india.</p>
                    </div>
                </div>

                <div class="item">

                   <div class="carousel-caption" style="position: static;">
                        <h3>Northern Region Coordinators</h3>
                    <p>AIJAA Executive body of Northern india.</p>
                    </div>
                </div>
        </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
     </div>
</div>
</div>
<!--footer-->
  <?php include 'footer.php';?>

<!-- Modal -->
<div id="loginModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="ui-105">
            <!-- Combined Form Content -->
            <div class="ui-105-content">
                <ul class="nav nav-tabs nav-justified">
                      <li class="active link-one"><a href="#login-block" data-toggle="tab"><i class="fa fa-sign-in"></i>Login </a></li>
                      <li class="link-two"><a href="#register-block" data-toggle="tab"><i class="fa fa-pencil"></i>Register</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active fade in" id="login-block">
                        <!-- Login Block Form -->
                        <div class="login-block-form">
                            <!-- Heading -->
                            <h5>Sign In to your Account</h5>
                            <!-- Border -->
                            <div class="bor bg-green"></div>
                            <!-- Form -->
                            <form class="form" role="form">
                                <!-- Form Group -->
                                <div class="form-group">
                                    <!-- Label -->
                                    <label class="control-label">Username</label>
                                    <!-- Input -->
                                    <input type="text" class="form-control" placeholder="Enter Username">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Password</label>
                                     <input type="password" class="form-control" placeholder="Enter Password">
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Remember
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!-- Button -->
                                    <button type="submit" class="btn btn-red">Sign In</button>&nbsp;
                                    <button type="submit" class="btn btn-lblue">Reset</button>
                                </div>
                                <div class="form-group">
                                    <a href="#" class="black">Forget Password ?</a>
                                </div>
                            </form>
                        </div><!-- login blockform -->
                    </div><!-- Login block -->

                    <div class="tab-pane fade" id="register-block">
                        <div class="register-block-form">
                            <!-- Heading -->
                            <h5>Create the New Account</h5>
                            <!-- Border -->
                            <div class="bor bg-lblue"></div>
                            <!-- Form -->
                            <form class="form" action="../php/register.php" method="post" role="form">
                                <!-- Form Group -->
                                <div class="form-group">
                                    <!-- Label -->
                                    <label class="control-label">Name</label>
                                    <!-- Input -->
                                    <input type="text" name="name" class="form-control"  placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter Email">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Phone</label>
                                    <input type="number"  name="phone" class="form-control" placeholder="Enter phone number">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Password</label>
                                    <input type="password" class="form-control" placeholder="Enter Password">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Your Jnv State</label>
                                       <select class="form-control" id="state">
                                            <option value="">----Select State------</option>
                                            <option value="andaman">Andaman and Nicobar Islands</option>
                                            <option value="andhra">Andhra Pradesh</option>
                                            <option value="arunachal">Arunachal Pradesh</option>
                                            <option value="assam">Assam</option>
                                            <option value="bihar">Bihar</option>
                                            <option value="chandigarh">Chandigarh</option>
                                             <option value="chhattisgarh">Chhattisgarh</option>
                                             <option value="dadra">Dadra and Nagar Haveli</option>
                                             <option value="daman">Daman and Diu</option>
                                             <option value="delhi">Delhi</option>
                                             <option value="goa">Goa</option>
                                             <option value="gujarat">Gujarat</option>
                                             <option value="haryana">Haryana</option>
                                             <option value="himachal">Himachal Pradesh</option>
                                             <option value="jammu">Jammu and Kashmir</option>
                                             <option value="jharkhand">Jharkhand</option>
                                             <option value="karnataka">Karnataka</option>
                                             <option value="kerala">Kerala</option>
                                             <option value="lakshadweep">Lakshadweep</option>
                                             <option value="madhyapradesh">Madhya Pradesh</option>
                                             <option value="maharashtra">Maharashtra</option>
                                             <option value="manipur">Manipur</option>
                                             <option value="meghalaya">Meghalaya</option>
                                             <option value="mizoram">Mizoram</option>
                                             <option value="nagaland">Nagaland</option>
                                             <option value="orissa">Orissa</option>
                                             <option value="pondicherry">Pondicherry</option>
                                             <option value="punjab">Punjab</option>
                                             <option value="rajasthan">Rajasthan</option>
                                             <option value="sikkim">Sikkim</option>
                                              <option value="telangana">telangana</option>
                                              <option value="tripura">Tripura</option>
                                             <option value="uttaranchal">Uttaranchal</option>
                                             <option value="up">Uttar Pradesh</option>
                                             <option value="westbengal">West Bengal</option>
                                        </select>
                                </div><!-- Jnv State Select-->
                                <div class="form-group">
                                    <!-- Label -->
                                    <label class="control-label">Your JNV District</label>
                                    <!-- Input -->
                                    <input type="text" class="form-control" name="district"  placeholder="Enter Name of JNV">
                                </div>
                                <div class="form-group">
                                    <!-- Checkbox -->
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Agree with terms and conditions
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!-- Buton -->
                                    <button type="submit" class="btn btn-red">Submit</button>&nbsp;
                                </div>
                            </form>
                            </div>
                        </div>
                    </div><!-- tAB PANE -->
                </div><!-- tab content-->
            </div>
      </div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>

<!-- Modal -->
<div id="contactModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
            <div class="ui-105">
                <!-- Combined Form Content -->
                <div class="ui-105-content">
                    <ul class="nav nav-tabs nav-justified">
                      <li class="link-three"><a href="#contact-block" data-toggle="tab"><i class="fa fa-envelope"></i>Contact</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade" id="contact-block">
                            <!-- Contact Block Form -->
                            <div class="contact-block-form">
                                <h4>Contact Form</h4>
                                <!-- Border -->
                                <div class="bor bg-purple"></div>
                                <!-- Form -->
                                <form class="form" role="form">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="control-label">Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Email</label>
                                        <input type="text" class="form-control" placeholder="Enter Email">
                                    </div>
                                     <div class="form-group">
                                        <label for="comments" class="control-label">Comments</label>
                                        <textarea class="form-control" id="comments" rows="5" placeholder="Enter Comments"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <!-- Buton -->
                                        <button type="submit" class="btn btn-red">Submit</button>&nbsp;
                                        <button type="submit" class="btn btn-lblue">Reset</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!--div ui-105-->
        </div><!-- Modal body-->
    </div><!-- Modal content-->
    </div><!-- Modal dialog-->
    </div><!-- Modal contact-->


</div>
<script>
    $('.list2 li a').hover(function(){
        $(this).stop().css({color:'#4b5aa7'});
        $(this).parent().siblings('span').stop().css({color:'#4b5aa7'});
            }, function(){
        $(this).stop().css({color:'#383535'});
        $(this).parent().siblings('span').stop().css({color:'#ffcc03'});
    });

    function showAjaxModal()
    {
        var uid = $(this).data('id');
        var url = "test-modal.php?id=" + uid;
        $('#modal-7').modal('show', {backdrop: 'static'});
        $('#modal-7 .modal-body').load(url);

    }

            /* Owl Carousel */
            $(document).ready(function() {

                var one = $("#owl-carousel-tab");

                one.owlCarousel({
                    autoPlay: 4000, //Set AutoPlay to 3 seconds
                    items : 5,
                    mouseDrag : true,
                    pagination : false,
                    stopOnHover:true
                });

                $(".owl-next").click(function(){
                    one.trigger('owl.next');
                 })

                $(".owl-prev").click(function(){
                    one.trigger('owl.prev');
                })

            });




</script>


</body>
</html>
