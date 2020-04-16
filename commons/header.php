	<header class="navbar-wrapper navbar-sticky">
      <div class="d-table-cell align-middle pr-md-3"><a class="navbar-brand mr-1" href="index.html"><img src="<?= base_url("$this->theme_folder/$this->theme/assets/img/logo/logo-dark.png")?>" alt="CreateX"/></a></div>
      <div class="d-table-cell w-100 align-middle pl-md-3">
        <div class="navbar-top d-none d-lg-flex justify-content-between align-items-center">
          <div>
			<a class="navbar-link mr-3" href="tel:+1212477690000"><i class="fe-icon-phone"></i>+1 (212) 477 690 000</a>
			<a class="navbar-link mr-3" href="mailto:support@example.com"><i class="fe-icon-mail"></i>support@example.com</a>
			<a class="social-btn sb-style-3 sb-twitter" href="#"><i class="socicon-twitter"></i></a>
			<a class="social-btn sb-style-3 sb-facebook" href="#"><i class="socicon-facebook"></i></a>
			<a class="social-btn sb-style-3 sb-pinterest" href="#"><i class="socicon-pinterest"></i></a>
			<a class="social-btn sb-style-3 sb-instagram" href="#"><i class="socicon-instagram"></i></a></div>
          <div>
            <ul class="list-inline mb-0">
			  <li class="dropdown-toggle"><a class="navbar-link" href="account-login.html"><i class="fe-icon-user"></i>Layanan Mandiri</a>
                <div class="dropdown-menu right-aligned p-3 text-center" style="min-width: 200px;">
                  <p class="text-sm opacity-70">Untuk mendapatkann pin silahkan hugi operator</p>
				  <a class="btn btn-primary btn-sm btn-block" href="account-login.html">Masuk</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="navbar justify-content-end justify-content-lg-between">
          <!-- Search-->
          <?php $this->load->view($folder_themes .'/commons/search') ?>
		  <!-- Menu-->
		  <?php $this->load->view($folder_themes .'/commons/menu') ?>
          <div>
            <ul class="navbar-buttons d-inline-block align-middle mr-lg-2">
              <li class="d-block d-lg-none"><a href="#mobile-menu" data-toggle="offcanvas"><i class="fe-icon-menu"></i></a></li>
              <li><a href="#" data-toggle="search"><i class="fe-icon-search"></i></a></li>
            </ul>
		  </div>
        </div>
      </div>
    </header>