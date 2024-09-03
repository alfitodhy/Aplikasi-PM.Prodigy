<div class="container">
    <div class="row">
        <div class="col-lg-6 align-self-center">
        </div>
    </div>
</div>



<div id="about" class="">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
            </div>
        </div>
    </div>
</div>

<div id="clients" class="the-clients">
    <div class="container">
        <div class="row">
            <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                <h4>Cari Berbagai Macam <em>Konsultasi / Masalah</em> yang sebelumnya sudah diselesaikan</h4>

                <form class="search search-full" action="<?php echo site_url('home/search') ?>" method="get">
                    <input class="form-control" type="search" placeholder="Project Management" name="question" value="<?php echo set_value('question') ?>">
                </form>
            </div>
        </div>

    </div>
</div>


<div class="random-faqs">
    <div class="row">
        <div class="col-12 text-center">
            <!-- Heading Text  -->
            <div class="heading_text">
                <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h4><em>Topik</em> yang sering di bicarakan</h4>

                    <div class="line-shape"></div>
                </div>
            </div>

            <?php foreach ($faqs as $item) : ?>
                <div class="col-md-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <a href="<?php echo site_url('topic/' . $item->faq_id . '-' . permalink($item->question)) ?>" class="single_faq">
                        <h5>
                            <i class="pe-7s-comment"></i>
                            <?php if (strlen($item->question) > 70) : ?>
                                <?php echo substr($item->question, 0, 70) . ".."; ?>
                            <?php else : ?>
                                <?php echo $item->question; ?>
                            <?php endif ?>
                        </h5>
                    </a>
                </div>
            <?php endforeach; ?>

        </div>
    </diV>

</div>
</section>