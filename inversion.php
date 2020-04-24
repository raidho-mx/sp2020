<?php include('header.php'); ?>

<section class="bg-dark-blue bg-espiral">
	<div class="container pt-100 pb-md-0 pb-5">
		<!-- BLOQUE PRINCIPAL C/IMAGEN -->
		<div class="row mb-md-0 mb-4">
			<div class="col-lg-6 text-lg-left text-center">
				<h1 class="is-black c-white txt48 mb-3">Invierte y gana el <span class="c-green">11% anual</span></h1>
				<p class="c-white txt24 mb-5">Invierte tu dinero a la vista o a plazo de forma fácil, confiable y con altos rendimientos.</p>
				<a href="#" class="has-btn bg-blue mr-sm-4 mb-sm-0 mb-3">Abre tu cuenta</a>
				<a href="#" class="has-btn bg-white c-dark-blue">Calcula tus ganancias</a>
			</div>
			<div class="col-md-6 d-lg-block d-none">
				<div class="big-cir bg-img" style="background-image: url('img/bg-inversion1.png');">
					<div class="espiral-mask"></div>
				</div>
			</div>
		</div>
		<!-- NUMERALIA -->
		<div class="overlaped-box row pl-md-5 pr-md-5 pt-md-5 pr-0 pt-3 pb-4" id="numbers2">
			<div class="d-md-block d-none col-12 pl-0 pb-3 text-md-left text-center mt-md-0 mt-4">
				<p class="c-blue txt24 is-black">Nuestras SUPER tasas</p>
			</div>
			<div class="col-md-2dot4 border-right-light-gray pl-0 pr-md-auto pr-4 pt-md-0 pt-4 pb-md-0 pb-4 mb-md-0 mb-4 bg-white text-md-left text-center fade-in delay1">
				<p class="d-md-none c-blue txt24 is-black mb-3">Nuestras Super Tasas</p>
				<p class="is-black txt48 c-green mb-3"><span class="numeros count">11</span>.00%</p>
				<p class="txt24 is-bold c-dark-blue">Plazo de 364 días</p>
			</div>
			<div class="col-md-2dot4 border-right-light-gray pl-lg-5 pl-3 pt-md-0 pt-4 pb-md-0 pb-4 mb-md-0 mb-4 bg-white text-md-left text-center fade-in delay2">
				<p class="is-black txt48 c-green mb-3"><span class="numeros count">10</span>.<span class="numeros count">50</span>%</p>
				<p class="txt24 is-bold c-dark-blue">(Con intereses cada 28 días)</p>
			</div>
			<div class="col-md-2dot4 border-right-light-gray pl-lg-5 pl-3 pt-md-0 pt-4 pb-md-0 pb-4 mb-md-0 mb-4 bg-white text-md-left text-center fade-in delay3">
				<p class="is-black txt48 c-green mb-3"><span class="numeros count">11</span>.00%</p>
				<p class="txt24 is-bold c-dark-blue">Plazo de 182 días</p>
			</div>
			<div class="col-md-2dot4 border-right-light-gray pl-lg-5 pl-3 pt-md-0 pt-4 pb-md-0 pb-4 mb-md-0 mb-4 bg-white text-md-left text-center fade-in delay4">
				<p class="is-black txt48 c-green mb-3"><span class="numeros count">9</span>.00%</p>
				<p class="txt24 is-bold c-dark-blue">Plazo de 91 días</p>
			</div>
			<div class="col-md-2dot4 pl-lg-5 pl-3 pt-md-0 pt-4 pb-md-0 pb-4 bg-white text-md-left text-center fade-in delay5">
				<p class="is-black txt48 c-green mb-3"><span class="numeros count">8</span>.<span class="numeros count">20</span>%</p>
				<p class="txt24 is-bold c-dark-blue">A la vista</p>
			</div>
			<div class="col-12 text-md-right text-center mt-md-0 mt-4 fade-in delay5">
				<button class="c-blue border-0 txt14 has-underline bg-0" data-toggle="modal" data-target="#ModalGat" id="buttonGat"><b>Consulta GAT*</b></button>
				<div class="i-btn d-inline-block"><b>i</b><div class="has-txt txt14 text-left">Metodología usada mes a mes para el cáulculo de la tasa de interés.</div></div>
			</div>
		</div>
	</div>
