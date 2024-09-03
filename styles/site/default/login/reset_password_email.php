<div style="direction: <?php echo lang('dir') ?>;color: #333; width: 60%; margin: auto; border: 1px solid #dedede; font-size: 16px;font-family: sans-serif;">
    <div style="text-align:center; margin-bottom: 15px; background-color: #f9f9f9; padding: 15px 0;">
        <a href="<?php echo site_url() ?>">
            <img src="<?php echo site_url() ?>/cdn/about/<?php echo config('logo') ?>" style="height: 80px;">
        </a>
    </div>
    <div style="padding-bottom: 15px; margin-bottom: 15px; padding: 20px;">
        <h3> Hai, <b><?php echo $user->username ?></b></h3>
        <p style="line-height: 28px;">
            kamu request untuk password baru dengan akun : <?php echo $user->username ?> silahkan gunakan akun dibawah ini :<br />
            <br>
            <b>Username:</b> <?php echo $user->email ?><br />
            <b>Password:</b> <?php echo $pass ?><br />
            <br>
            <b>Terimakasih!</b>
            <br>
        </p>
    </div>

    <div style="text-align: center; border-top: 2px solid #f2435a;padding: 25px 0;background-color: #f9f9f9;">
        <a style="display: inline-block;"><b>Email:</b> <?php echo config('webmaster_email') ?></a> | <span style="display: inline-block;"><b>HP:</b> <?php echo config('phone') ?></span>
    </div>
    <div style="background-color:#f2435a; color: #fff; text-align: center;">
        <p style="margin: 0;padding: 10px 0;"> Copyright © <?php echo config('title') ?> <?php echo date('Y'); ?> </p>
    </div>
</div>
