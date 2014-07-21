<style >
    #FormDangKy{
        background-color: #eee ;
        border: 1px solid black;
    }
</style>
<div class="modal fade" id="registerID" tabindex="-1" role="dialog" >
    <div class="modal-dialog">
        <div class="modal-content" id="FormDangKy" style="">
            <!--<div class="modal-header">-->
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"  
                    style="font-weight: bold;color: black;font-size: 30px;margin-right: 10px;">
                ×
            </button>
            <!--</div>-->
            <div style="width: 100%;height: 40px;font-size: 20px;color: #f2622b;margin-top: 16px;">
                <div class="row">
                    <span class="col-sm-4"></span>
                    <span class="col-sm-7" >
                        <?= REGISTER_MEMBER ?>
                    </span>
                </div>
            </div>
            <div style="border: 1px dashed #ccc;"></div>
            <div style="margin: 10px 20px 0px 20px">
                <div id="tabsleft" class="tabbable tabs-left">
                    <ul>
                        <li id="tab1_id" width="100%"><a href="#tabsleft-tab1" data-toggle="tab"><?= REGISTER_INFOMATION_BASE ?></a></li>
                        <li id="tab2_id" width="100%"><a href="#tabsleft-tab2" data-toggle="tab"><?= REGISTER_INFOMATION_CONTACT ?></a></li>
                        <li id="tab3_id" width="100%"><a href="#tabsleft-tab3" data-toggle="tab"><?= REGISTER_INFOMATION_ORTHER ?></a></li>
                    </ul>
                    <div class="tab-content" width="60%">
                        <div class="tab-pane fade" id="tabsleft-tab1">
                            <!--đây là form thôgn tin coe bản-->
                            <table cellpadding="0" cellpadding="0" width="60%">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-user text-info"></span>&nbsp;
                                        <input type="text" id="username" name="username" placeholder="<?= REGISTER_USER ?>" pattern="[0-9a-zA-Z]{1,200}" style="width:90%;height: 30px;margin: 5px"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-lock text-info"></span>&nbsp;
                                        <input type="password" id="password" name="password" placeholder="<?= REGISTER_PASSWORD ?>" required="" pattern="{1,200}" style="width:90%;height: 30px;margin: 0px 5px 5px 5px"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-lock text-info"></span>&nbsp;
                                        <input type="password" id="cfpassword" name="cfpassword" placeholder="<?= PROFILE_PASSWORD_DELAY_PLEASE ?>" required="" pattern="{1,200}" style="width:90%;height: 30px;margin: 0px 5px 5px 5px"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-send text-info"></span>&nbsp;
                                        <input type="text" id="email" name="email" placeholder="<?= REGISTER_EMAIL ?>" required="" style="width:90%;height: 30px;margin: 0px 5px 5px 5px"/>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="tabsleft-tab2">
                            <!--đây là form thông tin liên hệ-->
                            <table cellpadding="0" cellpadding="0" width="60%">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-bookmark text-info"></span>&nbsp;
                                        <input type="text" id="address" name="address" placeholder="<?= REGISTER_ADDRESS ?>" required="" style="width:90%;height: 30px;margin: 5px"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-book text-info"></span>&nbsp;
                                        <input type="text" id="street" name="street" placeholder="<?= REGISTER_STREET ?>" required="" style="width:90%;height: 30px;margin: 0px 5px 5px 5px"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-home text-info"></span>&nbsp;
                                        <input type="text" id="district" name="district" placeholder="<?= REGISTER_DISTRICT ?>" required="" style="width:90%;height: 30px;margin: 0px 5px 5px 5px"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-bullhorn text-info"></span>&nbsp;
                                        <input type="text" id="province" name="province" placeholder="<?= REGISTER_PROVINCE ?>" required="" style="width:90%;height: 30px;margin: 0px 5px 5px 5px"/>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="tabsleft-tab3">
                            <!--đây là form thông tin khác-->
                            <table cellpadding="0" cellpadding="0" width="60%">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-info-sign text-info"></span>&nbsp;
                                        <input type="text" id="fullname" name="fullname" placeholder="<?= REGISTER_NAME ?>" required="" style="width:90%;height: 30px;margin:5px"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-time text-info"></span>&nbsp;
                                        <input type="date" id="birth" name="birth" placeholder="<?= REGISTER_DATE ?>" required="" style="width:90%;height: 30px;margin: 0px 5px 5px 5px"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-phone text-info"></span>&nbsp;
                                        <input type="text" id="numberphone" name="numberphone" placeholder="<?= REGISTER_PHONENUMBER ?>" required="" style="width:90%;height: 30px;margin: 0px 5px 40px 5px"/>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div style="margin: 0px -20px -10px -20px;border: 1px dashed #ccc"></div>
                        <ul class="pager wizard">
                            <li class="previous first"><a href="javascript:;"><?= REGISTER_FIRST ?></a></li>
                            <li class="previous" ><a href="javascript:;"><?= REGISTER_PREVIOUS ?></a></li>
                            <li class="next last" ><a href="javascript:;"><?= REGISTER_LAST ?></a></li>
                            <li class="next" ><a href="javascript:;"><?= REGISTER_NEXT ?></a></li>
                            <li class="next finish" ><a href="javascript:;"><?= REGISTER_FINISH ?></a></li>
                        </ul>
                    </div>	
                </div>
            </div>
        </div>    
    </div>
