<?php include('header.php'); ?>

<section class="bg-gray pt-100 pb-100">
	<div class="container">
		<!-- TÍTULO: DATOS PRESONALES -->
		<div class="row mb-md-5 mb-4">
			<div class="d-flex flex-wrap align-items-center mb-md-5">
				<div class="col-md-auto col-12 pl-3 pb-md-0 pb-4">
					<div class="cir-120px border-979797-1px bg-img" style="background-image: url('img/bg-referidos1.png');"></div>
				</div>
				<div class="col-md-auto col-12 pl-md-5 pl-3 pb-md-0 pb-4">
					<p class="txt36 c-blue is-bold">Datos personales</p>
				</div>
			</div>
			<div class="col-12">
				<p class="c-dark-blue max-w-760">Ingresa tus datos como están escritos en tus documentos oficiales. Recuerda que por el momento el servicio sólo está disponible para personas con nacionalidad mexicana.</p>
			</div>
		</div>

		<!-- NAVEGACIÓN -->
		<div class="nav-pills bg-white border-50px d-inline-block mb-md-5 mb-4">
			<div class="d-flex">
				<div class="pill visited border-50px is-bold p-2 txt24">
					<a href="formulario-inversion-1.php"><span class="cir-30x30 bg-dark-blue c-white mr-2">1</span> Registro</a>
				</div>
				<div class="pill active border-50px is-bold p-2 txt24">
					<a href="formulario-inversion-2.php"><span class="cir-30x30 bg-dark-blue c-white mr-2">2</span> Tus Datos</a>
				</div>
				<div class="pill disabled border-50px is-bold p-2 txt24">
					<a href="formulario-inversion-3.php"><span class="cir-30x30 bg-dark-blue c-white mr-2">3</span> Actividad</a>
				</div>
				<div class="pill disabled border-50px is-bold p-2 txt24">
					<a href="formulario-inversion-4.php"><span class="cir-30x30 bg-dark-blue c-white mr-2">4</span> Beneficiarios</a>
				</div>
				<div class="pill disabled border-50px is-bold p-2 txt24">
					<a href="formulario-inversion-5.php"><span class="cir-30x30 bg-dark-blue c-white mr-2">5</span> Documentación</a>
				</div>
			</div>
		</div>

		<!-- FORMULARIO -->
		<form class="row needs-validation" novalidate>
			<!-- TUS DATOS -->
			<div class="col-12 mb-md-5 mb-4">
				<p class="c-dark-blue txt36 is-bold">Tus Datos</p>
			</div>
			<div class="d-flex flex-wrap align-items-end w-100 mb-lg-3">
				<div class="col-lg-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">País de Nacimiento</p>
					<select class="form-control txt18 has-gray-placeholder" name="" required>
						<option value="">País de Nacimiento</option>
						<option value="AF">Afghanistan</option>
						<option value="AX">Åland Islands</option>
						<option value="AL">Albania</option>
						<option value="DZ">Algeria</option>
						<option value="AS">American Samoa</option>
						<option value="AD">Andorra</option>
						<option value="AO">Angola</option>
						<option value="AI">Anguilla</option>
						<option value="AQ">Antarctica</option>
						<option value="AG">Antigua and Barbuda</option>
						<option value="AR">Argentina</option>
						<option value="AM">Armenia</option>
						<option value="AW">Aruba</option>
						<option value="AU">Australia</option>
						<option value="AT">Austria</option>
						<option value="AZ">Azerbaijan</option>
						<option value="BS">Bahamas</option>
						<option value="BH">Bahrain</option>
						<option value="BD">Bangladesh</option>
						<option value="BB">Barbados</option>
						<option value="BY">Belarus</option>
						<option value="BE">Belgium</option>
						<option value="BZ">Belize</option>
						<option value="BJ">Benin</option>
						<option value="BM">Bermuda</option>
						<option value="BT">Bhutan</option>
						<option value="BO">Bolivia, Plurinational State of</option>
						<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
						<option value="BA">Bosnia and Herzegovina</option>
						<option value="BW">Botswana</option>
						<option value="BV">Bouvet Island</option>
						<option value="BR">Brazil</option>
						<option value="IO">British Indian Ocean Territory</option>
						<option value="BN">Brunei Darussalam</option>
						<option value="BG">Bulgaria</option>
						<option value="BF">Burkina Faso</option>
						<option value="BI">Burundi</option>
						<option value="KH">Cambodia</option>
						<option value="CM">Cameroon</option>
						<option value="CA">Canada</option>
						<option value="CV">Cape Verde</option>
						<option value="KY">Cayman Islands</option>
						<option value="CF">Central African Republic</option>
						<option value="TD">Chad</option>
						<option value="CL">Chile</option>
						<option value="CN">China</option>
						<option value="CX">Christmas Island</option>
						<option value="CC">Cocos (Keeling) Islands</option>
						<option value="CO">Colombia</option>
						<option value="KM">Comoros</option>
						<option value="CG">Congo</option>
						<option value="CD">Congo, the Democratic Republic of the</option>
						<option value="CK">Cook Islands</option>
						<option value="CR">Costa Rica</option>
						<option value="CI">Côte d'Ivoire</option>
						<option value="HR">Croatia</option>
						<option value="CU">Cuba</option>
						<option value="CW">Curaçao</option>
						<option value="CY">Cyprus</option>
						<option value="CZ">Czech Republic</option>
						<option value="DK">Denmark</option>
						<option value="DJ">Djibouti</option>
						<option value="DM">Dominica</option>
						<option value="DO">Dominican Republic</option>
						<option value="EC">Ecuador</option>
						<option value="EG">Egypt</option>
						<option value="SV">El Salvador</option>
						<option value="GQ">Equatorial Guinea</option>
						<option value="ER">Eritrea</option>
						<option value="EE">Estonia</option>
						<option value="ET">Ethiopia</option>
						<option value="FK">Falkland Islands (Malvinas)</option>
						<option value="FO">Faroe Islands</option>
						<option value="FJ">Fiji</option>
						<option value="FI">Finland</option>
						<option value="FR">France</option>
						<option value="GF">French Guiana</option>
						<option value="PF">French Polynesia</option>
						<option value="TF">French Southern Territories</option>
						<option value="GA">Gabon</option>
						<option value="GM">Gambia</option>
						<option value="GE">Georgia</option>
						<option value="DE">Germany</option>
						<option value="GH">Ghana</option>
						<option value="GI">Gibraltar</option>
						<option value="GR">Greece</option>
						<option value="GL">Greenland</option>
						<option value="GD">Grenada</option>
						<option value="GP">Guadeloupe</option>
						<option value="GU">Guam</option>
						<option value="GT">Guatemala</option>
						<option value="GG">Guernsey</option>
						<option value="GN">Guinea</option>
						<option value="GW">Guinea-Bissau</option>
						<option value="GY">Guyana</option>
						<option value="HT">Haiti</option>
						<option value="HM">Heard Island and McDonald Islands</option>
						<option value="VA">Holy See (Vatican City State)</option>
						<option value="HN">Honduras</option>
						<option value="HK">Hong Kong</option>
						<option value="HU">Hungary</option>
						<option value="IS">Iceland</option>
						<option value="IN">India</option>
						<option value="ID">Indonesia</option>
						<option value="IR">Iran, Islamic Republic of</option>
						<option value="IQ">Iraq</option>
						<option value="IE">Ireland</option>
						<option value="IM">Isle of Man</option>
						<option value="IL">Israel</option>
						<option value="IT">Italy</option>
						<option value="JM">Jamaica</option>
						<option value="JP">Japan</option>
						<option value="JE">Jersey</option>
						<option value="JO">Jordan</option>
						<option value="KZ">Kazakhstan</option>
						<option value="KE">Kenya</option>
						<option value="KI">Kiribati</option>
						<option value="KP">Korea, Democratic People's Republic of</option>
						<option value="KR">Korea, Republic of</option>
						<option value="KW">Kuwait</option>
						<option value="KG">Kyrgyzstan</option>
						<option value="LA">Lao People's Democratic Republic</option>
						<option value="LV">Latvia</option>
						<option value="LB">Lebanon</option>
						<option value="LS">Lesotho</option>
						<option value="LR">Liberia</option>
						<option value="LY">Libya</option>
						<option value="LI">Liechtenstein</option>
						<option value="LT">Lithuania</option>
						<option value="LU">Luxembourg</option>
						<option value="MO">Macao</option>
						<option value="MK">Macedonia, the former Yugoslav Republic of</option>
						<option value="MG">Madagascar</option>
						<option value="MW">Malawi</option>
						<option value="MY">Malaysia</option>
						<option value="MV">Maldives</option>
						<option value="ML">Mali</option>
						<option value="MT">Malta</option>
						<option value="MH">Marshall Islands</option>
						<option value="MQ">Martinique</option>
						<option value="MR">Mauritania</option>
						<option value="MU">Mauritius</option>
						<option value="YT">Mayotte</option>
						<option value="MX">Mexico</option>
						<option value="FM">Micronesia, Federated States of</option>
						<option value="MD">Moldova, Republic of</option>
						<option value="MC">Monaco</option>
						<option value="MN">Mongolia</option>
						<option value="ME">Montenegro</option>
						<option value="MS">Montserrat</option>
						<option value="MA">Morocco</option>
						<option value="MZ">Mozambique</option>
						<option value="MM">Myanmar</option>
						<option value="NA">Namibia</option>
						<option value="NR">Nauru</option>
						<option value="NP">Nepal</option>
						<option value="NL">Netherlands</option>
						<option value="NC">New Caledonia</option>
						<option value="NZ">New Zealand</option>
						<option value="NI">Nicaragua</option>
						<option value="NE">Niger</option>
						<option value="NG">Nigeria</option>
						<option value="NU">Niue</option>
						<option value="NF">Norfolk Island</option>
						<option value="MP">Northern Mariana Islands</option>
						<option value="NO">Norway</option>
						<option value="OM">Oman</option>
						<option value="PK">Pakistan</option>
						<option value="PW">Palau</option>
						<option value="PS">Palestinian Territory, Occupied</option>
						<option value="PA">Panama</option>
						<option value="PG">Papua New Guinea</option>
						<option value="PY">Paraguay</option>
						<option value="PE">Peru</option>
						<option value="PH">Philippines</option>
						<option value="PN">Pitcairn</option>
						<option value="PL">Poland</option>
						<option value="PT">Portugal</option>
						<option value="PR">Puerto Rico</option>
						<option value="QA">Qatar</option>
						<option value="RE">Réunion</option>
						<option value="RO">Romania</option>
						<option value="RU">Russian Federation</option>
						<option value="RW">Rwanda</option>
						<option value="BL">Saint Barthélemy</option>
						<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
						<option value="KN">Saint Kitts and Nevis</option>
						<option value="LC">Saint Lucia</option>
						<option value="MF">Saint Martin (French part)</option>
						<option value="PM">Saint Pierre and Miquelon</option>
						<option value="VC">Saint Vincent and the Grenadines</option>
						<option value="WS">Samoa</option>
						<option value="SM">San Marino</option>
						<option value="ST">Sao Tome and Principe</option>
						<option value="SA">Saudi Arabia</option>
						<option value="SN">Senegal</option>
						<option value="RS">Serbia</option>
						<option value="SC">Seychelles</option>
						<option value="SL">Sierra Leone</option>
						<option value="SG">Singapore</option>
						<option value="SX">Sint Maarten (Dutch part)</option>
						<option value="SK">Slovakia</option>
						<option value="SI">Slovenia</option>
						<option value="SB">Solomon Islands</option>
						<option value="SO">Somalia</option>
						<option value="ZA">South Africa</option>
						<option value="GS">South Georgia and the South Sandwich Islands</option>
						<option value="SS">South Sudan</option>
						<option value="ES">Spain</option>
						<option value="LK">Sri Lanka</option>
						<option value="SD">Sudan</option>
						<option value="SR">Suriname</option>
						<option value="SJ">Svalbard and Jan Mayen</option>
						<option value="SZ">Swaziland</option>
						<option value="SE">Sweden</option>
						<option value="CH">Switzerland</option>
						<option value="SY">Syrian Arab Republic</option>
						<option value="TW">Taiwan, Province of China</option>
						<option value="TJ">Tajikistan</option>
						<option value="TZ">Tanzania, United Republic of</option>
						<option value="TH">Thailand</option>
						<option value="TL">Timor-Leste</option>
						<option value="TG">Togo</option>
						<option value="TK">Tokelau</option>
						<option value="TO">Tonga</option>
						<option value="TT">Trinidad and Tobago</option>
						<option value="TN">Tunisia</option>
						<option value="TR">Turkey</option>
						<option value="TM">Turkmenistan</option>
						<option value="TC">Turks and Caicos Islands</option>
						<option value="TV">Tuvalu</option>
						<option value="UG">Uganda</option>
						<option value="UA">Ukraine</option>
						<option value="AE">United Arab Emirates</option>
						<option value="GB">United Kingdom</option>
						<option value="US">United States</option>
						<option value="UM">United States Minor Outlying Islands</option>
						<option value="UY">Uruguay</option>
						<option value="UZ">Uzbekistan</option>
						<option value="VU">Vanuatu</option>
						<option value="VE">Venezuela, Bolivarian Republic of</option>
						<option value="VN">Viet Nam</option>
						<option value="VG">Virgin Islands, British</option>
						<option value="VI">Virgin Islands, U.S.</option>
						<option value="WF">Wallis and Futuna</option>
						<option value="EH">Western Sahara</option>
						<option value="YE">Yemen</option>
						<option value="ZM">Zambia</option>
						<option value="ZW">Zimbabwe</option>
					</select>
				</div>
				<div class="col-lg-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">Nacionalidad</p>
					<input class="form-control txt18 has-gray-placeholder" type="text" name="" placeholder="Nacionalidad" required>
				</div>
				<div class="col-lg-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">Entidad Federativa de Nacimiento</p>
					<input class="form-control txt18 has-gray-placeholder" type="text" name="" placeholder="Entidad Federativa de Nacimiento" required>
				</div>
			</div>
			<div class="d-flex flex-wrap align-items-end w-100 mb-lg-3">
				<div class="col-lg-4 mb-lg-3 mb-4 row no-gutters">
					<div class="col-12">
						<p class="c-black mb-3">Fecha de Nacimiento</p>
					</div>
					<div class="col-4 pr-2">
						<select class="form-control txt18 has-gray-placeholder" name="" required>
							<option value="">Día</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
						</select>
					</div>
					<div class="col-4 pr-2">
						<select class="form-control txt18 has-gray-placeholder" name="" required>
							<option value="">Mes</option>
							<option value="Enero">Enero</option>
							<option value="Febrero">Febrero</option>
							<option value="Marzo">Marzo</option>
							<option value="Abril">Abril</option>
							<option value="Mayo">Mayo</option>
							<option value="Junio">Junio</option>
							<option value="Julio">Julio</option>
							<option value="Agosto">Agosto</option>
							<option value="Septiembre">Septiembre</option>
							<option value="Octubre">Octubre</option>
							<option value="Noviembre">Noviembre</option>
							<option value="Diciembre">Diciembre</option>
						</select>
					</div>
					<div class="col-4">
						<select class="form-control txt18 has-gray-placeholder" name="" required>
							<option value="">Año</option>
							<option value="2020">2020</option>
							<option value="2019">2019</option>
							<option value="2018">2018</option>
							<option value="2017">2017</option>
							<option value="2016">2016</option>
							<option value="2015">2015</option>
							<option value="2014">2014</option>
							<option value="2013">2013</option>
							<option value="2012">2012</option>
							<option value="2011">2011</option>
							<option value="2010">2010</option>
							<option value="2009">2009</option>
							<option value="2008">2008</option>
							<option value="2007">2007</option>
							<option value="2006">2006</option>
							<option value="2005">2005</option>
							<option value="2004">2004</option>
							<option value="2003">2003</option>
							<option value="2002">2002</option>
							<option value="2001">2001</option>
							<option value="2000">2000</option>
							<option value="1999">1999</option>
							<option value="1998">1998</option>
							<option value="1997">1997</option>
							<option value="1996">1996</option>
							<option value="1995">1995</option>
							<option value="1994">1994</option>
							<option value="1993">1993</option>
							<option value="1992">1992</option>
							<option value="1991">1991</option>
							<option value="1990">1990</option>
							<option value="1989">1989</option>
							<option value="1988">1988</option>
							<option value="1987">1987</option>
							<option value="1986">1986</option>
							<option value="1985">1985</option>
							<option value="1984">1984</option>
							<option value="1983">1983</option>
							<option value="1982">1982</option>
							<option value="1981">1981</option>
							<option value="1980">1980</option>
							<option value="1979">1979</option>
							<option value="1978">1978</option>
							<option value="1977">1977</option>
							<option value="1976">1976</option>
							<option value="1975">1975</option>
							<option value="1974">1974</option>
							<option value="1973">1973</option>
							<option value="1972">1972</option>
							<option value="1971">1971</option>
							<option value="1970">1970</option>
							<option value="1969">1969</option>
							<option value="1968">1968</option>
							<option value="1967">1967</option>
							<option value="1966">1966</option>
							<option value="1965">1965</option>
							<option value="1964">1964</option>
							<option value="1963">1963</option>
							<option value="1962">1962</option>
							<option value="1961">1961</option>
							<option value="1960">1960</option>
							<option value="1959">1959</option>
							<option value="1958">1958</option>
							<option value="1957">1957</option>
							<option value="1956">1956</option>
							<option value="1955">1955</option>
							<option value="1954">1954</option>
							<option value="1953">1953</option>
							<option value="1952">1952</option>
							<option value="1951">1951</option>
							<option value="1950">1950</option>
							<option value="1949">1949</option>
							<option value="1948">1948</option>
							<option value="1947">1947</option>
							<option value="1946">1946</option>
							<option value="1945">1945</option>
							<option value="1944">1944</option>
							<option value="1943">1943</option>
							<option value="1942">1942</option>
							<option value="1941">1941</option>
							<option value="1940">1940</option>
							<option value="1939">1939</option>
							<option value="1938">1938</option>
							<option value="1937">1937</option>
							<option value="1936">1936</option>
							<option value="1935">1935</option>
							<option value="1934">1934</option>
							<option value="1933">1933</option>
							<option value="1932">1932</option>
							<option value="1931">1931</option>
							<option value="1930">1930</option>
							<option value="1929">1929</option>
							<option value="1928">1928</option>
							<option value="1927">1927</option>
							<option value="1926">1926</option>
							<option value="1925">1925</option>
							<option value="1924">1924</option>
							<option value="1923">1923</option>
							<option value="1922">1922</option>
							<option value="1921">1921</option>
							<option value="1920">1920</option>
							<option value="1919">1919</option>
							<option value="1918">1918</option>
							<option value="1917">1917</option>
							<option value="1916">1916</option>
							<option value="1915">1915</option>
							<option value="1914">1914</option>
							<option value="1913">1913</option>
							<option value="1912">1912</option>
							<option value="1911">1911</option>
							<option value="1910">1910</option>
							<option value="1909">1909</option>
							<option value="1908">1908</option>
							<option value="1907">1907</option>
							<option value="1906">1906</option>
							<option value="1905">1905</option>
						</select>
					</div>
				</div>
				<div class="col-lg-4 mb-lg-3 mb-0 row no-gutters">
					<div class="col-12">
						<p class="c-black mb-3">Género</p>
					</div>
					<div class="col-md-6 pr-md-2 mb-lg-0 mb-4">
						<select class="form-control txt18 has-gray-placeholder" name="" required>
							<option value="">Elige</option>
							<option value="femenino">Femenino</option>
							<option value="masculino">Masculino</option>
						</select>
					</div>
					<div class="col-md-6 mb-lg-0 mb-4">
						<select class="form-control txt18 has-gray-placeholder" name="" required>
							<option value="">E. Civil</option>
							<option value="0">Soltero/a</option>
							<option value="1">Casado/a</option>
							<option value="2">Separado/a</option>
							<option value="3">Divorciado/a</option>
							<option value="4">Viudo/a</option>
						</select>
					</div>
				</div>
			</div>
			<div class="d-flex flex-wrap align-items-end w-100 ">
				<div class="col-lg-4 mb-lg-0 mb-4">
					<div class="position-relative">
						<p class="c-black mb-3 position-relative">Correo Electrónico</p>
						<div class="i-btn-sm has-tooltip-top">i
							<div class="tooltip-box bg-dark-blue txt18">Con tu cuenta de correo podrás llenar los datos en otro momento.</div>
						</div>
					</div>
					<input class="form-control txt18 has-gray-placeholder text-left" type="email" name="" placeholder="Correo Electrónico" required>
				</div>
				<div class="col-lg-4 mb-lg-0 mb-4">
					<p class="c-black mb-3">Crea una contraseña</p>
					<input class="form-control txt18 has-gray-placeholder text-left" type="password" name="" placeholder="●●●●●●●●" required>
				</div>
			</div>

			<!-- TU DOMICILIO -->
			<div class="col-12 mb-md-5 mb-4 mt-md-5 mt-0">
				<p class="c-dark-blue txt36 is-bold mb-3">Tu Domicilio</p>
				<p class="c-dark-blue max-w-760">En caso de que el domicilio coincida con tu identificación oficial, no es necesario capturarlo.</p>
			</div>
			<div class="d-flex flex-wrap align-items-end w-100 mb-md-3">
				<div class="col-lg-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">Calle</p>
					<input class="form-control txt18 has-gray-placeholder" type="text" name="" placeholder="Calle" required>
				</div>
				<div class="col-lg-4 row no-gutters mb-lg-3 mb-4">
					<div class="col-6 pr-2">
						<p class="c-black mb-3">No. Exterior</p>
						<input class="form-control txt18 has-gray-placeholder" type="text" name="" placeholder="000">
					</div>
					<div class="col-6">
						<p class="c-black mb-3">No. Interior</p>
						<input class="form-control txt18 has-gray-placeholder" type="text" name="" placeholder="000">
					</div>
				</div>
				<div class="col-lg-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">Código Postal</p>
					<input class="form-control txt18 has-gray-placeholder" type="text" name="" placeholder="00000" required>
				</div>
			</div>
			<div class="d-flex flex-wrap align-items-end w-100 mb-md-3">
				<div class="col-lg-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">Colonia</p>
					<input class="form-control txt18 has-gray-placeholder" type="text" name="" placeholder="Colonia" required>
				</div>
				<div class="col-lg-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">Municipio</p>
					<input class="form-control txt18 has-gray-placeholder" type="text" name="" placeholder="Municipio" required>
				</div>
				<div class="col-lg-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">País</p>
					<input class="form-control txt18 has-gray-placeholder" type="text" name="" placeholder="País" required>
				</div>
			</div>
			<div class="d-flex flex-wrap w-100 mb-md-3">
				<div class="col-lg-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">Entidad Federativa de Nacimiento</p>
					<input class="form-control txt18 has-gray-placeholder text-left" type="text" name="" placeholder="Entidad Federativa de Nacimiento" required>
				</div>
			</div>
			<div class="d-flex flex-wrap align-items-end w-100 mb-4">
				<div class="col-12">
					<p class="c-black mb-3">¿Cómo te enteraste de SuperTasas?</p>
				</div>
				<div class="col-lg-4 mb-lg-3 mb-4">
					<select class="form-control txt18 has-gray-placeholder" name="">
						<option value="">Elige</option>
						<option value="1">Anuncio en autobús</option>
						<option value="5">Anuncio Facebook</option>
						<option value="7">Anuncio LinkedIn</option>
						<option value="2">Anuncio periódico</option>
						<option value="4">Comercial en Cine</option>
						<option value="12">Comercial YouTube</option>
						<option value="15">Evento</option>
						<option value="6">Google</option>
						<option value="14">Kiosko</option>
						<option value="8">Panorámico</option>
						<option value="3">Publicacion en Blog</option>
						<option value="10">Referencia de amigo o familiar</option>
						<option value="11">Visita sucursal</option>
					</select>
				</div>
			</div>
			<div class="d-flex flex-wrap w-100 mb-md-3">
				<div class="col-12 d-flex flex-wrap">
					<div class="invalid-feedback1 w-100 mb-4" style="display: none;">
						<p class="txt18 text-danger">Falta llenar campos marcados en rojo</p>
					</div>
					<a href='formulario-inversion-1.php' class="has-btn has-lg-btn min-w-220 bg-white has-button-shadow c-black mr-4">Regresar</a>
					<button class="has-btn has-lg-btn min-w-220 bg-blue c-white">Siguiente</button>
				</div>
			</div>
		</form>
	</div>
</section>

<?php include('footer.php'); ?>