</section>

<!-- CALCULA TUS GANANCIAS -->
<section class="bg-blue pt-100 pb-100">
	<div class="pt-100 d-md-block d-none"></div>
	<div class="container">
		<div class="row bg-gray pl-lg-5 pr-lg-5 pt-lg-5 pb-lg-5 p-3 ml-md-5 mr-md-5">
			<div class="col-12 mb-lg-5 mb-3">
				<p class="txt36 c-dark-blue"><strong class="is-black">Calcula tus ganancias:</strong></p>
			</div>
			<!-- PRIMER COLUMNA -->
			<div class="col-md-6 pr-lg-5 pb-lg-0">
				<div class="form-group">
					<p class="is-bold c-dark-blue mb-3"><span class="cir-30x30 bg-dark-blue c-white mr-2">1</span>¿Cuánto deseas invertir?</p>
					<input class="form-control txt24 has-mxn-symbol text-right c-black" type="number" name="" value="">
				</div>
				<div class="form-group">
					<p class="is-bold c-dark-blue mb-3"><span class="cir-30x30 bg-dark-blue c-white mr-2">2</span>¿A qué plazo?</p>
					<select dir="rtl" class="form-control txt24 text-right c-black" name="">
						<option value="a-la-vista">A la vista</option>
					</select>
				</div>
				<div class="form-group pb-md-3">
					<p class="is-bold c-dark-blue mb-3"><span class="cir-30x30 bg-dark-blue c-white mr-2">3</span>Tu tasa es:</p>
					<div class="has-green-input c-white text-right is-bold txt24">9.00%</div>
				</div>
				<div class="w-100 d-md-block d-none">
					<p class="txt14">Rendimiento correspondiente a un año.</br>Para cálculo de retención de impuestos, supone que esta</br> es la única inversión del cliente en nuestra institución.</p>
				</div>
			</div>
			<!-- SEGUNDA COLUMNA -->
			<div class="col-md-6 pl-lg-5">
				<p class="is-bold c-dark-blue mb-3"><span class="cir-30x30 bg-dark-blue c-white mr-2">4</span>Tu ganancia es:</p>
				<div class="bg-white has-sm-shadow p-4 is-bold mb-lg-5 mb-4">
					<div class="border-bottom-dark-blue pb-lg-4 pb-2 pt-4 w-100 d-flex flex-wrap no-gutters align-items-center">
						<div class="col-lg-6">
							<p class="c-dark-blue">Rendimiento Bruto (anual)</p>
						</div>
						<div class="col-lg-6 text-lg-right mt-lg-0 mt-3">
							<p class="c-blue txt24">$0</p>
						</div>
					</div>
					<div class="border-bottom-dark-blue pb-lg-4 pb-2 pt-4 w-100 d-flex flex-wrap no-gutters align-items-center">
						<div class="col-lg-6">
							<p class="c-dark-blue">Impuestos (1.45% anual)</p>
						</div>
						<div class="col-lg-6 text-lg-right mt-lg-0 mt-3">
							<p class="c-black txt24">$0</p>
						</div>
					</div>
					<div class="pb-lg-4 pb-2 pt-4 w-100 d-flex flex-wrap no-gutters align-items-center">
						<div class="col-lg-6">
							<p class="c-dark-blue">Cantidad disponible al final de un año.</p>
						</div>
						<div class="col-lg-6 text-lg-right mt-lg-0 mt-3">
							<p class="c-black txt24">$0</p>
						</div>
					</div>
				</div>
				<a href="#" class="has-btn bg-blue c-white">Abre tu cuenta</a>
			</div>
		</div>
		<div class="row pl-lg-5 pr-lg-5 p-3 pt-lg-0 pb-4 bg-gray border-bottom-white d-md-none d-flex">
			<div class="col-12">
				<div class="w-100">
					<p class="txt14">Rendimiento correspondiente a un año.</br>Para cálculo de retención de impuestos, supone que esta</br> es la única inversión del cliente en nuestra institución.</p>
				</div>
			</div>
		</div>
		<div class="row p-3 pl-lg-5 pr-lg-5 pt-4 pb-5 bg-gray ml-md-5 mr-md-5 border-md-top-white">
			<div class="col-12">
				<div class="w-100">
					<p class="txt14">Ganancia Anual Total (GAT). Plazo de 182 días <span class="txt24 is-bold">GAT nominal 10.25% y GAT real 6.13%,</span></p>
					<p class="txt14">antes de impuestos. Al GAT real es el rendimiento que obtendría después de descontar la inflación estimada. Calculado al 1 de agosto de 2019. Vigencia de la oferta del 1 de agosto de 2019 al 31 de agosto de 2019 Monto mínimo $1 peso. Consulta términos, condiciones de la promoción y comisiones y requisitos de contratación en www.SuperTasas.com y www.Crediclub.com. Tasa anual fija antes de impuestos.</p>
					<p class="txt14"><span class="txt24 is-bold">Inversión SuperTasas.com ®</span> es un producto de Crediclub S.A., de C.V., S.F.P., garantizado por el Fondo de Protección hasta por 25 mil UDIs por cliente.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- BLOQUE "POR QUÉ INVERTIR EN SUPERTASAS" -->
