<!-- Titlebar
================================================== -->
<section class="page-crumb">
    <div class="container">
        <div class="page-crumb-block">
            <div class="row">
                <div class="col-md-6 text-left">
                    <h1><?php echo $item->title ?></h1>
                </div>
                <div class="col-md-6 text-right">
                    <div class="bread">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url() ?>"><i class="pe-7s-home"></i> <?php echo lang('global_home') ?></a></li>
                            <li class="active"><?php echo $item->title ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="frequently_asked_question section_padding_100 cat-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Heading Text  -->
                <div class="topic-details" id="topic-details">
                    <div class="heading_text text-left">
                        <h2><?php echo $item->title ?></h2>
                    </div>
                    <div class="content-topic">
                        <p><?php echo $item->content ?></p>
                    </div>
                </div>
            </div>
        </div>     
    </diV>
</section>
