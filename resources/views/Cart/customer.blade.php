
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Get A Price Quote | HOME OF APPAREL</title>
<link href="{{asset('sport/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('sport/css/main.css')}}" rel="stylesheet">
<link href="{{asset('sport/css/dropdown.css')}}" rel="stylesheet">

</head>

<body>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<!-- For Loading  -->			
  <div id="loader-wrapper">
	    <div id="loader"></div>

			<div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

</div>
<aside id="sticky-social">
    <ul>
        <li><a href="https://www.facebook.com/hoapparel.pk" class="entypo-facebook" target="_blank"><span>Facebook</span></a></li>
        <li><a href="#" class="entypo-twitter" target="_blank"><span>Twitter</span></a></li>
        <li><a href="#" class="entypo-gplus" target="_blank"><span>Google+</span></a></li>
        <li><a href="#" class="entypo-linkedin" target="_blank"><span>LinkedIn</span></a></li>
        <li><a href="#" class="entypo-instagrem" target="_blank"><span>Instagram</span></a></li>

    </ul>
</aside>	
<div class="header">
<div class="top_logo wow lightSpeedIn"data-wow-delay="1.6s">
	<div class="container">
    	
            
        </div>
    </div>








</div>


<div class="header">
 <div class="container">
   <div class="row">
     <div class="col-lg-3 col-md-3 col-sm-0">
     <div class="logo wow fadeInDown"  data-wow-delay="0.5s"> <a href="index.php"><img src="images/logo.png" class="img-responsive"></a>
     </div>
     </div>
      
       <div class="col-lg-9 col-md-9 col-sm-9">
       <div class="row">
        	
<div class="col-lg-4 col-md-4 col-sm-4">
</div>
<div class="col-lg-5 col-md-6 col-sm-6">
</div>
            
            
            <div class="col-lg-3 col-md-2 col-sm-2">
            	<div class="search_con wow fadeInRight" data-wow-delay="1s">
                	<form action="search.php" method="post">
                    <div class="input-group">
                    <input type="text" class="form-control" name="tsearch" placeholder="         Search any product" style=" font-size:11px;">
                    <span class="input-group-btn">
                    <button class="btn btn-default" style=" background-color:none;" type="button"><li class="glyphicon glyphicon-search"></li></button>
                    </span>
                    </div>
                    </form>
            
            </div>
                
                <div class="addbasket  wow fadeInRight" data-wow-delay="1.3s">
<a href="basket.php">                <img src="{{asset('sport/images/basket.png')}}" class="img-responsive zo2 ">
</a>                </div>
                </div>
            </div>
      @include('Partials.navbar')
       
       </div>
   </div>
 </div>
