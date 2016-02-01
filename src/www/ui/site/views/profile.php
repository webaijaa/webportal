<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>AIJAA - All India Jnv alumni Network</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
<!--CSS-->
<link rel="stylesheet" href="../assets/lib/bootstrap/3.3.6/css/bootstrap.css">
<link rel="stylesheet" href="../assets/css/responsive.css">
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="../assets/css/flexslider.css">
<link rel="stylesheet" href="../assets/css/font-awesome.css">
<link rel="stylesheet" href="../assets/css/login-style.css">
<link rel="stylesheet" href="../assets/css/header-style.css">
<link rel="stylesheet" href="../assets/css/bootstrap-slider.css"  />
<link rel="stylesheet" href="../assets/css/profile-wizard.css"/>
<link rel="stylesheet" type="text/css" href="../assets/css/jquery-gmaps-latlon-picker.css" />

<!--JS-->
<script src="../assets/lib/jquery/1.11.3/jquery-1.11.3.min.js"></script>
<script src="../assets/lib/superfish.js"></script>
<script src="../assets/lib/jquery.mobilemenu.js"></script>
<script src="../assets/lib/bootstrap/3.3.6/js/bootstrap.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="../assets/lib/jquery-gmaps-latlon-picker.js"></script>
</head>

<body >
<div class="global">
<section class="margBot1">
    <!--header-->
    <?php include 'common.php';?>
