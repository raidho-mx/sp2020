<?php include('header.php'); ?>

<section class="bg-gray pt-100 pb-100">
	<div class="container">
		<!-- TÍTULO: ACTIVIDAD PROFESIONAL -->
		<div class="row mb-md-5 mb-4">
			<div class="d-flex flex-wrap align-items-center mb-md-5">
				<div class="col-md-auto col-12 pl-3 pb-md-0 pb-4">
					<div class="cir-120px border-979797-1px bg-img" style="background-image: url('img/bg-referidos1.png');"></div>
				</div>
				<div class="col-md-auto col-12 pl-md-5 pl-3 pb-md-0 pb-4">
					<p class="txt36 c-blue is-bold">Actividad Profesional</p>
				</div>
			</div>
			<div class="col-12">
				<p class="c-dark-blue max-w-760">Queremos conocerte, compártenos a que te dedicas.</p>
			</div>
		</div>

		<!-- NAVEGACIÓN -->
		<div class="nav-pills bg-white border-50px d-inline-block mb-md-5 mb-4">
			<div class="d-flex">
				<div class="pill visited border-50px is-bold p-2 txt24">
					<a href="formulario-inversion-1.php"><span class="cir-30x30 bg-dark-blue c-white mr-2">1</span> Registro</a>
				</div>
				<div class="pill visited border-50px is-bold p-2 txt24">
					<a href="formulario-inversion-2.php"><span class="cir-30x30 bg-dark-blue c-white mr-2">2</span> Tus Datos</a>
				</div>
				<div class="pill active border-50px is-bold p-2 txt24">
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
			<!-- ACTIVIDAD ECONÓMICA -->
			<div class="col-12 mb-4">
				<p class="c-dark-blue txt36 is-bold">Actividad Económica</p>
			</div>
			<div class="d-flex flex-wrap align-items-end w-100 mb-md-3">
				<div class="col-lg-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">Profesión</p>
					<select class="form-control txt18 has-gray-placeholder" name="" required>
						<option value="">Selecciona</option>
					</select>
				</div>
				<div class="col-lg-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">Ocupación</p>
					<select class="form-control txt18 has-gray-placeholder" name="" required>
						<option value="">Selecciona</option>
					</select>
				</div>
				<div class="col-lg-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">Actividad Económica</p>
					<select class="form-control txt18 has-gray-placeholder" name="" required>
						<option value="">Selecciona</option>
					</select>
				</div>
			</div>
			<div class="d-flex flex-wrap align-items-end w-100 mb-md-3">
				<div class="col-lg-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">Origen del dinero a invertir</p>
					<select class="form-control txt18 has-gray-placeholder" name="" required>
						<option value="">Selecciona</option>
					</select>
				</div>
				<div class="col-lg-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">Destino del dinero</p>
					<select class="form-control txt18 has-gray-placeholder" name="" required>
						<option value="">Selecciona</option>
					</select>
				</div>
				<div class="col-lg-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">¿El dinero a depositar es propio?</p>
					<select class="form-control txt18 has-gray-placeholder" name="" required>
						<option value="">Selecciona</option>
					</select>
				</div>
			</div>
			<div class="d-flex flex-wrap align-items-end w-100 mb-3">
				<div class="col-lg-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">¿Es usted una persona políticamente expuesta?</p>
					<select class="form-control txt18 has-gray-placeholder" name="" required>
						<option value="">Selecciona</option>
					</select>
				</div>
			</div>

			<!-- DATOS FINANCIEROS -->
			<div class="col-12 mb-md-5 mb-4 mt-mb-5 mt-3">
				<p class="c-dark-blue txt36 is-bold mb-3">Datos Financieros</p>
				<p class="c-dark-blue max-w-760">Una vez que inviertas en SuperTasas.com y requieras tu dinero, necesitaremos saber a donde será enviado. También necesitamos saber un aproximado de la cantidad a invertir y los movimientos a realizar en un mes.</p>
			</div>
			<div class="d-flex flex-wrap align-items-end w-100 mb-md-3">
				<div class="col-lg-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">Nombre de la institución bancaria</p>
					<select class="form-control txt18 has-gray-placeholder" name="" required>
						<option value="">Selecciona</option>
					</select>
				</div>
				<div class="col-lg-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">Número de cuenta CLABE (18 dígitos)</p>
					<input class="form-control txt18 has-gray-placeholder" type="text" name="" placeholder="000000000000000000" required>
				</div>
			</div>
			<div class="d-flex flex-wrap align-items-end w-100 mb-4">
				<div class="col-lg-4 mb-lg-3 mb-4">
					<div class="position-relative">
						<p class="c-black mr-3 mb-3 position-relative mr-3">Número máximo de movimientos en un sólo mes</p>
						<div class="i-btn-sm has-tooltip-top">i
							<div class="tooltip-box bg-dark-blue txt18">20 movimientos son suficientes para la mayoría de nuestros clientes</div>
						</div>
					</div>
					<input class="form-control txt18 has-gray-placeholder text-left" type="number" name="" placeholder="$" required>
				</div>
				<div class="col-lg-4 mb-lg-3 mb-4">
					<div class="position-relative">
						<p class="c-black mb-3 position-relative mr-3">Cantidad máxima a invertir en un sólo mes</p>
						<div class="i-btn-sm has-tooltip-top">i
							<div class="tooltip-box bg-dark-blue txt18">Este es el dinero máximo que podrás depositar en un mes</div>
						</div>
					</div>
					<input class="form-control txt18 has-gray-placeholder" type="text" name="" placeholder="$" required>
				</div>
				<div class="col-lg-4 mb-lg-3 mb-4">
					<div class="position-relative">
						<p class="c-black mb-3 position-relative mr-3">Límite de transferencias electrónicas</p>
						<div class="i-btn-sm has-tooltip-top">i
							<div class="tooltip-box bg-dark-blue txt18">Este es el dinero máximo que podrás retirar en una transacción</div>
						</div>
					</div>
					<input class="form-control txt18 has-gray-placeholder" type="text" name="" placeholder="0" required>
				</div>
			</div>
			<div class="d-flex flex-wrap w-100 mb-md-3">
				<div class="col-12 d-flex flex-wrap">
					<div class="invalid-feedback1 w-100 mb-4" style="display: none;">
						<p class="txt18 text-danger">Falta llenar campos marcados en rojo</p>
					</div>
					<a href='formulario-inversion-2.php' class="has-btn has-lg-btn min-w-220 bg-white has-button-shadow c-black mr-4">Regresar</a>
					<button class="has-btn has-lg-btn min-w-220 bg-blue c-white">Siguiente</button>
				</div>
			</div>
		</form>
	</div>
</section>

<?php include('footer.php'); ?>
