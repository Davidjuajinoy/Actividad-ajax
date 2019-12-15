<div class="container">
<br>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item active" aria-current="page">Home</li>
    <li class="breadcrumb-item active" aria-current="page">Usuarios registrados</li>
  </ol>
</nav>
   <br>
   <a href="?c=usuarios&m=createuser" class="btn btn-info"> <i class="fas fa-plus"></i> Crear usuarios</a>
   <a href="?c=usuarios&m=search" class="btn btn-info"> <i class="fas fa-search"></i> Busqueda Avanzada</a>
   <br><br>
   <table class="table table-sm table-hover table-striped table-bordered">
   <tr >
      <th colspan="7" class="text-center bg-info text-white"><?php echo count(parent::request()); ?> Usuario registrados</th>
   </tr>
       <tr class="bg-secondary text-white">
           <th>NOMBRES</th>
           <th>APELLIDOS</th>
           <th>CORREO</th>
           <th>DIRECCION</th>
           <th>TELEFONO</th>
           <th>CRUD</th>
       </tr>
<?php
 $i=0;
foreach(parent::request() as $request){
 $i++;
?>
       <tr>
           <td><?php echo $request->nombres ?></td>
           <td><?php echo $request->apellidos ?></td>
           <td><?php echo $request->correo ?></td>
           <td><?php echo $request->direccion ?></td>
           <td><?php echo $request->telefono ?></td>
           <td>
           <div class="btn-group" role="group" aria-label="Basic example">

           <a href="?c=usuarios&m=editar&id=<?php echo $request->id ?>" class="btn btn-warning btn-sm">Editar</a>
           <a href="?c=usuarios&m=eliminar&id=<?php echo $request->id ?>" class="btn btn-danger btn-sm">Eliminar</a>
           <a href="?c=usuarios&m=perfil&id=<?php echo $request->id ?>" class="btn btn-info btn-sm">Perfil</a>
           </div>
           </td>
       </tr>
<?php  } ?>
  
   </table>
</div>