<?php 	$generos = $empleados->listarGeneros();
		$ocupaciones = $empleados->listarOcupaciones();
		$cargos = $empleados->listarCargos(); ?>
<div class="box-principal">
<h3 class="titulo">Editar Emplead(@) <?php echo $datos['nombre_emp']; ?><hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar Empleado <?php echo $datos['nombre_emp']; ?></h3>
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
				      <label for="inputEmail" class="control-label">Ocupación (<b>Ocupación Actual: <?php echo $datos['ocupacion']; ?></b>)</label>
				      <select name="id_ocupacion" class="form-control">
				      	<?php while($row = mysqli_fetch_array($ocupaciones)){ ?>
				      		<option value="<?php echo $row['id_ocupacion']; ?>"><?php echo $row['ocupacion']; ?></option>
				      	<?php } ?>
				      </select>
				    </div>

					<div class="form-group">
				      <label for="inputEmail" class="control-label">Cargo (<b>Cargo Actual: <?php echo $datos['cargo']; ?></b>)</label>
				      <select name="id_cargo" class="form-control">
				      	<?php while($row = mysqli_fetch_array($cargos)){ ?>
				      		<option value="<?php echo $row['id_cargo']; ?>"><?php echo $row['cargo']; ?></option>
				      	<?php } ?>
				      </select>
				    </div>

				    <div class="form-group">
				      <label for="inputEmail" class="control-label">DNI</label>
				        <input   class="form-control" value="<?php echo $datos['dni_emp']; ?>" name="dni_emp" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Nombre</label>
				        <input class="form-control" value="<?php echo $datos['nombre_emp']; ?>" name="nombre_emp" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Apellido Paterno</label>
				        <input class="form-control" value="<?php echo $datos['apellidopat_emp']; ?>" name="apellidopat_emp" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Apellido Materno</label>
				        <input class="form-control" value="<?php echo $datos['apellidomat_emp']; ?>" name="apellidomat_emp" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Dirección</label>
				        <input class="form-control" value="<?php echo $datos['direccion_emp']; ?>" name="direccion_emp" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">E-mail</label>
				        <input class="form-control" value="<?php echo $datos['email_emp']; ?>" name="email_emp" type="text" required>
				    </div>
				    <input value="<?php echo $datos['id_empleado']; ?>" name="id_empleado" type="hidden" required>
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