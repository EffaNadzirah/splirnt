<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

  <li class="nav-item dropdown">
	  <a class="nav-link" data-toggle="dropdown" href="#">
		<i class="far fa-user"></i>
	  </a>
	  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right custom-dropdown">
		<div class="dropdown-header">
		  <div class="profile-info">
			<img src="/splirnt/assets/img/profile.png" alt="Profile Image">
			<span class="name">
			          <?php echo strtoupper($_SESSION['name']); ?>

			</span>
		  </div>
		</div>
		<div class="dropdown-divider"></div>
		<a href="/splirnt/pages/hr/Profil/profile.php" class="dropdown-item">
		  <i class="far fa-id-badge"></i>
		  Profil
		</a>
		<div class="dropdown-divider"></div>
		<a href="/splirnt/index.php" class="dropdown-item">
		  <i class="fas fa-sign-out-alt"></i>
		  Log Keluar
		</a>
	  </div>
	</li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
    </ul>
  </nav>