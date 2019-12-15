<div class="container">

	<!--=========================
	=            img            =
	==========================-->
				<?php    $show =parent::detalles($_REQUEST['id']); ?>
		
	
	<!--====  End of img  ====-->
		<form action="?c=Usuarios&m=actualizar" method="POST" enctype="multipart/form-data">
			<div class="row">	
			<div class="col-md-4 mt-5 card">
			<br>
	
			
			<?php if(empty($show->foto_perfil)): ?>
						<img src="assets/img/img_profile_default.jpg" width="280" class="card-img-top" alt="">

					<?php elseif($show->foto_perfil == "assets/img/"): ?>
						<img src="assets/img/img_profile_default.jpg" width="280" class="card-img-top" alt="">
					<?php else: ?>
						<img src="<?php echo $show->foto_perfil ?> " width="280" class="card-img-top" alt="">
					<?php endif; ?> 
		<br>
		<input name="foto_perfil" type="file" required  >
		
		
	   
	
		</div>		
		<div class="col-md-4 mt-5 ">
		
			<br>
			<div class="form-group">
			<label class="h5">Nombre</label>
			<input type="text" name="nombres"class="form-control"required value="<?php echo $show->nombres ?>"> 
			</div>                                       
			
			<div class="form-group">
			<label class="h5">Correo</label>
			<input type="text" name="correo" class="form-control"required value="<?php echo $show->correo ?>"> 
			</div> 

			<div class="form-group">
			<label class="h5">Telefono</label>
			<input type="text" name="telefono" class="form-control"required value="<?php echo $show->telefono ?>">
			<button class="btn btn-success btn-block mt-5" type="submit">Editar Datos</button>
			 
			</div> 
	

		</div>

		<div class="col-md-4 mt-5 ">
		<div class="form-group">
			<br>
			<label class="h5">Apellidos</label>
			<input type="text" name="apellidos"class="form-control"required value="<?php echo $show->apellidos ?>"> 
			</div> 

			<div class="form-group">
			<label class="h5">Direccion</label>
			<input type="text" name="direccion"class="form-control"required value="<?php echo $show->direccion ?>"> 
			</div> 
			  <input name="updated-at"type="hidden" class="form-control"required value="<?php echo date('Y-m-d H:i:s'); ?>">
			   <input name="id"type="hidden" class="form-control"required value="<?php echo $show->id ?>">
			<br>
			<br>
			<br>
		
			<a href="?c=usuarios&m=index" class="btn btn-info btn-block mt-5">Regresar a Inicio</a>
		</div>
		</div>

		</form>
	
	
	
	

		</div>




	
