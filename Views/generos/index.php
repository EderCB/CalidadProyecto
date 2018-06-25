<div class="box-principal">
<h3 class="titulo">Listado de Géneros<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Listado de Géneros</h3>
	  </div>
	  <div class="panel-body">
	    <table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>id</th>
		      <th>Género</th>
		      <th>Acción</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php while($row = mysqli_fetch_array($datos)){ ?>
		  	<tr>
		  		<td><?php echo $row['id_genero']; ?></td>
			    <td><?php echo $row['genero']; ?></td>
			 <td>
			 	<a class="btn btn-warning" href="<?php echo URL; ?>/generos/editar/<?php echo $row['id_genero']; ?>">Editar</a>
				<a class="btn btn-danger" href="<?php echo URL; ?>/generos/eliminar/<?php echo $row['id_genero']; ?>">Eliminar</a>
			</td>
			</tr>
			<?php } ?>
		  </tbody>
		</table> 
	  </div>
	</div>
</div>