<div class="container ">
<form action="?c=Usuarios&m=create" method="POST" enctype="multipart/form-data" >
    <div class="row d-flex justify-content-center ">
        
  
        <div class="col-6  mt-5 ">
            <div class="row">
      
     
        <div class="form-group col-6">
            <label for="nombres">Nombre</label>
            <input name="nombres" type="text" class="form-control" required placeholder="ingrese su name" >
        </div>

        <div class="form-group col-6">
            <label for="apellidos">Apellidos</label>
            <input name="apellidos"type="text" class="form-control" required placeholder="ingrese su apellido" >
        </div>

        </div>
        
     

        <div class="row">
        <div class="form-group col-6">
            <label for="correo">Correo</label>
            <input name="correo" type="text" class="form-control" required placeholder="ingrese su correo" >
        </div>

        <div class="form-group col-6">
            <label for="telefono">Telefono</label>
            <input  name="telefono" type="text" class="form-control" required   placeholder="ingrese su telefono" >
        </div>

        </div>

        <div class="row">

        <div class="form-group col-12">
            <label for="direccion">Direccion</label>
            <input name="direccion"type="text" class="form-control" required  placeholder="ingrese su direccion" >
        </div>
        <div class="form-group col-12">
            <label for="">Imagen</label>
            <input name="foto_perfil"type="file" class="form-control">
        </div>
      
            <input name="updated-at"type="hidden" class="form-control"  value="<?php echo date('Y-m-d H:i:s'); ?>">
     

        <div class="form-group col-12 text-center " >
            <input type="checkbox" required  class="form-check-input"id="aceptar">
            <label id="aceptar" for="">Acepto Terminos y Condiciones</label>
        </div>
        
        </div>
  

        <div class="form-group">
           
            <button type="submit" class="btn btn-success btn-block">Crear</button>
            <a  href="?c=Usuarios&m=index"class="btn btn-info btn-block">Cancelar</a>
        </div>
        

    </form>
    
    </div>