</div><div class="main_bgg">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12">
            	<div class="content_head">Get A Price Quote</div>
				<div class="row">
                	<div class="col-md-12">
                        <form name="frm_quote" id="frm_quote" method="post" action="{{route('order.submit')}}" onSubmit="javascript:return chk_quote();">
                        {{csrf_field()}}
                        <input name="name" type="text" class="txt_id" id="fname" onFocus="this.value='';" onBlur="javascript:if(this.value=='')this.value='Enter Your Name';" value="Enter Your Name">
                        <input name="address" type="text" class="txt_id" id="address1" size="50" onFocus="this.value='';" onBlur="javascript:if(this.value=='')this.value='Enter Your Address 1';" value="Enter Your Address 1">
                       
                        <input name="phone" type="text" class="txt_id" id="phone" size="30" onFocus="this.value='';" onBlur="javascript:if(this.value=='')this.value='Enter Your Phone Number';" value="Enter Your Phone Number">
                       
                       
                        <div class="quote_request"><input name="email" type="text" class="txt_id" id="email" size="30" onFocus="this.value='';" onBlur="javascript:if(this.value=='')this.value='Enter Your Email Address';" value="Enter Your Email Address"></div>
                        <select name="country" id="country" class="txt_id">
                        <option value="">Select Country</option>
                                                <option value="Afghanistan"> Afghanistan</option>
                                                <option value="Albania"> Albania</option>
                                                <option value="Algeria"> Algeria</option>
                                                <option value="Andorra"> Andorra</option>
                                                <option value="Angola"> Angola</option>
                                                <option value="Antigua and Barbuda"> Antigua and Barbuda</option>
                                                <option value="Argentina"> Argentina</option>
                                                <option value="Armenia"> Armenia</option>
                                                <option value="Australia"> Australia</option>
                                                <option value="Austria"> Austria</option>
                                                <option value="Azerbaijan"> Azerbaijan</option>
                                                <option value="Bahrain"> Bahrain</option>
                                                <option value="Bangladesh"> Bangladesh</option>
                                                <option value="Barbados"> Barbados</option>
                                                <option value="Belarus"> Belarus</option>
                                                <option value="Belgium"> Belgium</option>
                                                <option value="Belize"> Belize</option>
                                                <option value="Benin"> Benin</option>
                                                <option value="Bhutan"> Bhutan</option>
                                                <option value="Bolivia"> Bolivia</option>
                                                <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina</option>
                                                <option value="Botswana"> Botswana</option>
                                                <option value="Brazil"> Brazil</option>
                                                <option value="Brunei"> Brunei</option>
                                                <option value="Bulgaria"> Bulgaria</option>
                                                <option value="Burkina Faso"> Burkina Faso</option>
                                                <option value="Burundi"> Burundi</option>
                                                <option value="Cambodia"> Cambodia</option>
                                                <option value="Cameroon"> Cameroon</option>
                                                <option value="Canada"> Canada</option>
                                                <option value="Cape Verde"> Cape Verde</option>
                                                <option value="Central African Republic"> Central African Republic</option>
                                                <option value="Chad"> Chad</option>
                                                <option value="Chile"> Chile</option>
                                                <option value="China"> China</option>
                                                <option value="Colombia"> Colombia</option>
                                                <option value="Comoros"> Comoros</option>
                                                <option value="Costa Rica"> Costa Rica</option>
                                                <option value="Cote d'Ivoire"> Cote d'Ivoire</option>
                                                <option value="Croatia"> Croatia</option>
                                                <option value="Cuba"> Cuba</option>
                                                <option value="Cyprus"> Cyprus</option>
                                                <option value="Czech Republic"> Czech Republic</option>
                                                <option value="Denmark"> Denmark</option>
                                                <option value="Djibouti"> Djibouti</option>
                                                <option value="Dominica"> Dominica</option>
                                                <option value="Dominican Republic"> Dominican Republic</option>
                                                <option value="East Timor"> East Timor</option>
                                                <option value="Ecuador"> Ecuador</option>
                                                <option value="Egypt"> Egypt</option>
                                                <option value="El Salvador"> El Salvador</option>
                                                <option value="Equatorial Guinea"> Equatorial Guinea</option>
                                                <option value="Eritrea"> Eritrea</option>
                                                <option value="Estonia"> Estonia</option>
                                                <option value="Ethiopia"> Ethiopia</option>
                                                <option value="Federated States of Micronesia"> Federated States of Micronesia</option>
                                                <option value="Fiji"> Fiji</option>
                                                <option value="Finland"> Finland</option>
                                                <option value="France"> France</option>
                                                <option value="Gabon"> Gabon</option>
                                                <option value="Georgia"> Georgia</option>
                                                <option value="Germany"> Germany</option>
                                                <option value="Ghana"> Ghana</option>
                                                <option value="Greece"> Greece</option>
                                                <option value="Grenada"> Grenada</option>
                                                <option value="Guatemala"> Guatemala</option>
                                                <option value="Guinea"> Guinea</option>
                                                <option value="Guinea-Bissau"> Guinea-Bissau</option>
                                                <option value="Guyana"> Guyana</option>
                                                <option value="Haiti"> Haiti</option>
                                                <option value="Honduras"> Honduras</option>
                                                <option value="Hungary"> Hungary</option>
                                                <option value="Iceland"> Iceland</option>
                                                <option value="India"> India</option>
                                                <option value="Indonesia"> Indonesia</option>
                                                <option value="Iran"> Iran</option>
                                                <option value="Iraq"> Iraq</option>
                                                <option value="Ireland"> Ireland</option>
                                                <option value="Italy"> Italy</option>
                                                <option value="Jamaica"> Jamaica</option>
                                                <option value="Japan"> Japan</option>
                                                <option value="Jordan"> Jordan</option>
                                                <option value="Kazakhstan"> Kazakhstan</option>
                                                <option value="Kenya"> Kenya</option>
                                                <option value="Kiribati"> Kiribati</option>
                                                <option value="Kosovo"> Kosovo</option>
                                                <option value="Kuwait"> Kuwait</option>
                                                <option value="Kyrgyzstan"> Kyrgyzstan</option>
                                                <option value="Laos"> Laos</option>
                                                <option value="Latvia"> Latvia</option>
                                                <option value="Lebanon"> Lebanon</option>
                                                <option value="Lesotho"> Lesotho</option>
                                                <option value="Liberia"> Liberia</option>
                                                <option value="Libya"> Libya</option>
                                                <option value="Liechtenstein"> Liechtenstein</option>
                                                <option value="Lithuania"> Lithuania</option>
                                                <option value="Luxembourg"> Luxembourg</option>
                                                <option value="Macedonia"> Macedonia</option>
                                                <option value="Madagascar"> Madagascar</option>
                                                <option value="Malawi"> Malawi</option>
                                                <option value="Malaysia"> Malaysia</option>
                                                <option value="Maldives"> Maldives</option>
                                                <option value="Mali"> Mali</option>
                                                <option value="Malta"> Malta</option>
                                                <option value="Marshall Islands"> Marshall Islands</option>
                                                <option value="Mauritania"> Mauritania</option>
                                                <option value="Mauritius"> Mauritius</option>
                                                <option value="Mexico"> Mexico</option>
                                                <option value="Moldova"> Moldova</option>
                                                <option value="Monaco"> Monaco</option>
                                                <option value="Mongolia"> Mongolia</option>
                                                <option value="Montenegro"> Montenegro</option>
                                                <option value="Morocco"> Morocco</option>
                                                <option value="Mozambique"> Mozambique</option>
                                                <option value="Myanmar"> Myanmar</option>
                                                <option value="Namibia"> Namibia</option>
                                                <option value="Nauru"> Nauru</option>
                                                <option value="Nepal"> Nepal</option>
                                                <option value="Netherlands"> Netherlands</option>
                                                <option value="New Zealand"> New Zealand</option>
                                                <option value="Nicaragua"> Nicaragua</option>
                                                <option value="Niger"> Niger</option>
                                                <option value="Nigeria"> Nigeria</option>
                                                <option value="North Korea"> North Korea</option>
                                                <option value="Norway"> Norway</option>
                                                <option value="Oman"> Oman</option>
                                                <option value="Pakistan"> Pakistan</option>
                                                <option value="Palau"> Palau</option>
                                                <option value="Panama"> Panama</option>
                                                <option value="Papua New Guinea"> Papua New Guinea</option>
                                                <option value="Paraguay"> Paraguay</option>
                                                <option value="Peru"> Peru</option>
                                                <option value="Philippines"> Philippines</option>
                                                <option value="Poland"> Poland</option>
                                                <option value="Portugal"> Portugal</option>
                                                <option value="Qatar"> Qatar</option>
                                                <option value="Republic of the Congo"> Republic of the Congo</option>
                                                <option value="Romania"> Romania</option>
                                                <option value="Russia"> Russia</option>
                                                <option value="Rwanda"> Rwanda</option>
                                                <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia"> Saint Lucia</option>
                                                <option value="Saint Vincent"> Saint Vincent</option>
                                                <option value="Samoa"> Samoa</option>
                                                <option value="San Marino"> San Marino</option>
                                                <option value="Sao Tome and Principe"> Sao Tome and Principe</option>
                                                <option value="Saudi Arabia"> Saudi Arabia</option>
                                                <option value="Senegal"> Senegal</option>
                                                <option value="Serbia"> Serbia</option>
                                                <option value="Seychelles"> Seychelles</option>
                                                <option value="Sierra Leone"> Sierra Leone</option>
                                                <option value="Singapore"> Singapore</option>
                                                <option value="Slovakia"> Slovakia</option>
                                                <option value="Slovenia"> Slovenia</option>
                                                <option value="Solomon Islands"> Solomon Islands</option>
                                                <option value="Somalia"> Somalia</option>
                                                <option value="South Africa"> South Africa</option>
                                                <option value="South Korea"> South Korea</option>
                                                <option value="Spain"> Spain</option>
                                                <option value="Sri Lanka"> Sri Lanka</option>
                                                <option value="Sudan"> Sudan</option>
                                                <option value="Suriname"> Suriname</option>
                                                <option value="Swaziland"> Swaziland</option>
                                                <option value="Sweden"> Sweden</option>
                                                <option value="Switzerland"> Switzerland</option>
                                                <option value="Syria"> Syria</option>
                                                <option value="Taiwan"> Taiwan</option>
                                                <option value="Tajikistan"> Tajikistan</option>
                                                <option value="Tanzania"> Tanzania</option>
                                                <option value="Thailand"> Thailand</option>
                                                <option value="The Bahamas"> The Bahamas</option>
                                                <option value="The Gambia"> The Gambia</option>
                                                <option value="Togo"> Togo</option>
                                                <option value="Tonga"> Tonga</option>
                                                <option value="Trinidad and Tobago"> Trinidad and Tobago</option>
                                                <option value="Tunisia"> Tunisia</option>
                                                <option value="Turkey"> Turkey</option>
                                                <option value="Turkmenistan"> Turkmenistan</option>
                                                <option value="Tuvalu"> Tuvalu</option>
                                                <option value="Uganda"> Uganda</option>
                                                <option value="Ukraine"> Ukraine</option>
                                                <option value="United Arab Emirates"> United Arab Emirates</option>
                                                <option value="United Kingdom"> United Kingdom</option>
                                                <option value="United States of America"> United States of America</option>
                                                <option value="Uruguay"> Uruguay</option>
                                                <option value="Uzbekistan"> Uzbekistan</option>
                                                <option value="Vanuatu"> Vanuatu</option>
                                                <option value="Vatican City"> Vatican City</option>
                                                <option value="Venezuela"> Venezuela</option>
                                                <option value="Vietnam"> Vietnam</option>
                                                <option value="Yemen"> Yemen</option>
                                                <option value="Zambia"> Zambia</option>
                                                <option value="Zimbabwe"> Zimbabwe</option>
                                                </select>
                        <select name="ptype" class="txt_id" id="ptype">
                        <option value="-">~ Select ~</option>
                        <option value="FOB">FOB</option>
                        <option value="C&amp;F">C&amp;F</option>
                        <option value="CIF">CIF</option>
                        </select>
                        <select name="stype" class="txt_id" id="stype">
                        <option value="-">~ Select ~</option>
                        <option value="BY SEA">BY SEA</option>
                        <option value="BY AIR">BY AIR</option>
                        <option value="DHL">DHL</option>
                        </select>
                        <textarea name="message" cols="50" rows="5" class="txt_id" id="message" onFocus="this.value='';" onBlur="javascript:if(this.value=='')this.value='Enter Your Message';" value="Enter Your Message">Enter Your Message</textarea>
                                                <input name="secure" type="text" class="txt_id" id="secure" size="5">
                        <div class="content_text"><strong><font color="#000000">B0E719</strong></div>
                        <input name="Submit" type="submit" class="btn btn-danger" value="Submit Quote" style="margin-bottom:20px;">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('Partials.footer')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
        <script src="js/index.js"></script>
<script src="chk_frm.js"></script>
<link rel="stylesheet" href="css/animate.min.css">
<script src="js/wow.min.js"></script>
<script> new WOW().init(); </script>
	<script>
	$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, false).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, false).delay(200).fadeOut(500);
});
	</script>
<link rel="stylesheet" href="css/animate.min.css">
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
<script src="js/main.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/animate.min.css">
</body>
</html>