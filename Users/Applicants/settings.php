<?php
include '../includes/header.php';
?>
    <div class="main">

        <div class="container">

            <div class="row">

                <div class="col-md-3">

                    <div class="list-group">
                        <a class="list-group-item active" href="dashboard.php">
                            <span class="icon-home"></span> Dashboard
                        </a>
                    </div>
                    <div class="list-group">
                        <a class="list-group-item" href="">

                            <span class="icon-tasks"></span> Jobs
                        </a>
                        <a id="bids" class="list-group-item" href="applications.php">

                            <span class="badge">4</span>

                            <span class="icon-file"></span> Applications
                        </a>
                    </div>

                    <div class="list-group">
                        <a class="list-group-item" href="settings.php">
                            <span class="icon-cogs"></span> Settings
                        </a>
                    </div>

                </div>

                <div class="col-md-9">

                    <div class="widget stacked">

                        <div class="widget-header">
                            <h3>Settings</h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">

                            <div class="tabbable">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#profile" data-toggle="tab">My Profile</a>
                                    </li>
                                    <li><a href="#experinces" data-toggle="tab">Experiences</a></li>
                                    <li><a href="#education" data-toggle="tab">Education</a></li>
                                    <li><a href="#account" data-toggle="tab">Statutory Info</a></li>
                                    <li><a href="#bank" data-toggle="tab">Bank</a></li>
                                    <li><a href="#more" data-toggle="tab">More</a> </li>
                                </ul>

                                <br>

                                <div class="tab-content">
                                    <div class="tab-pane profile active" id="profile">
                                    <form id="edit-profile2" class="form-horizontal col-md-12" method="post" action="">
                                        <fieldset>

                                            <div class="col-md-4">
                                                <div class="user-info-left">
                                                    <img src="assets/img/profile-avatar.png" alt="Profile Picture" />
                                                    <h3>Jonathan Smith <i class="fa fa-circle green-font online-icon"></i><sup class="sr-only">online</sup></h3>
                                                </div>
                                            </div>

                                            <div class="col-md-8">
                                                <div class="user-info-right">
                                                    <div class="basic-info">
                                                        <h3><i class="icon-user"></i> Basic Information</h3>
                                                        <hr />

                                                        <div class="form-group">
                                                            <label for="username" class="col-md-4">Username</label>
                                                            <div class="col-md-8">
                                                                <input type="text" class="form-control" id="username" value="" name="username" disabled>
                                                                <p class="help-block">Your username is for logging in and cannot be changed.</p>
                                                            </div> <!-- /controls -->
                                                        </div> <!-- /control-group -->

                                                        <div class="form-group">
                                                            <label for="username" class="col-md-4">First Name</label>
                                                            <div class="col-md-8">
                                                                <input type="text" class="form-control" id="username" value="" name="first_name" placeholder="First Name">
                                                                <p class="help-block">Only Letters</p>
                                                            </div> <!-- /controls -->
                                                        </div> <!-- /control-group -->

                                                        <div class="form-group">
                                                            <label for="username" class="col-md-4">Last Name</label>
                                                            <div class="col-md-8">
                                                                <input type="text" class="form-control" id="username" value="" name="last_name" placeholder="Last Name">
                                                                <p class="help-block">Only Letters</p>
                                                            </div> <!-- /controls -->
                                                        </div> <!-- /control-group -->

                                                        <div class="form-group">
                                                            <label for="username" class="col-md-4">Other Name</label>
                                                            <div class="col-md-8">
                                                                <input type="text" class="form-control" id="username" value="" name="other_name" placeholder="Other Name">
                                                                <p class="help-block">Only Letters</p>
                                                            </div> <!-- /controls -->
                                                        </div> <!-- /control-group -->

                                                        <div class="form-group">
                                                            <label for="username" class="col-md-4">ID/ Passport No.</label>
                                                            <div class="col-md-8">
                                                                <input type="number" class="form-control" id="username" value="" name="passport" placeholder="ID/ Passport">
                                                            </div> <!-- /controls -->
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="username" class="col-md-4">Birth Date</label>
                                                            <div class="col-md-8">
                                                                <input type="text" class="form-control" id="username" value="" name="birth_date" placeholder="DOB eg. 03/12/2015">
                                                            </div> <!-- /controls -->
                                                        </div> <!-- /control-group -->

                                                        <div class="form-group">
                                                            <label class="col-md-4" for="accounttype">Gender</label>
                                                            <div class="col-md-8">
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="accounttype" value="option1" checked="checked" id="accounttype">
                                                                        Male
                                                                    </label>
                                                                </div>

                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="accounttype" value="option2">
                                                                        Female
                                                                    </label>
                                                                </div>

                                                            </div>
                                                        </div>

                                                         <div class="form-group">
                                                             <label for="username" class="col-md-4"> User Role </label>
                                                             <div class="col-md-8">
                                                                 <p class="help-block">Applicant</p>
                                                             </div> <!-- /controls -->
                                                         </div> <!-- /control-group -->

                                                        <div class="form-group">
                                                            <label for="username" class="col-md-4"> Date Joined </label>
                                                            <div class="col-md-8">
                                                                <p class="help-block">28 Feb 2015</p>
                                                            </div> <!-- /controls -->
                                                        </div> <!-- /control-group -->

                                                    <div class="contact_info">
                                                        <h3><i class="fa fa-square"></i> Contact Information</h3>
                                                        <hr />

                                                        <div class="form-group">
                                                            <label for="username" class="col-md-4"><i class="icon-envelope"></i> Email </label>
                                                            <div class="col-md-8">
                                                                <input type="email" class="form-control" id="username" value="" name="email" placeholder="Email eg. johndoe@mail.com">
                                                            </div> <!-- /controls -->
                                                        </div> <!-- /control-group -->

                                                        <div class="form-group">
                                                            <label for="username" class="col-md-4"><i class="icon-phone"></i> Phone </label>
                                                            <div class="col-md-8">
                                                                <input type="number" class="form-control" id="username" value="" maxlength="13" min="1000000000" name="phone" placeholder="Phone eg. +254 700 124568">
                                                            </div> <!-- /controls -->
                                                        </div> <!-- /control-group -->

                                                        <div class="form-group">
                                                            <label for="username" class="col-md-4"><i class="icon-location-arrow"></i> Address </label>
                                                            <div class="col-md-8">
                                                                <input type="text" class="form-control" id="username" value="" name="address" placeholder="227 - 01000 Nairobi, Kenya">
                                                            </div> <!-- /controls -->
                                                        </div> <!-- /control-group -->

                                                        <div class="form-group">
                                                            <label for="username" class="col-md-4"><i class="icon-linkedin-sign"></i> LinkedIn</label>
                                                            <div class="col-md-8">
                                                                <input type="text" class="form-control" id="username" value="" name="linkedin" placeholder="your linked in URL">
                                                            </div> <!-- /controls -->
                                                        </div> <!-- /control-group -->

                                                    </div>
                                                         <hr />
                                                    <div class="form-group">
                                                        <h3><i class="fa fa-square"></i> About Me</h3>
                                                        <div class="col-md-12">
                                                            <textarea name="about" class="form-control" rows="6" placeholder="Describe yourself" maxlength="400"></textarea>
                                                        </div>
                                                    </div>
                                                         <hr />
                                                         <div class="form-group">

                                                             <div class="col-md-4">
                                                                 <button type="submit" class="btn btn-primary">Save Changes</button>
                                                             </div>

                                                         </div> <!-- /.form-group -->

                                                    </div>

                                                  </div>
                                                </div>

                                        </fieldset>
                                    </form>
                                    </div>

                                    <!-- END PROFILE TAB CONTENT -->

                                    <div class="tab-pane" id="experinces">
                                        <form id="edit-profile2" class="form-horizontal col-md-12" action="" method="post">
                                            <fieldset>
                                            <div class="col-md-12">
                                                <div class="user-info-right">
                                                    <div class="basic-info">
                                                        <h3><i class="icon-briefcase"></i> Employement Experiences </h3>
                                                        <hr />
                                                            <div class="form-group">
                                                                <h5><i class="icon-briefcase"></i> Work Experience 1 </h5>

                                                                <div class="col-md-6">
                                                                    <label for="username" class="col-md-12">Position</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" class="form-control" id="username" value="" name="position_2" placeholder="eg. Human Resource Manager">
                                                                    </div> <!-- /controls -->
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="username" class="col-md-12">Company</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" class="form-control" id="username" value="" name="company_2" placeholder="eg. Navicorp Inc">
                                                                    </div> <!-- /controls -->
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="username" class="col-md-12">Location</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" class="form-control" id="username" value="" name="location_2" placeholder="eg CBD Nairobi, Kenya">
                                                                    </div> <!-- /controls -->
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="username" class="col-md-12">Duration</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" class="form-control" id="username" value="" name="duration_2" placeholder="eg. 4 months, 2 years">
                                                                    </div> <!-- /controls -->
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="username" class="col-md-12">Referee</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" class="form-control" id="username" value="" name="referee_2" placeholder="Referee Name">
                                                                    </div> <!-- /controls -->
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="username" class="col-md-12">Contact</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" class="form-control" id="username" value="" name="contact_2" placeholder="Referee Phone">
                                                                    </div> <!-- /controls -->
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <label for="username" class="col-md-12">Duties</label>
                                                                    <div class="col-md-12">
                                                                        <textarea name="list_2" class="form-control" rows="6" placeholder="List duties performed" maxlength="400"></textarea>
                                                                    </div>
                                                                </div>

                                                            </div> <!-- /control-group -->

                                                            <hr />
                                                            <div class="form-group">
                                                                <h5><i class="icon-briefcase"></i> Work Experience 2 </h5>

                                                                <div class="col-md-6">
                                                                    <label for="username" class="col-md-12">Position</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" class="form-control" id="username" value="" name="position_1" placeholder="Eg. Accountant">
                                                                    </div> <!-- /controls -->
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="username" class="col-md-12">Company</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" class="form-control" id="username" value="" name="company_1" placeholder="eg. Urithi Sacco">
                                                                    </div> <!-- /controls -->
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="username" class="col-md-12">Location</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" class="form-control" id="username" value="" name="location_1" placeholder="eg. Kahawa, Nairobi, Kenya">
                                                                    </div> <!-- /controls -->
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="username" class="col-md-12">Duration</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" class="form-control" id="username" value="" name="duration_1" placeholder="eg. 4 months, 2 years">
                                                                    </div> <!-- /controls -->
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="username" class="col-md-12">Referee</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" class="form-control" id="username" value="" name="referee_1" placeholder="eg. Referee Name">
                                                                    </div> <!-- /controls -->
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="username" class="col-md-12">Contact</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" class="form-control" id="username" value="" name="contact_1" placeholder="Referee Phone">
                                                                    </div> <!-- /controls -->
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <label for="username" class="col-md-12">Duties</label>
                                                                    <div class="col-md-12">
                                                                        <textarea name="list_1" class="form-control" rows="6" placeholder="List duties performed" maxlength="400"></textarea>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <hr />
                                                            <div class="form-group">

                                                                <div class="col-md-4">
                                                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                                                </div>

                                                            </div> <!-- /.form-group -->

                                                    </div>

                                                </div>
                                        </div>
                                            </fieldset>
                                        </form>
                                    </div>

                                    <div class="tab-pane" id="education">
                                        <form id="edit-profile2" class="form-horizontal col-md-12" action="" method="post">
                                            <fieldset>
                                                <div class="col-md-12">
                                                    <div class="user-info-right">
                                                        <div class="basic-info">
                                                            <h3><i class="icon-file-text"></i> Education </h3>
                                                            <hr />
                                                                <div class="form-group">
                                                                    <h5><i class="icon-file"></i> Education 1 </h5>

                                                                    <div class="col-md-6">
                                                                        <label for="username" class="col-md-12">Institution Name</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" id="username" value="" name="institution_1" placeholder="eg.Long Horn University">
                                                                        </div> <!-- /controls -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="username" class="col-md-12">Location</label>
                                                                        <div class="col-md-12">
                                                                            <select class="form-control" id="country" name="location_1">
                                                                                <option value="">Country...</option>
                                                                                <option value="Afganistan">Afghanistan</option>
                                                                                <option value="Albania">Albania</option>
                                                                                <option value="Algeria">Algeria</option>
                                                                                <option value="American Samoa">American Samoa</option>
                                                                                <option value="Andorra">Andorra</option>
                                                                                <option value="Angola">Angola</option>
                                                                                <option value="Anguilla">Anguilla</option>
                                                                                <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                                                                <option value="Argentina">Argentina</option>
                                                                                <option value="Armenia">Armenia</option>
                                                                                <option value="Aruba">Aruba</option>
                                                                                <option value="Australia">Australia</option>
                                                                                <option value="Austria">Austria</option>
                                                                                <option value="Azerbaijan">Azerbaijan</option>
                                                                                <option value="Bahamas">Bahamas</option>
                                                                                <option value="Bahrain">Bahrain</option>
                                                                                <option value="Bangladesh">Bangladesh</option>
                                                                                <option value="Barbados">Barbados</option>
                                                                                <option value="Belarus">Belarus</option>
                                                                                <option value="Belgium">Belgium</option>
                                                                                <option value="Belize">Belize</option>
                                                                                <option value="Benin">Benin</option>
                                                                                <option value="Bermuda">Bermuda</option>
                                                                                <option value="Bhutan">Bhutan</option>
                                                                                <option value="Bolivia">Bolivia</option>
                                                                                <option value="Bonaire">Bonaire</option>
                                                                                <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                                                                <option value="Botswana">Botswana</option>
                                                                                <option value="Brazil">Brazil</option>
                                                                                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                                                <option value="Brunei">Brunei</option>
                                                                                <option value="Bulgaria">Bulgaria</option>
                                                                                <option value="Burkina Faso">Burkina Faso</option>
                                                                                <option value="Burundi">Burundi</option>
                                                                                <option value="Cambodia">Cambodia</option>
                                                                                <option value="Cameroon">Cameroon</option>
                                                                                <option value="Canada">Canada</option>
                                                                                <option value="Canary Islands">Canary Islands</option>
                                                                                <option value="Cape Verde">Cape Verde</option>
                                                                                <option value="Cayman Islands">Cayman Islands</option>
                                                                                <option value="Central African Republic">Central African Republic</option>
                                                                                <option value="Chad">Chad</option>
                                                                                <option value="Channel Islands">Channel Islands</option>
                                                                                <option value="Chile">Chile</option>
                                                                                <option value="China">China</option>
                                                                                <option value="Christmas Island">Christmas Island</option>
                                                                                <option value="Cocos Island">Cocos Island</option>
                                                                                <option value="Colombia">Colombia</option>
                                                                                <option value="Comoros">Comoros</option>
                                                                                <option value="Congo">Congo</option>
                                                                                <option value="Cook Islands">Cook Islands</option>
                                                                                <option value="Costa Rica">Costa Rica</option>
                                                                                <option value="Cote DIvoire">Cote D'Ivoire</option>
                                                                                <option value="Croatia">Croatia</option>
                                                                                <option value="Cuba">Cuba</option>
                                                                                <option value="Curaco">Curacao</option>
                                                                                <option value="Cyprus">Cyprus</option>
                                                                                <option value="Czech Republic">Czech Republic</option>
                                                                                <option value="Denmark">Denmark</option>
                                                                                <option value="Djibouti">Djibouti</option>
                                                                                <option value="Dominica">Dominica</option>
                                                                                <option value="Dominican Republic">Dominican Republic</option>
                                                                                <option value="East Timor">East Timor</option>
                                                                                <option value="Ecuador">Ecuador</option>
                                                                                <option value="Egypt">Egypt</option>
                                                                                <option value="El Salvador">El Salvador</option>
                                                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                                <option value="Eritrea">Eritrea</option>
                                                                                <option value="Estonia">Estonia</option>
                                                                                <option value="Ethiopia">Ethiopia</option>
                                                                                <option value="Falkland Islands">Falkland Islands</option>
                                                                                <option value="Faroe Islands">Faroe Islands</option>
                                                                                <option value="Fiji">Fiji</option>
                                                                                <option value="Finland">Finland</option>
                                                                                <option value="France">France</option>
                                                                                <option value="French Guiana">French Guiana</option>
                                                                                <option value="French Polynesia">French Polynesia</option>
                                                                                <option value="French Southern Ter">French Southern Ter</option>
                                                                                <option value="Gabon">Gabon</option>
                                                                                <option value="Gambia">Gambia</option>
                                                                                <option value="Georgia">Georgia</option>
                                                                                <option value="Germany">Germany</option>
                                                                                <option value="Ghana">Ghana</option>
                                                                                <option value="Gibraltar">Gibraltar</option>
                                                                                <option value="Great Britain">Great Britain</option>
                                                                                <option value="Greece">Greece</option>
                                                                                <option value="Greenland">Greenland</option>
                                                                                <option value="Grenada">Grenada</option>
                                                                                <option value="Guadeloupe">Guadeloupe</option>
                                                                                <option value="Guam">Guam</option>
                                                                                <option value="Guatemala">Guatemala</option>
                                                                                <option value="Guinea">Guinea</option>
                                                                                <option value="Guyana">Guyana</option>
                                                                                <option value="Haiti">Haiti</option>
                                                                                <option value="Hawaii">Hawaii</option>
                                                                                <option value="Honduras">Honduras</option>
                                                                                <option value="Hong Kong">Hong Kong</option>
                                                                                <option value="Hungary">Hungary</option>
                                                                                <option value="Iceland">Iceland</option>
                                                                                <option value="India">India</option>
                                                                                <option value="Indonesia">Indonesia</option>
                                                                                <option value="Iran">Iran</option>
                                                                                <option value="Iraq">Iraq</option>
                                                                                <option value="Ireland">Ireland</option>
                                                                                <option value="Isle of Man">Isle of Man</option>
                                                                                <option value="Israel">Israel</option>
                                                                                <option value="Italy">Italy</option>
                                                                                <option value="Jamaica">Jamaica</option>
                                                                                <option value="Japan">Japan</option>
                                                                                <option value="Jordan">Jordan</option>
                                                                                <option value="Kazakhstan">Kazakhstan</option>
                                                                                <option value="Kenya">Kenya</option>
                                                                                <option value="Kiribati">Kiribati</option>
                                                                                <option value="Korea North">Korea North</option>
                                                                                <option value="Korea Sout">Korea South</option>
                                                                                <option value="Kuwait">Kuwait</option>
                                                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                                <option value="Laos">Laos</option>
                                                                                <option value="Latvia">Latvia</option>
                                                                                <option value="Lebanon">Lebanon</option>
                                                                                <option value="Lesotho">Lesotho</option>
                                                                                <option value="Liberia">Liberia</option>
                                                                                <option value="Libya">Libya</option>
                                                                                <option value="Liechtenstein">Liechtenstein</option>
                                                                                <option value="Lithuania">Lithuania</option>
                                                                                <option value="Luxembourg">Luxembourg</option>
                                                                                <option value="Macau">Macau</option>
                                                                                <option value="Macedonia">Macedonia</option>
                                                                                <option value="Madagascar">Madagascar</option>
                                                                                <option value="Malaysia">Malaysia</option>
                                                                                <option value="Malawi">Malawi</option>
                                                                                <option value="Maldives">Maldives</option>
                                                                                <option value="Mali">Mali</option>
                                                                                <option value="Malta">Malta</option>
                                                                                <option value="Marshall Islands">Marshall Islands</option>
                                                                                <option value="Martinique">Martinique</option>
                                                                                <option value="Mauritania">Mauritania</option>
                                                                                <option value="Mauritius">Mauritius</option>
                                                                                <option value="Mayotte">Mayotte</option>
                                                                                <option value="Mexico">Mexico</option>
                                                                                <option value="Midway Islands">Midway Islands</option>
                                                                                <option value="Moldova">Moldova</option>
                                                                                <option value="Monaco">Monaco</option>
                                                                                <option value="Mongolia">Mongolia</option>
                                                                                <option value="Montserrat">Montserrat</option>
                                                                                <option value="Morocco">Morocco</option>
                                                                                <option value="Mozambique">Mozambique</option>
                                                                                <option value="Myanmar">Myanmar</option>
                                                                                <option value="Nambia">Nambia</option>
                                                                                <option value="Nauru">Nauru</option>
                                                                                <option value="Nepal">Nepal</option>
                                                                                <option value="Netherland Antilles">Netherland Antilles</option>
                                                                                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                                                <option value="Nevis">Nevis</option>
                                                                                <option value="New Caledonia">New Caledonia</option>
                                                                                <option value="New Zealand">New Zealand</option>
                                                                                <option value="Nicaragua">Nicaragua</option>
                                                                                <option value="Niger">Niger</option>
                                                                                <option value="Nigeria">Nigeria</option>
                                                                                <option value="Niue">Niue</option>
                                                                                <option value="Norfolk Island">Norfolk Island</option>
                                                                                <option value="Norway">Norway</option>
                                                                                <option value="Oman">Oman</option>
                                                                                <option value="Pakistan">Pakistan</option>
                                                                                <option value="Palau Island">Palau Island</option>
                                                                                <option value="Palestine">Palestine</option>
                                                                                <option value="Panama">Panama</option>
                                                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                                                <option value="Paraguay">Paraguay</option>
                                                                                <option value="Peru">Peru</option>
                                                                                <option value="Phillipines">Philippines</option>
                                                                                <option value="Pitcairn Island">Pitcairn Island</option>
                                                                                <option value="Poland">Poland</option>
                                                                                <option value="Portugal">Portugal</option>
                                                                                <option value="Puerto Rico">Puerto Rico</option>
                                                                                <option value="Qatar">Qatar</option>
                                                                                <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                                                <option value="Republic of Serbia">Republic of Serbia</option>
                                                                                <option value="Reunion">Reunion</option>
                                                                                <option value="Romania">Romania</option>
                                                                                <option value="Russia">Russia</option>
                                                                                <option value="Rwanda">Rwanda</option>
                                                                                <option value="St Barthelemy">St Barthelemy</option>
                                                                                <option value="St Eustatius">St Eustatius</option>
                                                                                <option value="St Helena">St Helena</option>
                                                                                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                                                <option value="St Lucia">St Lucia</option>
                                                                                <option value="St Maarten">St Maarten</option>
                                                                                <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                                                                <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                                                                <option value="Saipan">Saipan</option>
                                                                                <option value="Samoa">Samoa</option>
                                                                                <option value="Samoa American">Samoa American</option>
                                                                                <option value="San Marino">San Marino</option>
                                                                                <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                                                <option value="Senegal">Senegal</option>
                                                                                <option value="Serbia">Serbia</option>
                                                                                <option value="Seychelles">Seychelles</option>
                                                                                <option value="Sierra Leone">Sierra Leone</option>
                                                                                <option value="Singapore">Singapore</option>
                                                                                <option value="Slovakia">Slovakia</option>
                                                                                <option value="Slovenia">Slovenia</option>
                                                                                <option value="Solomon Islands">Solomon Islands</option>
                                                                                <option value="Somalia">Somalia</option>
                                                                                <option value="South Africa">South Africa</option>
                                                                                <option value="Spain">Spain</option>
                                                                                <option value="Sri Lanka">Sri Lanka</option>
                                                                                <option value="Sudan">Sudan</option>
                                                                                <option value="Suriname">Suriname</option>
                                                                                <option value="Swaziland">Swaziland</option>
                                                                                <option value="Sweden">Sweden</option>
                                                                                <option value="Switzerland">Switzerland</option>
                                                                                <option value="Syria">Syria</option>
                                                                                <option value="Tahiti">Tahiti</option>
                                                                                <option value="Taiwan">Taiwan</option>
                                                                                <option value="Tajikistan">Tajikistan</option>
                                                                                <option value="Tanzania">Tanzania</option>
                                                                                <option value="Thailand">Thailand</option>
                                                                                <option value="Togo">Togo</option>
                                                                                <option value="Tokelau">Tokelau</option>
                                                                                <option value="Tonga">Tonga</option>
                                                                                <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                                                                <option value="Tunisia">Tunisia</option>
                                                                                <option value="Turkey">Turkey</option>
                                                                                <option value="Turkmenistan">Turkmenistan</option>
                                                                                <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                                                                <option value="Tuvalu">Tuvalu</option>
                                                                                <option value="Uganda">Uganda</option>
                                                                                <option value="Ukraine">Ukraine</option>
                                                                                <option value="United Arab Erimates">United Arab Emirates</option>
                                                                                <option value="United Kingdom">United Kingdom</option>
                                                                                <option value="United States of America">United States of America</option>
                                                                                <option value="Uraguay">Uruguay</option>
                                                                                <option value="Uzbekistan">Uzbekistan</option>
                                                                                <option value="Vanuatu">Vanuatu</option>
                                                                                <option value="Vatican City State">Vatican City State</option>
                                                                                <option value="Venezuela">Venezuela</option>
                                                                                <option value="Vietnam">Vietnam</option>
                                                                                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                                                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                                                <option value="Wake Island">Wake Island</option>
                                                                                <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                                                                <option value="Yemen">Yemen</option>
                                                                                <option value="Zaire">Zaire</option>
                                                                                <option value="Zambia">Zambia</option>
                                                                                <option value="Zimbabwe">Zimbabwe</option>
                                                                            </select>
                                                                        </div> <!-- /controls -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="username" class="col-md-12">Award</label>
                                                                        <div class="col-md-12">
                                                                            <select class="form-control" id="certificate" name="award_1">
                                                                                <option>-------------</option>
                                                                                <option value="Phd">Phd</option>
                                                                                <option value="Masters">Masters</option>
                                                                                <option value="Graduate">Graduate</option>
                                                                                <option value="Bachelors">Bachelors</option>
                                                                                <option value="Diploma">Diploma</option>
                                                                                <option value="Certificate">Certificate</option>
                                                                            </select>
                                                                        </div> <!-- /controls -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="username" class="col-md-12">Award title</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" id="username" value="" name=title_1" placeholder="eg. BSc. Pure Mathematics">
                                                                        </div> <!-- /controls -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="username" class="col-md-12">Year</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" id="username" value="" name=date_1" placeholder="eg. 2010">
                                                                        </div> <!-- /controls -->
                                                                    </div>
                                                                    <!-- /control-group -->
                                                                <div class="col-md-6">
                                                                    <label for="username" class="col-md-12">Upload Certificate</label>
                                                                    <div class="col-md-12">
                                                                        <input type="file" class="">
                                                                    </div> <!-- /controls -->
                                                                </div>
                                                                </div>

                                                                <hr />

                                                                <div class="form-group">
                                                                    <h5><i class="icon-file"></i> Education 2 </h5>

                                                                    <div class="col-md-6">
                                                                        <label for="username" class="col-md-12">Institution Name</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" id="username" value="" name="institution_2" placeholder="eg.Long Horn University">
                                                                        </div> <!-- /controls -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="username" class="col-md-12">Location</label>
                                                                        <div class="col-md-12">
                                                                            <select class="form-control" id="country" name="location_2">
                                                                                <option value="">Country...</option>
                                                                                <option value="Afganistan">Afghanistan</option>
                                                                                <option value="Albania">Albania</option>
                                                                                <option value="Algeria">Algeria</option>
                                                                                <option value="American Samoa">American Samoa</option>
                                                                                <option value="Andorra">Andorra</option>
                                                                                <option value="Angola">Angola</option>
                                                                                <option value="Anguilla">Anguilla</option>
                                                                                <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                                                                <option value="Argentina">Argentina</option>
                                                                                <option value="Armenia">Armenia</option>
                                                                                <option value="Aruba">Aruba</option>
                                                                                <option value="Australia">Australia</option>
                                                                                <option value="Austria">Austria</option>
                                                                                <option value="Azerbaijan">Azerbaijan</option>
                                                                                <option value="Bahamas">Bahamas</option>
                                                                                <option value="Bahrain">Bahrain</option>
                                                                                <option value="Bangladesh">Bangladesh</option>
                                                                                <option value="Barbados">Barbados</option>
                                                                                <option value="Belarus">Belarus</option>
                                                                                <option value="Belgium">Belgium</option>
                                                                                <option value="Belize">Belize</option>
                                                                                <option value="Benin">Benin</option>
                                                                                <option value="Bermuda">Bermuda</option>
                                                                                <option value="Bhutan">Bhutan</option>
                                                                                <option value="Bolivia">Bolivia</option>
                                                                                <option value="Bonaire">Bonaire</option>
                                                                                <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                                                                <option value="Botswana">Botswana</option>
                                                                                <option value="Brazil">Brazil</option>
                                                                                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                                                <option value="Brunei">Brunei</option>
                                                                                <option value="Bulgaria">Bulgaria</option>
                                                                                <option value="Burkina Faso">Burkina Faso</option>
                                                                                <option value="Burundi">Burundi</option>
                                                                                <option value="Cambodia">Cambodia</option>
                                                                                <option value="Cameroon">Cameroon</option>
                                                                                <option value="Canada">Canada</option>
                                                                                <option value="Canary Islands">Canary Islands</option>
                                                                                <option value="Cape Verde">Cape Verde</option>
                                                                                <option value="Cayman Islands">Cayman Islands</option>
                                                                                <option value="Central African Republic">Central African Republic</option>
                                                                                <option value="Chad">Chad</option>
                                                                                <option value="Channel Islands">Channel Islands</option>
                                                                                <option value="Chile">Chile</option>
                                                                                <option value="China">China</option>
                                                                                <option value="Christmas Island">Christmas Island</option>
                                                                                <option value="Cocos Island">Cocos Island</option>
                                                                                <option value="Colombia">Colombia</option>
                                                                                <option value="Comoros">Comoros</option>
                                                                                <option value="Congo">Congo</option>
                                                                                <option value="Cook Islands">Cook Islands</option>
                                                                                <option value="Costa Rica">Costa Rica</option>
                                                                                <option value="Cote DIvoire">Cote D'Ivoire</option>
                                                                                <option value="Croatia">Croatia</option>
                                                                                <option value="Cuba">Cuba</option>
                                                                                <option value="Curaco">Curacao</option>
                                                                                <option value="Cyprus">Cyprus</option>
                                                                                <option value="Czech Republic">Czech Republic</option>
                                                                                <option value="Denmark">Denmark</option>
                                                                                <option value="Djibouti">Djibouti</option>
                                                                                <option value="Dominica">Dominica</option>
                                                                                <option value="Dominican Republic">Dominican Republic</option>
                                                                                <option value="East Timor">East Timor</option>
                                                                                <option value="Ecuador">Ecuador</option>
                                                                                <option value="Egypt">Egypt</option>
                                                                                <option value="El Salvador">El Salvador</option>
                                                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                                <option value="Eritrea">Eritrea</option>
                                                                                <option value="Estonia">Estonia</option>
                                                                                <option value="Ethiopia">Ethiopia</option>
                                                                                <option value="Falkland Islands">Falkland Islands</option>
                                                                                <option value="Faroe Islands">Faroe Islands</option>
                                                                                <option value="Fiji">Fiji</option>
                                                                                <option value="Finland">Finland</option>
                                                                                <option value="France">France</option>
                                                                                <option value="French Guiana">French Guiana</option>
                                                                                <option value="French Polynesia">French Polynesia</option>
                                                                                <option value="French Southern Ter">French Southern Ter</option>
                                                                                <option value="Gabon">Gabon</option>
                                                                                <option value="Gambia">Gambia</option>
                                                                                <option value="Georgia">Georgia</option>
                                                                                <option value="Germany">Germany</option>
                                                                                <option value="Ghana">Ghana</option>
                                                                                <option value="Gibraltar">Gibraltar</option>
                                                                                <option value="Great Britain">Great Britain</option>
                                                                                <option value="Greece">Greece</option>
                                                                                <option value="Greenland">Greenland</option>
                                                                                <option value="Grenada">Grenada</option>
                                                                                <option value="Guadeloupe">Guadeloupe</option>
                                                                                <option value="Guam">Guam</option>
                                                                                <option value="Guatemala">Guatemala</option>
                                                                                <option value="Guinea">Guinea</option>
                                                                                <option value="Guyana">Guyana</option>
                                                                                <option value="Haiti">Haiti</option>
                                                                                <option value="Hawaii">Hawaii</option>
                                                                                <option value="Honduras">Honduras</option>
                                                                                <option value="Hong Kong">Hong Kong</option>
                                                                                <option value="Hungary">Hungary</option>
                                                                                <option value="Iceland">Iceland</option>
                                                                                <option value="India">India</option>
                                                                                <option value="Indonesia">Indonesia</option>
                                                                                <option value="Iran">Iran</option>
                                                                                <option value="Iraq">Iraq</option>
                                                                                <option value="Ireland">Ireland</option>
                                                                                <option value="Isle of Man">Isle of Man</option>
                                                                                <option value="Israel">Israel</option>
                                                                                <option value="Italy">Italy</option>
                                                                                <option value="Jamaica">Jamaica</option>
                                                                                <option value="Japan">Japan</option>
                                                                                <option value="Jordan">Jordan</option>
                                                                                <option value="Kazakhstan">Kazakhstan</option>
                                                                                <option value="Kenya">Kenya</option>
                                                                                <option value="Kiribati">Kiribati</option>
                                                                                <option value="Korea North">Korea North</option>
                                                                                <option value="Korea Sout">Korea South</option>
                                                                                <option value="Kuwait">Kuwait</option>
                                                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                                <option value="Laos">Laos</option>
                                                                                <option value="Latvia">Latvia</option>
                                                                                <option value="Lebanon">Lebanon</option>
                                                                                <option value="Lesotho">Lesotho</option>
                                                                                <option value="Liberia">Liberia</option>
                                                                                <option value="Libya">Libya</option>
                                                                                <option value="Liechtenstein">Liechtenstein</option>
                                                                                <option value="Lithuania">Lithuania</option>
                                                                                <option value="Luxembourg">Luxembourg</option>
                                                                                <option value="Macau">Macau</option>
                                                                                <option value="Macedonia">Macedonia</option>
                                                                                <option value="Madagascar">Madagascar</option>
                                                                                <option value="Malaysia">Malaysia</option>
                                                                                <option value="Malawi">Malawi</option>
                                                                                <option value="Maldives">Maldives</option>
                                                                                <option value="Mali">Mali</option>
                                                                                <option value="Malta">Malta</option>
                                                                                <option value="Marshall Islands">Marshall Islands</option>
                                                                                <option value="Martinique">Martinique</option>
                                                                                <option value="Mauritania">Mauritania</option>
                                                                                <option value="Mauritius">Mauritius</option>
                                                                                <option value="Mayotte">Mayotte</option>
                                                                                <option value="Mexico">Mexico</option>
                                                                                <option value="Midway Islands">Midway Islands</option>
                                                                                <option value="Moldova">Moldova</option>
                                                                                <option value="Monaco">Monaco</option>
                                                                                <option value="Mongolia">Mongolia</option>
                                                                                <option value="Montserrat">Montserrat</option>
                                                                                <option value="Morocco">Morocco</option>
                                                                                <option value="Mozambique">Mozambique</option>
                                                                                <option value="Myanmar">Myanmar</option>
                                                                                <option value="Nambia">Nambia</option>
                                                                                <option value="Nauru">Nauru</option>
                                                                                <option value="Nepal">Nepal</option>
                                                                                <option value="Netherland Antilles">Netherland Antilles</option>
                                                                                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                                                <option value="Nevis">Nevis</option>
                                                                                <option value="New Caledonia">New Caledonia</option>
                                                                                <option value="New Zealand">New Zealand</option>
                                                                                <option value="Nicaragua">Nicaragua</option>
                                                                                <option value="Niger">Niger</option>
                                                                                <option value="Nigeria">Nigeria</option>
                                                                                <option value="Niue">Niue</option>
                                                                                <option value="Norfolk Island">Norfolk Island</option>
                                                                                <option value="Norway">Norway</option>
                                                                                <option value="Oman">Oman</option>
                                                                                <option value="Pakistan">Pakistan</option>
                                                                                <option value="Palau Island">Palau Island</option>
                                                                                <option value="Palestine">Palestine</option>
                                                                                <option value="Panama">Panama</option>
                                                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                                                <option value="Paraguay">Paraguay</option>
                                                                                <option value="Peru">Peru</option>
                                                                                <option value="Phillipines">Philippines</option>
                                                                                <option value="Pitcairn Island">Pitcairn Island</option>
                                                                                <option value="Poland">Poland</option>
                                                                                <option value="Portugal">Portugal</option>
                                                                                <option value="Puerto Rico">Puerto Rico</option>
                                                                                <option value="Qatar">Qatar</option>
                                                                                <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                                                <option value="Republic of Serbia">Republic of Serbia</option>
                                                                                <option value="Reunion">Reunion</option>
                                                                                <option value="Romania">Romania</option>
                                                                                <option value="Russia">Russia</option>
                                                                                <option value="Rwanda">Rwanda</option>
                                                                                <option value="St Barthelemy">St Barthelemy</option>
                                                                                <option value="St Eustatius">St Eustatius</option>
                                                                                <option value="St Helena">St Helena</option>
                                                                                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                                                <option value="St Lucia">St Lucia</option>
                                                                                <option value="St Maarten">St Maarten</option>
                                                                                <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                                                                <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                                                                <option value="Saipan">Saipan</option>
                                                                                <option value="Samoa">Samoa</option>
                                                                                <option value="Samoa American">Samoa American</option>
                                                                                <option value="San Marino">San Marino</option>
                                                                                <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                                                <option value="Senegal">Senegal</option>
                                                                                <option value="Serbia">Serbia</option>
                                                                                <option value="Seychelles">Seychelles</option>
                                                                                <option value="Sierra Leone">Sierra Leone</option>
                                                                                <option value="Singapore">Singapore</option>
                                                                                <option value="Slovakia">Slovakia</option>
                                                                                <option value="Slovenia">Slovenia</option>
                                                                                <option value="Solomon Islands">Solomon Islands</option>
                                                                                <option value="Somalia">Somalia</option>
                                                                                <option value="South Africa">South Africa</option>
                                                                                <option value="Spain">Spain</option>
                                                                                <option value="Sri Lanka">Sri Lanka</option>
                                                                                <option value="Sudan">Sudan</option>
                                                                                <option value="Suriname">Suriname</option>
                                                                                <option value="Swaziland">Swaziland</option>
                                                                                <option value="Sweden">Sweden</option>
                                                                                <option value="Switzerland">Switzerland</option>
                                                                                <option value="Syria">Syria</option>
                                                                                <option value="Tahiti">Tahiti</option>
                                                                                <option value="Taiwan">Taiwan</option>
                                                                                <option value="Tajikistan">Tajikistan</option>
                                                                                <option value="Tanzania">Tanzania</option>
                                                                                <option value="Thailand">Thailand</option>
                                                                                <option value="Togo">Togo</option>
                                                                                <option value="Tokelau">Tokelau</option>
                                                                                <option value="Tonga">Tonga</option>
                                                                                <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                                                                <option value="Tunisia">Tunisia</option>
                                                                                <option value="Turkey">Turkey</option>
                                                                                <option value="Turkmenistan">Turkmenistan</option>
                                                                                <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                                                                <option value="Tuvalu">Tuvalu</option>
                                                                                <option value="Uganda">Uganda</option>
                                                                                <option value="Ukraine">Ukraine</option>
                                                                                <option value="United Arab Erimates">United Arab Emirates</option>
                                                                                <option value="United Kingdom">United Kingdom</option>
                                                                                <option value="United States of America">United States of America</option>
                                                                                <option value="Uraguay">Uruguay</option>
                                                                                <option value="Uzbekistan">Uzbekistan</option>
                                                                                <option value="Vanuatu">Vanuatu</option>
                                                                                <option value="Vatican City State">Vatican City State</option>
                                                                                <option value="Venezuela">Venezuela</option>
                                                                                <option value="Vietnam">Vietnam</option>
                                                                                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                                                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                                                <option value="Wake Island">Wake Island</option>
                                                                                <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                                                                <option value="Yemen">Yemen</option>
                                                                                <option value="Zaire">Zaire</option>
                                                                                <option value="Zambia">Zambia</option>
                                                                                <option value="Zimbabwe">Zimbabwe</option>
                                                                            </select>
                                                                        </div> <!-- /controls -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="username" class="col-md-12">Award</label>
                                                                        <div class="col-md-12">
                                                                            <select class="form-control" id="certificate" name="award_2">
                                                                                <option>-------------</option>
                                                                                <option value="Phd">Phd</option>
                                                                                <option value="Masters">Masters</option>
                                                                                <option value="Graduate">Graduate</option>
                                                                                <option value="Bachelors">Bachelors</option>
                                                                                <option value="Diploma">Diploma</option>
                                                                                <option value="Certificate">Certificate</option>
                                                                            </select>
                                                                        </div> <!-- /controls -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="username" class="col-md-12">Award title</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" id="username" value="" name=title_2" placeholder="eg. BSc. Pure Mathematics">
                                                                        </div> <!-- /controls -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="username" class="col-md-12">Year</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" id="username" value="" name=date_2" placeholder="eg. 2010">
                                                                        </div> <!-- /controls -->
                                                                    </div>
                                                                    <!-- /control-group -->
                                                                    <div class="col-md-6">
                                                                        <label for="username" class="col-md-12">Upload Certificate</label>
                                                                        <div class="col-md-12">
                                                                            <input type="file" class="">
                                                                        </div> <!-- /controls -->
                                                                    </div>
                                                                </div>

                                                                <hr />

                                                                <div class="form-group">
                                                                    <h5><i class="icon-file"></i> Education 3 </h5>

                                                                    <div class="col-md-6">
                                                                        <label for="username" class="col-md-12">Institution Name</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" id="username" value="" name="institution_3" placeholder="eg.Long Horn University">
                                                                        </div> <!-- /controls -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="username" class="col-md-12">Location</label>
                                                                        <div class="col-md-12">
                                                                            <select class="form-control" id="country" name="location_3">
                                                                                <option value="">Country...</option>
                                                                                <option value="Afganistan">Afghanistan</option>
                                                                                <option value="Albania">Albania</option>
                                                                                <option value="Algeria">Algeria</option>
                                                                                <option value="American Samoa">American Samoa</option>
                                                                                <option value="Andorra">Andorra</option>
                                                                                <option value="Angola">Angola</option>
                                                                                <option value="Anguilla">Anguilla</option>
                                                                                <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                                                                <option value="Argentina">Argentina</option>
                                                                                <option value="Armenia">Armenia</option>
                                                                                <option value="Aruba">Aruba</option>
                                                                                <option value="Australia">Australia</option>
                                                                                <option value="Austria">Austria</option>
                                                                                <option value="Azerbaijan">Azerbaijan</option>
                                                                                <option value="Bahamas">Bahamas</option>
                                                                                <option value="Bahrain">Bahrain</option>
                                                                                <option value="Bangladesh">Bangladesh</option>
                                                                                <option value="Barbados">Barbados</option>
                                                                                <option value="Belarus">Belarus</option>
                                                                                <option value="Belgium">Belgium</option>
                                                                                <option value="Belize">Belize</option>
                                                                                <option value="Benin">Benin</option>
                                                                                <option value="Bermuda">Bermuda</option>
                                                                                <option value="Bhutan">Bhutan</option>
                                                                                <option value="Bolivia">Bolivia</option>
                                                                                <option value="Bonaire">Bonaire</option>
                                                                                <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                                                                <option value="Botswana">Botswana</option>
                                                                                <option value="Brazil">Brazil</option>
                                                                                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                                                <option value="Brunei">Brunei</option>
                                                                                <option value="Bulgaria">Bulgaria</option>
                                                                                <option value="Burkina Faso">Burkina Faso</option>
                                                                                <option value="Burundi">Burundi</option>
                                                                                <option value="Cambodia">Cambodia</option>
                                                                                <option value="Cameroon">Cameroon</option>
                                                                                <option value="Canada">Canada</option>
                                                                                <option value="Canary Islands">Canary Islands</option>
                                                                                <option value="Cape Verde">Cape Verde</option>
                                                                                <option value="Cayman Islands">Cayman Islands</option>
                                                                                <option value="Central African Republic">Central African Republic</option>
                                                                                <option value="Chad">Chad</option>
                                                                                <option value="Channel Islands">Channel Islands</option>
                                                                                <option value="Chile">Chile</option>
                                                                                <option value="China">China</option>
                                                                                <option value="Christmas Island">Christmas Island</option>
                                                                                <option value="Cocos Island">Cocos Island</option>
                                                                                <option value="Colombia">Colombia</option>
                                                                                <option value="Comoros">Comoros</option>
                                                                                <option value="Congo">Congo</option>
                                                                                <option value="Cook Islands">Cook Islands</option>
                                                                                <option value="Costa Rica">Costa Rica</option>
                                                                                <option value="Cote DIvoire">Cote D'Ivoire</option>
                                                                                <option value="Croatia">Croatia</option>
                                                                                <option value="Cuba">Cuba</option>
                                                                                <option value="Curaco">Curacao</option>
                                                                                <option value="Cyprus">Cyprus</option>
                                                                                <option value="Czech Republic">Czech Republic</option>
                                                                                <option value="Denmark">Denmark</option>
                                                                                <option value="Djibouti">Djibouti</option>
                                                                                <option value="Dominica">Dominica</option>
                                                                                <option value="Dominican Republic">Dominican Republic</option>
                                                                                <option value="East Timor">East Timor</option>
                                                                                <option value="Ecuador">Ecuador</option>
                                                                                <option value="Egypt">Egypt</option>
                                                                                <option value="El Salvador">El Salvador</option>
                                                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                                <option value="Eritrea">Eritrea</option>
                                                                                <option value="Estonia">Estonia</option>
                                                                                <option value="Ethiopia">Ethiopia</option>
                                                                                <option value="Falkland Islands">Falkland Islands</option>
                                                                                <option value="Faroe Islands">Faroe Islands</option>
                                                                                <option value="Fiji">Fiji</option>
                                                                                <option value="Finland">Finland</option>
                                                                                <option value="France">France</option>
                                                                                <option value="French Guiana">French Guiana</option>
                                                                                <option value="French Polynesia">French Polynesia</option>
                                                                                <option value="French Southern Ter">French Southern Ter</option>
                                                                                <option value="Gabon">Gabon</option>
                                                                                <option value="Gambia">Gambia</option>
                                                                                <option value="Georgia">Georgia</option>
                                                                                <option value="Germany">Germany</option>
                                                                                <option value="Ghana">Ghana</option>
                                                                                <option value="Gibraltar">Gibraltar</option>
                                                                                <option value="Great Britain">Great Britain</option>
                                                                                <option value="Greece">Greece</option>
                                                                                <option value="Greenland">Greenland</option>
                                                                                <option value="Grenada">Grenada</option>
                                                                                <option value="Guadeloupe">Guadeloupe</option>
                                                                                <option value="Guam">Guam</option>
                                                                                <option value="Guatemala">Guatemala</option>
                                                                                <option value="Guinea">Guinea</option>
                                                                                <option value="Guyana">Guyana</option>
                                                                                <option value="Haiti">Haiti</option>
                                                                                <option value="Hawaii">Hawaii</option>
                                                                                <option value="Honduras">Honduras</option>
                                                                                <option value="Hong Kong">Hong Kong</option>
                                                                                <option value="Hungary">Hungary</option>
                                                                                <option value="Iceland">Iceland</option>
                                                                                <option value="India">India</option>
                                                                                <option value="Indonesia">Indonesia</option>
                                                                                <option value="Iran">Iran</option>
                                                                                <option value="Iraq">Iraq</option>
                                                                                <option value="Ireland">Ireland</option>
                                                                                <option value="Isle of Man">Isle of Man</option>
                                                                                <option value="Israel">Israel</option>
                                                                                <option value="Italy">Italy</option>
                                                                                <option value="Jamaica">Jamaica</option>
                                                                                <option value="Japan">Japan</option>
                                                                                <option value="Jordan">Jordan</option>
                                                                                <option value="Kazakhstan">Kazakhstan</option>
                                                                                <option value="Kenya">Kenya</option>
                                                                                <option value="Kiribati">Kiribati</option>
                                                                                <option value="Korea North">Korea North</option>
                                                                                <option value="Korea Sout">Korea South</option>
                                                                                <option value="Kuwait">Kuwait</option>
                                                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                                <option value="Laos">Laos</option>
                                                                                <option value="Latvia">Latvia</option>
                                                                                <option value="Lebanon">Lebanon</option>
                                                                                <option value="Lesotho">Lesotho</option>
                                                                                <option value="Liberia">Liberia</option>
                                                                                <option value="Libya">Libya</option>
                                                                                <option value="Liechtenstein">Liechtenstein</option>
                                                                                <option value="Lithuania">Lithuania</option>
                                                                                <option value="Luxembourg">Luxembourg</option>
                                                                                <option value="Macau">Macau</option>
                                                                                <option value="Macedonia">Macedonia</option>
                                                                                <option value="Madagascar">Madagascar</option>
                                                                                <option value="Malaysia">Malaysia</option>
                                                                                <option value="Malawi">Malawi</option>
                                                                                <option value="Maldives">Maldives</option>
                                                                                <option value="Mali">Mali</option>
                                                                                <option value="Malta">Malta</option>
                                                                                <option value="Marshall Islands">Marshall Islands</option>
                                                                                <option value="Martinique">Martinique</option>
                                                                                <option value="Mauritania">Mauritania</option>
                                                                                <option value="Mauritius">Mauritius</option>
                                                                                <option value="Mayotte">Mayotte</option>
                                                                                <option value="Mexico">Mexico</option>
                                                                                <option value="Midway Islands">Midway Islands</option>
                                                                                <option value="Moldova">Moldova</option>
                                                                                <option value="Monaco">Monaco</option>
                                                                                <option value="Mongolia">Mongolia</option>
                                                                                <option value="Montserrat">Montserrat</option>
                                                                                <option value="Morocco">Morocco</option>
                                                                                <option value="Mozambique">Mozambique</option>
                                                                                <option value="Myanmar">Myanmar</option>
                                                                                <option value="Nambia">Nambia</option>
                                                                                <option value="Nauru">Nauru</option>
                                                                                <option value="Nepal">Nepal</option>
                                                                                <option value="Netherland Antilles">Netherland Antilles</option>
                                                                                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                                                <option value="Nevis">Nevis</option>
                                                                                <option value="New Caledonia">New Caledonia</option>
                                                                                <option value="New Zealand">New Zealand</option>
                                                                                <option value="Nicaragua">Nicaragua</option>
                                                                                <option value="Niger">Niger</option>
                                                                                <option value="Nigeria">Nigeria</option>
                                                                                <option value="Niue">Niue</option>
                                                                                <option value="Norfolk Island">Norfolk Island</option>
                                                                                <option value="Norway">Norway</option>
                                                                                <option value="Oman">Oman</option>
                                                                                <option value="Pakistan">Pakistan</option>
                                                                                <option value="Palau Island">Palau Island</option>
                                                                                <option value="Palestine">Palestine</option>
                                                                                <option value="Panama">Panama</option>
                                                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                                                <option value="Paraguay">Paraguay</option>
                                                                                <option value="Peru">Peru</option>
                                                                                <option value="Phillipines">Philippines</option>
                                                                                <option value="Pitcairn Island">Pitcairn Island</option>
                                                                                <option value="Poland">Poland</option>
                                                                                <option value="Portugal">Portugal</option>
                                                                                <option value="Puerto Rico">Puerto Rico</option>
                                                                                <option value="Qatar">Qatar</option>
                                                                                <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                                                <option value="Republic of Serbia">Republic of Serbia</option>
                                                                                <option value="Reunion">Reunion</option>
                                                                                <option value="Romania">Romania</option>
                                                                                <option value="Russia">Russia</option>
                                                                                <option value="Rwanda">Rwanda</option>
                                                                                <option value="St Barthelemy">St Barthelemy</option>
                                                                                <option value="St Eustatius">St Eustatius</option>
                                                                                <option value="St Helena">St Helena</option>
                                                                                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                                                <option value="St Lucia">St Lucia</option>
                                                                                <option value="St Maarten">St Maarten</option>
                                                                                <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                                                                <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                                                                <option value="Saipan">Saipan</option>
                                                                                <option value="Samoa">Samoa</option>
                                                                                <option value="Samoa American">Samoa American</option>
                                                                                <option value="San Marino">San Marino</option>
                                                                                <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                                                <option value="Senegal">Senegal</option>
                                                                                <option value="Serbia">Serbia</option>
                                                                                <option value="Seychelles">Seychelles</option>
                                                                                <option value="Sierra Leone">Sierra Leone</option>
                                                                                <option value="Singapore">Singapore</option>
                                                                                <option value="Slovakia">Slovakia</option>
                                                                                <option value="Slovenia">Slovenia</option>
                                                                                <option value="Solomon Islands">Solomon Islands</option>
                                                                                <option value="Somalia">Somalia</option>
                                                                                <option value="South Africa">South Africa</option>
                                                                                <option value="Spain">Spain</option>
                                                                                <option value="Sri Lanka">Sri Lanka</option>
                                                                                <option value="Sudan">Sudan</option>
                                                                                <option value="Suriname">Suriname</option>
                                                                                <option value="Swaziland">Swaziland</option>
                                                                                <option value="Sweden">Sweden</option>
                                                                                <option value="Switzerland">Switzerland</option>
                                                                                <option value="Syria">Syria</option>
                                                                                <option value="Tahiti">Tahiti</option>
                                                                                <option value="Taiwan">Taiwan</option>
                                                                                <option value="Tajikistan">Tajikistan</option>
                                                                                <option value="Tanzania">Tanzania</option>
                                                                                <option value="Thailand">Thailand</option>
                                                                                <option value="Togo">Togo</option>
                                                                                <option value="Tokelau">Tokelau</option>
                                                                                <option value="Tonga">Tonga</option>
                                                                                <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                                                                <option value="Tunisia">Tunisia</option>
                                                                                <option value="Turkey">Turkey</option>
                                                                                <option value="Turkmenistan">Turkmenistan</option>
                                                                                <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                                                                <option value="Tuvalu">Tuvalu</option>
                                                                                <option value="Uganda">Uganda</option>
                                                                                <option value="Ukraine">Ukraine</option>
                                                                                <option value="United Arab Erimates">United Arab Emirates</option>
                                                                                <option value="United Kingdom">United Kingdom</option>
                                                                                <option value="United States of America">United States of America</option>
                                                                                <option value="Uraguay">Uruguay</option>
                                                                                <option value="Uzbekistan">Uzbekistan</option>
                                                                                <option value="Vanuatu">Vanuatu</option>
                                                                                <option value="Vatican City State">Vatican City State</option>
                                                                                <option value="Venezuela">Venezuela</option>
                                                                                <option value="Vietnam">Vietnam</option>
                                                                                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                                                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                                                <option value="Wake Island">Wake Island</option>
                                                                                <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                                                                <option value="Yemen">Yemen</option>
                                                                                <option value="Zaire">Zaire</option>
                                                                                <option value="Zambia">Zambia</option>
                                                                                <option value="Zimbabwe">Zimbabwe</option>
                                                                            </select>
                                                                        </div> <!-- /controls -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="username" class="col-md-12">Award</label>
                                                                        <div class="col-md-12">
                                                                            <select class="form-control" id="certificate" name="award_3">
                                                                                <option>-------------</option>
                                                                                <option value="Phd">Phd</option>
                                                                                <option value="Masters">Masters</option>
                                                                                <option value="Graduate">Graduate</option>
                                                                                <option value="Bachelors">Bachelors</option>
                                                                                <option value="Diploma">Diploma</option>
                                                                                <option value="Certificate">Certificate</option>
                                                                            </select>
                                                                        </div> <!-- /controls -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="username" class="col-md-12">Award title</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" id="username" value="" name=title_3" placeholder="eg. BSc. Pure Mathematics">
                                                                        </div> <!-- /controls -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="username" class="col-md-12">Year</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" id="username" value="" name=date_3" placeholder="eg. 2010">
                                                                        </div> <!-- /controls -->
                                                                    </div>
                                                                    <!-- /control-group -->
                                                                    <div class="col-md-6">
                                                                        <label for="username" class="col-md-12">Upload Certificate</label>
                                                                        <div class="col-md-12">
                                                                            <input type="file" class="">
                                                                        </div> <!-- /controls -->
                                                                    </div>
                                                                </div>

                                                                <hr />

                                                                <div class="form-group">

                                                                    <div class="col-md-4">
                                                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                                                    </div>

                                                                </div> <!-- /.form-group -->

                                                        </div>

                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>

                                    <div class="tab-pane" id="account">
                                        <form id="edit-profile2" class="form-horizontal col-md-12" action="" method="post">
                                            <fieldset>
                                                <div class="col-md-12">
                                                    <div class="user-info-right">
                                                        <div class="basic-info">
                                                            <h3><i class="icon-file-alt"></i> Statutory Information </h3>
                                                            <hr />
                                                                <div class="form-group">
                                                                    <h5><i class="icon-file"></i> NHIF </h5>
                                                                    <div class="col-md-12">
                                                                        <label for="username" class="col-md-6">NHIF Number</label>
                                                                        <div class="col-md-6">
                                                                            <input type="text" class="form-control" id="username" value="" name="nhif">
                                                                        </div> <!-- /controls -->
                                                                    </div>

                                                                </div>

                                                                <div class="form-group">
                                                                    <h5><i class="icon-file"></i> KRA </h5>
                                                                    <div class="col-md-12">
                                                                        <label for="username" class="col-md-6">KRA Pin</label>
                                                                        <div class="col-md-6">
                                                                            <input type="text" class="form-control" id="username" value="" name="kra" >
                                                                        </div> <!-- /controls -->
                                                                    </div>

                                                                </div>

                                                                <div class="form-group">
                                                                    <h5><i class="icon-file"></i> NSSF </h5>
                                                                    <div class="col-md-12">
                                                                        <label for="username" class="col-md-6">NSSF Number</label>
                                                                        <div class="col-md-6">
                                                                            <input type="text" class="form-control" id="username" value="" name="nssf">
                                                                        </div> <!-- /controls -->
                                                                    </div>

                                                                </div>

                                                                <div class="form-group">
                                                                    <div class="col-md-12">
                                                                        <label for="username" class="col-md-6"> Other </label>
                                                                        <div class="col-md-6">
                                                                            <input type="text" class="form-control" id="username" value="" name="other">
                                                                        </div> <!-- /controls -->
                                                                    </div>

                                                                </div>

                                                                <hr />

                                                                <div class="form-group">

                                                                    <div class="col-md-4">
                                                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                                                    </div>

                                                                </div> <!-- /.form-group -->

                                                        </div>

                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>

                                    <div class="tab-pane" id="bank">
                                        <form id="edit-profile2" class="form-horizontal col-md-12" action="" method="post">
                                            <fieldset>
                                                <div class="col-md-12">
                                                    <div class="user-info-right">
                                                        <div class="basic-info">
                                                            <h3><i class="icon-archive"></i> Bank Details </h3>
                                                            <hr />
                                                                <div class="form-group">
                                                                    <div class="col-md-12">
                                                                        <label for="username" class="col-md-3"> Account Name </label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="username" value="" name="account">
                                                                        </div> <!-- /controls -->
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <div class="col-md-12">
                                                                        <label for="username" class="col-md-3"> Bank Name </label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="username" value="" name="bank">
                                                                        </div> <!-- /controls -->
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <div class="col-md-12">
                                                                        <label for="username" class="col-md-3"> Branch </label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="username" value="" name="branch">
                                                                        </div> <!-- /controls -->
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <div class="col-md-12">
                                                                        <label for="username" class="col-md-3"> Account Number </label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="username" value="" name="a_number">
                                                                        </div> <!-- /controls -->
                                                                    </div>
                                                                </div>

                                                                <hr />

                                                                <div class="form-group">

                                                                    <div class="col-md-4">
                                                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                                                    </div>

                                                                </div> <!-- /.form-group -->

                                                        </div>

                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>

                                    <div class="tab-pane" id="more">
                                        <form id="edit-profile2" class="form-horizontal col-md-12" action="" method="post">
                                            <fieldset>
                                                <div class="col-md-12">
                                                    <div class="user-info-right">
                                                        <div class="basic-info">
                                                            <h3><i class="icon-user"></i> Profile Picture </h3>
                                                            <hr />
                                                                <div class="form-group">
                                                                    <div class="col-md-12">
                                                                        <img src="assets/img/profile-avatar.png" class="col-md-4" alt="Profile Picture" />
                                                                        <div class="col-md-8">
                                                                            <input type="file">
                                                                        </div> <!-- /controls -->
                                                                    </div>
                                                                </div>

                                                                <hr />

                                                                <div class="form-group">

                                                                    <div class="col-md-4">
                                                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                                                    </div>

                                                                </div> <!-- /.form-group -->

                                                        </div>

                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


<?php include '../includes/footer.php';