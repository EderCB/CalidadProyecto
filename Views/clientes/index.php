<div class="box-principal">
<h3 class="titulo">Listado de Clientes<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Listado de Clientes</h3>
	  </div>
	  <div class="panel-body">
	    <table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>DNI</th>
		      <th>Nombre</th>
		      <th>Apellido Paterno</th>
		      <th>Género</th>
		      <th>Dirección</th>
		      <th>Teléfono</th>
		      <th>E-mail</th>
		      <th>Acción</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php while($row = mysqli_fetch_array($datos)){ ?>
		  	<tr>
					<td><?php echo $row['dni_cli']; ?></td>
					<td><?php echo $row['nombre_cli']; ?></td>
			    	<td><?php echo $row['apellidopat_cli']; ?></td>
			    	<td><?php echo $row['genero']; ?></td>
			    	<td><?php echo $row['direccion_cli']; ?></td>
			    	<td><?php echo $row['telefono_cli']; ?></td>
			    	<td><?php echo $row['email_cli']; ?></td>
			    	<td><a class="btn btn-warning" href="<?php echo URL; ?>/clientes/editar/<?php echo $row['id_cliente']; ?>">Editar</a>
						<a class="btn btn-danger" href="<?php echo URL; ?>/clientes/eliminar/<?php echo $row['id_cliente']; ?>">Eliminar</a>
					</td>
			</tr>
			<?php } ?>
		  </tbody>
		</table> 
	  </div>
	</div>
</div>