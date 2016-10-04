<?php include_once 'views/layout/header.inc.php' ?>
<div class="row">
	<div class="col s12 l6">
		<div class="card">
			<div class="card-content">
				<span class="card-title">
					<h5><small><i class="material-icons">warning</i></small> Erreur base de donnée </h5>
				</span>
				<div class="card-content">
					<p>Problème au niveau de la base de données ...</p>
				</div>
				<div class="card-action">
				<a href="<?= "?module=".DEFAULT_MODULE."&action=".DEFAULT_ACTION ?>" class="btn blue lighten-2" >Retourner à l'acceuil.</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include_once 'views/layout/footer.inc.php' ?>