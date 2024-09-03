<div class="container">
    <div class="row">
        <div class="col-lg-6 align-self-center">
        </div>
    </div>
</div>



<div id="clients" class="the-clients">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">


                <section class="white section">
                    <div class="container">
                        <?php if ($items) : ?>
                            <div class="list-replies">
                                <?php if ($item->subject) : ?><h1><b>Konsultasi: </b><?php echo $item->subject ?></h1><?php endif ?>
                                <?php foreach ($items as $item) : ?>
                                    <div class="reply-block">
                                        <div class="ticket-user">
                                            <?php if ($item->image) : ?>
                                                <img id="<?php echo $item->ticket_id ?>" class="img-circle img-responsive" alt="<?php echo $item->username ?>" src="<?php echo base_url() ?>/cdn/users/<?php echo $item->image ?>" />
                                            <?php else : ?>
                                                <img id="<?php echo $item->ticket_id ?>" class="img-circle img-responsive" alt="<?php echo $item->username ?>" src="<?php echo base_url() ?>/cdn/users/default.png" />
                                            <?php endif ?>
                                        </div>
                                        <div class="ticket-msg">
                                            <div class="ticket-user-det">
                                                <?php echo $item->username ?> <b>Pada</b> <?php echo $item->created ?>
                                            </div>
                                            <p>
                                                <?php echo $item->message ?>
                                            </p>
                                            <?php if ($item->attachment) : ?>
                                                <a class='file-attachet' href="<?php echo base_url() ?>/cdn/pengaduan/<?php echo $item->attachment ?>" target="_blank"> <i class="fa fa-paperclip"></i> Lampiran</a>
                                            <?php endif ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                <div class="clearfix"></div>
                            </div>
                            <?php if (config("display_tickets") == 1) : ?>
                                <div class="list-replies reply-form">
                                    <form method="post" autocomplete="off" enctype="multipart/form-data">
                                        <?php if (validation_errors()) : ?>
                                            <div class="alert alert-danger"><?php echo validation_errors() ?></div>
                                        <?php endif ?>
                                        <?php if (isset($success)) : ?>
                                            <div class="alert alert-success">Sukses</div>
                                        <?php endif ?>
                                        <div class="form-group">
                                            <label for="message">Deskripsi <span class="required-field">*</span></label>
                                            <textarea class="form-control" name="message" value="<?php echo set_value('message') ?>"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="attachement"> Lampiran foto</label>
                                            <button class="btn btn-attached">
                                                <i class="fa fa-paperclip" aria-hidden="true"></i>
                                                <input name="attachment" type="file">
                                                Tambahkan file .zip/.pdf/.png/.jpg/.jpeg
                                            </button>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="button" value="<?php echo lang('global_submit') ?>">
                                        </div>

                                    </form>
                                </div>
                            <?php else : ?>
                                <div class="alert alert-warning ticket-off-msg">
                                    <?php echo config("ticket_off_replies") ?>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if (!$items) : ?>
                            <?php if (config("display_tickets") == 1) : ?>
                                <div class="col-md-8 col-md-offset-2">
                                    <form method="post" autocomplete="off" enctype="multipart/form-data" class="add-new-ticket">
                                        <h4>Buat Konsultasi</h4>
                                        <?php if (validation_errors()) : ?>
                                            <div class="alert alert-danger"><?php echo validation_errors() ?></div>
                                        <?php endif ?>
                                        <?php if (isset($success)) : ?>
                                            <div class="alert alert-success">Konsultasi Berhasil dikirim</div>
                                        <?php endif ?>

                                        <div class="form-group">
                                            <label for="subject">Subject Konsultasi<span class="required-field">*</span></label>
                                            <input class="form-control" type="text" name="subject" value="<?php echo set_value('subject') ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="message">Deskripsi Konsultasi <span class="required-field">*</span></label>
                                            <textarea class="form-control" name="message" value="<?php echo set_value('message') ?>"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="attachement">Lampirkan File </label>
                                            <button class="btn btn-attached">
                                                <i class="fa fa-paperclip" aria-hidden="true"></i>
                                                <input name="attachment" type="file">
                                                <?php echo lang('global_Add_file') ?> .zip/.pdf/.png/.jpg/.jpeg
                                            </button>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary" value="Kirim">
                                        </div>
                                </div>
                                </form>
                    </div>
                <?php else : ?>
                    <div class="alert alert-warning ticket-off-msg">
                        <?php echo config("tickets_off_message") ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
            </div>
            <div class="clearfix"></div>
            </section>


        </div>
    </div>
</div>
</div>