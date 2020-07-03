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
				<div class="pill visited border-50px is-bold p-2 txt24">
					<a href="formulario-inversion-4.php"><span class="cir-30x30 bg-dark-blue c-white mr-2">4</span> Beneficiarios</a>
				</div>
				<div class="pill validated border-50px is-bold p-2 txt24">
					<a href="formulario-inversion-5.php"><span class="cir-30x30 bg-dark-blue c-white mr-2">5</span> Documentación</a>
				</div>
			</div>
		</div>

		<!-- FORMULARIO -->
		<form class="row needs-validation" novalidate>
			<!-- BENEFICIARIO -->
			<div class="col-12 mb-md-5 mb-4">
				<p class="c-dark-blue txt36 is-bold">Sube tus documentos</p>
			</div>
			<div class="d-flex flex-wrap align-items-end w-100 mb-md-3">
				<div class="col-lg-6 mb-lg-3 mb-4">
					<p class="c-black mb-3">Identificación oficial: INE/IFE, Pasaporte</p>
					<div class="js box">
						<input type="file" name="file-1[]" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple="" required>
						<label for="file-1" class="d-flex invalid-feedback label">
							<div class="img mr-3"></div>
							<span class="txt18">Subir archivo</span>
						</label>
						<div class="invalid-feedback mt-2">
							*Formato JPG Máximo 10 MB (ej. criterios de aceptación).
						</div>
					</div>
				</div>
				<div class="col-lg-6 mb-lg-3 mb-4">
					<p class="c-black mb-3">* Comprobante de domicilio (en caso de que la INE/IFE lo tenga, no es necesario otro documento)</p>
					<div class="js box">
						<input type="file" name="file-2[]" id="file-2" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple="" required>
						<label for="file-2" class="d-flex invalid-feedback label">
							<div class="img mr-3"></div>
							<span class="txt18">Subir archivo</span>
						</label>
						<div class="invalid-feedback mt-2">
							*Formato JPG Máximo 10 MB (ej. criterios de aceptación).
						</div>
					</div>
				</div>
			</div>
			<div class="d-flex flex-wrap align-items-end w-100 mb-md-4">
				<div class="col-lg-6 mb-lg-3 mb-4">
					<p class="c-black mb-3">Opcional pero altamente recomendado, estado de cuenta donde se confirme la cuenta CLABE</p>
					<div class="js box">
						<input type="file" name="file-3[]" id="file-3" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple="" required>
						<label for="file-3" class="d-flex invalid-feedback label">
							<div class="img mr-3"></div>
							<span class="txt18">Subir archivo</span>
						</label>
						<div class="invalid-feedback mt-2">
							*Formato JPG Máximo 10 MB (ej. criterios de aceptación).
						</div>
					</div>
				</div>
			</div>
			<div class="d-flex flex-wrap w-100 mb-md-3">
				<div class="col-12 d-flex flex-wrap">
					<div class="invalid-feedback1 w-100 mb-4" style="display: none;">
						<p class="txt18 text-danger">Falta llenar campos marcados en rojo</p>
					</div>
					<a href='formulario-inversion-3.php' class="has-btn 3as-lg-btn min-w-220 bg-white has-button-shadow c-black mr-4">Regresar</a>
					<button class="has-btn has-lg-btn min-w-220 bg-blue c-white">Finalizar y enviar</button>
				</div>
			</div>
		</form>
	</div>
</section>

<?php include('footer.php'); ?>
