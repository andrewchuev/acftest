<?php

$donation = HOME_PAGE_OPTIONS['donation_group'];

?>
    <section id="donation">
        <div class="container">

            <div class="row mb-5">
                <h1 class="fw-bolder display-2 my-5 text-uppercase text-center"><?= $donation['title'] ?></h1>
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <img src="<?= $donation['image']['url'] ?? '' ?>" class="w-100" alt="">
                </div>
                <div class="col-lg-6" >
                    <h2 class="mt-5 ms-lg-5">
						<?= $donation['subtitle'] ?>
                    </h2>
					<?php
					foreach ( $donation['items'] as $item ) {
						?>

                        <a class="btn d-block fs-3 crypto-account my-4" href="<?= $item['url'] ?>">
                            <span style="color: white"><?=  $item['image'] ?></span>
                            <?= $item['title'] ?>
                        </a>


						<?php
					}
					?>
                </div>
            </div>

            <div id="crypto-transfer" class="row p-lg-5">
                <h2 class="fw-bolder text-uppercase text-center"><?= $donation['crypto_title'] ?></h2>
				<?php
				foreach ( $donation['crypto_items'] as $item ) {
					?>
                    <div class="col-lg-6 mt-5">
                        <div class="crypto-account d-flex px-3 py-2 align-items-center justify-content-lg-around wow fadeInUp" data-wow-delay="0.4s">

                            <div class="me-3">
                                <img class="img-fluid" src="<?= $item['image']['url'] ?>" style="max-width: 50px" alt="">
                            </div>

                            <div class="col text-truncate">
                                <h3 class="text-dark"><?= $item['title'] ?></h3>
                                <span class="crypto-account-number text-dark"><?= $item['account'] ?></span>
                            </div>

                            <div class="">
                                <i class="far fa-copy text-secondary" data-target="<?= $item['account'] ?? '' ?>"></i>
                            </div>

                        </div>
                    </div>

					<?php
				}

				?>
            </div>




            <div id="bank-transfer" class="row g-0 g-lg-5 mt-5">
                <h2 class="fw-bolder text-uppercase text-center"><?= $donation['bank_donation_title'] ?></h2>
                <div class="col-lg-6">
                    <h3 class="fw-bold my-3 text-uppercase"><?= $donation['donation_uah_title'] ?></h3>
					<?php
					foreach ( $donation['donation_uah_items'] as $item ) {
						?>

                        <div class="donation-caption">
                            <?= $item['caption'] ?>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h4 class="bank-item"><?= $item['value'] ?></h4> <i class="far fa-copy text-secondary" data-target="<?= $item['target'] ?? '' ?>"></i>
                        </div>

						<?php
					}
					?>
                </div>

                <div class="col-lg-6">
                    <h3 class="fw-bold my-3 text-uppercase"><?= $donation['donation_swift_title'] ?></h3>
		            <?php
		            foreach ( $donation['donation_swift_items'] as $item ) {
			            ?>

                        <div class="donation-caption mt-3">
				            <?= $item['caption'] ?>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h4 class="swift-item"><?= $item['value'] ?></h4> <i class="far fa-copy text-secondary" data-target="<?= $item['target'] ?? '' ?>"></i>
                        </div>

			            <?php
		            }

		            ?>
                </div>
            </div>
        </div>
    </section>
<?php
