<style >
    .close-profile{
        font-weight: bold;
        color: black;
        font-size: 30px;
    }
</style>
<div class="modal fade" id="profileUserID" tabindex="-1" role="dialog" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="row" style="padding: 5px">
                <div class="col-xs-12 col-sm-12" >
                    <button type="button" class="close close-profile" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                    <div class="page-header" style="margin-bottom: 5px">
                        <center>
                            <h3 ><?= PROFILE_MY ?></h3>
                        </center>
                    </div>
                    <div class="panel-group" id="accordion" style="margin-bottom: 5px">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        <span class="glyphicon glyphicon-folder-close"></span>
                                        <?= PROFILE_INFOMATION_BASE ?>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <table class="table" cellspacing="0" cellpadding="0" style="margin-bottom: 0px">
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-user text-info"></span> 
                                            <label class="control-label" for="username" style="width: 150px;"><?= PROFILE_USERNAME; ?></label>&nbsp;<?=$_SESSION['login'][1]?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-lock text-info"></span>&nbsp;
                                            <label class="control-label" for="password" style="width: 150px;"><?= PROFILE_PASSWORD ?></label>&nbsp;
                                            <input type="password" id="password" name="password" placeholder="<?= PROFILE_PASSWORD ?>" style="width: 300px;height:30px"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-lock text-info"></span>&nbsp;
                                            <label class="control-label" for="cfpassword" style="width: 150px;"><?=REGISTER_PASSWORD_AGAIN ?></label>&nbsp;
                                            <input type="password" id="cfpassword" name="cfpassword" placeholder="<?= REGISTER_PASSWORD_AGAIN ?>" style="width: 300px;height:30px"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-send text-info"></span>&nbsp;
                                            <label class="control-label" for="email" style="width: 150px;"><?= PROFILE_EMAIL ?></label>&nbsp;
                                            <input type="email" id="email" name="email" placeholder="<?= PROFILE_EMAIL ?>" style="width: 300px;height:30px" value='<?= $_SESSION['login'][10] ?>'/>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                        <span class="glyphicon glyphicon-user"></span> 
                                        <?= PROFILE_INFOMATION_CONTACT ?>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <table class="table" cellspacing="0" cellpadding="0" style="margin-bottom: 0px">
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-bookmark text-info"></span>&nbsp;
                                            <label class="control-label" for="address" style="width: 100px;"><?= PROFILE_ADDRESS ?></label>&nbsp;
                                            <input type="text" id="address" name="address" placeholder="<?= PROFILE_ADDRESS ?>" style="width: 300px;height:30px" value='<?= $_SESSION['login'][5] ?>' />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-book text-info"></span>&nbsp;
                                            <label class="control-label" for="street" style="width: 100px;"><?= PROFILE_STREET ?></label>&nbsp;
                                            <input type="text" id="street" name="street" placeholder="<?= PROFILE_STREET ?>" style="width: 300px;height:30px" value='<?= $_SESSION['login'][6] ?>'/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-home text-info"></span>&nbsp;
                                            <label class="control-label" for="district" style="width: 100px;"><?= PROFILE_DISTRICT ?></label>&nbsp;
                                            <input type="text" id="district" name="district" placeholder="<?= PROFILE_DISTRICT ?>" style="width: 300px;height:30px" value='<?= $_SESSION['login'][7] ?>'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-bullhorn text-info"></span>&nbsp;
                                            <label class="control-label" for="province" style="width: 100px;"><?= PROFILE_PROVINCE ?></label>&nbsp;
                                            <input type="text" id="province" name="province" placeholder="<?= PROFILE_PROVINCE ?>" style="width: 300px;height:30px" value='<?= $_SESSION['login'][8] ?>'/>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                        <span class="glyphicon glyphicon-file"></span> 
                                        <?= REGISTER_INFOMATION_ORTHER ?>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <table class="table" cellspacing="0" cellpadding="0" style="margin-bottom: 0px">
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-info-sign text-info"></span>&nbsp;
                                            <label class="control-label" for="fullname" style="width: 100px;"><?= PROFILE_NAME ?></label>&nbsp;
                                            <input type="text" id="fullname" name="fullname" placeholder="<?= PROFILE_NAME ?>" style="width: 300px;height:30px" value='<?= $_SESSION['login'][3] ?>'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-time text-info"></span>&nbsp;
                                            <label class="control-label" for="birth" style="width: 100px;"><?= PROFILE_DATE ?></label>&nbsp;
                                            <input type="date" id="birth" name="birth" placeholder="<?= PROFILE_DATE ?>" style="width: 300px;height:30px" value='<?= $_SESSION['login'][4] ?>'/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-phone text-info"></span>&nbsp;
                                            <label class="control-label" for="numberphone" style="width: 100px;"><?= PROFILE_PHONENUMBER ?></label>&nbsp;
                                            <input type="text" id="numberphone" name="numberphone" placeholder="<?= PROFILE_PHONENUMBER ?>" style="width: 300px;height:30px" value='<?= $_SESSION['login'][9] ?>'/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-star text-info"></span>&nbsp;
                                            <label class="control-label" for="level" style="width: 100px;"><?= PROFILE_POINT ?></label>&nbsp;
                                            <?php
                                            if ($_SESSION['login'][12] >= 300) {
                                                echo "Gold (un)";
                                            } else if ($_SESSION['login'][12] >= 200) {
                                                echo "Sliver (un)";
                                            } else if ($_SESSION['login'][12] >= 100) {
                                                echo "Bronze (un)";
                                            } else {
                                                echo "Newbie (un)";
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="pull-right">
                        <input type="button"  id="btnsubmitfrm" class="btn btn-primary" value="<?= PROFILE_EDIT ?>"/>
                        <input type="button" class="btn btn-default" value="<?= PROFILE_CLOSED ?>" data-dismiss="modal"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#btnsubmitfrm').click(function() {
            var password = $("#password").val();
            var cfpassword = $("#cfpassword").val();
            var email = $("#email").val();
            var emailRegex = /^\w+@[a-zA-Z_]+?\.([a-zA-Z]{2,3})(\.([a-zA-Z]{2,3}))*$/;
            var address = $("#address").val();
            var street = $("#street").val();
            var district = $("#district").val();
            var province = $("#province").val();
            var fullname = $("#fullname").val();
            var birth = $("#birth").val();
            var numberphone = $("#numberphone").val();
            var numberphoneRegex = /^[0-9]{10,15}$/;
            if (password.length > 0 && (cfpassword === '' || cfpassword === null))
            {
                toastr.error("<?=CART_CONFIRM_PASSWORD ?>");
                $("#collapseOne").addClass("in");
                $("#collapseOne").height("auto");
                $("#collapseThree,#collapseFour").removeClass("in");
                $("#cfpassword").focus();
            }
            else if (password.length > 0 && cfpassword != password) {
                toastr.error("<?=CART_CAPTA_INCORRECT ?>");
                $("#collapseOne").addClass("in");
                $("#collapseOne").height("auto");
                $("#collapseThree,#collapseFour").removeClass("in");
                $("#cfpassword").focus();
            }
            else if (!email.match(emailRegex)) {
                toastr.error("<?= CART_EMAIL_INCORRECT ?>");
                $("#collapseOne").addClass("in");
                $("#collapseOne").height("auto");
                $("#collapseThree,#collapseFour").removeClass("in");
                $("#email").focus();
            }
            else if (address.length < 1 || address.length > 256) {
                toastr.error("<?=CART_ADDESS_INCORRECT ?>");
                $("#collapseThree").addClass("in");
                $("#collapseThree").height("auto");
                $("#collapseOne,#collapseFour").removeClass("in");
                $("#address").focus();
            }
            else if (street.length < 1 || street.length > 256) {
                toastr.error("<?=CART_STRESS_INCORRECT ?>");
                $("#collapseThree").addClass("in");
                $("#collapseThree").height("auto");
                $("#collapseOne,#collapseFour").removeClass("in");
                $("#street").focus();
            }
            else if (district.length < 1 || district.length > 256) {
                toastr.error("<?=CART_DISTRICT_INCORRECT ?>");
                $("#collapseThree").addClass("in");
                $("#collapseThree").height("auto");
                $("#collapseOne,#collapseFour").removeClass("in");
                $("#district").focus();
            }
            else if (province.length < 1 || province.length > 256) {
                toastr.error("<?=CART_PROVINCE_INCORRECT ?>");
                $("#collapseThree").addClass("in");
                $("#collapseThree").height("auto");
                $("#collapseOne,#collapseFour").removeClass("in");
                $("#province").focus();
            } else if (fullname.length < 1 || fullname.length > 256) {
                toastr.error("<?=CART_NAME_INCORRECT ?>");
                $("#collapseFour").addClass("in");
                $("#collapseFour").height("auto");
                $("#collapseOne,#collapseThree").removeClass("in");
                $("#fullname").focus();
            }
            else if (birth === "" || birth === null) {
                toastr.error("<?=CART_DATE_CORRECT ?>");
                $("#collapseFour").addClass("in");
                $("#collapseFour").height("auto");
                $("#collapseOne,#collapseThree").removeClass("in");
                $("#birth").focus();
            }
            else if (!numberphone.match(numberphoneRegex)) {
                toastr.error("CART_PHONENUMBER_CORRECT");
                $("#collapseFour").addClass("in");
                $("#collapseFour").height("auto");
                $("#collapseOne,#collapseThree").removeClass("in");
                $("#numberphone").focus();
            }
            else {
                $.ajax({
                    type: "POST",
                    url: 'route.php?content=saveprofile',
                    cache: false,
                    data: {
                        "password": password,
                        "email": email,
                        "address": address,
                        "street": street,
                        "district": district,
                        "province": province,
                        "fullname": fullname,
                        "birth": birth,
                        "numberphone": numberphone,
                    }
                }).done(function(data) {
                    console.log(data);
                    if (data === "true")
                    {
                        toastr.success('<?=CART_CHANGE_SUCCESS ?>');
                        $("#password").val('');
                        $("#cfpassword").val('');
                    }
                    else if (data === "conflictemail") {
                        toastr.error("<?=CART_USEDTO_EMAIL ?>");
                        $("#collapseOne").addClass("in");
                        $("#collapseOne").height("auto");
                        $("#collapseThree,#collapseFour").removeClass("in");
                        $("#email").focus();
                    }
                    else {
                        toastr.error("<?=CART_CHANGE_INFO_LOSE ?>");
                    }
                });
            }
        });

    });
</script>