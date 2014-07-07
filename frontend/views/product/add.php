<style >
    .t1{
        float: left ;
        cursor: pointer;
        font-size: 17px;
        font-weight: bold;
        width: 35px;
        background-color: #f5f5f5
    }
    .readmore-js-toggle, .readmore-js-section {
        display: block;
        width: 100%;
    }
    .readmore-js-section {
        overflow: hidden;
    }
    .pupop-sp tr td{
        border-bottom: 1px dashed #ccc;
        height: 45px;
    }
    .close-add{
        font-weight: bold;
        color: black;
        font-size: 30px;
        margin-right: 10px;
        margin-top: -20px;
    }
</style>
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" >
    <div class="modal-dialog">
        <div class="well drop-shadow">
            <div class="row" style="font-size: 17px;">
                <button type="button" class="close close-add" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
                <div class="col-xs-5 col-sm-5" >
                    <div id="img_pro_id" style="width: 100%">Hình sản phẩm</div>
                </div>
                <div class="col-xs-7 col-sm-7" style="line-height: 1.2em">
                    <input type=hidden" name="id_pro" id="id_pro_id" value="" style="display: none"/>
                    <h2 style="color: #4fb100;font-weight: 600;text-align: center;" id="title_pro_id">đây là title</h2>
                    <hr/>
                    <!--<p>-->
                    <!--start giá-->
                    <table width="100%" cellspacing="0" cellpadding ="0" class="pupop-sp">
                        <tr>
                            <td style="width: 120px;"><?= PRICE_DETAIL ?></td>
                            <td>
                                <span style="<?php
                                if (isset($_SESSION['language']) && $_SESSION['language'] == "english") {
                                    echo "display:block";
                                } else {
                                    echo "display:none";
                                }
                                ?>;color: #f30;font-weight: bold"  id="price_usd_pro_id">100.000đ</span>
                                <!--end giá-->

                                <span style="<?php
                                if (isset($_SESSION['language']) && $_SESSION['language'] == "english") {
                                    echo "display:none";
                                } else {
                                    echo "display:block";
                                }
                                ?>;color: #f30;font-weight: bold" id="price_vnd_pro_id">100.000đ</span>
                                <input type="hidden" name="price_off_real" id="price_off_real" value="0"/>
                            </td>
                        </tr>
                        <tr id="price_off_id">
                            <td>Giảm còn (un):</td>
                            <td>
                                <span style="<?php
                                if (isset($_SESSION['language']) && $_SESSION['language'] == "english") {
                                    echo "display:block";
                                } else {
                                    echo "display:none";
                                }
                                ?>;color: #f30;font-weight: bold"  id="price_off_usd_pro_id">100.000đ</span>
                                <!--end giá-->

                                <span style="<?php
                                if (isset($_SESSION['language']) && $_SESSION['language'] == "english") {
                                    echo "display:none";
                                } else {
                                    echo "display:block";
                                }
                                ?>;color: #f30;font-weight: bold" id="price_off_vnd_pro_id">100.000đ</span>
                            </td>
                        </tr>
                        <tr>
                            <td><?= AMOUNT_DETAIL ?></td>
                            <td>
                                <div class="input-qty">
                                    <div class="qty-minus t1 form-control"
                                         onclick="if ($(this).parent('.input-qty').find('#qty-input').val() > 1) {
                                                     $(this).parent('.input-qty').find('#qty-input').val(parseInt($(this).parent('.input-qty').find('#qty-input').val()) - 1);
                                                 }">-
                                    </div>
                                    <div class="qty-input-div" style="float: left">
                                        <input id="qty-input" name="quantity" value="1" style="font-size: 17px;width: 50px;color: #f30;font-weight: bold;height: 35px;text-align: center" class="form-control input-sm" readonly="">
                                    </div>
                                    <div class="qty-plus t1 form-control"
                                         onclick="if ($(this).parent('.input-qty').find('#qty-input').val() < 100) {
                                                     $(this).parent('.input-qty').find('#qty-input').val(parseInt($(this).parent('.input-qty').find('#qty-input').val()) + 1);
                                                 }">+</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><?= UNIT_DETAIL ?></td>
                            <td id="unit_pro_id">DVT</td>
                        </tr>
                        <tr>
                            <td><?= CATEGORY_DETAIL ?></td>
                            <td id="cat_pro_id">Loai</td>
                        </tr>

                        <tr>
                            <td><?= ADD_DOCUMENT ?></td>
                            <td>
                                <a href="#" class="pdf" id="pdf_url_id" target="_blank">
                                    <i class="glyphicon glyphicon-download"></i>&nbsp;<?= ADD_DOWNLOAD_DOCUMENT ?>
                                </a>
                            </td>
                        </tr>
                        <?php
                        if (isset($_SESSION['login']) && $_SESSION['login'][11] == '0') {
                            ?>
                            <tr>
                                <td colspan="2" align="center">
                                    <div id="add2CartID" style="background-color:#ff9000;width: 180px;padding: 10px;border-radius: 3px;cursor: pointer;color: white;font-size: 17px;font-weight: bold;">
                                        <i class="icon-ok scolor"></i>&nbsp;<?= ADD_CART ?>
                                    </div>
                                </td>
                            </tr>
                            <?php
                        } else if (!isset($_SESSION['login'])) {
                            ?> 
                            <tr>
                                <td colspan="2">
                                    <a class="anchorLink" onclick=" $('#largeModal').modal('hide');" data-toggle="modal" data-target="#basicModal">
                                        <i class="icon-user scolor"></i>&nbsp;<?= LOGIN_PRODUCT ?>
                                    </a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
            <!--đây là phần tab-->
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="tabbable">
                        <ul id="product_tab" class="nav nav-tabs">
                            <li class="active" id="promotion_id_tab">
                                <a href="#promotion_pro" data-toggle="tab"><?= PROMOTIONS ?> >></a>
                            </li>
                            <li id="info_id_tab">
                                <a href="#inf_pro_id" data-toggle="tab"><?= INFOR_PRODUCT_DETAIL ?> >></a>
                            </li>
                        </ul>
                        <div class="tab-content" style="padding:10px">
                            <div class="tab-pane fade in active" id="promotion_pro" style="display: none">
                                -<u><B><?= PROMOTIONS_NAME_PROGRAM ?>:</B></u>&nbsp;<span id="name_promotion_id" style="color: blue;font-weight: bold;text-align: left"><?= PROMOTIONS_NAME_PROGRAM ?></span><br/>
                                -<u><B><?= CONTENT ?>:</B></u>&nbsp;
                                <article id="content_promotion_id" style="text-align: left">
                                    <?= PROMOTIONS_CONTENT_PROGRAM_1 ?>
                                </article>
                            </div>
                            <div class="tab-pane fade" id="inf_pro_id" style="display: none;text-align: left">
                                <?= PRODUCTS_INFOR ?>
                            </div>
                        </div>
                    </div>
                </div
            </div>
        </div>
    </div>
</div>
</div>

<script src="./public/js/jquery.cart.1.0.js"></script>
<script type="text/javascript">
                                        $(document).ready(function() {//login
                                            var obj = {
                                                "alertAddSucess": "<?= ADD_PRODUCT_SUCCESS ?>",
                                                "alertUpdateSucess": "<?= UPDATE_PRODUCT_SUCCESS ?>"
                                            }
                                            $.zCart(obj);
                                            //khuyen mai
                                            $("#promotion_id_tab").click(function() {
                                                if ($("#promotion_pro:visible").length == 0)
                                                {
                                                    if ($("#inf_pro_id:visible").length != 0)
                                                    {
                                                        $("#inf_pro_id").slideUp();
                                                        $("#info_id_tab>a").text('<?= INFOR_PRODUCT_DETAIL ?> <<')
                                                    }

                                                    $("#promotion_pro").slideToggle();
                                                    $("#promotion_id_tab>a").text("<?= PROMOTIONS ?> <<")
                                                } else {
                                                    $("#promotion_pro").slideUp();
                                                    $("#promotion_id_tab>a").text("<?= PROMOTIONS ?> >>")
                                                }
                                            });
                                            //thong tin
                                            $("#info_id_tab").click(function() {
                                                if ($("#inf_pro_id:visible").length == 0)
                                                {
                                                    if ($("#promotion_pro:visible").length != 0)
                                                    {
                                                        $("#promotion_pro").slideUp();
                                                        $("#promotion_id_tab>a").text("<?= PROMOTIONS ?> >>")
                                                    }
                                                    $("#inf_pro_id").slideToggle();
                                                    $("#info_id_tab>a").text('<?= INFOR_PRODUCT_DETAIL ?> <<')
                                                } else {
                                                    $("#inf_pro_id").slideUp();
                                                    $("#info_id_tab>a").text('<?= INFOR_PRODUCT_DETAIL ?> >>')
                                                }
                                            });
                                            $('#largeModal').on('hidden.bs.modal', function() {
                                                window.history.pushState(null, null, "?");
                                            });
                                        });
</script>
