<div class="container">
	<h1> <?php echo $titulo ?> </h1>

	<table class="table table-dark table-striped">
		<thead>
			<tr>
				<th scope="col">Id Cliente</th>
				<th scope="col">Id de Plan Contratado</th>
				<th scope="col">Producto</th>
				<th scope="col">Fecha de Ingreso</th>
			</tr>
		</thead>
		<tbody>

			<?php foreach ($resultados as $resultado) {
				$fecha = explode("-", $resultado->fecha_ingreso);
				$producto = $resultado->id_producto;

				if (($fecha[1] > 4 && $producto === "#142") ||
					($fecha[1] > 8 && $producto === "#133")) {
			?>

				<tr>
					<th scope="row"> <?= $resultado->id_cliente; ?> </th>
					<td> <?= $resultado->id_plan; ?> </td>
					<td> <?= $resultado->id_producto; ?> </td>
					<td> <?= $resultado->fecha_ingreso; ?> </td>
				</tr>

			<?php 
				}
			}
			?>

		</tbody>
	</table>
</div>
