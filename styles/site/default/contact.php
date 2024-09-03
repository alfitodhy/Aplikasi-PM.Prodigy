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
            <div class="col-md-12 text-center">
                <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h4><em>Hubungi </em> Kami</h4>
                    <div class="line-shape"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="about_box_plus_text wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h2>TENTANG KAMI</h2>
                    <p><?php echo config('description') ?></p>
                </div>
                <?php if (config('webmaster_email')) : ?>
                    <div class="email_us_text wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h2><?php echo lang('global_Email') ?></h2>
                        <p><?php echo config('webmaster_email') ?></p>
                    </div>
                <?php endif ?>
                <?php if (config('phone')) : ?>
                    <div class="office_1 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h2>Telepon / HP</h2>
                        <p><?php echo config('phone') ?></p>
                    </div>
                <?php endif ?>
                <?php if (config('address')) : ?>
                    <div class="office_2 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h2>Address</h2>
                        <p><?php echo config('address') ?></p>
                    </div>
                <?php endif ?>
            </div>
            <div class="col-md-7">
                <div class="leave_message_text wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h2>Tinggalkan pesan</h2>
                </div>

                <div class="contact_from wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <form action="<?php echo site_url('home/contact') ?>" method="post" id="main_contact_form" autocomplete="off">
                        <div class="contact_input_area">
                            <div id="success_fail_info"></div>
                            <div class="row">
                                <?php if ($success) : ?>
                                    <div class="col-md-12">
                                        <div class="alert alert-success">
                                            Pesan berhasil dikirim.
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (validation_errors()) : ?>
                                    <div class="col-md-12">
                                        <div class="alert alert-danger">
                                            <i class="fa fa-times-circle"></i>
                                            <?php echo validation_errors() ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" value="<?php echo set_value('name') ?>" placeholder="Nama" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" value="<?php echo set_value('email') ?>" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" value="<?php echo set_value('subject') ?>" placeholder="Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea name="message" value="<?php echo set_value('message') ?>" class="form-control" cols="30" rows="10" placeholder="Pesan"></textarea>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn submit-btn">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>

</div>
</div>
</div>
</div>