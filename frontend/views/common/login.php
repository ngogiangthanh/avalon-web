<link rel="stylesheet" type="text/css" href="./public/css/login.css" media="all">
<!--form pupop login-->
<div class="modal fade" id="basicModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="tabbable tabs-below">
                <div class="tab-content">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h1 class="text-center"><?= TITLE_LOGIN ?></h1>
                        </div>
                        <div class="modal-body" style="margin-bottom: -40px">
                            <form class="form" method="post" action="" id="login_form">
                                <div class="form-group">
                                    <input type="text" name="username" id="username_id" class="form-control input-lg" placeholder="<?= USERNAME_PLACEHOLDER ?>">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password_id" class="form-control input-lg" placeholder="<?= PASSWORD_PLACEHOLDER ?>">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" id="submit_form_login"><?= LOGIN_BUTTON ?></button>
                                </div>
                                <div class="form-group">
                                    <a href="#" onclick="$('#basicModal').modal('hide')" data-toggle="modal" data-target="#registerID"><?= REGISTER_LINK ?></a>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end pupop-->
<script type="text/javascript">
    $(document).ready(function() {
        toastr.warning("<?= ALERT_INDEX ?>");
        var obj = {
            "userWrong": "<?= WRONG_USERNAME ?>",
            "passWrong": "<?= WRONG_PASSWORD ?>",
            "alertLoginSuccess": "<?= LOGIN_SUCCESS ?>",
            "alertLoginFailed": "<?= WRONG_USERNAME_OR_PASSWORD ?>"
        };
        $.zAuthenticate(obj, 'none');
    });
</script>