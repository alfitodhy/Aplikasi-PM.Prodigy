<div class="container">
    <div class="row">
        <div class="col-lg-6 align-self-center">
        </div>
    </div>
</div>


<div id="about" class="about-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">

                <!-- Content
================================================== -->
                <div class="container">
                    <!-- Sidebar
   ================================================== -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="user-box">
                                <div class="user-avatar">
                                    <figure>
                                        <?php if ($item->image) : ?>
                                            <img src="<?php echo base_url() ?>/cdn/users/<?php echo $item->image ?>" alt="<?php echo $item->username ?>">
                                        <?php else : ?>
                                            <img src="<?php echo base_url() ?>/cdn/users/default.png" alt="<?php echo $item->username ?>">
                                        <?php endif ?>
                                    </figure>
                                    <div class="usercontent">
                                        <h3><?php echo $item->username ?></h3>
                                    </div>
                                </div>
                                <nav class="navdashboard">
                                    <ul class="row">
                                        <li class="col-md-6">
                                            <a class="sub-menu-block active" href="<?php echo site_url('dashboard/settings') ?>">
                                                <i class="fa fa-cogs"></i>
                                                <span>Pengaturan</span>
                                            </a>
                                        </li>

                                        <li class="col-md-6">
                                            <a class="sub-menu-block" href="<?php echo site_url('dashboard/tickets') ?>">
                                                <i class="fa fa-commenting"></i>
                                                <span>Konsultasi</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-md-12">

                            <form method="post" class="edit-profile" enctype="multipart/form-data">
                                <h3>Update Profil</h3>
                                <div class="row">
                                    <?php if ($success) : ?>
                                        <div class="col-md-12">
                                            <div class="alert alert-success">
                                                Update Profil berhasil
                                            </div>
                                        </div>
                                    <?php endif ?>
                                    <?php if (validation_errors()) : ?>
                                        <div class="col-md-12">
                                            <div class="alert alert-danger">
                                                <?php echo validation_errors() ?>
                                            </div>
                                        </div>
                                    <?php endif ?>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="firstname">Nama Depan</label>
                                        <input class="form-control" type="text" name="firstname" value="<?php echo set_value('firstname', $item->firstname) ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lastname">Nama Belakang</label>
                                        <input class="form-control" type="text" name="lastname" value="<?php echo set_value('lastname', $item->lastname) ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="username">Username</label>
                                        <input class="form-control" type="text" name="username" value="<?php echo set_value('username', $item->username) ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Email</label>
                                        <input class="form-control" type="email" name="email" value="<?php echo set_value('email', $item->email) ?>" disabled="">
                                    </div>
                                    <div class="selectform-group col-md-6">
                                        <label for="country">Negara</label>
                                        <?php echo form_dropdown('country_id', $countries, set_value('country_id', $item->country_id), 'data-placeholder="Choose Country" class="form-control"') ?>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" name="password">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-control upload-btn">
                                            <i class="fa fa-upload"></i> Foto
                                            <input type="file" name="image">
                                            <?php if ($item->image) : ?>
                                                <img src="<?php echo site_url() ?>/cdn/users/<?php echo $item->image ?>" class="img-upload" alt="<?php echo $item->username ?>" />
                                            <?php else : ?>
                                                <img src="<?php echo base_url() ?>/cdn/users/default.png" class="img-upload" alt="<?php echo $item->username ?>">
                                            <?php endif ?>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="gender">Jenis Kelamin</label>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="radio" value="pria" name="gender" <?php if (set_value('gender', $item->gender) == 'pria') : ?>checked="checked" <?php endif; ?>>Pria
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="radio" value="wanita" name="gender" <?php if (set_value('wanita', $item->gender) == 'wanita') : ?>checked="checked" <?php endif; ?>>Wanita
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <input type="submit" class="btn btn-primary" value="Simpan">
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>