<?php
include '../includes/hod_header.php';
?>

    <div class="main">
    <div class="container">

        <?php
        $applicant = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, phone, postal_code,  pro_pic, about, CONCAT(county, ', ', country) AS location, gender, email, postal_code, department, address, DATE_FORMAT(created, '%d %M %Y') AS joined FROM staff WHERE staff_id =". $user_data['user_id']);
        $user = mysql_fetch_array($applicant);
        ?>

        <div class="row">
            <div class="col-sm-3"><!--left col-->
                <div class="list-group">
                    <a class="list-group-item" href="index.php">
                        <span class="icon-home"></span> Dashboard
                    </a>
                    <a class="list-group-item" href="leave.php">
                        <span class="icon-arrow-left"></span> Leave
                    </a>
                    <a class="list-group-item active" href="employee.php">
                        <span class="icon-group"></span> Employee <i class="icon-chevron-right pull-right"></i>
                    </a>
                    <a class="list-group-item" href="employ.php">
                        <span class="icon-file-text-alt"></span> Employ
                    </a>
                    <a class="list-group-item" href="jobs.php">
                        <span class="icon-briefcase"></span> Jobs
                    </a>
                    <a class="list-group-item" href="events.php">
                        <span class="icon-list-alt"></span> Events
                    </a>
                    <a class="list-group-item" href="tasks.php">
                        <span class="icon-tasks"></span> Tasks
                    </a>
                    <a class="list-group-item" href="profile.php">
                        <span class="icon-user"></span> Profile
                    </a>
                    <a class="list-group-item" href="settings.php">
                        <span class="icon-cogs"></span> Settings
                    </a>
                </div>

            </div>

            <div class="col-md-9">
                <div class="widget stacked">

                    <div class="widget-header">
                        <i class="icon-group"></i>
                        <h3>Add Employee</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">
                        <div class="tabbable">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#profile" data-toggle="tab">New Employee Info</a>
                                </li>
                            </ul>

                            <br>

                            <div class="tab-content">
                                <div class="tab-pane profile active" id="profile">
                                    <?php include '../../processes/new_employee.php';?>

                                    <form id="edit-profile2" class="form-horizontal col-md-12" method="post" action="">
                                        <fieldset>
                                            <div class="col-md-6">
                                                <div class="user-info-right">
                                                    <h3 class="basic-info">General Info</h3>
                                                    <hr />

                                                    <div class="form-group">
                                                        <label for="username" class="col-md-4">Username</label>
                                                        <div class="col-md-12">
                                                            <input type="text" class="form-control" id="username" value="" name="username" disabled>
                                                            <p class="help-block">Your username is for logging in and cannot be changed.</p>
                                                        </div> <!-- /controls -->
                                                    </div> <!-- /control-group -->

                                                    <div class="form-group">
                                                        <label for="username" class="col-md-4">First Name</label>
                                                        <div class="col-md-12">
                                                            <input type="text" class="form-control" id="username" value="" name="first_name" placeholder="First Name">
                                                            <p class="help-block">Only Letters</p>
                                                        </div> <!-- /controls -->
                                                    </div> <!-- /control-group -->

                                                    <div class="form-group">
                                                        <label for="username" class="col-md-4">Last Name</label>
                                                        <div class="col-md-12">
                                                            <input type="text" class="form-control" id="username" value="" name="last_name" placeholder="Last Name">
                                                            <p class="help-block">Only Letters</p>
                                                        </div> <!-- /controls -->
                                                    </div> <!-- /control-group -->

                                                    <div class="form-group">
                                                        <label for="username" class="col-md-4">Other Name(s)</label>
                                                        <div class="col-md-12">
                                                            <input type="text" class="form-control" id="username" value="" name="other_name" placeholder="Other Name">
                                                            <p class="help-block">Only Letters</p>
                                                        </div> <!-- /controls -->
                                                    </div> <!-- /control-group -->

                                                    <div class="form-group">
                                                        <label for="username" class="col-md-4">ID/ Passport No.</label>
                                                        <div class="col-md-12">
                                                            <input type="number" class="form-control" id="username" value="" name="passport" placeholder="ID/ Passport">
                                                        </div> <!-- /controls -->
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="username" class="col-md-4">Birth Date</label>
                                                        <div class="col-md-12">
                                                            <input id="datepicker" class="form-control" value="" name="dob" placeholder="01/12/2016"/>
                                                        </div> <!-- /controls -->
                                                    </div> <!-- /control-group -->

                                                    <div class="form-group">
                                                        <label class="col-md-12" for="accounttype">Gender</label>
                                                        <div class="col-md-12">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="gender" value="Male" checked="checked" id="gender">
                                                                    Male
                                                                </label>
                                                            </div>

                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="gender" value="Male">
                                                                    Female
                                                                </label>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-12" for="accounttype">Marital Status</label>
                                                        <div class="col-md-12">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="marital" value="Single" checked="checked" id="gender">
                                                                    Single
                                                                </label>
                                                            </div>

                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="marital" value="Married">
                                                                    Married
                                                                </label>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="username" class="col-md-12">Nationality</label>
                                                        <div class="col-md-12">
                                                            <select class="form-control" id="country" name="country">
                                                                <option value="">Choose Country</option>
                                                                <option value="Afghanistan">Afghanistan</option>
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

                                                    <div class="basic-info">
                                                        <h4><i class="icon-archive"></i> Bank Details </h4>
                                                        <hr />
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <label for="username" class="col-md-10"> Account Name </label>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control" id="username" value="" name="account">
                                                                </div> <!-- /controls -->
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <label for="username" class="col-md-10"> Bank Name </label>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control" id="username" value="" name="bank">
                                                                </div> <!-- /controls -->
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <label for="username" class="col-md-10"> Branch </label>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control" id="username" value="" name="branch">
                                                                </div> <!-- /controls -->
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <label for="username" class="col-md-10"> Account Number </label>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control" id="username" value="" name="a_number">
                                                                </div> <!-- /controls -->
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <h4><i class="fa fa-square"></i> Password </h4>
                                                    <hr />

                                                    <div class="form-group">
                                                        <label for="username" class="col-md-4">Password</label>
                                                        <div class="col-md-12">
                                                            <input type="password" class="form-control" id="username" value="password" name="password">
                                                            <p class="help-block">By Default it is "password".</p>
                                                        </div> <!-- /controls -->
                                                    </div> <!-- /control-group -->

                                                    <hr />
                                                    <div class="form-group">

                                                        <div class="col-md-6">
                                                            <button type="submit" class="btn btn-primary" name="btn-update">Save </button>
                                                            <a href="employee.php" class="btn btn-default">Cancel</a>
                                                        </div>

                                                    </div> <!-- /.form-group -->

                                                    </h3>

                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="contact_info">
                                                    <h3><i class="fa fa-square"></i> Contact Information</h3>
                                                    <hr />

                                                    <div class="form-group">
                                                        <label for="username" class="col-md-4"><i class="icon-envelope"></i> Email </label>
                                                        <div class="col-md-12">
                                                            <input type="email" class="form-control" id="username" value="" name="email" placeholder="Email eg. johndoe@mail.com">
                                                        </div> <!-- /controls -->
                                                    </div> <!-- /control-group -->

                                                    <div class="form-group">
                                                        <label for="username" class="col-md-4"><i class="icon-phone"></i> Contact 1 </label>
                                                        <div class="col-md-12">
                                                            <input type="number1" class="form-control" id="username" value="" maxlength="13" min="10" name="contact_1" placeholder="Phone eg. +254 700 124568">
                                                        </div> <!-- /controls -->
                                                    </div> <!-- /control-group -->

                                                    <div class="form-group">
                                                        <label for="username" class="col-md-4"><i class="icon-phone"></i> Contact 2 </label>
                                                        <div class="col-md-12">
                                                            <input type="number2" class="form-control" id="username" value="" maxlength="13" min="10" name="contact_2" placeholder="Phone eg. +254 700 124568">
                                                        </div> <!-- /controls -->
                                                    </div> <!-- /control-group -->

                                                    <div class="form-group">
                                                        <label for="username" class="col-md-4"><i class="icon-location-arrow"></i> Address </label>
                                                        <div class="col-md-12">
                                                            <input type="text" class="form-control" id="username" value="" name="address" placeholder="227 - 01000 Nairobi, Kenya">
                                                        </div> <!-- /controls -->
                                                    </div> <!-- /control-group -->

                                                </div>

                                                <div class="basic-info">
                                                    <h4><i class="icon-file-alt"></i> Statutory Info </h4>
                                                    <hr />
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label for="username" class="col-md-6">NHIF Number</label>
                                                            <div class="col-md-12">
                                                                <input type="text" class="form-control" id="username" value="" name="nhif">
                                                            </div> <!-- /controls -->
                                                        </div>

                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label for="username" class="col-md-6">KRA Pin</label>
                                                            <div class="col-md-12">
                                                                <input type="text" class="form-control" id="username" value="" name="kra" >
                                                            </div> <!-- /controls -->
                                                        </div>

                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label for="username" class="col-md-6">NSSF Number</label>
                                                            <div class="col-md-12">
                                                                <input type="text" class="form-control"  value="" name="nssf">
                                                            </div> <!-- /controls -->
                                                        </div>

                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label for="username" class="col-md-6"> Other </label>
                                                            <div class="col-md-12">
                                                                <input type="text" class="form-control"  value="" name="other">
                                                            </div> <!-- /controls -->
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="basic-info">
                                                    <h4><i class="icon-file-alt"></i> Employment Details </h4>
                                                    <hr />
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label for="username" class="col-md-6">Entry Salary</label>
                                                            <div class="col-md-12">
                                                                <input type="text" class="form-control" id="username" value="" name="salary">
                                                            </div> <!-- /controls -->
                                                        </div>

                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label for="username" class="col-md-6">Appointment Date</label>
                                                            <div class="col-md-12">
                                                                <input id="datepicker1" class="form-control" value="" name="appointment" placeholder="01/12/2016"/>
                                                            </div> <!-- /controls -->
                                                        </div>

                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label for="username" class="col-md-6">Joining Date</label>
                                                            <div class="col-md-12">
                                                                <input id="datepicker2" class="form-control" value="" name="hire_date" placeholder="01/12/2016"/>
                                                            </div> <!-- /controls -->
                                                        </div>

                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label for="username" class="col-md-6"> Probation Due Date </label>
                                                            <div class="col-md-12">
                                                                <input id="datepicker3" class="form-control" value="" name="probation" placeholder="01/12/2016"/>
                                                            </div> <!-- /controls -->
                                                        </div>

                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label for="username" class="col-md-6"> Employement Type</label>
                                                            <div class="col-md-12">
                                                                <select class="form-control" id="budget" name="work-type">
                                                                    <option value="" selected="selected">Choose Employment Type </option>
                                                                    <option value="Full-Time">Full-Time</option>
                                                                    <option value="Part-Time">Part-Time</option>
                                                                    <option value="Internship">Internship</option>
                                                                    <option value="Consultancy">Consultancy</option>
                                                                </select>
                                                            </div> <!-- /controls -->
                                                        </div>

                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label for="username" class="col-md-6"> Department </label>
                                                            <div class="col-md-12">
                                                                <select class="form-control" id="budget" name="department">
                                                                    <option value="" selected="selected">Choose Department </option>
                                                                    <?php
                                                                    //Load names from staff
                                                                    $hod = mysql_query("SELECT department_name FROM department ORDER BY department_name ASC") or die(mysql_error());
                                                                    While($row = mysql_fetch_assoc($hod)){
                                                                        echo "<option value='".$row['department_name']."'>".$row['department_name']."</option>";
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div> <!-- /controls -->
                                                        </div>

                                                    </div>

                                                    <hr />

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
                                                                    <textarea name="duties_2" class="form-control" rows="6" placeholder="List duties performed" maxlength="400"></textarea>
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
                                                                    <textarea name="duties_1" class="form-control" rows="6" placeholder="List duties performed" maxlength="400"></textarea>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <hr />
                                                        <div class="form-group">

                                                            <div class="col-md-4">
                                                                <button type="submit" class="btn btn-primary" name="btn-experience">Save Changes</button>
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