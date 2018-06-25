<div class="box-principal">
<h3 class="titulo">Listado de Ocupaciones<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Listado de Ocupaciones</h3>
	  </div>
	  <div class="panel-body">
	    <table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>id</th>
		      <th>Ocupación</th>
		      <th>Acción</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php while($row = mysqli_fetch_array($datos)){ ?>
		  	<tr>
		  		<td><?php echo $row['id_ocupacion']; ?></td>
			    <td><?php echo $row['ocupacion']; ?></td>
			 <td>
			 	<a class="btn btn-warning" href="<?php echo URL; ?>/ocupaciones/editar/<?php echo $row['id_ocupacion']; ?>">Editar</a>
				<a class="btn btn-danger" href="<?php echo URL; ?>/ocupaciones/eliminar/<?php echo $row['id_ocupacion']; ?>">Eliminar</a>
			</td>
			</tr>
			<?php } ?>
		  </tbody>
		</table> 
	  </div>
	</div>
</div>