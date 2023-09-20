

<?php 
	// Indicamos el fichero donde estan las funciones que permiten conectarnos a la BBDD
	include "../funciones_cms.php";
?>

<html lang="es">

	<head>
		<meta content="text/html; charset-utf-8"/>
		<title> CMS - LOTOLUCK </title>

		<!-- Agregamos la hoja de estilos -->
		<link rel="stylesheet" href="../CSS/style_CMS_2.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.0-canary.13/tailwind.min.css">
        
		<!-- Agregamos script para peticiones ajax -->
		<script
			  src="https://code.jquery.com/jquery-3.6.0.min.js"
			  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
			  crossorigin="anonymous">
		</script>
		<!--paginador-->
		<link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
		<script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
		
	</head>
	<body>
	<?php
        include "../cms_header.php";
	?>
	<div class="containerCMS">
	<?php
		include "../cms_sideNav.php";
	?>
		<main>
		<div class='titulo' style='margin-bottom:1em;'>

			<table width='100%' >
				<tr>
					<td class='titulo'>Usuarios CMS</td>
					<td width="30%"> </td>
					<td Style='text-align:center;'><a class="links" href="usuariosCMS_dades.php?id=-1"><button class="cms"  >  Nuevo </button> </a> </td>
				</tr>
			</table>

		</div>
			
		<div>

			<table class="sorteos"  id='tabla' style='margin-top:0;width:98%;'>
			<thead>
				<tr>
					<th class='cabecera' style='width:3em;font-size:18px;border:solid 0.5px;border-bottom:solid 2px;background-color: #d5d5d5;'> ID </th>
					<th class='cabecera'style='max-width:10%;font-size:18px;border:solid 0.5px;border-bottom:solid 2px;background-color: #d5d5d5;'>Nombre</th>
					<th class='cabecera' style='font-size:18px;border:solid 0.5px;border-bottom:solid 2px;background-color: #d5d5d5;'> Grupo</th>
					<th class='cabecera'style='max-width:5%;font-size:18px;border:solid 0.5px;border-bottom:solid 2px;background-color: #d5d5d5;text-align:center;'> Editar </th>
					
					<th class='cabecera'style='max-width:5%;font-size:18px;border-bottom:solid 2px;background-color: #d5d5d5;text-align:center;'> Eliminar </th>
				</tr>
			</thead>
				<?php
					mostrarUsuariosCMS();					
				?>
					

			</table>
		</div>

         <script type="text/javascript">
		
        </script>
	<script src="../js/paginador.js" type="text/javascript"></script>
	</main>
	</div>
	</body>

</html>