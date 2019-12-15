<div class="container">
<br>
	<div class="row">
			<?php    $show =parent::detalles($_REQUEST['id']); 
		 ?>

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
		
		
	   
	
		</div>		
		

		<div class="col-md-4 mt-5 ">
		
			<br>
			<div class="form-group">
			<label class="h5">Nombre</label>
			<input type="text" class="form-control" disabled value="<?php echo $show->nombres ?>"> 
			</div>                                       
			
			<div class="form-group">
			<label class="h5">Correo</label>
			<input type="text" class="form-control" disabled value="<?php echo $show->correo ?>"> 
			</div> 

			<div class="form-group">
			<label class="h5">Telefono</label>
			<input type="text" class="form-control" disabled value="<?php echo $show->telefono ?>">
			<a href="?c=Usuarios&m=editar&id=<?php echo $show->id?>" class="btn btn-success btn-block mt-5" >Editar Datos</a>
			 
			</div> 
	

		</div>

		<div class="col-md-4 mt-5 ">
		<div class="form-group">
			<br>
			<label class="h5">Apellidos</label>
			<input type="text" class="form-control" disabled value="<?php echo $show->apellidos ?>"> 
			</div> 

			<div class="form-group">
			<label class="h5">Direccion</label>
			<input type="text" class="form-control" disabled value="<?php echo $show->direccion ?>"> 
			</div> 
			<br>
			<br>
			<br>
			<br>
			<br>
		
			<a href="?c=usuarios&m=index" class="btn btn-info btn-block ">Regresar a Inicio</a>
		</div>
		</div>
	</div>
	
	
	

	<br>

	
		

	</div>




	
