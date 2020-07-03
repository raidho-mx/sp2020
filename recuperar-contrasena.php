<?php include('header.php'); ?>

<section class="bg-gray pt-100 pb-100 bg-espiral">
	<div class="container">
		<!-- MENSAJE -->
		<div class="row mb-md-5">
			<div class="col-md-6 mb-md-0 mb-4">
				<p class="txt48 is-black c-dark-gray mr-md-5">Restablece tu<br class="d-md-block d-none">contraseña</p>
			</div>
			<div class="col-md-6">
				<form class="form-row needs-validation" novalidate>
					<div class="col-12 mb-lg-4 mb-4">
						<p class="c-black mb-3">Nueva contraseña</p>
						<input class="form-control txt18 has-gray-placeholder" type="password" name="" placeholder="●●●●●●●●●●" required>
					</div>
					<div class="col-12 mb-5">
						<input class="has-btn bg-blue c-white m-auto" type="submit" value="Restablecer">
					</div>
					<div class="col-12">
						<ul class="has-list-bullet is-bold">
							<li>8 caracteres mínimo</li>
							<li>Una mayúscula</li>
							<li>Una minúscula</li>
							<li>Un número</li>
						</ul>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<?php include('footer.php'); ?>
