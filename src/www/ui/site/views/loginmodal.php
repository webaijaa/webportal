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
