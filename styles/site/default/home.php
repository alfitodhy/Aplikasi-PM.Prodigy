<section id="home_wrapper" class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">

    <div class=" container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
                            data-wow-delay="1s">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2><?php echo config('home_banner_title') ?></h2>
                                    <p><?php echo config('home_banner_description') ?></p>

                                </div>

                                <div class="col-lg-12">
                                    <div class="border-button">
                                        <?php if (!(user())): ?>
                                            <a href="javascript:popup_switch('login')">
                                                <i class="fa fa-users fa"></i> Konsultasi Disini</a>
                                        <?php else: ?>
                                            <a href="<?php echo site_url('dashboard/ticket') ?>">
                                                <i class="fa fa-users fa"></i> Konsultasi Disini
                                            </a>
                                        <?php endif ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    &nbsp;
                    <div class="col-lg-6">
                        <img src="<?php echo STYLE_IMAGES ?>/hplogo.png" class="img-responsive"
                            alt="<?php echo config('title') ?>" />
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>



<div id="services" class="services section">
    <div class="container">
        <div class="row">
            <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                <h4>Pelajari <em>Selengkapnya &amp; Tentang</em> Kami</h4>
                <img src="<?php echo STYLE_IMAGES ?>/heading-line-dec.png" />
                <p>Apakah proyek Anda sering menghadapi hambatan yang tak terduga? Kini saatnya untuk beralih ke solusi
                    yang terbukti dengan layanan <a href="" target="_parent"> </a> kami.</p>
            </div>
        </div>
    </div>
</div>




<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="service-item first-service wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                <i class="fa fa-users fa-3x" aria-hidden="true" style="color: #00a19f;"></i>
                <h4 style="margin-top: 1.25em;">Konsultasi</h4>
                <p style="margin-top: 1.25em; margin-bottom: 5.00em;">Apakah proyek Anda sering menghadapi hambatan yang
                    tak terduga? Kini saatnya untuk beralih ke solusi yang terbukti dengan layanan konsultasi manajemen
                    proyek kami.</p>

            </div>
        </div>
        <div class="col-lg-3">
            <div class="service-item second-service wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">
                <i class="fa fa-tasks fa-3x" aria-hidden="true" style="color: #00a19f;"></i>
                <h4 style="margin-top: 1.25em;">Training</h4>
                <p>Belajar kapan saja dan di mana saja dengan program pembelajaran daring kami yang komprehensif.
                    Dapatkan pengetahuan dan keterampilan terbaru di bidang manajemen proyek dengan materi yang
                    dirancang oleh para ahli.</p>
            </div>
        </div>


        <div class="col-lg-3">
            <div class="service-item fourth-service wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.8s">
                <i class="fa fa-comments fa-3x" aria-hidden="true" style="color: #00a19f;"></i>
                <h4 style="margin-top: 1.25em;">Membimbing</h4>
                <p style="margin-top: 1.25em; margin-bottom: 7.20em;">Kami tidak hanya menawarkan solusi, tetapi juga
                    berbagi wawasan dan pengalaman berharga yang dapat membantu Anda dan tim Anda berkembang.</p>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="service-item third-service wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.7s">
                <i class="fa fa-calendar fa-3x" aria-hidden="true" style="color: #00a19f;"></i>
                <h4 style="margin-top: 1.25em;">Hubungi Sekarang</h4>
                <p style="margin-top: 1.25em; margin-bottom: 3.20em;">Jangan biarkan proyek Anda terjebak dalam
                    ketidakpastian. Biarkan kami membantu Anda mencapai kesuksesan yang Anda impikan. Hubungi kami hari
                    ini dan mulailah perjalanan menuju proyek yang lebih efektif dan efisien!</p>
            </div>
        </div>


    </div>
</div>
</div>




