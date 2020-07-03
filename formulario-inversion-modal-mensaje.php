<?php include('header.php'); ?>

<section class="bg-gray pt-100 pb-100 vh-60">
	<div class="container h-100 d-flex">
		<div class="m-auto">
			<button class="has-btn bg-white c-dark-gray" data-toggle="modal" data-target="#ModalFormularioMensaje">Disparar modal</button>
		</div>
	</div>
</section>

<!-- MODAL MENSAJE -->
<div class="modal fade dark-blue-mask show" id="ModalFormularioMensaje" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="false" data-show="true">
	<div class="modal-dialog modal-dialog-centered modal-md max-w-640" role="document">
		<div class="modal-content bg-gray p-4 border-0 border-12px">
			<div class="w-100">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<img src="img/icon-close.svg" alt="">
				</button>
			</div>
			<div class="row no-gutters p-3">
				<div class="col-12">
					<p class="c-dark-blue txt24 is-bold pb-3">¡Felicidades! tu cuenta ha sido creada, puedes continuar llenando tus datos.</p>
					<div class="form-group mt-4 text-center d-flex flex-wrap">
						<div class="position-relative">
							<div class="has-tooltip-top-center">
								<button class="has-btn bg-white c-black mr-auto no-wrap has-tooltip-top" data-toggle="modal" data-target="#ModalFormularioMensaje">Continuar mas tarde</button>
								<div class="tooltip-box bg-dark-blue txt18">Con tu cuenta de correo podrás llenar los datos en otro momento.</div>
							</div>
						</div>
						<button class="has-btn bg-blue c-white ml-auto no-wrap">Continuar mi solicitud</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('footer.php'); ?>
