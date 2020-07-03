<?php include('header.php'); ?>

<section class="bg-gray pt-100 pb-100">
	<div class="container">
		<!-- TÍTULO: BIENVENIDO -->
		<div class="row mb-md-5 mb-4">
			<div class="d-flex flex-wrap align-items-center mb-md-5">
				<div class="col-md-auto col-12 pl-3 pb-md-0 pb-4">
					<div class="cir-120px border-979797-1px bg-img" style="background-image: url('img/bg-referidos1.png');"></div>
				</div>
				<div class="col-md-auto col-12 pl-md-5 pl-3 pb-md-0 pb-4">
					<p class="txt36 c-blue is-bold">Bienvenido a SuperTasas.com</p>
				</div>
			</div>
			<div class="col-12">
				<p class="c-dark-blue max-w-760">Comencemos con tu solicitud de apertura. Una vez que crees una contraseña, puedes regresar a terminar tu solicitud cuando desees. Los datos proporcionados son tratados con estricta confidencialidad, puedes revisar nuestro aviso de privacidad aquí.</p>
			</div>
		</div>

		<!-- NAVEGACIÓN -->
		<div class="nav-pills bg-white border-50px d-inline-block mb-md-5 mb-4">
			<div class="d-flex">
				<div class="pill active border-50px is-bold p-2 txt24">
					<a href="formulario-inversion-1.php"><span class="cir-30x30 bg-dark-blue c-white mr-2">1</span> Registro</a>
				</div>
				<div class="pill disabled border-50px is-bold p-2 txt24">
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
				<p class="c-dark-blue txt36 is-bold">Regístrate</p>
			</div>
			<div class="d-flex flex-wrap align-items-end w-100 mb-md-3">
				<div class="col-md-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">Nombres (s)</p>
					<input class="form-control txt18 has-gray-placeholder" type="text" name="" placeholder="Ciudad" required>
				</div>
				<div class="col-md-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">Apellido paterno*</p>
					<input class="form-control txt18 has-gray-placeholder" type="text" name="" placeholder="Apellido Paterno *" required>
				</div>
				<div class="col-md-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">Apellido materno*</p>
					<input class="form-control txt18 has-gray-placeholder" type="text" name="" placeholder="Apellido Materno *" required>
				</div>
			</div>
			<div class="d-flex flex-wrap align-items-end w-100 mb-md-3">
				<div class="col-md-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">Teléfono Celular</p>
					<input class="form-control txt18 has-gray-placeholder text-left" type="text" name="" placeholder="81 0000 0000" required>
				</div>
				<div class="col-md-4 mb-lg-3 mb-4">
					<div class="position-relative">
						<p class="c-black mb-3 position-relative">RFC</p>
						<div class="i-btn-sm has-tooltip-top">i
							<div class="tooltip-box bg-dark-blue txt18">Metodología usada mes a mes para el cáulculo de la tasa de interés.</div>
						</div>
					</div>
					<input class="form-control txt18 has-gray-placeholder text-left" type="text" name="" placeholder="XXXX-010101-000">
				</div>
				<div class="col-md-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">CURP (Consúltalo <a href="https://www.gob.mx/curp/" target="_blank" class="has-underline">aquí</a>)</p>
					<input class="form-control txt18 has-gray-placeholder text-left" type="text" name="" placeholder="XXXX-000000-XXXXXX-00">
				</div>
			</div>
			<div class="d-flex flex-wrap align-items-end w-100 mb-3">
				<div class="col-md-4 mb-lg-3 mb-4">
					<div class="position-relative">
						<p class="c-black mb-3 position-relative">Correo Electrónico</p>
						<div class="i-btn-sm has-tooltip-top">i
							<div class="tooltip-box bg-dark-blue txt18">Con tu cuenta de correo podrás llenar los datos en otro momento.</div>
						</div>
					</div>
					<input class="form-control txt18 has-gray-placeholder text-left" type="email" name="" placeholder="Correo Electrónico" required>
				</div>
				<div class="col-md-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">Crea una contraseña</p>
					<input class="form-control txt18 has-gray-placeholder text-left" type="password" name="" placeholder="●●●●●●●●" required>
				</div>
				<div class="col-md-4 mb-md-0 mb-1">
					<ul class="has-bullet-list is-bold">
						<li>• 8 caracteres mínimo</li>
						<li>• Una mayúscula</li>
						<li>• Una minúscula</li>
						<li>• Un número</li>
					</ul>
				</div>
			</div>
			<div class="form-group col-12 mb-md-5 mb-4 txt18 mb-4">
				<div class="label-container2 position-relative">
					<input type="checkbox" name="checkmark" value="" class="d-inline" required><label class="c-black d-inline" for="checkmark">Acepto los <a href="" class="has-underline">Términos y condiciones</a> y <a href="" class="has-underline">Política de privacidad</a> de SuperTasas.com</label>
					<div class="checkmark-white"></div>
					<div class="invalid-feedback txt18">
						Debes aceptar los Términos y condiciones antes de continuar.
					</div>
				</div>
			</div>
			<div class="form-group col-12">
				<div class="invalid-feedback1 w-100 mb-4" style="display: none;">
					<p class="txt18 text-danger">Falta llenar campos marcados en rojo.</p>
				</div>
				<button class="has-btn has-lg-btn min-w-220 bg-blue c-white m-auto">Regístrate</button>
			</div>
		</form>
	</div>
</section>

<?php include('footer.php'); ?>
