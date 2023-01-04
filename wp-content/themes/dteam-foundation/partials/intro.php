<?php

$ourHelp = [
	[
		'icon'  => '🚑',
		'title' => 'We help with moving',
		'text'  => 'Looking for an opportunity to leave? Need help finding a bus or car? Contact our organization, volunteers will help you as soon as possible',
	],
	[
		'icon'  => '🚑',
		'title' => 'Humanitarian help',
		'text'  => 'Fundraising for people who find themselves in a difficult situation and are now forced to live in wartime and really need the help they need. Providing humanitarian
                            assistance',
	],
	[
		'icon'  => '🚑',
		'title' => 'Assistance to the Armed Forces',
		'text'  => 'Fundraising for our defenders. We are looking for suppliers, pay and deliver bulletproof vests, thermal imagers, medicines, tactical clothing',
	],
];

$intro = HOME_PAGE_OPTIONS['intro_group'];

?>
<section id="intro">
    <div class="container">
        <div class="row my-5">
            <div class="col text-center p-lg-5">
                <h1 class="text-uppercase display-1 fw-bolder animated zoomIn" style="text-shadow: #000000 1px 1px"><?= $intro['title'] ?? '' ?></h1>
                <p class="my-3 px-5 animated fadeInLeft"><?= $intro['subtitle'] ?? '' ?></p>
                <a class="btn btn-primary btn-lg mt-3 animated fadeInRight" href="<?= $intro['button_url'] ?? '' ?>"><?= $intro['button_text'] ?? '' ?></a>
            </div>
        </div>

		<?php if ( ! empty( $intro['our_help'] ) ) { ?>
            <div class="row row-cols-1 row-cols-lg-3 g-4">
				<?php
				foreach ( $intro['our_help'] as $item ) {
					?>
                    <div class="col">
                        <div class="card text-center bg-dark border border-dark rounded h-100">
                            <div class="text-center display-1 icon-light py-3"><?= $item['image'] ?></div>
                            <div class="card-body">
                                <div class="card-title">
                                    <h2><?= $item['title'] ?></h2>
                                </div>
                                <div class="card-text">
									<?= $item['text'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php
				}
				?>
            </div>
		<?php } ?>
    </div>
</section>