<div id=" training" class="pricing-tables">
    <div class="container">
        <div class="row">
            <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="section-heading">
                    <h4>Kita Punya <em>Training</em> Yang bisa kamu ikuti</h4>
                    <img src="<?php echo STYLE_IMAGES ?>/heading-line-dec.png" />
                </div>
            </div>

            <div class="col-lg-4">
                <div class="pricing-item-regular wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <span class="price">Rp. 7.000.000</span>
                    <h4>Prep Exam Project Scheduling Professional (PMI-SP)</h4>
                    <div class="icon">
                        <img src="<?php echo STYLE_IMAGES ?>/pmi.png" />
                    </div>
                    <ul>
                        <li>Welcome to our intensive 1-month PMI-SP Exam Training Program.</li>
                        <li class="list-group-item list-group-item-action">Exam Admission guidance</li>
                        <li class="list-group-item list-group-item-action">Post-program Monitoring</li>
                        <li class="list-group-item list-group-item-action">Money back guarantee</li>
                        <li class="list-group-item list-group-item-action">Mock-up test simulator</li>
                        <li class="list-group-item list-group-item-action">Flexible learning</li>
                        <li class="list-group-item list-group-item-action">Interactive Q&A Sessions</li>
                        <li class="list-group-item list-group-item-action">Facilitated by Certified Scheduling
                            professional</li>

                    </ul>
                    <div class="border-button">
                        <?php if (!(user())): ?>
                            <a href="javascript:popup_switch('login')">
                                <i class="fa fa-calendar-check-o"></i> BOOK NOW</a>
                        <?php else: ?>
                            <a href="<?php echo site_url('book') ?>">
                                <i class="fa fa-calendar-check-o"></i> BOOK NOW
                            </a>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pricing-item-regular wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">
                    <span class="price">RP. 3.000.000</span>
                    <h4>Oracle Primavera P6 Versions 8 to 22 PPM Professional</h4>
                    <div class="icon">
                        <img src="<?php echo STYLE_IMAGES ?>/p6.png" />
                    </div>
                    <ul>
                        <li>Learn the Fundamentals of Primavera P6 Professional as used in engineering and construction
                            in just 4 days.</li>
                        <li class="list-group-item list-group-item-action">Basic Course</li>
                        <li class="list-group-item list-group-item-action">Planning & Scheduling concept</li>
                        <li class="list-group-item list-group-item-action">Planning Project without resource using P6
                        </li>
                        <li class="list-group-item list-group-item-action">Editing, Sorting, Layouting, Baselining</li>
                        <li class="list-group-item list-group-item-action">Workshop - case basis</li>

                    </ul>
                    <div class="border-button">
                        <?php if (!(user())): ?>
                            <a href="javascript:popup_switch('login')" style="margin-top: 6.40em; margin-bottom: 0.50em;">
                                <i class="fa fa-calendar-check-o"></i> BOOK NOW</a>
                        <?php else: ?>
                            <a href="<?php echo site_url('book') ?>" style="margin-top: 6.40em; margin-bottom: 0.50em;">
                                <i class="fa fa-calendar-check-o"></i> BOOK NOW
                            </a>
                        <?php endif ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="pricing-item-regular wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.7s">
                    <span class="price">RP. 8.000.000</span>
                    <h4>Prep Exam PMP® (Project Management Professional)</h4>
                    <div class="icon">
                        <img src="<?php echo STYLE_IMAGES ?>/logopmp.png" />
                    </div>
                    <ul>
                        <li>Welcome to our intensive 2-months PMP Exam Training Program.</li>
                        <li class="list-group-item list-group-item-action">Exam Admission guidance</li>
                        <li class="list-group-item list-group-item-action">Post-program Monitoring</li>
                        <li class="list-group-item list-group-item-action">Money back guarantee</li>
                        <li class="list-group-item list-group-item-action">Mock-up test simulator</li>
                        <li class="list-group-item list-group-item-action">Flexible learning</li>
                        <li class="list-group-item list-group-item-action">Interactive Q&A Sessions</li>
                        <li class="list-group-item list-group-item-action">Facilitated by 4 certified PMP</li>

                    </ul>
                    <div class="border-button">
                        <?php if (!(user())): ?>
                            <a href="javascript:popup_switch('login')" style="margin-top: 1.25em; margin-bottom: 0.50em;">
                                <i class="fa fa-calendar-check-o"></i> BOOK NOW</a>
                        <?php else: ?>
                            <a href="<?php echo site_url('book') ?>" style="margin-top: 1.25em; margin-bottom: 0.50em;">
                                <i class="fa fa-calendar-check-o"></i> BOOK NOW
                            </a>
                        <?php endif ?>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>