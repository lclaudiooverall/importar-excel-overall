<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Importar Datos</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<script>
function validar(f){
f.enviar.value="Por favor, espere";
f.enviar.disabled=true;
f.usuario.value=(f.usuario.value=="")?"Anónimo":f. usuario.value;
return true}
</script>

</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		<hmtl lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: Importar de Excel a la Base de Datos ::</title>
</head>

<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<h1>Importación de Archivos</h1>
			<hr>
			<form name="importa" method="post" action="importar/test.php" enctype="multipart/form-data" onsubmit="return validar(this)">

<div class="input-group">
<input type="file" name="excel" class="form-control" required="">
<span class="input-group-btn">
<input type='submit' name='enviar'  value="Importar" class="btn btn-success" />
</span>
</div><!-- /input-group -->
		
			</form>
		</div>


	</div>
</div>
</body>
</html>