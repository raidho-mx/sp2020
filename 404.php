<?php include('header.php'); ?>

<section class="bg-dark-blue bg-espiral">
	<div class="container pt-100 pb-md-0 pb-5">
		<!-- BLOQUE PRINCIPAL C/IMAGEN -->
		<div class="row mb-md-0 mb-4">
			<div class="col-lg-6 text-lg-left text-center">
				<h1 class="is-black c-white txt48 mb-3"><span class="c-green">Error 404:</span> Página no encontrada</h1>
				<p class="c-white txt24 mb-5">Lo sentimos, pero la página que buscas no existe.</p>
				<a href="index.php" class="has-btn bg-blue mr-sm-4 mb-sm-0 mb-3">Ir a página pricipal</a>
			</div>
			<div class="col-md-6 d-lg-block d-none">
				<div class="big-cir bg-img" style="background-image: url('img/bg-404.jpg');">
					<div class="espiral-mask"></div>
				</div>
			</div>
		</div>
		<div class="overlaped-box row p-lg-5 pl-3 pr-3 pt-4 pb-md-4">
			<div class="col-md-6 border-right-light-gray  pl-md-auto pl-4 pr-md-auto pr-4 pt-md-0 pt-4 pb-md-0 pb-4 mb-md-0 mb-4 bg-white text-md-left text-center">
				<p class="is-black txt24 c-blue mb-3">Inversión</p>
				<p class="is-bold txt24 c-dark-blue mb-3 mr-lg-5">Invierte desde $1 peso con tasas de hasta el 11% anual</p>
				<a href="#" class="has-btn bg-blue c-white m-auto">Abre tu cuenta</a>
				<button class="c-blue mt-4 d-block border-0 txt14 has-underline bg-0" data-toggle="modal" data-target="#ModalGat" id="buttonGat"><b>Consulta GAT*</b></button>
			</div>
			<div class="col-md-6 pl-md-5 pl-4 pt-md-0 pt-4 pb-md-0 pb-4 bg-white text-md-left text-center">
				<p class="is-black txt24 c-blue mb-3">Crédito</p>
				<p class="is-bold txt24 c-dark-blue mb-3 mr-lg-5">Te prestamos hasta $200,000 pesos para pagar tus tarjetas con tasas desde el 11.9%</p>
				<a href="#" class="has-btn bg-blue c-white m-auto">Llena tu solicitud</a>
				<button class="c-blue mt-4 d-block border-0 txt14 has-underline bg-0" data-toggle="modal" data-target="#ModalCat" id="buttonCat"><b>Consulta CAT*</b></button>
			</div>
		</div>
	</div>
</section>

<section class="bg-white pt-100 pb-100">
	<div class="container">
		<div class="row pt-sm-100">
			<div class="col-12 text-center">
				<h2 class="is-black c-blue txt36 mb-4">¿Quieres aprender más?</h2>
				<p class="c-dark-blue txt24 is-bold mb-5">Visita nuestro blog y entérate de todas las novedades financieras</p>
			</div>
		</div>
		<div class="row pb-4" id="recentPostsContainer">

		</div>
		<div class="row justify-content-center pt-md-5">
			<a href="#" class="has-btn bg-blue">Ver todas las entradas</a>
		</div>
	</div>
</section>

<script src="js/fetchPosts.js"></script>

<!-- Modal -->
<?php include('inc/modal-gat.php'); ?>
<?php include('inc/modal-cat.php'); ?>

<?php include('footer.php'); ?>
