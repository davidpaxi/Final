

<div class="row">
	<div class="page-title">
		<div class="title_left">
      <h3>Gestión de Constancias Pago</h3>
    </div>
	</div>
	<div class="clearfix"></div>

	<div class="well col-md-12 col-sm-12 col-xs-18">
		<form class="form-inline">
			<div class="form-group">
				<label class="">Ingrese numero de DNI:</label>
		    <input type="text" class="form-control" id="" placeholder="DNI...">
		    
				<button class="btn btn-success"><i class="fa fa-search"></i> Buscar</button>
			</div>
		</form>
	</div>

	<div class="well col-md-12 col-sm-12 col-xs-18">
		<div id="datos_personales"></div>

		<form class="form-horizontal form-label-left" onsubmit="return false;">
			<div class="form-group">
				<label class="control-label col-md-4 col-sm-4 col-xs-12">Año:</label>
				<div class="col-md-2 col-sm-2 col-xs-12 ">
					<select class="form-control">
					<option></option>
					<?php
						$aac=date('Y'); //año actual

						for ($i=$aac; $i >=2005 ; $i--) { 
							echo "<option value='".$i."'>$i</option>";
						}
					?>
				</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-4 col-sm-4 col-xs-12">Año:</label>
				<div class="col-md-2 col-sm-2 col-xs-12 ">
					<select class="form-control">
					<option></option>
					<?php
						$meses=array(0=>'Enero',1=>'Febrero',2=>'Marzo',3=>'Abril',4=>'Mayo',5=>'Junio',6=>'Julio',7=>'Agosto',8=>'Setiembre',9=>'Octubre',10=>'Noviembre',11=>'Diciembre');
						$aac=date('m'); //año actual

						for ($i=0; $i <$aac ; $i++) { 
							echo "<option value=''>".$meses[$i]."</option>";
						}
					?>
				</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
					<button type="button" class="btn btn-grey"><i class="fa fa-trash"></i> Resetear</button>
          <button onclick="javascript:cargar_modal();" id="btnGuadar" class="btn btn-info"><i class="fa fa-file-pdf-o"></i> Generar Constancia</button>
        </div>
			</div>
		</form>
	</div>


	<div id="modal_preview_pdf" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
		<div clas="modal-dialog bs-example-modal-sm">
			<div class="modal-content">
				<div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title" id="myModalLabel">Constancia Pago </h4>
        </div>
        <div class="modal-body">
          <object data="tmp/sunat_sol.pdf" type="application/pdf" width="80%" height="500">
          	
          </object>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button  class="btn btn-primary"><i class="fa fa-print"></i> Imprimir</button>
        </div>
			</div>
		</div>
	</div>

</div>
	<script src="modulos/constancias/js/funciones.js"></script>