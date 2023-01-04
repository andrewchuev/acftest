<?php

$contacts = HOME_PAGE_OPTIONS['contacts_group'];
?>
    <section id="contacts">
        <div class="container">
            <div class="row">
                <div class="col-12 my-5">
                    <h2 class="text-center display-2 fw-bold wow fadeInUp"><?= $contacts['title'] ?></h2>
                    <h5 class="text-center wow fadeInDown"><?= $contacts['subtitle'] ?></h5>
                </div>
                <div class="col-12 col-lg-6 wow fadeInLeft">
					<?php
					foreach ( $contacts['items'] as $item ) {
						?>
                        <div class="d-flex align-items-center ms-lg-3 my-3">
                            <div class="me-3">
                                <img class="img-fluid rounded-pill" src="<?= $item['image']['sizes']['thumbnail'] ?? '' ?>" alt="" style="max-width: 96px; max-height: 96px">
                            </div>
                            <div>
                                <h3 class=""><?= $item['title'] ?></h3>
                                <div><?= $item['post'] ?></div>
                                <a href="<?= $item['link'] ?>" class="text-dark" style="text-decoration: none"><?= $item['contact'] ?></a>
                            </div>
                        </div>
						<?php
					}
					?>
                </div>

                <div class="col-12 col-lg-6 mt-5 mt-lg-0">
                    <img class="img-fluid" src="<?= HOME_PAGE_OPTIONS['contacts_group']['image']['url'] ?? '' ?>" alt="">
                </div>
            </div>
        </div>
    </section>
<?php