</section>
        <!--   Big container   -->
    <div class="container">
        <div class="row">
        <div class="col-sm-12">
            <!--      Wizard container        -->
            <div class="wizard-container">
                <div class="card wizard-card ct-wizard-navyblue" id="wizardProfile">
                    <form action="" method="">
                <!--        You can switch "ct-wizard-orange"  with one of the next bright colors: "ct-wizard-blue", "ct-wizard-green", "ct-wizard-orange", "ct-wizard-red"             -->
                      	<div class="wizard-header">
                        	<h3>
                        	   <b>Update</b> Profile<br>
                        	   <small>This information will let us know more about you & connect with you.</small>
                        	</h3>
                    	</div>
                    	<ul>
                            <li><a href="#about" data-toggle="tab"><i class="fa fa-eye"></i>&nbsp;About</a></li>
                            <li><a href="#account" data-toggle="tab"><i class="fa fa-gear"></i>&nbsp;What You Do</a></li>
                            <li><a href="#address" data-toggle="tab"><i class="fa fa-home"></i>&nbsp;Address</a></li>
                            <li><a href="#locate" data-toggle="tab"><i class="fa fa-map-marker"></i></i>&nbsp;Locate <i class="fa fa-globe"></i></a></li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane" id="about">
                              <div class="row">
                                  <h4 class="info-text"> Primary Information about you.</h4>
                                  <div class="col-sm-5 col-sm-offset-1">
                                     <div class="picture-container">
                                          <div class="picture">
                                              <img src="../assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                              <input type="file" id="wizard-picture">
                                          </div>
                                          <h6>Choose Picture</h6>
                                      </div>
                                      <div class="form-group">
                                              <label>Blood Group</label><br>
                                              <select name="blood" class="form-control">
                                                  <option value="">Select</option>
                                                  <option value="dontknow"> dontknow</option>
                                                  <option value="op"> O+</option>
                                                  <option value="on"> O-</option>
                                                  <option value="ap"> A+ </option>
                                                  <option value="an"> A-</option>
                                                  <option value="bp"> B+</option>
                                                  <option value="bn"> B-</option>
                                                  <option value="abp"> AB+</option>
                                                  <option value="abn"> AB-</option>
                                              </select>
                                         </div>

                                      <div class="form-group ">
                                          <label>DOB Month <small>(required)</small></label>
                                          <input name="dobmonth" id="dobmonth" data-slider-id='dobMonthSlider' type="text" data-slider-min="1" data-slider-max="12" data-slider-step="1" data-slider-value="2" />
                                      </div>

                                      <div class="form-group ">
                                          <label>DOB Day <small>(required)</small></label>
                                          <input name="dobday" id="dobday" data-slider-id='dobDaySlider' type="text" data-slider-min="1" data-slider-max="31" data-slider-step="1" data-slider-value="29" />
                                      </div>

                                      <div class="form-group">
                                          <div class="form-group">
                                              <label>DOB Year <small>(required)</small></label>
                                              <input name="dobyear" id="dobyear" data-slider-id='dobYearSlider' type="text" data-slider-min="1960" data-slider-max="2000" data-slider-step="1" data-slider-value="2000" />
                                          </div>
                                      </div>

                                <div class="form-group">
                                    <label class="control-label">Your Jnv State</label>
                                       <select class="form-control" id="state"
                        <option value="">------------Select State------------</option>
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
                                </div>
                                      <div class="form-group">
                                          <label>District</label><br>
                                         <input type='text' class="form-control"  name='district' value='' placeholder="District"/>
                                      </div>
                                      <div class="form-group">
                                          <label>Batch <small>(required)</small></label>
                                          <input type="number" class="form-control" id="batch" name="batch" placeholder="Enter the batch" value=""/>
                                          <!--<input class="col-sm-6 " name="batch" id="batch" data-slider-id='ex1Slider' type="text" value="0" data-slider-min="0" data-slider-max="24" data-slider-step="1" data-slider-value="0" />-->
                                      </div>

                                    </div>
                                  <div class="col-sm-5">
                                      <div class="form-group">
                                          <label>Gender</label><br>
                                          <select name="gender" class="form-control">
                                              <option value="">Select</option>
                                              <option value="male">Male </option>
                                              <option value="female">Female </option>
                                              <option value="other">Other </option>
                                          </select>
                                      </div>
                                      <div class="form-group">
                                          <label class="control-label">Alias <small>(required)</small></label>
                                          <input name="alias" type="text" class="form-control" value="" placeholder="LVB...">
                                      </div>
                                      <div class="form-group">
                                        <label>First Name <small>(required)</small></label>
                                        <input name="firstname" type="text" class="form-control" value="" placeholder="l...">
                                       </div>
                                      <div class="form-group">
                                        <label>Last Name <small>(required)</small></label>
                                        <input name="lastname" type="text" class="form-control" value="" placeholder="LVB...">
                                      </div>
                                      <div class="form-group">
                                        <label>Phone<small>(required)</small></label>
                                        <input name="phone1" type="text" class="form-control" value="" placeholder="Primary">
                                      </div>
                                      <div class="form-group">
                                          <label>ISD<small>(required)</small></label>
                                          <input name="isd1" type="text" value="91" class="form-control" placeholder="91">
                                      </div>
                                      <div class="form-group">
                                          <label>Phone2<small></small></label>
                                          <input name="phone2" type="text" class="form-control" value="" placeholder="Secondary:Whatsapp">
                                      </div>
                                      <div class="form-group">
                                          <label>ISD<small></small></label>
                                          <input name="isd2" type="text" value="91" class="form-control" placeholder="91">
                                      </div>
                                  </div>

                              </div>
                            </div>
                            <div class="tab-pane" id="account">
                                <h4 class="info-text"> What are you doing?  </h4>
                                <h5 class="info-text">(select the below icons) </h5>
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="col-sm-4">
                                            <div class="choice" data-toggle="wizard-checkbox">
                                                <input type="checkbox" name="working" value="working">
                                                <div class="icon">
                                                    <i class="fa fa-gears"></i>
                                                </div>
                                                <h6>Working</h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="choice" data-toggle="wizard-checkbox">
                                                <input type="checkbox" name="studying" value="studying">
                                                <div class="icon">
                                                    <i class="fa fa-institution"></i>
                                                </div>
                                                <h6>Studying</h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="choice" data-toggle="wizard-checkbox">
                                                <input type="checkbox" name="jobsearch" value="jobsearch">
                                                <div class="icon">
                                                    <i class="fa fa-search"></i>
                                                </div>
                                                <h6>Searching for job</h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <h4 class="info-text"> Qualifications </h4>
                                        </div>
                                        <div class="col-sm-12 ">
                                                <div class="form-group col-sm-6">
                                                    <label>Highest Education</label><br>
                                                    <select name="degree" class="form-control">
                                                        <option value="grad"> Graduate </option>
                                                        <option value="postgrad"> Post Graduate</option>
                                                        <option value="be"> BE/BTech </option>
                                                        <option value="me"> MTech/ME</option>
                                                        <option value="msc"> MSC</option>
                                                        <option value="mca"> MCA</option>
                                                        <option value="dr"> Medicine</option>
                                                        <option value="plustwo">MBA</option>
                                                        <option value="plustwo">Diploma</option>
                                                        <option value="plustwo">Plus Two</option>
                                                        <option value="ot"> Others</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label>Stream</label>
                                                    <input type="text" class="form-control" placeholder="BSC Micro bilogy">
                                                </div>

                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group col-sm-6">
                                                <label>University</label><br>
                                                <input name="univ" type="text" class="form-control"  placeholder="JNTU">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label>College Name</label>
                                                <input name="college" type="text" class="form-control"   placeholder="Central College">
                                            </div>

                                        </div>
                                        <div class="col-sm-12 ">
                                            <div class="form-group col-sm-6">
                                                <label>Organization</label>
                                                <input type="text" name="org" class="form-control" placeholder="Wipro Technologies">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label>Service Sector</label><br>
                                                <select name="sector" class="form-control">
                                                    <option value="private"> Private </option>
                                                    <option value="postgrad"> Public/State</option>
                                                    <option value="be"> Public/Central </option>
                                                    <option value="me"> Business</option>
                                                    <option value="msc"> Agriculture</option>
                                                    <option value="ot"> Others</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="col-sm-12 ">

                                            <div class="form-group col-sm-6">
                                                <label>Designation</label>
                                                <input type="text" name="desig" class="form-control" name="designation" placeholder="Manager">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label>Work Description</label>
                                                <input type="text" class="form-control" name="workdesc" placeholder="Human resource management,admin">
                                            </div>
                                        </div>



                                        <div class="col-sm-12 ">
                                            <div class="form-group col-sm-6">
                                                <label>City</label>
                                                <input name="workcity" type="text" class="form-control" placeholder="Hyderabad">
                                            </div>

                                            <div name="workstate" class="form-group col-sm-6">
                                                <label>State</label><br>
                                                <select name="state" class="form-control">
                                                    <option value="ts"> Telangana </option>
                                                    <option value="ap"> Andhra Pradesh </option>
                                                    <option value="ot"> Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 ">
                                            <div class="form-group col-sm-6">
                                                <label>Country</label><br>
                                                <select name="workcountry" class="form-control">
                                                    <option value="in"> India </option>
                                                    <option value="us"> US</option>
                                                    <option value="in"> UK </option>
                                                    <option value="us"> Middle East</option>
                                                    <option value="eu"> Europe</option>
                                                    <option value="af"> Africa</option>
                                                    <option value="au"> Australia</option>
                                                    <option value="ot"> others</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-sm-6">
                                                <label>Other Country</label><br>
                                                <input name="othercountry" type="text" class="form-control" placeholder="Srilanka">
                                            </div>
                                        </div>

                                </div>
                            </div>
                            </div>
                            <div class="tab-pane" id="address">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="info-text"> Whats your address ? </h4>
                                    </div>
                                    <div class="col-sm-7 col-sm-offset-1">
                                         <div class="form-group">
                                            <label>House Number , Society & Colony</label>
                                            <input name="houseaddr" type="text" class="form-control" placeholder="#007,Sky Apartments,Manikonda">
                                          </div>
                                    </div>
                                    <div class="col-sm-3">
                                         <div class="form-group">
                                            <label>Area</label>
                                            <input name="housearea" type="text" class="form-control" placeholder="madhapur">
                                          </div>
                                    </div>
                                    <div class="col-sm-5 col-sm-offset-1">
                                         <div class="form-group">
                                            <label>City</label>
                                            <input name="housecity" type="text" class="form-control" placeholder="Hyderabad">
                                          </div>
                                    </div>
                                    <div class="col-sm-5">
                                         <div class="form-group">
                                            <label>State</label><br>
                                             <select name="housestate" class="form-control">
                                                <option value="ts"> Telangana </option>
                                                <option value="ap"> Andhra Pradesh </option>
                                                <option value="...">...</option>
                                            </select>
                                          </div>
                                    </div>
                                    <div class="col-sm-5 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>Country</label><br>
                                            <select name="housecountry" class="form-control">
                                                <option value="in"> India </option>
                                                <option value="us"> US</option>
                                                <option value="in"> UK </option>
                                                <option value="us"> Middle East</option>
                                                <option value="eu"> Europe</option>
                                                <option value="af"> Africa</option>
                                                <option value="au"> Australia</option>
                                                <option value="ot"> others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label>Other Country</label><br>
                                            <input name="houseothercountry" type="text" class="form-control" placeholder="Srilanka">
                                        </div>
                                    </div>

                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>Email <small>(required)</small></label>
                                            <input name="email" type="email" class="form-control" value="" placeholder="nomad@ayushguru.com">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-group col-sm-10 col-sm-offset-1">
                                            <label>Facebook</label><br>
                                            <input name="facebook" type="text" class="form-control" placeholder="facebook URL">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-group col-sm-10 col-sm-offset-1">
                                            <label>Linkedin</label><br>
                                            <input name="linkedin" type="text" class="form-control" placeholder="LinkedIn URL">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-group col-sm-10 col-sm-offset-1">
                                            <label>WebSite / Blog</label><br>
                                            <input name="website" type="text" class="form-control" placeholder="www.ayushguru.com">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="locate">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="info-text"> Locate yourself on globe! </h4>
                                    </div>
                                </div>
                                <fieldset class="gllpLatlonPicker">
                                    <div class="col-sm-7 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>
                                                Enter your City/Village
                                            </label>
                                            <input name="village" type="text" value="Hyderabad" class="gllpSearchField form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input type="button" class="gllpSearchButton" onclick="resizeWindow()" value="Search">
                                        </div>
                                    </div>

                                    <div class="gllpMap col-sm-12">Google Maps</div>

                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label>Lattitude</label><br>
                                            <input name="houselat" type="text" class="gllpLatitude form-control" value="17.38569927723832" />
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label>Longitude</label><br>
                                            <input name="houselong" type="text" class="gllpLongitude form-control" value="78.49147751855469" />
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label>Zoom</label><br>
                                            <input type="text" class="gllpZoom form-control" value="18" />
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label>Update Map</label><br>
                                            <input type="button" class="gllpUpdateButton" onclick="resizeWindow()" value="Refresh">
                                        </div>
                                    </div>
                                </fieldset>
                                </div>

                         </div>
                        <div class="wizard-footer">
                            <div class="pull-right">
                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' />
                                <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Finish' />

                            </div>

                            <div class="pull-left">
                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div> <!-- wizard container -->
        </div>
        </div><!-- end row -->
     <div class="footer">
        <div class="container">

        </div>
    </div>
