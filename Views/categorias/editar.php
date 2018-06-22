<div class="box-principal">
<h3 class="titulo">Editar Categorias<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar categoria <?php echo $datos['categoria']; ?></h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="" method="POST">
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Nombre de la categoria</label>
				        <input class="form-control" value="<?php echo $datos['categoria']; ?>" name="categoria" type="text" required>
				    </div>
				    <input value="<?php echo $datos['id_categoria']; ?>" name="id_categoria" type="hidden">
				    <div class="form-group">
				    	 <button type="submit" class="btn btn-success">Editar</button>
				        <button type="reset" class="btn btn-warning">Borrar</button>
				    </div>
				</form>
	  		</div>
	  		<div class="col-md-1"></div>
	  	</div>
	  </div>
	</div>
</div>