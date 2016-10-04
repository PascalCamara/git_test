<!DOCTYPE html>
  <html lang="fr">
    <head>
      <meta charset="utf-8">
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body class="grey lighten-4">

  <!-- nav -->
    <nav>
      <div class="nav-wrapper blue lighten-1">
        <a href="<?= "?module=".DEFAULT_MODULE."&action=".DEFAULT_ACTION ?>" class="brand-logo"><?= PROJECT_NAME ?></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <?php if (isset($_SESSION['user'])): ?>
              <li><a href="?module=blog&action=posts">Posts</a></li>
            <li><a href="?module=user&action=logout">Logout</a></li>
          <?php else: ?>
            <li><a href="?module=user&action=register">Inscription</a></li>
            <li><a href="?module=user&action=login">Login</a></li>
          <?php endif ?>
          <li>
            <form>
              <div class="input-field">
                <input id="search" type="search" required>
                <label for="search"><i class="material-icons">search</i></label>
              </div>
            </form>
          </li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li>
            <form>
              <div class="input-field">
                <input id="search" type="search" required>
                <label for="search"><i class="material-icons blue-text text-lighten-1">search</i></label>
              </div>
            </form>
          </li>
            <?php if (isset($_SESSION['user'])): ?>
              <li><a href="?module=user&action=logout">Logout</a></li>
            <?php else: ?>
              <li><a href="?module=user&action=register">Inscription</a></li>
              <li><a href="?module=user&action=login">login</a></li>
            <?php endif ?>

        </ul>
      </div>
    </nav>
    <!-- NOTIFICATION -->
    <?php if ( isset($_GET['danger']) || isset($_GET['success']) || isset($_GET['warning']) || isset($_GET['info'])): ?>
      <div class="container">
        <div class="row">
          <div class="col s12">
            <?php if (isset($_GET['danger'])): ?>
            <!-- danger -->
            <div class="card-panel red lighten-2 white-text" onclick="$(this).fadeOut()">
             <?= $notifs_danger[$_GET['danger']] ?>
            </div>
            <?php endif ?>
            <?php if(isset($_GET['success'])): ?>  
            <!-- succes -->
            <div class="card-panel green lighten-2 white-text" onclick="$(this).fadeOut()">
             <?= $notifs_success[$_GET['success']] ?>
            </div>
            <?php endif ?>
            <?php if(isset($_GET['warning'])): ?>  
            <!-- warning -->
            <div class="card-panel orange lighten-2 white-text" onclick="$(this).fadeOut()">
             <?= $notifs_warning[$_GET['warning']] ?>
            </div>
            <?php endif ?>
            <?php if(isset($_GET['info'])): ?>  
            <!-- info -->
            <div class="card-panel blue lighten-2 white-text" onclick="$(this).fadeOut()">
             <?= $notifs_info[$_GET['info']] ?>
            </div>
          <?php endif ?>
          </div>
        </div>
      </div>
    <?php endif ?>