</div>
</div>
</body>



	<!--   plugins 	 -->
	<script src="../assets/lib/jquery.bootstrap.wizard.js" type="text/javascript"></script>

    <!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="../assets/lib/jquery.validate.min.js"></script>

    <!--  methods for manipulating the profile wizard and the validation -->
	<script src="../js/profile.js"></script>

   <script src="../assets/lib/bootstrap-slider.js"></script>

<script>

    //var batch = $("#batch").slider({ tooltip: 'always' });



        $("#dobmonth").slider({
            tooltip: 'always'
        });
        $("#dobday").slider({
            tooltip: 'always'
        });
        $("#dobyear").slider({
            tooltip: 'always'
        });

        function resizeWindow() {
            window.dispatchEvent(new Event('resize'));
        }

        function setBatchValue(e) {

            // Call a method on the slider
           var value = batch.getValue();
            document.getElementById("batchval").value = value;
            console.log("Batch value is", value);
        }

</script>
</html>

<!--  <iframe width="600" height="450" frameborder="0" style="border:0"
                                            src="https://www.google.com/maps/embed/v1/place?
q=301+Park+Avenue,+NY,+United+States&key=AIzaSyBCAkPaQmu0Lh4NgJCzJgFyuDbYwMuk-HQ"></iframe> -->
