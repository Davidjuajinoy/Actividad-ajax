<?php 

 class UsuariosController extends Usuario{
   /*
    * @author  andrescortes
    * @view
    * @return all entity records <usuario>
    */
      public function index(){
          require_once('views/layouts/header.php');
          require_once('views/usuario/index.php');
          require_once('views/layouts/footer.php');
      }
   /*
    * @author  andrescortes
    * @view
    * @return ""
    */
      public function retos(){
        require_once('views/layouts/header.php');
        require_once('views/usuario/retos.php');
        require_once('views/layouts/footer.php');
    }
     /*
    * @author  andrescortes
    * @view
    * @return ""
    */
    public function entregable(){
        require_once('views/layouts/header.php');
        require_once('views/usuario/entregable.php');
        require_once('views/layouts/footer.php');
    }
    public function eliminar(){
      $UsuarioID = $_REQUEST['id'];
      $id = $_REQUEST['id'];
      $usuarios=parent::detalles($id);
      parent::destroy($UsuarioID);
      unlink($usuarios->foto_perfil);
      header('location:?c=usuarios&m=index');
  }

  public function search(){
        require_once('views/layouts/header.php');
        require_once('views/usuario/search.php');
        require_once('views/layouts/footer.php');
 }

 public function search_ajax(){
    $nombre='%'.$_POST['dato'].'%';
    ?>
   
  <tr>
    <td  >Numeros Usuarios registrados con ese nombre</td>
    <td  >Nombre</td>
    <td  >Apellidos</td>
    <td  >Correo</td>
    <td  >Direccion</td>
    <td  >Telefono</td>
  </tr>
   <?php 
   $i=0;
   foreach (parent::searchM($nombre) as $q){
     $i++ ?>
  <tr>
      <td ><?php echo $i?></td>
      <td ><?php echo $q->nombres ?></td>
      <td ><?php echo $q->apellidos?></td>
      <td ><?php echo $q->correo?></td>
      <td ><?php echo $q->direccion?></td>
      <td ><?php echo $q->telefono?></td>

  </tr>
    <?php 
    }
        
  }


  public function perfil(){
        require_once('views/layouts/header.php');
        require_once('views/usuario/perfil.php');
        require_once('views/layouts/footer.php');

  }


  public function create(){

    $Nombres=$_POST['nombres'];
    $Apellidos=$_POST['apellidos'];
    $Correo=$_POST['correo'];
    $Direccion=$_POST['direccion'];
    $Telefono=$_POST['telefono'];
    
     /**  Subida de imagen */
    $foto=$_FILES["foto_perfil"]["name"];
    $ruta=$_FILES["foto_perfil"]["tmp_name"];
    $foto_perfil="assets/img/".$foto;
    move_uploaded_file($ruta, $foto_perfil);


  
  
    date_default_timezone_set('America/Bogota');
    $created_at=date('Y-m-d H:i:s');
    $updated_at=$_POST['updated-at'];
    parent::store($Nombres,$Apellidos,$Correo,$Direccion,$Telefono,$foto_perfil,$created_at,$updated_at);
    header("location:?c=Usuarios&m=index");
  }
  public function createuser(){
    require_once('views/layouts/header.php');
    require_once('views/usuario/crear.php');
    require_once('views/layouts/footer.php');
  }

    public function editar(){
        require_once('views/layouts/header.php');
        require_once('views/usuario/editar.php');
        require_once('views/layouts/footer.php');
        
  }

  public function actualizar(){

    $Nombres=$_POST['nombres'];
    $Apellidos=$_POST['apellidos'];
    $Correo=$_POST['correo'];
    $Direccion=$_POST['direccion'];
    $Telefono=$_POST['telefono'];
    $UsuarioID=$_POST['id'];
    
     /**  Subida de imagen */
    $foto=$_FILES["foto_perfil"]["name"];
    $ruta=$_FILES["foto_perfil"]["tmp_name"];
    $foto_perfil="assets/img/".$foto;
    move_uploaded_file($ruta, $foto_perfil);


  
    date_default_timezone_set('America/Bogota');
   
    $updated_at=$_POST['updated-at'];
    parent::update($Nombres,$Apellidos,$Correo,$Direccion,$Telefono,$foto_perfil,$updated_at,$UsuarioID);
    header("location:?c=Usuarios&m=perfil&id=$UsuarioID");
    
  }





}
?>