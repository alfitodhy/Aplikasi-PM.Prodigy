<div class="page-title">
    <div class="breadcrumb-env">
        <ul class="user-info-menu left-links list-inline list-unstyled">
            <li class="hidden-sm hidden-xs">
                <a href="#" data-toggle="sidebar">
                    <i class="fa-bars"></i>
                </a>
            </li>
        </ul>
        <ol class="breadcrumb bc-1">
            <li>
                <a href="<?php echo site_url('admin/dashboard') ?>"><i class="fa-home"></i> Home</a>
            </li>
            <li class="active">
                <strong>Pengaturan Aplikasi </strong>
            </li>
        </ol>
    </div>
</div>

<div class="panel-body">
    <div class="row">
        <?php echo form_open_multipart(false, 'class="form-horizontal" data-validate="parsley"') ?>
        <?php if (validation_errors()) : ?>
            <div class="error"><?php echo validation_errors() ?></div>
        <?php endif ?>
        <div class="col-md-12">
            <ul class="nav nav-tabs nav-tabs-justified">
                <li class="active">
                    <a href="#pengaturan" data-toggle="tab">
                        <span class="visible"><i class="fa fa-cogs"></i></span>
                        <span class="visible">Pengaturan Umum</span>
                    </a>
                </li>
                <li>
                    <a href="#tickets_pengaturans" data-toggle="tab">
                        <span class="visible"><i class="fa fa-comments"></i></span>
                        <span class="visible">Pengaturan Konsultasi</span>
                    </a>
                </li>
                <li>
                    <a href="#contactinfo" data-toggle="tab">
                        <span class="visible"><i class="fa fa-phone"></i></span>
                        <span class="visible">Informasi Kontak</span>
                    </a>
                </li>

                <li>
                    <a href="#seo" data-toggle="tab">
                        <span class="visible"><i class="fa fa-bar-chart"></i></span>
                        <span class="visible">SEO</span>
                    </a>
                </li>

            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="pengaturan">
                    <div>

                        <div class="form-group-separator"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nama Aplikasi</label>
                            <div class="col-sm-10">
                                <?php echo form_input('pengaturan[title]', set_value('pengaturan[title]', $item->title), 'class="bg-focus form-control" data-required="true"') ?>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Logo</label>
                            <div class="compose-message-editor col-sm-8">
                                <input type="file" class="form-control" name="logo">
                            </div>

                            <div class="col-sm-2">
                                <?php if (config('logo')) : ?>
                                    <img src="<?php echo site_url() ?>/cdn/about/<?php echo config('logo') ?>" class="img-inline userpic-32" width="40" />
                                <?php endif ?>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Favicon</label>
                            <div class="compose-message-editor col-sm-8">
                                <input type="file" class="form-control" name="favicon">
                            </div>
                            <div class="col-sm-2">
                                <?php if (config('favicon')) : ?>
                                    <img src="<?php echo site_url() ?>/cdn/about/<?php echo config('favicon') ?>" class="img-inline userpic-32" width="40" />
                                <?php endif ?>
                            </div>

                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Zona Waktu</label>
                            <div class="col-sm-10">
                                <?php echo form_input('pengaturan[default_timezone]', set_value('pengaturan[default_timezone]', $item->default_timezone), 'class="bg-focus form-control"') ?>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Username Disquss</label>
                            <div class="col-sm-10">
                                <?php echo form_input('pengaturan[disqus_username]', set_value('pengaturan[disqus_username]', $item->disqus_username), 'class="bg-focus form-control"') ?>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Google site key</label>
                            <div class="col-sm-4">
                                <?php echo form_input('pengaturan[google_key]', set_value('pengaturan[google_key]', $item->google_key), 'class="bg-focus form-control"') ?>
                            </div>
                            <label class="col-sm-2 control-label">Google secretkey</label>
                            <div class="col-sm-4">
                                <?php echo form_input('pengaturan[google_secret_key]', set_value('pengaturan[google_secret_key]', $item->google_secret_key), 'class="bg-focus form-control"') ?>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Copyright</label>
                            <div class="col-sm-10">
                                <?php echo form_input('pengaturan[copyright]', set_value('pengaturan[copyright]', $item->copyright), 'class="bg-focus form-control" data-required="true" id="copyright"') ?>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Deskripsi</label>
                            <div class="compose-message-editor col-sm-10">
                                <textarea style="height: 150px;" class="form-control" name="pengaturan[description]"><?php echo set_value('pengaturan[description]', $item->description) ?></textarea>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Judul Banner di Home</label>
                            <div class="col-sm-10">
                                <?php echo form_input('pengaturan[home_banner_title]', set_value('pengaturan[home_banner_title]', $item->home_banner_title), 'class="bg-focus form-control" data-required="true" id="copyright"') ?>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Deskripsi Banner</label>
                            <div class="compose-message-editor col-sm-10">
                                <textarea style="height: 150px;" class="form-control" name="pengaturan[home_banner_description]"><?php echo set_value('pengaturan[home_banner_description]', $item->home_banner_description) ?></textarea>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>
                    </div>
                </div>
                <div class="tab-pane" id="tickets_pengaturans">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tampilkan Konsultasi yang dikim</label>
                        <div class="col-sm-10">
                            <label class="radio-inline">
                                <input type="radio" value="1" name="pengaturan[display_tickets]" <?php if (set_value('pengaturan[display_tickets]', $item->display_tickets) == '1') : ?>checked="checked" <?php endif; ?>>
                                <?php echo lang('global_yes') ?>
                            </label>
                            <label class="radio-inline">
                                <input type="radio" value="0" name="pengaturan[display_tickets]" <?php if (set_value('pengaturan[display_tickets]', $item->display_tickets) == '0') : ?>checked="checked" <?php endif; ?>>
                                <?php echo lang('global_no') ?>
                            </label>
                        </div>
                    </div>
                    <div class="form-group-separator"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Pesan Konsultasi tidak aktif</label>

                        <div class="compose-message-editor col-sm-10">
                            <textarea class="form-control" name="pengaturan[tickets_off_message]" id="editor1"><?php echo set_value('lcn[editor1]', $item->tickets_off_message) ?></textarea>
                        </div>
                    </div>
                    <div class="form-group-separator"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Pesan balasan Konsultasi Tidak Aktif</label>
                        <div class="compose-message-editor col-sm-10">
                            <textarea class="form-control" name="pengaturan[ticket_off_replies]" id="editor2"><?php echo set_value('lcn[editor2]', $item->ticket_off_replies) ?></textarea>
                        </div>
                    </div>
                    <div class="form-group-separator"></div>
                </div>
                <div class="tab-pane" id="seo">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Deskripsi Meta</label>
                        <div class="compose-message-editor col-sm-10">
                            <textarea style="height: 150px;" class="form-control" name="pengaturan[meta_description]"><?php echo set_value('pengaturan[meta_description]', $item->meta_description) ?></textarea>
                        </div>
                    </div>
                    <div class="form-group-separator"></div>
                </div>
                <div class="tab-pane" id="contactinfo">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Email Webmaster</label>
                        <div class="col-sm-10">
                            <?php echo form_input('pengaturan[webmaster_email]', set_value('pengaturan[webmaster_email]', $item->webmaster_email), 'class="bg-focus form-control" data-required="true" id="webmaster_email"') ?>
                        </div>
                    </div>
                    <div class="form-group-separator"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Email Support</label>
                        <div class="col-sm-10">
                            <?php echo form_input('pengaturan[support_email]', set_value('pengaturan[support_email]', $item->support_email), 'class="bg-focus form-control" data-required="true" id="support_email"') ?>
                        </div>
                    </div>
                    <div class="form-group-separator"></div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">HP</label>
                        <div class="col-sm-10">
                            <?php echo form_input('pengaturan[phone]', set_value('pengaturan[phone]', $item->phone), 'class="bg-focus form-control" data-required="true" id="phone"') ?>
                        </div>
                    </div>
                    <div class="form-group-separator"></div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Dukungan Lewat Telepon</label>
                        <div class="col-sm-10">
                            <?php echo form_input('pengaturan[support]', set_value('pengaturan[support]', $item->support), 'class="bg-focus form-control" data-required="true" id="support"') ?>
                        </div>
                    </div>
                    <div class="form-group-separator"></div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Alamat Kantor</label>
                        <div class="col-sm-10">
                            <?php echo form_input('pengaturan[address]', set_value('pengaturan[address]', $item->address), 'class="bg-focus form-control" data-required="true" id="address"') ?>
                        </div>
                    </div>
                    <div class="form-group-separator"></div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="field-1">Facebook</label>

                        <div class="col-sm-10">
                            <?php echo form_input('pengaturan[facebook]', set_value('pengaturan[facebook]', $item->facebook), 'class="bg-focus form-control" data-required="true" id="facebook"') ?>
                        </div>
                    </div>
                    <div class="form-group-separator"></div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="field-1">Instagram</label>

                        <div class="col-sm-10">
                            <?php echo form_input('pengaturan[instagram]', set_value('pengaturan[instagram]', $item->instagram), 'class="bg-focus form-control" data-required="true" id="instagram"') ?>
                        </div>
                    </div>
                    <div class="form-group-separator"></div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="field-1">Twitter</label>

                        <div class="col-sm-10">
                            <?php echo form_input('pengaturan[twitter]', set_value('pengaturan[twitter]', $item->twitter), 'class="bg-focus form-control" data-required="true" id="twitter"') ?>
                        </div>
                    </div>
                    <div class="form-group-separator"></div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label"></label>

                    <div class="col-sm-10">
                        <input type="submit" class="btn btn-secondary " name="submit" value="<?php echo lang('global_submit') ?>">
                        <a href="<?php echo site_url('admin/dashboard'); ?>" class="btn btn-danger"><?php echo lang('global_cancel') ?></a>
                    </div>
                </div>
            </div>
        </div>
        <?php echo form_close() ?>
    </div>
</div>
<script src="<?php echo STYLE_JS ?>/ckeditor/ckeditor.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        CKEDITOR.replace('editor1', {
            <?php if (config('direction') == 'ltr') : ?>
                contentsLangDirection: 'ltr'
            <?php else : ?>
                contentsLangDirection: 'rtl'
            <?php endif ?>
        });
        CKEDITOR.replace('editor2', {
            <?php if (config('direction') == 'ltr') : ?>
                contentsLangDirection: 'ltr'
            <?php else : ?>
                contentsLangDirection: 'rtl'
            <?php endif ?>
        });
    });
</script>