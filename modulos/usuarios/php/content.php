

<div class="row tile_count">

	<div class="page-title">
		<div class="title_left">
      <h3>Gestión de Usuarios</h3>
    </div>
	</div>
	<div class="clearfix"></div>

	<div class="co-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2><i class="fa fa-users"></i> Gestión de Usuarios</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><button class="btn btn-primary"><i class="fa fa-user"></i> Nuevo</button></li>
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
					<li><a class="close-link"><i class="fa fa-close"></i></a></li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br />
				<form id="form_users" data-parsley-validate class="form-horizontal form-label-left input_mask" onsubmit="return false;">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
							<label class="control-label col-md-4 col-sm-4 col-xs-12">DNI:</label>
							<div class="col-md-6 col-sm-6 col-xs-12 has-feedback">
		            <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="DNI...">
		            <span class="fa fa-slideshare form-control-feedback left" aria-hidden="true"></span>
		          </div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4 col-sm-4 col-xs-12">Nombres:</label>
							<div class="col-md-6 col-sm-6 col-xs-12 has-feedback">
	              <input type="text" class="form-control has-feedback-left" id="inputSuccess3" placeholder="Nombres ..." data-parsley-required data-parsley-error-message="Este campo es obligatorio.">
	              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
	            </div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4 col-sm-4 col-xs-12">Apellido Paterno:</label>
							<div class="col-md-6 col-sm-6 col-xs-12 has-feedback">
                <input type="text" class="form-control" id="inputSuccess3" placeholder="Apellido Paterno...">
                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
              </div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4 col-sm-4 col-xs-12">Apellido Paterno:</label>
							<div class="col-md-6 col-sm-6 col-xs-12 has-feedback">
                <input type="text" class="form-control" id="inputSuccess3" placeholder="Apellido Materno...">
                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
              </div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4 col-sm-4 colxs-12">E-mail:</label>
							<div class="col-md-6 col-sm-6 col-xs-12 has-feedback">
                <input type="text" class="form-control has-feedback-left" id="inputSuccess3" placeholder="example@gmail.com">
                <span class="fa fa-at form-control-feedback left" aria-hidden="true"></span>
              </div>
						</div>
					</div>

					<div class="col-md-6 col-sm-6 col-xs12">
						<div class="form-group">
							<label class="control-label col-md-4 col-sm-4 colxs-12">Usuario:</label>
							<div class="col-md-6 col-sm-6 col-xs-12 has-feedback">
                <input type="text" class="form-control has-feedback-left" id="inputSuccess3" placeholder="Usuario...">
                <span class="fa fa-group form-control-feedback left" aria-hidden="true"></span>
              </div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4 col-sm-4 colxs-12">Contraseña:</label>
							<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" id="inputSuccess3" placeholder="Contraseña...">
                <span class="fa fa-unlock-alt form-control-feedback left" aria-hidden="true"></span>
              </div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4 col-sm-4 colxs-12">Repetir Contraseña:</label>
							<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" id="inputSuccess3" placeholder="Repetir Contraseña...">
                <span class="fa fa-unlock-alt form-control-feedback left" aria-hidden="true"></span>
              </div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4 col-sm-4 colxs-12">Tipo:</label>
							<div class="col-md-6 col-sm-6 col-xs-12 form-group">
								<select class="form-control">
									<option value=""></option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4 col-sm-4 colxs-12">Accede a:</label>
							<div class="col-md-6 col-sm-6 col-xs-12 form-group">
								<select class="select2_multiple form-control" multiple="multiple">
									<option value=""></option>
								</select>
							</div>
						</div>
					</div>
          <div class="col-md-12 col-sm-12 col-xs-18">
          	<div class="ln_solid"></div>
          </div>

          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <button type="submit" class="btn btn-grey"><i class="fa fa-trash"></i> Cancelar</button>
              <button type="submit" id="btnGuadar" class="btn btn-info"><i class="fa fa-save"></i> Guardar</button>
            </div>
          </div>
				</form>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>

	<div class="col-md-12 col-sm-12 col-xs-12">
		<table id="datatable-buttons" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>N°</th>
					<th>DNI</th>
					<th>Apellidos y Nombres</th>
					<th>Usuario</th>
					<th>E-mail</th>
				</tr>
			</thead>

			<tbody>
				
			</tbody>
		</table>
	</div>

</div>

	<script src="modulos/usuarios/js/funciones.js"></script>