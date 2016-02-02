
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
    <ul class="nav col-md-12  clearfix">
        <li class="active"><a href="index.php">Home</a></li>
        <li ><a href="index-1.html" class="btn btn-info btn-lg" data-toggle="modal" data-target="#loginModal">Login<span></span></a></li>
        <li><a href="activities.php">Activities</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="contact.php" class="btn btn-info btn-lg" data-toggle="modal" data-target="#contactModal">Contact Us</a></li>
    </ul>
    <?php include 'later.php';?>
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
     <?php include 'ourteam.php';?>
</div>
</div>
<!--footer-->
<?php include 'footer.php';?>
<!-- Modal -->
<?php include 'loginmodal.php';?>
<!-- Modal -->
<?php include 'contactmodal.php';?>

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
