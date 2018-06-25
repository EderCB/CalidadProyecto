<div class="box-principal">
<h3 class="titulo">Listado de Empleados<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Listado de Empleados</h3>
	  </div>
	  <div class="panel-body">
	    <table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>DNI</th>
		      <th>Nombre</th>
		      <th>Apellido Paterno</th>
		      <th>Genero</th>
		      <th>Cargo</th>
		      <th>Direccion</th>
		      <th>E-mail</th>
		      <th>Acción</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php while($row = mysqli_fetch_array($datos)){ ?>
		  	<tr>
					<td><?php echo $row['dni_emp']; ?></td>
					<td><?php echo $row['nombre_emp']; ?></td>
			    	<td><?php echo $row['apellidopat_emp']; ?></td>
			    	<td><?php echo $row['genero']; ?></td>
			    	<td><?php echo $row['cargo']; ?></td>
			    	<td><?php echo $row['direccion_emp']; ?></td>
			    	<td><?php echo $row['email_emp']; ?></td>
			    	<td><a class="btn btn-warning" href="<?php echo URL; ?>/empleados/editar/<?php echo $row['id_empleado']; ?>">Editar</a>
						<a class="btn btn-danger" href="<?php echo URL; ?>/empleados/eliminar/<?php echo $row['id_empleado']; ?>">Eliminar</a>
					</td>
			</tr>
			<?php } ?>
		  </tbody>
		</table> 
	  </div>
	</div>
</div>