</div>
<script src="./public/js/jquery.bootstrap.wizard.js"></script>
<script>
    $(document).ready(function() {

        $('#tabsleft').bootstrapWizard({'tabClass': 'nav nav-tabs', 'debug': false, onShow: function(tab, navigation, index) {
                // console.log('onShow');
            }, onNext: function(tab, navigation, index) {
                // console.log('onNext');
            }, onPrevious: function(tab, navigation, index) {
                // console.log('onPrevious');
            }, onLast: function(tab, navigation, index) {
                // console.log('onLast');
            }, onTabClick: function(tab, navigation, index) {
                // console.log('onTabClick');
            }, onTabShow: function(tab, navigation, index) {
                //   console.log(index);
                var $total = navigation.find('li').length;
                var $current = index + 1;
                // If it's the last tab then hide the last button and show the finish instead
                if ($current >= $total) {
                    $('#tabsleft').find('.pager .next').hide();
                    $('#tabsleft').find('.pager .finish').show();
                    $('#tabsleft').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#tabsleft').find('.pager .next').show();
                    $('#tabsleft').find('.pager .finish').hide();
                }
            }});

        $('#tabsleft .finish').click(function() {
            var username = $("#username").val();
            var usernameRegex = /^[a-zA-Z0-9_]{1,200}$/;
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
            if (!username.match(usernameRegex))
            {
                toastr.error("<?=REGISTER_ACCOUNT_INVALID ?>");
                $("#tabsleft-tab1").addClass('in active');
                $("#tab1_id").addClass('active');
                $("#tabsleft-tab2,#tabsleft-tab3").removeClass('in active');
                $("#tab2_id,#tab3_id").removeClass('active');
                $("#username").focus();
            }
            else if (password === '' || password === null)
            {
                toastr.error("<?=REGISTER_PASSWORD_NOT_EMPTY ?>");
                $("#tabsleft-tab1").addClass('in active');
                $("#tab1_id").addClass('active');
                $("#tabsleft-tab2,#tabsleft-tab3").removeClass('in active');
                $("#tab2_id,#tab3_id").removeClass('active');
                $("#password").focus();
            }
            else if (cfpassword === '' || cfpassword === null)
            {
                toastr.error("<?=REGISTER_CONFIRM_PASSWORD ?>");
                $("#tabsleft-tab1").addClass('in active');
                $("#tab1_id").addClass('active');
                $("#tabsleft-tab2,#tabsleft-tab3").removeClass('in active');
                $("#tab2_id,#tab3_id").removeClass('active');
                $("#cfpassword").focus();
            }
            else if (cfpassword !== password)
            {
                toastr.error("<?= REGISTER_CONFIRM_PASSWORD_AGAIN ?>");
                $("#tabsleft-tab1").addClass('in active');
                $("#tab1_id").addClass('active');
                $("#tabsleft-tab2,#tabsleft-tab3").removeClass('in active');
                $("#tab2_id,#tab3_id").removeClass('active');
                $("#cfpassword").focus();
            }
            else if (!email.match(emailRegex)) {
                toastr.error("<?=CART_EMAIL_INCORRECT ?>");
                $("#tabsleft-tab1").addClass('in active');
                $("#tab1_id").addClass('active');
                $("#tabsleft-tab2,#tabsleft-tab3").removeClass('in active');
                $("#tab2_id,#tab3_id").removeClass('active');
                $("#email").focus();
            }
            else if (address.length < 1 || address.length > 256) {
                toastr.error("<?=CART_ADDESS_INCORRECT ?>");
                $("#tabsleft-tab2").addClass('in active');
                $("#tab2_id").addClass('active');
                $("#tabsleft-tab1,#tabsleft-tab3").removeClass('in active');
                $("#tab1_id,#tab3_id").removeClass('active');
                $("#address").focus();
            }
            else if (street.length < 1 || street.length > 256) {
                toastr.error("<?=CART_STRESS_INCORRECT ?>");
                $("#tabsleft-tab2").addClass('in active');
                $("#tab2_id").addClass('active');
                $("#tabsleft-tab1,#tabsleft-tab3").removeClass('in active');
                $("#tab1_id,#tab3_id").removeClass('active');
                $("#street").focus();
            }
            else if (district.length < 1 || district.length > 256) {
                toastr.error("<?=CART_DISTRICT_INCORRECT ?>");
                $("#tabsleft-tab2").addClass('in active');
                $("#tab2_id").addClass('active');
                $("#tabsleft-tab1,#tabsleft-tab3").removeClass('in active');
                $("#tab1_id,#tab3_id").removeClass('active');
                $("#district").focus();
            }
            else if (province.length < 1 || province.length > 256) {
                toastr.error("<?=CART_PROVINCE_INCORRECT ?>");
                $("#tabsleft-tab2").addClass('in active');
                $("#tab2_id").addClass('active');
                $("#tabsleft-tab1,#tabsleft-tab3").removeClass('in active');
                $("#tab1_id,#tab3_id").removeClass('active');
                $("#province").focus();
            }
            else if (fullname.length < 1 || fullname.length > 256) {
                toastr.error("<?=REGISTER_NAME_CORRECT ?>");
                $("#tabsleft-tab3").addClass('in active');
                $("#tab3_id").addClass('active');
                $("#tabsleft-tab1,#tabsleft-tab2").removeClass('in active');
                $("#tab1_id,#tab2_id").removeClass('active');
                $("#fullname").focus();
            }
            else if (birth === "" || birth === null) {
                toastr.error("<?=CART_DATE_CORRECT ?>");
                $("#tabsleft-tab3").addClass('in active');
                $("#tab3_id").addClass('active');
                $("#tabsleft-tab1,#tabsleft-tab2").removeClass('in active');
                $("#tab1_id,#tab2_id").removeClass('active');
                $("#birth").focus();
            }
            else if (!numberphone.match(numberphoneRegex)) {
                toastr.error("<?=CART_PHONENUMBER_CORRECT ?>");
                $("#tabsleft-tab3").addClass('in active');
                $("#tab3_id").addClass('active');
                $("#tabsleft-tab1,#tabsleft-tab2").removeClass('in active');
                $("#tab1_id,#tab2_id").removeClass('active');
                $("#numberphone").focus();
            }
            else {
                $.ajax({
                    type: "POST",
                    url: 'route.php?content=saveregister',
                    cache: false,
                    data: {
                        "username": username,
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
                        toastr.success('<?=REGISTER_SUCCESS ?>');
                        //reset
                        $("#username").val('');
                        $("#password").val('');
                        $("#cfpassword").val('');
                        $("#email").val('');
                        $("#address").val('');
                        $("#street").val('');
                        $("#district").val('');
                        $("#province").val('');
                        $("#fullname").val('');
                        $("#birth").val('');
                        $("#numberphone").val('');
                        $("#basicModal").modal("show");
                        $("#registerID").modal("hide");
                    }
                    else if (data === "conflictuser") {
                        toastr.error("<?=REGISTER_USER_TO_BE ?>");
                        $("#tabsleft-tab1").addClass('in active');
                        $("#tab1_id").addClass('active');
                        $("#tabsleft-tab2,#tabsleft-tab3").removeClass('in active');
                        $("#tab2_id,#tab3_id").removeClass('active');
                        $("#username").focus();
                    }
                    else if (data === "conflictemail") {
                        toastr.error("<?=REGISTER_EMAIL_TO_BE ?>");
                        $("#tabsleft-tab1").addClass('in active');
                        $("#tab1_id").addClass('active');
                        $("#tabsleft-tab2,#tabsleft-tab3").removeClass('in active');
                        $("#tab2_id,#tab3_id").removeClass('active');
                        $("#email").focus();
                    }
                    else {
                        toastr.error("<?=REGISTER_UNSUCCESS ?>");
                    }
                });
            }
        });
    });
</script>