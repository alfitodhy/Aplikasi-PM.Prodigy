<div class="page-title">
    <div class="breadcrumb-env">
        <ul class="user-info-menu left-links list-inline list-unstyled">
            <li class="hidden-sm hidden-xs">
                <a href="#" data-toggle="sidebar">
                    <i class="fa-bars"></i>
                </a>
            </li>
        </ul>
        <ol class="breadcrumb bc-1" >
            <li>
                <a href="<?php echo site_url('admin/dashboard') ?>"><i class="fa-home"></i> Home</a>
            </li>
            <li class="active">
                <strong>Pengguna</strong>
            </li>
        </ol>
    </div>
</div>
<!-- Admin Table-->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Pengguna</h3>
    </div>
    <div class="panel-body">
        <?php if (validation_errors()) : ?>
            <div class="col-md-12">
                <div class="alert alert-danger">
                    <?php echo validation_errors() ?>
                </div>
            </div>
        <?php endif ?>
        <form role="form" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-2 control-label">Group Pengguna <span class="required">*</span></label>
                <div class="col-sm-10">
                    <?php echo form_dropdown('usergroup_id', dd2menu('usergroups', array('usergroup_id' => 'title')), set_value('usergroup_id', $item->usergroup_id ? $item->usergroup_id : '63'), 'class="form-control s2example-1"') ?>
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Username <span class="required">*</span></label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Username" name="username"
                           value="<?php echo set_value('username', $item->username) ?>">
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Nama Depan</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Nama Depan" name="firstname"
                           value="<?php echo set_value('firstname', $item->firstname) ?>">
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Nama Belakang</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Nama Belakang" name="lastname"
                           value="<?php echo set_value('lastname', $item->lastname) ?>">
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Email<span class="required">*</span></label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Email" name="email"
                           value="<?php echo set_value('email', $item->email) ?>">
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Negara <span class="required">*</span></label>
                <div class="col-sm-10">
                    <?php echo form_dropdown('country_id', dd2menu('countries', array('country_id' => 'name')), set_value('country_id', $item->country_id ? $item->country_id : '226'), 'class="form-control s2example-1"') ?>
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Foto <span class="required">*</span></label>
                <div class="col-sm-8">
                    <input class="form-control" type="file" name="image" >
                </div>
                <div class="col-sm-2">
                    <?php if ($item->image): ?>
                        <img src="<?php echo site_url() ?>/cdn/users/<?php echo $item->image ?>" class="img-inline userpic-32" width="40"/>
                    <?php else: ?>
                        <img src="<?php echo base_url() ?>/cdn/users/default.png" class="img-inline userpic-32" width="40">
                    <?php endif ?>
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Password<span class="required">*</span></label>

                <div class="col-sm-10">
                    <input type="password" class="form-control" placeholder="Password" name="password"
                           value="<?php echo set_value('password') ?>">
                </div>
            </div>
            <div class="form-group-separator"></div>
           
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1"> Jenis Kelamin</label>

                <div class="compose-message-editor col-sm-10">
                    <input type="radio" value="pria" name="gender"
                           <?php if (set_value('gender', $item->gender) == 'pria'): ?>checked="checked"<?php endif; ?>>
                    Pria<br/>
                    <input type="radio" value="wanita" name="gender"
                           <?php if (set_value('gender', $item->gender) == 'wanita'): ?>checked="checked"<?php endif; ?>> Wanita
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1"> Status</label>

                <div class="compose-message-editor col-sm-10">
                    <input type="radio" value="aktif" name="status"
                           <?php if (set_value('status', $item->status) == 'aktif'): ?>checked="checked"<?php endif; ?>>
                    Aktif<br/>
                    <input type="radio" value="nonaktif" name="status"
                           <?php if (set_value('status', $item->status) == 'nonaktif'): ?>checked="checked"<?php endif; ?>> Nonaktif
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label"></label>

                <div class="col-sm-10">
                    <input type="submit" class="btn btn-secondary " name="submit" value="Simpan">
                    <a href="<?php echo site_url('admin/users/admins'); ?>" class="btn btn-danger">Batal</a>
                </div>
            </div>
        </form>
    </div>
</div>

