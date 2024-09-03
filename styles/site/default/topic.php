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
        </div>


        <section class="frequently_asked_question section_padding_100 clearfix cat-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <!-- Heading Text  -->
                        <div class="topic-details" id="topic-details">
                            <div class="heading_text text-left">
                                <h2><?php echo $item->question ?></h2>

                                <div class="topic-details-head">
                                    <div class="pull-left mini-de">
                                        <span class="date"><i class="fa fa-clock-o"></i> <?php echo date('d M, Y', strtotime($item->created)) ?></span>
                                        <span class="date"><i class="fa fa-eye"></i> <?php echo $item->visits ?></span>
                                        <a href="<?php echo site_url('department/' . $item->category_id . '-' . permalink($item->category)) ?>"><i class="fa fa-folder-open"></i> <?php echo $item->category ?></a>
                                    </div>
                                    <div class="pull-right">
                                        <span id="print-topic"><i class="fa fa-print"></i> <?php echo lang('global_print_topic') ?></span>
                                    </div>
                                </div>
                                <div class="line-shape"></div>
                            </div>
                            <div class="content-topic">
                                <p><?php echo $item->answer ?></p>
                            </div>
                            <div class="topic-comments">
                                <div id="disqus_thread"></div>
                                <script>
                                    (function() {
                                        var d = document,
                                            s = d.createElement('script');
                                        s.src = 'https://<?php echo config('disqus_username') ?>.disqus.com/embed.js';
                                        s.setAttribute('data-timestamp', +new Date());
                                        (d.head || d.body).appendChild(s);
                                    })();
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <form class="search search-full" action="<?php echo site_url('home/search') ?>" method="get">
                            <input class="form-control" type="search" placeholder="" name="question" value="<?php echo set_value('question') ?>">
                        </form>
                        <div class="related-topics">
                            <h3><?php echo lang('global_Related_Topics') ?></h3>
                            <?php foreach ($related_items as $faq) : ?>
                                <a href="<?php echo site_url('topic/' . $faq->faq_id . '-' . permalink($faq->question)) ?>">
                                    <i class="fa fa-angle-double-right"></i>
                                    <?php if (strlen($faq->question) > 35) : ?> <?php echo substr($faq->question, 0, 35) . ".."; ?> <?php else : ?> <?php echo $faq->question; ?> <?php endif ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                        <div class="related-topics">
                            <h3><?php echo lang('global_Recent_Topics') ?></h3>
                            <?php foreach ($recent_items as $recent) : ?>
                                <a href="<?php echo site_url('topic/' . $recent->faq_id . '-' . permalink($recent->question)) ?>">
                                    <i class="fa fa-angle-double-right"></i>
                                    <?php if (strlen($recent->question) > 35) : ?> <?php echo substr($recent->question, 0, 35) . ".."; ?> <?php else : ?> <?php echo $recent->question; ?> <?php endif ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </diV>
        </section>

    </div>
</div>