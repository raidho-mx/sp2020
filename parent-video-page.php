<?php include('header.php'); ?>

<!-- BLOQUE ENTRADAS RECIENTES -->
<section class="pb-100">
	<div class="container">
		<div class="row">
			<div class="col-12 pt-100 pb-md-5 pb-3">
				<h2 class="c-black txt24 mb-4"><strong>Todos los testimoniales</strong></h2>
			</div>
		</div>
		<div class="row pb-4">
			<div class="col-md-4 mb-md-0 mb-4 cursor-pointer" data-toggle="modal" data-target="#ModalVideo1">
				<div class="img-card-rectangle mb-2" style="background-image: url('img/img-home-1.png');"></div>
				<p class="d-block is-bold c-blue txt18 pb-2">Testimoniales</p>
				<p class="is-bold c-dark-blue txt24 mb-2">¿Qué son las FinTechs y cómo están revolucionando el sistema financiero?</p>
			</div>
			<div class="col-md-4 mb-md-0 mb-4 cursor-pointer" data-toggle="modal" data-target="#ModalVideo2" >
				<div class="img-card-rectangle mb-2" style="background-image: url('img/img-home-1.png');"></div>
				<p class="d-block is-bold c-blue txt18 pb-2">Testimoniales</p>
				<p class="is-bold c-dark-blue txt24 mb-2">¿Qué son las FinTechs y cómo están revolucionando el sistema financiero?</p>
			</div>
		</div>
	</div>
</section>


<!-- BLOQUE PRODUCTOS -->
<section class="bg-light-gray pt-100 pb-100">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center pb-100">
				<p class="c-dark-blue txt36 is-black pb-md-3">Nuestros productos</p>
			</div>
			<div class="col-md-6 mb-md-0 mb-4">
				<div class="w-100 h-100 bg-white border-14 p-4 text-center pb-5 has-md-shadow">
					<div class="overlaped-img-center mb-md-0 mb-3">
						<img src="img/icon-blog1.svg" alt="icono inversión 6">
					</div>
					<h3 class="txt36 c-dark-gray mb-md-4 mb-3"><strong>Inversión</strong></h3>
					<p class="txt24 c-dark-gray mb-md-4 mb-3">Invierte desde $1 peso o hasta $5 millones<br> con SUPER tasas de hasta el<br>11% anual.</p>
					<a href="#" class="has-btn bg-blue c-white m-auto">Ver todos</a>
				</div>
			</div>
			<div class="col-md-6 mb-md-0 mb-4">
				<div class="w-100 h-100 bg-white border-14 p-4 text-center pb-5 has-md-shadow">
					<div class="overlaped-img-center mb-md-0 mb-3">
						<img src="img/icon-blog2.svg" alt="icono inversión 6">
					</div>
					<h3 class="txt36 c-dark-gray mb-md-4 mb-3"><strong>Crédito</strong></h3>
					<p class="txt24 c-dark-gray mb-md-4 mb-3">Te prestamos hasta $200 mil pesos <br>para liquidar tus tarjetas de crédito </br>con tasas SUPER atractivas.</p>
					<a href="#" class="has-btn bg-blue c-white m-auto">Ver todos</a>
				</div>
			</div>
		</div>
	</div>
</section>


<div class="modal fade dark-mask" id="ModalVideo1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
		<div class="modal-content bg-dark-gray p-4 border-0 border-12px">
			<div class="w-100">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<img src="img/icon-close-white.svg" alt="">
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-4 pl-lg-5 d-flex mb-md-0 mb-4">
						<div class="w-100 mt-auto mb-auto text-md-left text-center">
							<p class="c-CDCDCD mb-3"><strong>Testimoniales</strong></p>
							<p class="c-white txt24 mb-md-4 mb-3"><strong>¿Cuánto deberías tener ahorrado a tu edad?</strong></p>
							<p class="c-white">Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum </p>
						</div>
					</div>
					<div class="col-md-8 pr-md-5">
						<div class="video-wrap">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/lER3Mpf6aUs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade dark-mask" id="ModalVideo2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
		<div class="modal-content bg-dark-gray p-4 border-0 border-12px">
			<div class="w-100">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<img src="img/icon-close-white.svg" alt="">
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-4 pl-lg-5 d-flex mb-md-0 mb-4">
						<div class="w-100 mt-auto mb-auto text-md-left text-center">
							<p class="c-CDCDCD mb-3"><strong>Testimoniales</strong></p>
							<p class="c-white txt24 mb-md-4 mb-3"><strong>¿Cuánto deberías tener ahorrado a tu edad?</strong></p>
							<p class="c-white">Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum </p>
						</div>
					</div>
					<div class="col-md-8 pr-md-5">
						<div class="video-wrap">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/lER3Mpf6aUs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('footer.php'); ?>
