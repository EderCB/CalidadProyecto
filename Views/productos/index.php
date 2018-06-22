<div class="box-principal">
<h3 class="titulo">Listado de Productos<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Listado de Productos</h3>
	  </div>
	  <div class="panel-body">
	    <table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>Nombre</th>
		      <th>Categoria</th>
		      <th>Fecha Registro</th>
		      <th>Costo</th>
		      <th>Precio</th>
		      <th>Stock</th>
		      <th>Acción</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php while($row = mysqli_fetch_array($datos)){ ?>
		  	<tr>
					<td><?php echo $row['nombre_producto']; ?></td>
					<td><?php echo $row['categoria']; ?></td>
			    	<td><?php echo $row['fecha_registro']; ?></td>
			    	<td><?php echo $row['costoxu']; ?></td>
			    	<td><?php echo $row['precioxu']; ?></td>
			    	<td><?php echo $row['stock']; ?></td>
			    	<td><a class="btn btn-warning" href="<?php echo URL; ?>/productos/editar/<?php echo $row['id_producto']; ?>">Editar</a>
						<a class="btn btn-danger" href="<?php echo URL; ?>/productos/eliminar/<?php echo $row['id_producto']; ?>">Eliminar</a>
					</td>
			</tr>
			<?php } ?>
		  </tbody>
		</table> 
	  </div>
	</div>
</div>