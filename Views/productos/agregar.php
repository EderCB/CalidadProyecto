<div class="box-principal">
<h3 class="titulo">Agregar Productos<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Agregar un nuevo Producto</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
	  				<div class="form-group">
				      <label for="inputEmail" class="control-label">Categoría</label>
				      <select name="id_categoria" class="form-control">
				      	<?php while($row = mysqli_fetch_array($datos)){ ?>
				      		<option value="<?php echo $row['id_categoria']; ?>"><?php echo $row['categoria']; ?></option>
				      	<?php } ?>
				      </select>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Nombre del producto</label>
				        <input class="form-control" name="nombre_producto" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Costo x Unidad</label>
				        <input class="form-control" name="costoxu" type="number" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Precio x u</label>
				        <input class="form-control" name="precioxu" type="number" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Stock</label>
				        <input class="form-control" name="stock" type="number" required>
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