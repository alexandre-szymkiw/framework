<div class='row-responsive'>
    <h2><?= __d('users', 'Password Reminder'); ?></h2>
    <hr>
</div>

<div class="row">
    <?php echo Errors::display($error); ?>
    <?php echo Session::message('message'); ?>
    <div class="clearfix"></div>

    <div class="col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-primary" style="margin-top:40px">
            <div class="panel-heading text-center">
                <h3 class="panel-title"><?= __d('users', 'Password Reminder'); ?></h3>
            </div>
            <div class="panel-body">
                <form style="margin: 0;" method="post">
                    <div class="form-control-container" style="margin-bottom: 10px;">
                        <input type="text" class="input-medium input-block-level form-control" name="email" placeholder="<?= __d('users', 'Insert the current E-mail'); ?>" title="<?= __d('users', 'Insert the current E-mail'); ?>">
                    </div>
                    <hr>
                    <div>
                        <button type="submit" class="btn btn-success col-lg-8 pull-right"><i class='fa fa-sign-in'></i> <?= __d('users', 'Send the Reminder'); ?></button>
                    </div>
                    <div class="clearfix"></div>
                    <input type="hidden" name="csrfToken" value="<?= $csrfToken; ?>" />
                </form>
            </div>
        </div>
    </div>
</div>
