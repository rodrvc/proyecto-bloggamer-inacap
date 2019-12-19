<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>POST</title>
</head>
<style>

h2{
	text-align:center;
}

table{
	width:50%;
	margin:auto;
	background-color:#FF9;
	border:solid 2px #FF9900;
	padding:5px;
	
}

td{
	padding:5px 0;
}


</style>
</head>

<body>
<h2>Subir Post</h2>
<form action="insertar_contenido.php" method="post" enctype="multipart/form-data" name="form1">
<table >
<tr>
  <td>Título: 
    <label for="campo_titulo"></label></td>
  <td><input type="text" name="campo_titulo" id="campo_titulo"></td>
  
  
  </tr>
  <tr><td>Comentarios: 
    <label for="area_comentarios"></label></td>
    <td><textarea name="area_comentarios" id="area_comentarios" rows="10" cols="50"></textarea></td>
    </tr>
    <input type="hidden" name="MAX_TAM" value="2097152">
  <tr>
  <td colspan="2" align="center">Seleccione una imagen con tamaño inferior a 2 MB</td></tr>
  <tr>
    <td colspan="2" align="left"><input type="file" name="imagen" id="imagen"></td>
    </tr>
    <tr>
    <td colspan="2" align="center">  
    <input type="submit" name="btn_enviar" id="btn_enviar" value="Enviar"></td></tr>
  <tr><td colspan="2" align="center"><a href="borrador.php">Página de visualización del blog</a></td></tr>
  
  </table>

</form>
<p>&nbsp;</p>
  
</body>
</html>