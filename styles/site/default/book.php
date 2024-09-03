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

                        <div class="col-md-8 col-md-offset-2 wow fadeInDown" data-wow-duration="1s"
                            data-wow-delay="0.5s">
                            <?php if (validation_errors()): ?>
                                <div class="alert alert-danger"><?php echo validation_errors() ?>
                                </div>
                            <?php endif ?>
                            <?php if (isset($success)): ?>
                                <div class="alert alert-success">Sukses</div>
                            <?php endif ?>
                            <form method="post" autocomplete="off" name="datadiri"
                                action="<?php echo base_url('book/simpan') ?>" class=" add-new-ticket">

                                <h4>FORM DATA BOOKING TRAINING</h4>
                                <div class="form-group">
                                    <label for="kode_booking">Kode Booking<span class="required-field"></span></label>
                                    <input class="form-control" type="text" name="kode_booking"
                                        value="BK<?php echo $invoice; ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama<span class="required-field"></span></label>
                                    <input class="form-control" type="text" name="nama">
                                    <?php echo form_error('nama'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email<span class="required-field"></span></label>
                                    <input class="form-control" type="email" name="email">
                                    <?php echo form_error('email'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="alamat">Asal Kota<span class="required-field"></span></label>
                                    <input class="form-control" type="text" name="alamat">
                                    <?php echo form_error('alamat'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="nohp">No. Handphone / No. WhatsApp<span
                                            class="required-field"></span></label>
                                    <input class="form-control" type="text" name="nohp">
                                    <?php echo form_error('nohp'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="training">Pilih Training</label>
                                    <select class="form-control" name="training">
                                        <option>Pilih Training</option>
                                        <option>Prep Exam Project Scheduling Professional (PMI-SP)</option>
                                        <option>Oracle Primavera P6 Versions 8 to 22 PPM Professional</option>
                                        <option>Prep Exam PMP® (Project Management Professional)</option>
                                        <?php echo form_error('training'); ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Kirim">
                                </div>
                        </div>
                        </form>
                    </div>

            </div>
            <div class="clearfix"></div>
            </section>


        </div>
    </div>
</div>