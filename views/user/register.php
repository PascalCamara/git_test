<?php include_once 'views/layout/header.inc.php' ?>
	<!-- CONTAINER -->
	<div class="container">
		<!-- card -->
		<div class="row">
			<div class="col s12">
				<div class="card">
					<div class="card-content blue">
						<span class="card-title white-text">Formulaire d'incription</span>
					</div>
					<div class="card-content">
						<!-- FORMULAIRE -->
						<div class="row">
							<form class="col s12" method="post" action="?module=user&action=register">
								<!-- user_firstname -->
								<div class="row">
									<div class="input-field col s12">
										<input placeholder="Prénom" id="user_firstname" name="user_firstname" type="text" class="validate" required>
										<label for="user_firstname">Prénom</label>
									</div>
								</div>
								<!-- user_lastname -->
								<div class="row">
									<div class="input-field col s12">
										<input placeholder="Nom" id="user_lastname" name="user_lastname" type="text" class="validate" required>
										<label for="user_lastname">Nom</label>
									</div>
								</div>
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
								<!-- user_password_confirm -->
								<div class="row">
									<div class="input-field col s12">
										<input placeholder="Confirmez votre mot de passe" id="user_password_confirm" name="user_password_confirm" type="password" class="validate">
										<label for="user_password_confirm">Confirmez votre mot de passe</label>
									</div>
								</div>
								<!-- user_email -->
								<div class="row">
									<div class="input-field col s12">
										<input placeholder="Email" id="user_email" name="user_email" type="email" class="validate" required>
										<label for="user_email">Email</label>
									</div>
								</div>
								<!-- submit -->
								<button class="btn blue waves-effect waves-light" type="submit" required>S'inscrire
									<i class="material-icons right">send</i>
								</button>
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