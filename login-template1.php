<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      <nav id="navbar" class="navbar">
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
	  	<div class="align-left">
			<div>
				<span class="m-1"></span>
			</div>
		<a href="index.html"><button type="submit" value="regresar" class="btn bg-primary float-end text-white w-100">Regresar</button></a>
		</div>
    </div>
  </header>
  
<div id="template-bg-1">
	<div
		class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
		<div class="card p-4 text-light bg-dark mb-5">
			<div class="card-header">
				<h3>Iniciar sesión </h3>
			</div>
			<div class="card-body w-100">
				<form name="login" action="validar.php" method="post">
					<div class="input-group form-group mt-3">
						<div class="bg-secondary rounded-start">
							<span class="m-3"><i class="fas fa-user mt-2"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Usuario"
							name="usuarios">
					</div>
					<div class="input-group form-group mt-3">
						<div class="bg-secondary rounded-start">
							<span class="m-3"><i class="fas fa-key mt-2"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Contraseña"
							name="contraseña">
					</div>
					<div class="form-group mt-3">
						<button type="submit" value="Acceder" class="btn btn-success float-end text-white w-100" name="clave">Acceder</button>
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center">
					
				</div>
			</div>
		</div>
	</div>
</div>
