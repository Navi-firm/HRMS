<?php include '../includes/user_header.php'; ?>
    <div class="main">

    <div class="container">

        <div class="row">

            <div class="col-md-8">

                <div class="widget stacked ">

                    <div class="widget-header">
                        <i class="icon-user"></i>
                        <h3> <strong><?php echo $user_data['username']; ?></strong> Your Account</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">



                        <div class="tabbable">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#profile" data-toggle="tab">Personal Info</a></li>
                                <li><a href="#academic" data-toggle="tab">Academic Info</a></li>
                                <li><a href="#employement" data-toggle="tab">Employement Info</a></li>
                                <li><a href="#contact" data-toggle="tab">Contact Info</a></li>
                                <li><a href="#tax" data-toggle="tab">Tax Info</a></li>
                            </ul>

                            <br>

                            <div class="tab-content">
                                <div class="tab-pane active" id="profile">
                                    <h4> Basic Info </h4>
                                    <hr>
                                    <br />
                                    <form id="edit-profile" class="form-horizontal col-md-8">
                                        <fieldset>

                                            <div class="form-group">
                                                <label for="username" class="col-md-4">Username</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="username" value="<?php echo $user_data['username']; ?>" disabled>
                                                    <p class="help-block">Your username is for logging in and cannot be changed.</p>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->


                                            <div class="form-group">
                                                <label for="firstname" class="col-md-4">First Name</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="firstname" value="Rod">
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->


                                            <div class="form-group">
                                                <label class="col-md-4" for="lastname">Last Name</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="lastname" value="Howard">
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <div class="form-group">
                                                <label class="col-md-4" for="email">Id or Passport No. </label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="id" value="" name="id_number">
                                                </div> <!-- /controls -->
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4" for="gender">Gender : </label>
                                                <div class="col-md-8">
                                                    <select class="form-control" id="gender" name="gender">
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div> <!-- /controls -->
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4" for="gender"> Country </label>
                                                <div class="col-md-8">
                                                    <select class="form-control" id="gender" name="country">
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

                                            <hr /><br />
                                            <h4> Change Password </h4>
                                            <br />
                                            <div class="form-group">
                                                <label class="col-md-4" for="password1">Password</label>
                                                <div class="col-md-8">
                                                    <input type="password" class="form-control" id="password1" value="password">
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->


                                            <div class="form-group">
                                                <label class="col-md-4" for="password2">Confirm</label>
                                                <div class="col-md-8">
                                                    <input type="password" class="form-control" id="password2" value="password">
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <br />

                                            <div class="form-group">

                                                <div class="col-md-offset-4 col-md-8">
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                    <button class="btn btn-default">Cancel</button>
                                                </div>
                                            </div> <!-- /form-actions -->
                                        </fieldset>
                                    </form>
                                </div>

                                <div class="tab-pane" id="academic">
                                    <form id="edit-profile2" class="form-horizontal col-md-8">
                                        <fieldset>


                                            <div class="form-group">
                                                <label class="col-md-4" for="Certificate">Highest Academic Award</label>
                                                <div class="col-md-8">
                                                    <select class="form-control" id="certificate" name="certiticate">
                                                        <option value="High School">High School</option>
                                                        <option value="Polytechnic">Polytectnic</option>
                                                        <option value="College">College</option>
                                                        <option value="Undergratuate">Undergratuate</option>
                                                        <option value="Masters">Masters</option>
                                                        <option value="Phd">Phd</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <hr />

                                            <div class="form-group">
                                                <label class="col-md-4" for="accountusername">Instutution Name</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="instituiton1" class="form-control" id="Institution" value="" placeholder="Instutution Name">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4" for="country"> Country </label>
                                                <div class="col-md-8">
                                                    <select class="form-control" id="country" name="country">
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
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4" for="certificate1">Certificate </label>
                                                <div class="col-md-8">
                                                    <input type="file" id="exampleInputFile" name="certificate1">
                                                    <p class="help-block">Maximum 5 mb file upload</p>
                                                </div>
                                            </div>

                                            <hr />

                                            <div class="form-group">
                                                <label class="col-md-4" for="accountusername">Instutution Name 2</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="instituiton2" class="form-control" id="Institution" value="" placeholder="Instutution Name">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4" for="country"> Country </label>
                                                <div class="col-md-8">
                                                    <select class="form-control" id="country" name="country">
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
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4" for="certificate2">Certificate </label>
                                                <div class="col-md-8">
                                                    <input type="file" id="exampleInputFile" name="certificate2">
                                                    <p class="help-block">Maximum 5 mb file upload</p>
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="form-group">
                                                <label class="col-md-4" for="certificate2">ID/ Passport  </label>
                                                <div class="col-md-8">
                                                    <input type="file" id="exampleInputFile" name="id_passport">
                                                    <p class="help-block">Maximum 5 mb file upload</p>
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="form-group">
                                                <label class="col-md-4" for="accountadvanced">If other Academic Qualification </label>
                                                <div class="col-md-8">
                                                    <input type="text" name="instituiton_name" class="form-control" id="Institution" value="" placeholder="Other Qualification">
                                                </div>
                                            </div>

                                            <hr />

                                            <div class="form-group">
                                                <div class="col-md-offset-4 col-md-8">
                                                    <button type="submit" class="btn btn-primary">Save Progress</button> <button class="btn btn-default">Cancel</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>

                                <div class="tab-pane" id="employement">
                                    <form id="edit-profile2" class="form-horizontal col-md-8">
                                        <fieldset>


                                            <div class="form-group">
                                                <label class="col-md-4" for="accounttype">Employement Type</label>
                                                <div class="col-md-8">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="accounttype" value="option1" checked="checked" id="accounttype">
                                                            Employeed
                                                        </label>
                                                    </div>

                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="accounttype" value="option2">
                                                            Self Employed
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>

                                            <hr>
                                            <p class="help-block"> If Self employed fill below</p>

                                            <h4>Self Employeed Info </h4>

                                            <hr />

                                            <div class="form-group">
                                                <label class="col-md-4" for="industry">Industry</label>
                                                <div class="col-md-8">
                                                    <select class="form-control" id="industry" name="industry">
                                                        <option value="Academic">Academic</option>
                                                        <option value="Media">Media</option>
                                                        <option value="Finance">Finance</option>
                                                        <option value="Colsultation">Colsultation</option>
                                                        <option value="IT">IT</option>
                                                        <option value="Engineering">Engineering</option>
                                                        <option value="Hospitality">Hospitality</option>
                                                        <option value="Government">Governance</option>
                                                        <option value="Medical">Medical</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4" for="duration">Company Name</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="duration" value="" name="company_name">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4" for="duration">Position</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="duration" value="" name="sposition">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4" for="duration">Duration</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="accountpassword" value="" name="sduration" placeholder="eg 3 months, 2 years">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4" for="duration">Address</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="accountpassword" value="" name="sduration" placeholder="eg 25710 - 01000 Nairobi, Kenya">
                                                </div>
                                            </div>

                                            <hr>
                                            <p class="help-block"> If Previously employed fill below</p>

                                            <h4>Employement Info 1 </h4>

                                            <hr />

                                            <div class="form-group">
                                                <label class="col-md-4" for="industry">Industry</label>
                                                <div class="col-md-8">
                                                    <select class="form-control" id="industry" name="industry">
                                                        <option value="Academic">Academic</option>
                                                        <option value="Media">Media</option>
                                                        <option value="Finance">Finance</option>
                                                        <option value="Colsultation">Colsultation</option>
                                                        <option value="IT">IT</option>
                                                        <option value="Engineering">Engineering</option>
                                                        <option value="Hospitality">Hospitality</option>
                                                        <option value="Government">Governance</option>
                                                        <option value="Medical">Medical</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4" for="emailserver">Employer Name</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="emailserver" value="" name="employer1" placeholder="Employer Name">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4" for="duration">Position</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="duration" value="" name="position1" placeholder="Position">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4" for="duration">Duration</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="accountpassword" value="" name="duration1" placeholder="eg 3 months, 2 years">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4" for="duration">Address</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="address1" value="" name="address1" placeholder="eg 25710 - 01000 Nairobi, Kenya">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4" for="duration">Referee Name</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="accountpassword" value="" name="referee1" placeholder="Referee Full name">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4" for="duration">Referee Contact</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="accountpassword" value="" name="rContact1" placeholder="eg 0705000000">
                                                </div>
                                            </div>

                                            <h4>Employement Info 2 </h4>

                                            <hr />

                                            <div class="form-group">
                                                <label class="col-md-4" for="industry">Industry</label>
                                                <div class="col-md-8">
                                                    <select class="form-control" id="industry" name="industry">
                                                        <option value="Academic">Academic</option>
                                                        <option value="Media">Media</option>
                                                        <option value="Finance">Finance</option>
                                                        <option value="Colsultation">Colsultation</option>
                                                        <option value="IT">IT</option>
                                                        <option value="Engineering">Engineering</option>
                                                        <option value="Hospitality">Hospitality</option>
                                                        <option value="Government">Governance</option>
                                                        <option value="Medical">Medical</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4" for="emailserver">Employer Name</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="emailserver" value="" name="employer1" placeholder="Employer Name">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4" for="duration">Position</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="position" value="" name="position1" placeholder="Position">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4" for="duration">Duration</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="duration" value="" name="duration1" placeholder="eg 3 months, 2 years">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4" for="duration">Address</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="accountpassword" value="" name="address2" placeholder="eg 25710 - 01000 Nairobi, Kenya">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4" for="duration">Referee Name</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="referee2" value="" name="referee2" placeholder=" Referee Full name">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4" for="duration">Referee Contact</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="rContact2" value="" name="rContact2" placeholder="eg 0705000000">
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="form-group">
                                                <div class="col-md-offset-4 col-md-8">
                                                    <button type="submit" class="btn btn-primary">Save Progress</button> <button class="btn btn-default">Cancel</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>

                                <div class="tab-pane" id="contact">
                                    <form id="edit-profile2" class="form-horizontal col-md-8">
                                        <fieldset>

                                            <div class="form-group">
                                                <label class="col-md-4" for="duration">Email</label>
                                                <div class="col-md-8">
                                                    <input type="email" class="form-control" id="email" value="" name="default_email" placeholder="Email" >
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4" for="duration">Referee Contact</label>
                                                <div class="col-md-8">
                                                    <input type="email" class="form-control" id="second_email" value="" name="second_email" placeholder="Alternate Email">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4" for="accountusername">Phone</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="phone" value="" name="phone" placeholder="Phone eg. 0705000000">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4" for="duration">Zip Code</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="zip_code" value="" name="zip_code" placeholder=" eg. 254">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4" for="duration">Address 1 </label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="address" value="" name="address1" placeholder="eg. 22510 Nairobi, Kenya">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4" for="duration">Address 2</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="address" value="" name="adddress2" placeholder="eg. 22510 Nairobi, Kenya">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-offset-4 col-md-8">
                                                    <button type="submit" class="btn btn-primary">Save</button> <button class="btn btn-default">Cancel</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>

                                <div class="tab-pane" id="tax">
                                    <form id="edit-profile2" class="form-horizontal col-md-8">
                                        <fieldset>

                                            <div class="form-group">
                                                <label class="col-md-4" for="duration">KRA Number</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id=kra" value="" name="kra" placeholder="KRA Number">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4" for="duration">NHIF Number</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="nhif" value="" name="nhif" placeholder="NHIF Number">
                                                </div>
                                            </div>

                                            <h3 class="alert-warning"> Others </h3>
                                            <p class="help-block">If not just put N/A</p>
                                            <hr>

                                            <div class="form-group">
                                                <label class="col-md-4" for="duration">NSSF</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="nssf" value="" name="nssf" placeholder="">
                                                </div>
                                            </div>

                                            <h3 class="alert-warning"> Insuarance Cover </h3>
                                            <p class="help-block">If not just put N/A</p>
                                            <hr>

                                            <div class="form-group">
                                                <label class="col-md-4" for="duration">Insuarance Company</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="insuarance_company" value="" name="insuarance_company" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4" for="duration">Insuarance Type</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="insuarance" value="" name="insuarance" placeholder="eg Medical Cover">
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="form-group">
                                                <div class="col-md-offset-4 col-md-8">
                                                    <button type="submit" class="btn btn-primary">Save Progress</button> <button class="btn btn-default">Cancel</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div> <!-- /widget-content -->

                </div> <!-- /widget -->

            </div> <!-- /span8 -->

            <div class="col-sm-3"><!--left col-->
                <div class="panel panel-default">
                    <div class="panel-heading"> Quick Shortcuts <i class="fa fa-link fa-1x"></i></div>
                    <ul class="list-group">
                        <li class="list-group-item text-right"><span class="pull-left"><strong>Joined :</strong></span> <?php echo $user_data['created']; ?></li>
                        <li class="list-group-item text-right"><span class="pull-left"><strong>Role :</strong></span> <?php echo $user_data['role']; ?></li>
                        <li class="list-group-item text-right"><span class="pull-left"><strong>Full name :</strong></span> Ivan J Kuria</li>

                    </ul>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading"> Quick Shortcuts <i class="fa fa-link fa-1x"></i></div>
                    <ul class="list-group">
                        <li class="list-group-item text-right"><span class="pull-left"><strong>Status</strong></span> 70% Complete</li>
                        <li class="list-group-item text-right"><span class="pull-left"><strong>Notifications</strong></span> <?php echo $user_data['role']; ?></li>
                        <li class="list-group-item text-right"><span class="pull-left"><strong>Status</strong></span> Waiting </li>
                    </ul>
                </div>

            </div> <!-- /row -->

        </div> <!-- /container -->

    </div> <!-- /main -->

<?php include '../includes/footer.php'; ?>