<?php 	$generos = $clientes->listarGeneros();?>
<div class="box-principal">
<h3 class="titulo">Editar Cliente <?php echo $datos['nombre_cli']; ?><hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar Cliente <?php echo $datos['nombre_cli']; ?></h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-9">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
	  				<div class="form-group">
				      <label for="inputEmail" class="control-label">Género (<b>Género Actual: <?php echo $datos['genero']; ?></b>)</label>
				      <select name="id_genero" class="form-control">
				      	<?php while($row = mysqli_fetch_array($generos)){ ?>
				      		<option value="<?php echo $row['id_genero']; ?>"><?php echo $row['genero']; ?></option>
				      	<?php } ?>
				      </select>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">DNI</label>
				        <input   class="form-control" value="<?php echo $datos['dni_cli']; ?>" name="dni_cli" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Nombres</label>
				        <input class="form-control" value="<?php echo $datos['nombre_cli']; ?>" name="nombre_cli" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Apellido Paterno</label>
				        <input class="form-control" value="<?php echo $datos['apellidopat_cli']; ?>" name="apellidopat_cli" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Apellido Materno</label>
				        <input class="form-control" value="<?php echo $datos['apellidomat_cli']; ?>" name="apellidomat_cli" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Dirección</label>
				        <input class="form-control" value="<?php echo $datos['direccion_cli']; ?>" name="direccion_cli" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Teléfono</label>
				        <input class="form-control" value="<?php echo $datos['telefono_cli']; ?>" name="telefono_cli" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">E-mail</label>
				        <input class="form-control" value="<?php echo $datos['email_cli']; ?>" name="email_cli" type="text" required>
				    </div>
				    <input value="<?php echo $datos['id_cliente']; ?>" name="id_cliente" type="hidden" required>
				    <div class="form-group">
				    	 <button type="submit" class="btn btn-success">Editar</button>
				        <button type="reset" class="btn btn-warning">Borrar</button>
				    </div>
				</form>
	  		</div>
	  	</div>
	  </div>
	</div>
</div>