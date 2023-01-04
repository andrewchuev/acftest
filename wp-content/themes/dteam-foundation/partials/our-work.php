<?php

$ourWork = HOME_PAGE_OPTIONS['our_work_group'];
?>

<section id="our-work">
    <div class="container wow fadeInUp" data-wow-delay="0.1s">
        <div class="row my-5">
            <div class="col-12 col-lg-6">
                <img class="img-fluid" src="<?= $ourWork['image']['url'] ?>" alt="">
            </div>
            <div class="col-12 col-lg-6">
                <div class="row">
					<?php
					foreach ( $ourWork['items'] as $item ) {
						?>
                        <div class="col-12 text-center">
                            <div class="icon-light" style="font-size: 5rem">
								<?= $item['image'] ?>
                            </div>
                            <div class="" style="font-size: 2rem"><?= $item['title'] ?></div>
                        </div>
						<?php
					}
					?>
                </div>
            </div>
        </div>
    </div>

</section>

