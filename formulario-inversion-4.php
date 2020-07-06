<?php include('header.php'); ?>

<section class="bg-gray pt-100 pb-100">
	<div class="container">
		<!-- TÍTULO: TUS BENEFICIARIOS -->
		<div class="row mb-md-5 mb-4">
			<div class="d-flex flex-wrap align-items-center mb-md-5">
				<div class="col-md-auto col-12 pl-3 pb-md-0 pb-4">
					<div class="cir-120px border-979797-1px bg-img" style="background-image: url('img/bg-referidos1.png');"></div>
				</div>
				<div class="col-md-auto col-12 pl-md-5 pl-3 pb-md-0 pb-4">
					<p class="txt36 c-blue is-bold">Tus beneficiarios</p>
				</div>
			</div>
			<div class="col-12">
				<p class="c-dark-blue max-w-760">En el indeseado caso de tu fallecimiento, el o los beneficiarios que designes recibirán los recursos de tu cuenta en la proporción que designes. Por favor completa con los datos de 1 o más beneficiarios, considerando que la suma de los porcentajes debe ser 100%.</p>
			</div>
		</div>

		<!-- NAVEGACIÓN -->
		<div class="nav-pills bg-white border-50px d-inline-block mb-5">
			<div class="d-flex">
				<div class="pill visited border-50px is-bold p-2 txt24">
					<a href="formulario-inversion-1.php"><span class="cir-30x30 bg-dark-blue c-white mr-2">1</span> Registro</a>
				</div>
				<div class="pill visited border-50px is-bold p-2 txt24">
					<a href="formulario-inversion-2.php"><span class="cir-30x30 bg-dark-blue c-white mr-2">2</span> Tus Datos</a>
				</div>
				<div class="pill visited border-50px is-bold p-2 txt24">
					<a href="formulario-inversion-3.php"><span class="cir-30x30 bg-dark-blue c-white mr-2">3</span> Actividad</a>
				</div>
				<div class="pill active border-50px is-bold p-2 txt24">
					<a href="formulario-inversion-4.php"><span class="cir-30x30 bg-dark-blue c-white mr-2">4</span> Beneficiarios</a>
				</div>
				<div class="pill disabled border-50px is-bold p-2 txt24">
					<a href="formulario-inversion-5.php"><span class="cir-30x30 bg-dark-blue c-white mr-2">5</span> Documentación</a>
				</div>
			</div>
		</div>

		<!-- FORMULARIO -->
		<form class="row needs-validation" novalidate>
			<!-- BENEFICIARIO -->
			<div class="col-12 mb-md-5 mb-4">
				<p class="c-dark-blue txt36 is-bold">Beneficiario 1</p>
			</div>
			<div class="d-flex flex-wrap align-items-end w-100 mb-md-3">
				<div class="col-lg-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">Nombre (s)</p>
					<input class="form-control txt18 has-gray-placeholder" type="text" name="" placeholder="Nombre (s)">
				</div>
				<div class="col-lg-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">Apellido Paterno</p>
					<input class="form-control txt18 has-gray-placeholder" type="text" name="" placeholder="Apellido Paterno">
				</div>
				<div class="col-lg-4 mb-lg-3 mb-md-0 mb-4">
					<p class="c-black mb-3">Apellido Materno</p>
					<input class="form-control txt18 has-gray-placeholder" type="text" name="" placeholder="Apellido Materno">
				</div>
			</div>
			<div class="d-flex flex-wrap align-items-end w-100 mb-md-3">
				<div class="col-lg-4 mb-md-3 mb-4 row no-gutters">
					<p class="c-black mb-3">Porcentaje</p>
					<input class="form-control txt18 has-gray-placeholder" type="text" name="" placeholder="%">
				</div>
				<div class="col-lg-4 mb-lg-3 mb-4 row no-gutters">
					<div class="col-12">
						<p class="c-black mb-3">Fecha de Nacimiento</p>
					</div>
					<div class="col-4 mb-md-0 pr-2">
						<select class="form-control txt18 has-gray-placeholder" name="">
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
					<div class="col-4 mb-md-0 pr-2">
						<select class="form-control txt18 has-gray-placeholder" name="">
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
						<select class="form-control txt18 has-gray-placeholder" name="">
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
			</div>
			<!-- TU DOMICILIO -->
			<div class="col-12 mb-md-5 mb-4 mt-mb-5 mt-3">
				<p class="c-dark-blue txt36 is-bold">Domicilio</p>
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
			<div class="d-flex flex-wrap align-items-end w-100 mb-md-4 mb-4">
				<div class="col-lg-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">Entidad Federativa de Nacimiento</p>
					<input class="form-control txt18 has-gray-placeholder text-left" type="text" name="" placeholder="Entidad Federativa de Nacimiento" required>
				</div>
				<div class="col-lg-4 mb-lg-3 ml-auto">
					<button class="has-btn has-lg-btn min-w-220 bg-blue c-white">Utilizar Domicilio Principalo</button>
				</div>
			</div>
			<!-- AÑADIR OTRO BENEFICIARIO -->
			<div class="d-flex flex-wrap w-100 mb-md-5 mb-4">
				<div class="col-12">
					<button class="has-btn has-lg-btn min-w-220 bg-blue c-white">+ Añadir otro beneficiario</button>
				</div>
			</div>
			<div class="d-flex flex-wrap w-100 mb-md-3">
				<div class="col-12 d-flex flex-wrap">
					<div class="invalid-feedback1 w-100 mb-4" style="display: none;">
						<p class="txt18 text-danger">Falta llenar campos marcados en rojo</p>
					</div>
					<a href='formulario-inversion-3.php' class="has-btn has-lg-btn min-w-220 bg-white has-button-shadow c-black mr-4">Regresar</a>
					<button class="has-btn has-lg-btn min-w-220 bg-blue c-white">Siguiente</button>
				</div>
			</div>
		</form>
	</div>
</section>

<?php include('footer.php'); ?>
