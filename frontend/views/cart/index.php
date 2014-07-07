<?php
$countCart = (isset($_SESSION['cart'])) ? count($_SESSION['cart']) : 0;
?>
<style type="text/css">
    #table_cart tr th,#table_cart tr td{
        text-align: center;
        vertical-align: middle;
        width: auto
    }
</style>
<div class="page-header">
    <center>
        <h2><?= CART ?></h2>
    </center>
</div>
<div class="tab-pane active" id="tab_a">
    <div class="col-xs-12">
        <table class="table table-bordered table-hover" id="table_cart">
            <thead>
                <tr>
                    <th class="hidden-xs"><?= CART_STT ?></th>
                    <th class="hidden-xs"><?= CART_IMAGE ?></th>
                    <th><?= CART_PRODUCT ?></th>
                    <th><?= CART_QUANTITY ?></th>
                    <th><?= CART_COST ?></th>
                    <th><?= CART_PROMOTION ?></th>
                    <th><?= CART_MONEY ?></th>
                    <th><?= CART_ACTION ?></th>
                </tr>
            </thead>
            <?php
            if ($countCart > 0) {
                echo "<tbody >";
                $cart = GetCart(); //lay bien session
                $totalCart = 0; //lay gia
                $price = 0;
                $stt = 0;
                foreach ($cart as $pid => $product):
                    $stt++;
                    ?>
                    <tr>
                        <td class="hidden-xs"><?= $stt; ?></td>
                        <td class="hidden-xs">
                            <img src="<?= $product['image'] ?>" width="100px"/>                                            
                        </td>
                        <td>
                            <a data-toggle="modal" href="#largeModal" class="openDetailDiaLog" data-id="<?= $product["id"] ?>"><?= $product['name_pro'] ?></a>
                        </td>
                        <td>
                            <div class="btn-group">
                                <input name="" style="width:70px" type="number" min="1" max="100" required="" value="<?= $product['amount'] ?>" class="form-control text-center" id="amount_<?= $product["id"] ?>"/>
                            </div>
                        </td>
                        <td>
                            <?php
                            if ($_SESSION['language'] == 'english') {
                                echo preg_replace('/USD/', '', $product[$_SESSION['language']]);
                            } else {
                                echo preg_replace('/VND/', '', $product[$_SESSION['language']]);
                            }
                            ?>
                        </td>
                        <td><?php
                            $percent = 0;
                            $type = "Newbie";
                            if ($_SESSION['login'][12] >= 300) {
                                $type = "Gold";
                                $percent = 0.07;
                            } else if ($_SESSION['login'][12] >= 200) {
                                $type = "Sliver";
                                $percent = 0.05;
                            } else if ($_SESSION['login'][12] >= 100) {
                                $type = "Bronze";
                                $percent = 0.03;
                            }
                            if ($percent > $product['price_off']) {
                                echo CART_M_DISCOUNT . $type . "<br/>" . CART_PROPORTION . ($percent * 100) . "%";
                            } else {
                                $percent = $product['price_off'];
                                echo CART_DISCOUNT_PROGRAM . "<br/> " . CART_PROPORTION . ($product['price_off'] * 100) . "%";
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            $price = (preg_replace('/,/', '', $product[$_SESSION['language']]) * (1 - $percent)) * $product['amount'];
                            $totalCart += $price;
                            if ($_SESSION['language'] == 'english') {
                                echo number_format($price, 2, '.', '.');
                            } else {
                                echo number_format($price, 0, '.', ',');
                            }
                            ?>
                        </td>
                        <td style="width: 80px">
                            <a href="#" class="updateElement" data-id="<?= $product["id"] ?>"><i class="glyphicon glyphicon-check"></i></a>
                            <a href="#" class="deleteElement" data-id="<?= $product["id"] ?>"><i class="glyphicon glyphicon-remove"></i></a>
                        </td>
                    </tr>
                    </tbody>
                <?php endforeach; ?>
                <tfoot>
                    <tr>
                        <td colspan="8" align="right"><?= CART_MONEY ?><?php
                            if ($_SESSION['language'] == 'english') {
                                echo number_format($totalCart, 2, '.', '.') . " USD";
                            } else {
                                echo number_format($totalCart, 0, '.', ',') . " VND";
                            }
                            ?></th>
                    </tr>
                </tfoot>
            </table>
            <div class="form-group">
                <!-- Single button -->
                <a href="#" id="btnGuiDon" class="btn btn-primary"><i class="glyphicon glyphicon-list-alt"></i>&nbsp;<?= CART_SEND_REQUIRE ?></a>
                <div style="display: none;float: left" id="confirmBeforeSend">						<label for="captcha">Nhập mã xác nhận</label>
                    <input type="text" name="captcha" placeholder="Please insert Captcha" id="captcha">&nbsp;<img src="./libraries/captcha.php" id="img_captcha">&nbsp;<img src="./public/img/load.png" id="load_captcha">&nbsp;
                    <a href="#" class="btn btn-default" id="btnGuiDH"><i class="glyphicon glyphicon-list-alt"></i> <?= USER_CONTACT_SENT ?></a>&nbsp;
                </div>
            </div>
            <script src="./public/js/jquery.cart.1.0.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $.zDeleteItemCart({});
                    $("#btnGuiDon").click(function() {
                        if ($('#confirmBeforeSend').is(':visible')) {
                            $("#confirmBeforeSend").fadeOut("slow");
                            $("#btnGuiDon").empty();
                            $("#btnGuiDon").append("<i class='glyphicon glyphicon-list-alt'></i> <?= CART_SEND_REQUIRE ?>").hide().fadeIn("slow");
                        }
                        else
                        {
                            $("#confirmBeforeSend").fadeIn("slow");
                            $("#btnGuiDon").empty();
                            $("#btnGuiDon").append("<i class='glyphicon glyphicon-remove'></i> <?= CART_DETROY ?>").hide().fadeIn("slow");
                        }
                    });
                    $("#load_captcha").click(function() {
                        change_captcha();
                    });

                    function change_captcha() {
                        $('#img_captcha').attr('src', "./libraries/captcha.php?rnd=" + Math.random()).hide().fadeIn("show");
                    }

                    $("#btnGuiDH").click(function() {
                        var captcha = $("#captcha").val();
                        if (captcha === "") {
                            toastr.error('<?= CONTACT_EMPTY ?>');
                            $("#captcha").focus();
                            return false;
                        }
                        $.ajax({
                            type: "GET",
                            url: 'route.php?content=sendcart&captcha=' + captcha,
                            cache: false
                        }).done(function(data) {
                            if (data === "true")
                            {
                                toastr.success('<?= CART_SUCCESS ?>');
                                $("#dialogContentCartID").load("route.php?content=reloadcartindex").hide().fadeIn("slow");
                                $("#inforuser").load("route.php?content=reloaduser").hide().fadeIn("slow");
                            }
                            else {
                                console.log(data);
                                toastr.error("?=CONTACT_CAPTA_INCORRECT ?>");
                            }
                        });
                    });
                });
            </script>
            <?php
        } else {
            ?>
            <tfoot>
                <tr >
                    <td colspan="8"><b><?= CART_EMPTY ?></b></td>
                </tr >
            </tfoot>
            </table>
            <?php
        }
        ?>	
    </div>
</div>