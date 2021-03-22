<?php 
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

session_start();
$_SESSION['nombre']=$usuario;

include("db.php");



$consulta="SELECT *FROM usuario where Nombre='$usuario' and contraseña='$contraseña'";

$resultado=mysqli_query($sqlconnection,$consulta);
$fila=mysqli_num_rows($resultado);

if($fila)
{
	header("location:registrarProducto.html");	
}else
{
	 ?>
	<?php 
		include("index.html");
	?>
		<script language="javascript">
		window.alert("Usuario o Contraseña incorrectos");
		alert("Ingrese Credenciales correctas");
		</script>
	<?php
}
mysqli_free_result($resultado);
mysqli_close($sqlconnection);

	 




