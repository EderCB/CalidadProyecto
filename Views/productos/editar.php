<?php $categorias = $productos->listarCategorias(); ?>
<div class="box-principal">
<h3 class="titulo">Editar Producto <?php echo $datos['nombre_producto']; ?><hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar Producto <?php echo $datos['nombre_producto']; ?></h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-9">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
	  				<div class="form-group">
				      <label for="inputEmail" class="control-label">Categoría (<b>Categoría Actual: <?php echo $datos['categoria']; ?></b>)</label>
				      <select name="id_categoria" class="form-control">
				      	<?php while($row = mysqli_fetch_array($categorias)){ ?>
				      		<option value="<?php echo $row['id_categoria']; ?>"><?php echo $row['categoria']; ?></option>
				      	<?php } ?>
				      </select>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Nombre del Producto</label>
				        <input class="form-control" value="<?php echo $datos['nombre_producto']; ?>" name="nombre_producto" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Precio x unidad</label>
				        <input class="form-control" value="<?php echo $datos['precioxu']; ?>" name="precioxu" type="number" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Stock</label>
				        <input class="form-control" value="<?php echo $datos['stock']; ?>" name="stock" type="number" required>
				    </div>
				    <input value="<?php echo $datos['id_producto']; ?>" name="id_producto" type="hidden" required>
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