<section class="bg-dark-blue pt-100 pb-100">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 pb-100 text-center">
				<h2 class="txt48 is-black c-white">¿Por qué invertir en <span class="c-green">SuperTasas.com?</span></h2>
			</div>
			<div class="col-md-4 pb-md-5 pb-3 c-white text-center">
				<img src="img/icon-inversion1.svg" class="max-w-80 m-auto pb-3" alt="">
				<p class="c-green txt36 is-bold pb-3">Tasas fijas</p>
				<p class="txt24">Al invertir a plazo, mantenemos la misma tasa desde el primero hasta el último día.</p>
			</div>
			<div class="col-md-4 pb-md-5 pb-3 c-white text-center">
				<img src="img/icon-inversion4.svg" class="max-w-80 m-auto pb-3" alt="">
				<p class="c-green txt36 is-bold pb-3">Sin comisiones</p>
				<p class="txt24">Sin comisión por apertura, mensualidad, anualidad, retiro, mantenimiento, etc.</p>
			</div>
			<div class="col-md-4 pb-md-5 pb-3 c-white text-center">
				<img src="img/icon-inversion3.svg" class="max-w-80 m-auto pb-3" alt="">
				<p class="c-green txt36 is-bold pb-3">Inversión mínima</p>
				<p class="txt24">Abre tu cuenta desde $1 peso.</p>
			</div>
			<div class="col-md-4 pb-md-5 pb-3 c-white text-center">
				<img src="img/icon-inversion2.svg" class="max-w-80 m-auto pb-3" alt="">
				<p class="c-green txt36 is-bold pb-3">Mismas tasas para todos</p>
				<p class="txt24">Pagamos la misma tasa sin importar el tamaño de tu inversión, si eres cliente nuevo o ya tienes tiempo con nosotros.</p>
			</div>
			<div class="col-md-4 pb-md-5 pb-3 c-white text-center">
				<img src="img/icon-inversion5.svg" class="max-w-80 m-auto pb-3" alt="">
				<p class="c-green txt36 is-bold pb-3">Fácil de operar</p>
				<p class="txt24">Realiza tus inversiones y retiros, consulta de saldos desde nuestra App.</p>
			</div>
		</div>
	</div>
</section>

