<div class="box-principal">
<h3 class="titulo">Agregar Nuevo Empleado<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Agregar un nuevo Empleado</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
	  				<div class="form-group">
				      <label for="inputEmail" class="control-label">Género</label>
				      <select name="id_genero" class="form-control">
				      	<?php while($row = mysqli_fetch_array($datos)){ ?>
				      		<option value="<?php echo $row['id_genero']; ?>"><?php echo $row['genero']; ?></option>
				      	<?php } ?>
				      </select>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Ocupación</label>
				      <select name="id_ocupacion" class="form-control">
				      	<?php while($row = mysqli_fetch_array($datos)){ ?>
				      		<option value="<?php echo $row['id_ocupacion']; ?>"><?php echo $row['ocupacion']; ?></option>
				      	<?php } ?>
				      </select>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Cargo</label>
				      <select name="id_cargo" class="form-control">
				      	<?php while($row = mysqli_fetch_array($datos)){ ?>
				      		<option value="<?php echo $row['id_cargo']; ?>"><?php echo $row['cargo']; ?></option>
				      	<?php } ?>
				      </select>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">DNI</label>
				        <input class="form-control" name="dni_emp" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Nombres</label>
				        <input class="form-control" name="nombre_emp" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Apellido Paterno</label>
				        <input class="form-control" name="apellidopat_emp" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Apellido Materno</label>
				        <input class="form-control" name="apellidomat_emp" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Dirección</label>
				        <input class="form-control" name="direccion_emp" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">E-mail</label>
				        <input class="form-control" name="email_emp" type="text" required>
				    </div>
				    
				    <div class="form-group">
				    	 <button type="submit" class="btn btn-success">Registrar</button>
				        <button type="reset" class="btn btn-warning">Borrar</button>
				    </div>
				</form>
	  		</div>
	  		<div class="col-md-1"></div>
	  	</div>
	  </div>
	</div>
</div>