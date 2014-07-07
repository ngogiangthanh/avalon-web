<style >
    .close-contact{
        font-weight: bold;
        color: black;
        font-size: 30px;
        margin-top: -15px;
    }
</style>
<link rel="stylesheet" type="text/css" href="./public/css/bootstrap-wysihtml5.css" />
<div class="modal fade" id="contactDialogID" tabindex="-1" role="dialog" >
    <div class="modal-dialog">
        <div class="contact">
            <div class="contact-details" style="width: 500px;height: 600px;margin-top: -20px">
                <button type="button" class="close close-contact" data-dismiss="modal" aria-hidden="true" >
                    ×
                </button>
                <div class="page-header">
                    <center>
                        <h3><?= CONTACT_US ?></h3>
                    </center>
                </div>
                <form role="form" class="form">
                    <div class="form-group">
                        <?php
                        if (isset($_SESSION['login'])) {
                            ?>
                            <input type="text" class="form-control" id="namecontact" value='<?= $_SESSION["login"][3] ?>' readonly=""/>
                            <?php
                        } else {
                            ?>
                            <input type="text" class="form-control" id="namecontact" placeholder="<?= USER_CONTACT_ENTER_NAME ?>" required=""/>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <?php
                        if (isset($_SESSION['login'])) {
                            ?><input type="email" class="form-control" id="emailcontact" value='<?= $_SESSION["login"][10] ?>' readonly="" />
                            <?php
                        } else {
                            ?>  
                            <input type="email" class="form-control" id="emailcontact" placeholder="<?= USER_CONTACT_ENTER_EMAIL ?>" required="" />
                            <?php
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="contentcontact" rows="7" placeholder="<?= USER_CONTACT_CONTENT_CONTACT ?>" required=""></textarea>
                    </div>
                    <div class="form-group">
                        <!-- Message input box -->
                        <label for='captcha'><?= USER_CONTACT_INSERT_CAPTCHA ?></label>
                        <div>
                            <input type="text" name="captcha" placeholder="<?= USER_CONTACT_PLEASE_INSERT_CAPTCHA ?>" style="height: 30px;width: 65%;color:#000" id="captcha"/>&nbsp;
                            <img src="./libraries/captcha.php" id="img_captcha" height="30px"  title="captcha" alt="captcha"/>&nbsp;<img src="./public/img/load.png" id="load_captcha" height="30px" title="reset" alt="reset"/>
                        </div>
                    </div>

                        <!-- Submit and reset button -->
                        <button type="button" id='btnsendcontact' class="btn btn-default"><?= USER_CONTACT_SENT ?></button>
                        <button type="reset" class="btn btn-default"><?= USER_CONTACT_RESET ?></button>
                        <button type="reset" class="btn btn-default" data-dismiss="modal"><?= USER_CONTACT_CLOSED ?></button>
                  
                </form>
            </div>
        </div>
    </div>
</div>
<script src="./public/js/wysihtml5-0.3.0.js"></script>
<script src="./public/js/bootstrap-wysihtml5.js"></script>
<script type="text/javascript">

    $(document).ready(function() {
        $('#contentcontact').wysihtml5({
            "font-styles": true,
            "emphasis": true,
            "lists": true,
            "html": false,
            "link": false,
            "image": false,
            "stylesheets": false
        });

        $("#load_captcha").click(function() {
            change_captcha();
        });

        function change_captcha() {
            $('#img_captcha').attr('src', "./libraries/captcha.php?rnd=" + Math.random()).hide().fadeIn("show");
        }

        $("#btnsendcontact").click(function() {
            var captcha = $("#captcha").val();
            if (captcha === "") {
                toastr.error('<?=CONTACT_EMPTY?>');
                $("#captcha").focus();
                return false;
            }
            $.ajax({
                type: "POST",
                url: 'route.php?content=sendcontact&captcha=' + captcha,
                cache: false,
                data: {
                    "name": $("#namecontact").val(),
                    "email": $("#emailcontact").val(),
                    "content": $("#contentcontact").val(),
                }
            }).done(function(data) {
                if (data === "true")
                {
                    $("#contentcontact").val("");
                    $("#captcha").val("");
                    change_captcha();
                    toastr.success('<?=CONTACT_REVIEW?>');
                }
                else {
                    console.log(data);
                    toastr.error("<?=CONTACT_CAPTA_INCORRECT ?>");
                }
            });
        });

        $('#contactDialogID').on('hidden.bs.modal', function() {
            window.history.pushState(null, null, "?");
        });
    });
</script>