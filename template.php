<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view($folder_themes .'/commons/meta') ?>
    <?php $this->load->view($folder_themes .'/commons/header_css') ?>
	<?php $this->load->view($folder_themes .'/commons/header_js') ?>
  </head>
  <!-- Body-->
  <body>
	<!-- Menu mobile-->
	<?php //$this->load->view($folder_themes .'/commons/menu_m') ?> <!-- Masih Error-->
    <!-- Header (Logo, Menu, Sosmed, Cari)-->
    <?php $this->load->view($folder_themes .'/commons/header') ?>
    <!-- Page Content-->
    <!-- 2 Sidebar Section with Posts-->
    <section class="bg-secondary pt-5">
      <div class="container py-md-3">
        <div class="row">
          <!-- Disini List Post-->		
		</div>
      </div>
    </section>
    <!-- Footer-->
    <footer class="bg-dark pt-5">
      <div class="container pt-2">
        <div class="row">
		 <!-- Disini Untuk Widget Foother-->
        </div>
      </div>
      <!-- Copyright-->
	  <hr class="hr-light">
      <div class="pt-5" style="background-color: #30363d;">
        <div class="container">
          <div class="d-md-flex justify-content-between align-items-center py-4 text-center text-md-left">
            <div class="order-2"><a class="footer-link text-white" href="#">About</a><a class="footer-link text-white ml-3" href="#">Help &amp; Info</a><a class="footer-link text-white ml-3" href="#">Privacy Policy</a></div>
            <p class="m-0 text-sm text-white order-1"><span class='opacity-60'>© All rights reserved. Made with</span> <i class='d-inline-block align-middle fe-icon-heart text-danger'></i> <a href='http://createx.studio/' class='d-inline-block nav-link text-white opacity-60 p-0' target='_blank'>by Createx Studio</a></p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="fe-icon-chevron-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <?php $this->load->view($folder_themes .'/commons/foother_js') ?>
  </body>
</html>