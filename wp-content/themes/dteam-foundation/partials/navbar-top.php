<?php

$menu = HOME_PAGE_OPTIONS['main_menu_group'];

?>
<nav class="navbar navbar-expand-lg bg-dark text-light sticky-top">
	<div class="container">
		<a class="navbar-brand" href="<?= LANGURL ?>/">
            <img src="<?= TEMPLATE_DIRECTORY_URI ?>assets/img/logo-light.webp" alt="Logo" class="img-fluid d-inline-block p-2 align-text-top" style="max-height: 50px">
        </a>
		<button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
		        aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">

			<ul class="navbar-nav mx-auto me-0">

                <i class="fas fa-globe d-none d-lg-block" style="position: relative; float: left; margin-top: 13px"></i>
                <div id="lang-switcher">
                    <?php echo do_shortcode( '[wpml_language_switcher][/wpml_language_switcher]' ) ?>
                </div>

                <li class="nav-item mx-lg-4">
                    <a href="#" id="theme-switcher" class="nav-item nav-link dark-theme" data-toggle="tooltip" data-placement="top" title="Theme Switcher"> <i class="fas fa-sun fw-normal"></i> </a>
				</li>

                <?php
                foreach ( $menu['items'] as $item ) {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= $item['url'] ?>"><?= $item['title'] ?></a>
                    </li>
                <?php
                }
                ?>

				<li class="nav-item">
					<a href="/#donation" class="btn btn-primary ms-lg-5 me-lg-2 mb-3 mb-lg-0" type="button">Donation</a>
				</li>

			</ul>

		</div>

	</div>
</nav>
