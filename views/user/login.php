<?php include_once 'views/layout/header.inc.php' ?>
	<!-- CONTAINER -->
	<div class="container">
		<!-- card -->
		<div class="row">
			<div class="col s12">
				<div class="card">
					<div class="card-content blue">
						<span class="card-title white-text">Connexion</span>
					</div>
					<div class="card-content">
						<!-- FORMULAIRE -->
						<div class="row">
							<form class="col s12" method="post" action="?module=user&action=login">
								<!-- user_login -->
								<div class="row">
									<div class="input-field col s12">
										<input placeholder="Login" id="user_login" name="user_login" type="text" class="validate" required>
										<label for="user_login">Login</label>
									</div>
								</div>
								<!-- user_password -->
								<div class="row">
									<div class="input-field col s12">
										<input placeholder="Mot de passe" id="user_password" name="user_password" type="password" class="validate" required>
										<label for="user_password">Mot de passe</label>
									</div>
								</div>
								<div class="row">
									<div class="col s12">
										<!-- remember -->
										<p>
											<input type="checkbox" id="remember" name="remember" />
											<label for="remember">Se souvenir de moi</label>
										</p>
									</div>
								</div>
								
								<div class="card-action">
									<!-- submit -->
									<button class="btn blue waves-effect waves-light" type="submit" required>Connexion
									</button>
									<a href="?module=blog&action=home" class="btn white blue-text">Mot de passe oublié</a>
								</div>
							</form>
						</div>
						<!-- ./FORMULAIRE -->
					</div>
					<div class="card-action">
						<a href="?module=blog&action=home" class="btn white-text grey lighten-1">Retour</a>
					</div>
				</div>
			</div>
		</div>
		<!-- ./card -->
	</div>
	<!-- ./CONTAINER -->
<?php include_once 'views/layout/footer.inc.php' ?>