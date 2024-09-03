<div style="direction: <?php echo lang('dir') ?>;color: #333; width: 60%; margin: auto; border: 1px solid #dedede; font-size: 16px;font-family: sans-serif;">
    <div style="text-align:center; margin-bottom: 15px; background-color: #f9f9f9; padding: 15px 0;">
        <a href="<?php echo site_url() ?>">
            <img src="<?php echo site_url() ?>/cdn/about/<?php echo config('logo') ?>" style="height: 80px;">
        </a>
    </div>
    <div style="padding-bottom: 15px; margin-bottom: 15px; padding: 20px;text-align: left;">
        <h3> <?php echo lang('global_Hi') ?>, <b> <?php echo lang('global_Support_Team') ?></b></h3>
        <p style="line-height: 28px;">
              <?php echo $message ?>
            <br><br>
            <b><?php echo lang('global_Thanks_You') ?></b>
            <br>
        </p>
    </div>
    <div style="text-align: center; border-top: 2px solid #f2435a;padding: 25px 0;background-color: #f9f9f9;">
        <a style="display: inline-block;"><b><?php echo lang('global_Email') ?>:</b> <?php echo config('webmaster_email') ?></a> | <span style="display: inline-block;"><b><?php echo lang('global_Phone') ?>:</b> <?php echo config('phone') ?></span>
    </div>
    <div style="background-color:#f2435a; color: #fff; text-align: center;">
        <p style="margin: 0;padding: 10px 0;"> <?php echo lang('global_Copyright') ?> © <?php echo config('title') ?> <?php echo date('Y'); ?>  </p>
    </div>
</div>
