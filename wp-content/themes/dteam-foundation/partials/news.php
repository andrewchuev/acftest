<?php
$news = HOME_PAGE_OPTIONS['news_group'];
?>
<section id="news">
    <div class="container  wow fadeInDown">
        <div class="row my-5">
            <h1 class="display-2 fw-bold text-center mt-5"><?= $news['title'] ?></h1>
            <div class="col-12 col-lg-6 my-5">
				<?= $news['text'] ?>
            </div>
            <div class="col-12 col-lg-6 my-5">
                <div id="newsCarousel" class="carousel carousel-dark slide pointer-event" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#newsCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
                        <button type="button" data-bs-target="#newsCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                        <button type="button" data-bs-target="#newsCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                    </div>

                    <div class="carousel-inner">
						<?php
						$gallery = $news['gallery'] ?? [];
                        for (
							$i = 0;
							$i < count( $gallery );
							$i ++
						) {
							$active = $i === 0 ? 'active' : '';
							?>
                            <div class="carousel-item <?= $active ?>" data-bs-interval="10000">
                                <img class="img-fluid" src="<?= $gallery[ $i ]['url'] ?>" alt="">
                            </div>

							<?php
						}
						?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

</section>
<?php
