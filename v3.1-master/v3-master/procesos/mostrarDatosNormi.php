<?php

	require_once "../crud/crud.php";
	$obj = new crud();
	$datos = $obj -> mostrarDatos();

	$tabla ='<table class="table table-dark">
				<thead>
					<tr class="font-weight-bold">
						<td>Nombre</td>
						<td>Archivo</td>
						<td>Utima modificacion</td>
						<td>Descargar</td>
						
						
					</tr>
				</thead>
				<tbody>';
	$datosTabla = "";

	foreach ($datos as $key => $value) {
		$datosTabla = $datosTabla.'<tr>
									<td>'.$value['sustancia'].'</td>
									<td>'.$value['url'].'</td>
									<td>'.$value['fecha'].'</td>
									<td>
										<span class="btn btn-info btn-lg" onclick="obtenerDatos('.$value['id'].')" data-toggle="modal" data-target="#actualizarModal">
											<i class="fas fa-edit"></i>
										</span>
										
									</td>
									
								</tr>';
	}

	echo $tabla.$datosTabla.'</tbody></table>';

?>