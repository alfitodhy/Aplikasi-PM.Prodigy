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
            <div class="col-md-8 text-center">
                <!-- Heading Text  -->
                <div class="heading_text text-left wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h2><?php echo $cat->title ?></h2>
                    <p><?php echo $cat->description ?></p>
                    <div class="line-shape"></div>
                </div>
            </div>
            <div class="col-md-4">
                <form class="search search-full wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s" action="<?php echo site_url('home/search') ?>" method="get">
                    <input class="form-control" type="search" placeholder="Masukkan kata kunci" name="question" value="<?php echo set_value('question') ?>">
                </form>
            </div>
            <?php foreach ($faqs as $faq) : ?>
                <div class="col-md-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <a href="<?php echo site_url('topic/' . $faq->faq_id . '-' . permalink($faq->question)) ?>" class="single_faq">
                        <h5>
                            <i class="pe-7s-comment"></i>
                            <?php if (strlen($faq->question) > 70) : ?>
                                <?php echo substr($faq->question, 0, 70) . ".."; ?>
                            <?php else : ?>
                                <?php echo $faq->question; ?>
                            <?php endif ?>
                        </h5>
                    </a>
                </div>
            <?php endforeach; ?>


        </div>
        <div class="row">
            <div class="pagination-container">
                <ul class="pagination">
                    <?php echo $pagination ?>
                </ul>
            </div>
        </div>
    </diV>

</div>