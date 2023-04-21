<?php session_start(); ?>
<html>
	
<head>
<link rel="stylesheet" type="text/css" href="http://www.circu.net/css/style.css" />
<script>var tracker=getUrl();</script>
</head>

<body>
<form method="post" class="form-popup form-parsley" action="/includes/process/process_enquiry_price.php" data-validate="parsley">
	
<?php 
	$name_piece = $_GET['name_piece'];
    $id = $_GET['id'];  
?>

	
    <div class="form-popup-header">
        <h1>REQUEST PRICE</h1> 
        <h3><?php echo $name_piece ?></h3>
    </div>
		
    <input type="hidden" name="name_piece" value="<?php echo $name_piece ?>"/>
    <input type="hidden" name="id_product" value="<?php echo $id ?>">
    <input type="hidden" name="origin" class="origin"/>
    <input type="hidden" name="referrer" class="referrer"/>
    <input type="hidden" name="lead_path" class="lead_path"/>
    <input type="hidden" name="request_action" value="Request Price"/>
    <input type="hidden" name="form_name" value="product">
    <input type="text" name="interested" class="interested">
	
    <div class="input-block">
	<span class="txt-request">Name:*</span>
	<input type="text" name="name" class="name" data-parsley-required="true" data-parsley-trigger="change"/>
    </div>

    <div class="input-block">
    <span class="txt-request">Email:*</span>
    <input type="email" name="email" class="email" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change"/>
    </div>
	
    <div class="input-block">
	<span class="txt-request">Phone:*</span>
	<input type="text" name="phone" class="phone" data-parsley-required="true"/>
	</div>
	
	<div class="input-block">
    <span class="txt-request">Occupation:*</span>
	<select name="occupation" class="occupation" data-parsley-required="true">
    	<option></option>
        <option value="Agent">Agent</option>
        <option value="Architect">Architect</option>
        <option value="Blog">Blog</option>
        <option value="Contractor">Contractor</option>
        <option value="Distributor">Distributor</option>
        <option value="Final Buyer">Final Buyer</option>
        <option value="Freelancer">Freelancer</option>
        <option value="Furniture store">Furniture store</option>
        <option value="Hotel">Hotel</option>
        <option value="Interior Designer">Interior Designer</option>
        <option value="Interior Designer/Architect">Interior Designer/Architect</option>
        <option value="Magazine">Magazine</option>
        <option value="Newspaper">Newspaper</option>
        <option value="Online Store">Online Store</option>
        <option value="Publisher">Publisher</option>
        <option value="Radio">Radio</option>
        <option value="Restaurant">Restaurant</option>
        <option value="TV">TV</option>
        <option value="Other">Other</option>
   	</select>
    </div>

    <div class="input-block">
    <span class="txt-request">Company:*</span>
    <input type="text" name="company" class="company" data-parsley-required="true"/>
    </div>
	
    <div class="input-block-half" style="float: left;">
    <span class="txt-request">Country:*</span>
	<select name="country" class="country" data-parsley-required="true">
    	<option></option>
        <option value="Afghanistan">Afghanistan</option>
        <option value="Åland Islands">Åland Islands</option>
        <option value="Albania">Albania</option>
        <option value="Algeria">Algeria</option>
       	<option value="American Samoa">American Samoa</option>
        <option value="Andorra">Andorra</option>
        <option value="Angola">Angola</option>
        <option value="Anguilla">Anguilla</option>
        <option value="Antarctica">Antarctica</option>
        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
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
        <option value="Bolivia">Bolivia, Plurinational State of</option>
        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
        <option value="Botswana">Botswana</option>
        <option value="Bouvet Island">Bouvet Island</option>
        <option value="Brazil">Brazil</option>
        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
        <option value="Brunei">Brunei Darussalam</option>
        <option value="Bulgaria">Bulgaria</option>
        <option value="Burkina Faso">Burkina Faso</option>
        <option value="Burundi">Burundi</option>
       	<option value="Cambodia">Cambodia</option>
        <option value="Cameroon">Cameroon</option>
        <option value="Canada">Canada</option>
        <option value="Cape Verde">Cape Verde</option>
        <option value="Cayman Islands">Cayman Islands</option>
        <option value="Central African Republic">Central African Republic</option>
        <option value="Chad">Chad</option>
        <option value="Chile">Chile</option>
        <option value="China">China</option>
        <option value="Christmas Island">Christmas Island</option>
        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
        <option value="Colombia">Colombia</option>
       	<option value="Comoros">Comoros</option>
        <option value="Congo">Congo</option>
        <option value="Congo, The Democratic Republic of the">Congo, The Democratic Republic of the</option>
        <option value="Cook Islands">Cook Islands</option>
        <option value="Costa Rica">Costa Rica</option>
        <option value="Côte D'ivoire">Côte D'ivoire</option>
        <option value="Croatia">Croatia</option>
        <option value="Cuba">Cuba</option>
       	<option value="Curaçao">Curaçao</option>
        <option value="Cyprus">Cyprus</option>
        <option value="Czech Republic">Czech Republic</option>
        <option value="Denmark">Denmark</option>
        <option value="Djibouti">Djibouti</option>
       	<option value="Dominica">Dominica</option>
        <option value="Dominican Republic">Dominican Republic</option>
        <option value="Ecuador">Ecuador</option>
        <option value="Egypt">Egypt</option>
        <option value="El Salvador">El Salvador</option>
        <option value="Equatorial Guinea">Equatorial Guinea</option>
        <option value="Eritrea">Eritrea</option>
       	<option value="Estonia">Estonia</option>
        <option value="Ethiopia">Ethiopia</option>
        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
        <option value="Faroe Islands">Faroe Islands</option>
        <option value="Fiji">Fiji</option>
        <option value="Finland">Finland</option>
        <option value="France">France</option>
        <option value="French Guiana">French Guiana</option>
        <option value="French Polynesia">French Polynesia</option>
        <option value="French Southern Territories">French Southern Territories</option>
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
        <option value="Guinea-bissau">Guinea-bissau</option>
        <option value="Guyana">Guyana</option>
        <option value="Haiti">Haiti</option>
        <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
        <option value="Honduras">Honduras</option>
        <option value="Hong Kong">Hong Kong</option>
        <option value="Hungary">Hungary</option>
        <option value="Iceland">Iceland</option>
        <option value="India">India</option>
        <option value="Indonesia">Indonesia</option>
        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
        <option value="Iraq">Iraq</option>
        <option value="Ireland">Ireland</option>
        <option value="Isle of Man">Isle of Man</option>
        <option value="Israel">Israel</option>
       	<option value="Italy">Italy</option>
        <option value="Jamaica">Jamaica</option>
        <option value="Japan">Japan</option>
        <option value="Jersey">Jersey</option>
        <option value="Jordan">Jordan</option>
        <option value="Kazakhstan">Kazakhstan</option>
        <option value="Kenya">Kenya</option>
        <option value="Kiribati">Kiribati</option>
        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
        <option value="Korea, Republic of">Korea, Republic of</option>
        <option value="Kuwait">Kuwait</option>
        <option value="Kyrgyzstan">Kyrgyzstan</option>
        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
        <option value="Latvia">Latvia</option>
        <option value="Lebanon">Lebanon</option>
        <option value="Lesotho">Lesotho</option>
        <option value="Liberia">Liberia</option>
       	<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
        <option value="Liechtenstein">Liechtenstein</option>
        <option value="Lithuania">Lithuania</option>
        <option value="Luxembourg">Luxembourg</option>
        <option value="Macao">Macao</option>
        <option value="Macedonia">Macedonia</option>
       	<option value="Madagascar">Madagascar</option>
        <option value="Malawi">Malawi</option>
        <option value="Malaysia">Malaysia</option>
       	<option value="Maldives">Maldives</option>
        <option value="Mali">Mali</option>
        <option value="Malta">Malta</option>
        <option value="Marshall Islands">Marshall Islands</option>
        <option value="Martinique">Martinique</option>
        <option value="Mauritania">Mauritania</option>
        <option value="Mauritius">Mauritius</option>
        <option value="Mayotte">Mayotte</option>
        <option value="Mexico">Mexico</option>
        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
        <option value="Moldova, Republic of">Moldova, Republic of</option>
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
        <option value="Netherlands">Netherlands</option>
        <option value="Netherlands Antilles">Netherlands Antilles</option>
       	<option value="New Caledonia">New Caledonia</option>
        <option value="New Zealand">New Zealand</option>
        <option value="Nicaragua">Nicaragua</option>
        <option value="Niger">Niger</option>
        <option value="Nigeria">Nigeria</option>
        <option value="Niue">Niue</option>
        <option value="Norfolk Island">Norfolk Island</option>
        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
        <option value="Norway">Norway</option>
        <option value="Oman">Oman</option>
        <option value="Pakistan">Pakistan</option>
        <option value="Palau">Palau</option>
        <option value="Panama">Panama</option>
        <option value="Papua New Guinea">Papua New Guinea</option>
        <option value="Paraguay">Paraguay</option>
        <option value="Peru">Peru</option>
        <option value="Philippines">Philippines</option>
        <option value="Pitcairn">Pitcairn</option>
        <option value="Poland">Poland</option>
        <option value="Portugal">Portugal</option>
        <option value="Puerto Rico">Puerto Rico</option>
       	<option value="Qatar">Qatar</option>
        <option value="Réunion">Réunion</option>
        <option value="Romania">Romania</option>
        <option value="Russian Federation">Russian Federation</option>
        <option value="Rwanda">Rwanda</option>
        <option value="Saint Barthélemy">Saint Barthélemy</option>
        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
        <option value="Saint Lucia">Saint Lucia</option>
        <option value="Saint Martin">Saint Martin</option>
        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
        <option value="Samoa">Samoa</option>
        <option value="San Marino">San Marino</option>
        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
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
        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
        <option value="Swaziland">Swaziland</option>
        <option value="Sweden">Sweden</option>
        <option value="Switzerland">Switzerland</option>
        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
        <option value="Taiwan">Taiwan</option>
        <option value="Tajikistan">Tajikistan</option>
        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
       	<option value="Thailand">Thailand</option>
        <option value="Timor-leste">Timor-leste</option>
        <option value="Togo">Togo</option>
        <option value="Tokelau">Tokelau</option>
        <option value="Tonga">Tonga</option>
        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
        <option value="Tunisia">Tunisia</option>
        <option value="Turkey">Turkey</option>
        <option value="Turkmenistan">Turkmenistan</option>
        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
        <option value="Tuvalu">Tuvalu</option>
        <option value="Uganda">Uganda</option>
        <option value="Ukraine">Ukraine</option>
       	<option value="United Arab Emirates">United Arab Emirates</option>
        <option value="United Kingdom">United Kingdom</option>
        <option value="United States">United States</option>
        <option value="Uruguay">Uruguay</option>
        <option value="Uzbekistan">Uzbekistan</option>
        <option value="Vanuatu">Vanuatu</option>
        <option value="Venezuela">Venezuela</option>
        <option value="Viet Nam">Vietnam</option>
        <option value="Virgin Islands, British">Virgin Islands, British</option>
        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
        <option value="Wallis and Futuna">Wallis and Futuna</option>
       	<option value="Western Sahara">Western Sahara</option>
        <option value="Yemen">Yemen</option>
       	<option value="Zambia">Zambia</option>
        <option value="Zimbabwe">Zimbabwe</option>
   	</select>
    </div>
   	
    <div class="input-block-half" style="float: right;">
   	<span class="txt-request">City:*</span>
	<input type="text" name="city" class="city" data-parsley-required="true"/>
	</div>

    <div class="input-block">
    <span class="txt-request">How did your hear about us?*</span>
    <select name="how_did_you" class="how_did_you" data-parsley-required="true">
        <option></option>
        <option value="Magazine">Magazine</option>
        <option value="Agent">Agent</option>
        <option value="Distributor">Distributor</option>
        <option value="Interior Designer">Interior Designer</option>
        <option value="Architect">Architect</option>
        <option value="Store">Store</option>
        <option value="Online Search">Online Store</option>
        <option value="Online Search">Online Search</option>
        <option value="Website">Website</option>
        <option value="Blog">Blog</option>
        <option value="Newsletter">Newsletter</option>
        <option value="Maison & Objet">Maison & Objet</option>
        <option value="iSaloni">iSaloni</option>
        <option value="Facebook">Facebook</option>
        <option value="Twitter">Twitter</option>
        <option value="Pinterest">Pinterest</option>
        <option value="Instagram">Instagram</option>
        <option value="LinkedIn">LinkedIn</option>
        <option value="Youtube">Youtube</option>
        <option value="Other">Other</option>
    </select>
    </div>

    <div class="input-block">
   	<span class="txt-request">Voucher Code:*</span>
	<input type="text" name="voucher_code" class="voucher_code"/>
	</div>
	
	<button type="submit" id="request-info-tag" class="btn-request-piece">REQUEST PRICE</button>

</form>

<script type="text/javascript">
 
		document.getElementById("request-info-tag").onclick = function() 
		{ga('send', 'event', 'Botão', 'Clicar', 'RequestPrice')};
	</script>

<script type="text/javascript" src="/js/parsley.min.js"></script>
<script type="text/javascript" src="/js/functions.js"></script>
<script type="text/javascript">
  $(".origin").val(tracker.url_origin);
  $(".referrer").val(tracker.referrer);
  $(".lead_path").val(tracker.flow);
</script>
</body>
</html>