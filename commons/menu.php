		<!-- Main Menu-->
		<ul class="navbar-nav d-none d-lg-block">
			<li class="nav-item"><a class="nav-link" href="<?= base_url()?>">Home</a></li>
			<?php foreach ($menu_atas as $data): ?>
				<li class="nav-item <?php (count($data['submenu']) > 0) and print("dropdown-toggle") ?>"><a class="nav-link" href="<?= $data['link']?>"><?= $data['nama'] ?></a>
					<?php if (count($data['submenu']) > 0): ?>
						<ul class="dropdown-menu">
							<?php foreach ($data['submenu'] as $submenu): ?>
								<li class="dropdown-item"><a href="<?= $submenu['link']?>"><?= $submenu['nama']?></a></li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</li>
			<?php endforeach; ?>
		</ul>
		<!-- Untuk 2 submenu
		<li class="nav-item dropdown-toggle"><a class="nav-link" href="portfolio-style1-boxed.html">Portfolio</a>
			<ul class="dropdown-menu">
                <li class="dropdown-item has-children"><a href="portfolio-single-side-gallery-grid.html">Single Project</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="portfolio-single-side-gallery-grid.html">Side Gallery Grid</a></li>
                  </ul>
				</li>
            </ul>
		</li>
		-->         