<!-- BLOQUE "ABRE TU CUENTA" -->
<section class="bg-white pb-100">
	<div class="container">
		<div class="row">
			<div class="col-12 pt-100 pb-100 text-center">
				<p class="c-dark-blue txt36 is-black">¡Abre tu cuenta!</p>
			</div>
			<div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
				<div class="w-100 h-100 bg-light-gray border-14 p-4">
					<div class="overlaped-img">
						<img src="img/icon-inversion6.svg" alt="icono inversión 6">
					</div>
					<p class="has-bleed-txt-sm c-blue txt24 is-bold mb-3 mb-md-4"><img src="img/icon-arrow-check.svg" alt="">Llena el formulario en línea</p>
					<p class="has-bleed-txt-sm txt18">• Desde tu celular</p>
					<p class="has-bleed-txt-sm txt18">• En tu computadora</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
				<div class="w-100 h-100 bg-light-gray border-14 p-4">
					<div class="overlaped-img">
						<img src="img/icon-inversion7.svg" alt="icono inversión 7">
					</div>
					<p class="has-bleed-txt-sm c-blue txt24 is-bold mb-3 mb-md-4"><img src="img/icon-arrow-check.svg" alt="">Envía los documentos requeridos a tu ejecutivo asignado</p>
						<p class="has-bleed-txt-sm txt18">• INE o pasaporte vigentes</p>
						<p class="has-bleed-txt-sm txt18">• Comprobante de domicilio</p>
						<p class="has-bleed-txt-sm txt18">• Estado de cuenta bancario, aquí recibirás el dinero que retires de tu cuenta SuperTasas.com</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
				<div class="w-100 h-100 bg-light-gray border-14 p-4">
					<div class="overlaped-img">
						<img src="img/icon-inversion8.svg" alt="icono inversión 8">
					</div>
					<p class="has-bleed-txt-sm c-blue txt24 is-bold mb-3 mb-md-4"><img src="img/icon-arrow-check.svg" alt="">Firma tu contrato en tu domicilio o en la sucursa</p>
					<p class="has-bleed-txt-sm txt18">• Agenda una cita en, tu decides el lugar</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
				<div class="w-100 h-100 bg-light-gray border-14 p-4">
					<div class="overlaped-img">
						<img src="img/icon-inversion9.svg" alt="icono inversión 9">
					</div>
					<p class="has-bleed-txt-sm c-blue txt24 is-bold mb-3 mb-md-4"><img src="img/icon-arrow-check.svg" alt="">Realiza tu primer depósito</p>
					<p class="has-bleed-txt-sm txt18">• Vía SPEI</p>
					<p class="has-bleed-txt-sm txt18">• En Sucursales Bancarias</p>
				</div>
			</div>
		</div>
		<div class="d-flex justify-content-center mt-md-5 mt-3">
			<a href="#" class="has-btn bg-blue mr-md-4">Abre tu cuenta</a>
		</div>
	</div>
</section>

<!-- BLOQUE "REFIERE Y GANA" -->
<section class="bg-light-blue pt-100 pb-md-5 pb-5">
	<div class="container">
		<div class="row align-items-center text-md-left text-center">
			<div class="col-md-6 pr-md-5 d-md-flex d-none">
				<div class="cir-x2 rounded-circle bg-img has-blue-shadow" style="background-image: url('img/bg-inversion2.png');"></div>
			</div>
			<div class="col-md-6 pl-md-5">
				<h3 class="c-blue txt36 is-black mb-3">¡Refiere y gana!</h3>
				<h3 class="c-dark-blue txt36 is-bold mb-3">Gana $500 pesos por cada amigo que invites a invertir</h3>
				<p class="pb-5">Invita a tus amigos a invertir $20,000 pesos o más en cualquiera de nuestras inversiones a plazo y ambos ganan $500 pesos en dinero electrónico.</p>
				<a href="#" class="has-btn bg-blue mr-md-4">Conoce más</a>
			</div>
		</div>
	</div>
</section>


<!-- BLOQUE APP -->
<section class="bg-img bg-app">
	<div class="bg-espiral-verde"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 pt-100 pb-100 text-sm-left text-center">
				<p class="txt36 is-black c-white pt-100 pb-5">Consulta saldos y movimientos, invierte a plazo o retira tu dinero.</p>
				<div class="d-flex align-items-center flex-column flex-md-row">
					<a href="https://apps.apple.com/app/id1233435689" class="mr-md-5 mb-md-0 mb-4"><img src="img/icon-apple.png" alt=""></a>
					<a href="https://play.google.com/store/apps/details?id=crediclub.supertasasmobil"><img src="img/icon-google-play.png" alt=""></a>
				</div>
			</div>
			<div class="col-md-6 d-flex">
				<img src="img/icon-app.png" alt="">
			</div>
		</div>
	</div>
</section>

<!-- Modal -->
<?php include('inc/modal-gat.php'); ?>

<?php include('footer.php'); ?>
