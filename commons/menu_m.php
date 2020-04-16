	<!-- Off-Canvas Menu-->
    <div class="offcanvas-container is-triggered offcanvas-container-reverse" id="mobile-menu"><span class="offcanvas-close"><i class="fe-icon-x"></i></span>
		<div class="offcanvas-scrollable-area border-top" style="height:calc(100% - 235px); top: 144px;">
			<!-- Mobile Menu-->
			<div class="accordion mobile-menu" id="accordion-menu">
				<?php foreach ($menu_atas as $data): ?>
					<div class="card">
						<div class="card-header"><a class="mobile-menu-link <?php (count($data['submenu']) > 0) and print("active") ?>" href="<?= $data['link']?>"><?= $data['nama'] ?></a><?php (count($data['submenu']) > 0) and print("<a class="collapsed" href="#submenu" data-toggle="collapse"></a>") ?></div>
						<?php if (count($data['submenu']) > 0): ?>
							<div class="collapse" id="submenu" data-parent="#accordion-menu">
								<div class="card-body">
									<?php foreach ($data['submenu'] as $submenu): ?>
										<ul>
											<li class="dropdown-item"><a href="<?= $submenu['link']?>">&nbsp;&nbsp;<?= $submenu['nama']?></a></li>
										</ul>
									<?php endforeach; ?>
								</div>
							</div>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
			
		<!-- Untuk 2 submenu
			<div class="card">
				<div class="card-header"><a class="mobile-menu-link" href="portfolio-style1-boxed.html">Portfolio</a><a class="collapsed" href="#portfolio-submenu" data-toggle="collapse"></a></div>
					<div class="collapse" id="portfolio-submenu" data-parent="#accordion-menu">
						<div class="card-body">
							<ul>
								<li class="dropdown-item"><a href="portfolio-single-side-gallery-grid.html">Single Project</a>
									<ul class="mobile-sublevel">
										<li class="dropdown-item"><a href="portfolio-single-wide-gallery.html">Wide Gallery</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		-->