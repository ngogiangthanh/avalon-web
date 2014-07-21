<style >
    .table-hover tr td{
        border: 1px solid #ddd ;
    }
    #table_promotion tr th,#table_promotion tr td{
        text-align: center;
        vertical-align: middle;
        width: auto
    }
    .close-promotion{
        font-weight: bold;
        color: black;
        font-size: 30px;
    }
</style>
<div class="modal fade" id="promotionDialogID" tabindex="-1" role="dialog" >
    <div class="modal-dialog">
        <div class="modal-content" style="width: 800px;">
            <div class="row">
                <div class="tab-content col-md-12" >
                    <button type="button" class="close close-promotion" data-dismiss="modal" aria-hidden="true" >
                        ×
                    </button>
                    <div class="page-header" style="margin-bottom: 0px;border-bottom: 0px">
                        <center>
                            <h3 class=""><h3><?= PROMOTIONS ?></h3></h3>
                        </center>
                    </div>
                    <?php if (count($promotions) > 0) { ?>
                        <table class="table" width="100%" cellspacing="0" cellpadding="0"  style="margin-bottom: -20px">
                            <tr>
                                <td style="font-weight: bold ;color: #FF0000;font-size: 17px;">
                                    <!--Thông tin chương trình khuyến mãi (un)-->
                                    <?= PROMOTIONS_INFOR_PROGRAM ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table width="100%" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td valign="top" style="width: 25%">
                                                <!--Tên chương trình :-->
                                                &nbsp;<?= PROMOTIONS_NAME_PROGRAM ?>
                                            </td>
                                            <td style="font-weight: bold ;width: 75%" > <?= $promotions[0]['NAME_PROMOTION'] ?></td>
                                        </tr>
                                        <tr >
                                            <td valign="top">
                                                <!--Nội dung chương trình :-->
                                                &nbsp;<?= PROMOTIONS_CONTENT_PROGRAM ?>
                                            </td>
                                            <td style="font-weight: bold ;" > <?= $promotions[0]['CONTENT_PROMOTION'] ?></td>
                                        </tr>
                                        <tr >
                                            <td>
                                                <!--Thời gian áp dụng :-->
                                                &nbsp;<?= PROMOTIONS_TIME_APPLY ?>
                                            </td>
                                            <td style="font-weight: bold ;" > <?= $promotions[0]['TIME_START'] ?></td>
                                        </tr>
                                        <tr >
                                            <td>
                                                <!--Thời gian kết thúc :-->
                                                &nbsp;<?= PROMOTIONS_TIME_FINISH ?>
                                            </td>
                                            <td style="font-weight: bold ;" > <?= $promotions[0]['TIME_END'] ?></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td  style="font-weight: bold ;color: #FF0000;font-size: 17px;">
                                    <!--Thông tin các sản phẩm khuyến mãi-->
                                    <?= PROMOTIONS_INFOR_PRODUCT ?>       
                                </td>
                            </tr>
                            <tr>
                                <td >
                                    <table width="100%" cellspacing="0" cellpadding="0" class="table table-hover" id="table_promotion">
                                        <tr>
                                            <td><?= PROMOTIONS_STT ?></td>
                                            <td>
                                                <!--                                                        Tên sản phẩm-->
                                                <?= PROMOTIONS_NAME_PRODUCT ?>
                                            </td>
                                            <td>
                                                <!--Ảnh-->
                                                <?= PROMOTIONS_IMAGE_PRODUCT ?>
                                            </td>
                                            <td>
                                                <!--Giá VND-->
                                                <?= PROMOTIONS_COST_VN_PROGRAM ?>
                                            </td>
                                            <td>
                                                <!--Giá USD-->
                                                <?= PROMOTIONS_COST_USD_PROGRAM ?>
                                            </td>
                                            <td>
                                                <!--Tỉ lệ giảm giá (%)-->
                                                <?= PROMOTIONS_PRICES_ALSO ?> (%)
                                            </td>
                                            <td>
                                                <!--Giá VND còn-->
                                                <?= PROMOTIONS_SALE_OFF_VN ?>
                                            </td>
                                            <td>
                                                <!--Giá USD còn-->
                                                <?= PROMOTIONS_SALE_OFF_USD ?>
                                            </td>
                                        </tr>
                                        <?php
                                        $stt = 0;
                                        foreach ($promotions as $promotion):
                                            $stt++;
                                            ?>
                                            <tr>
                                                <td><?= $stt ?></td>
                                                <td>
                                                    <a data-toggle="modal" onclick="$('#promotionDialogID').modal('hide')" class="openDetailDiaLog" href="#largeModal" data-id="<?= $promotion['ID'] ?>">
                                                        <?= $promotion['NAME_PRO'] ?></a>
                                                </td>
                                                <td>
                                                    <img src="<?= $promotion['URL'] ?>" width="100px"/>
                                                </td>
                                                <td style="font-weight: bold;color: red;">
                                                    <?= $promotion['PRICE_VND'] ?>
                                                </td>
                                                <td style="font-weight: bold;color: red;">
                                                    <?= $promotion['PRICE_USD'] ?>
                                                </td>
                                                <td style="font-weight: bold;color: red;">
                                                    <?= ($promotion['PRICE_OFF'] != 0)? ($promotion['PRICE_OFF'] * 100) . "%" : "X" ?>
                                                </td>
                                                <td style="font-weight: bold;color: red;">
                                                    <?= $promotion['PRICE_VND_OFF'] ?>
                                                </td>
                                                <td style="font-weight: bold;color: red;">
                                                    <?= $promotion['PRICE_USD_OFF'] ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    <?php }else {
                        ?>
                        <div style="font-weight: bold ;font-size: 17px;text-align: center;margin-bottom: 20px;border-top: 1px solid #ccc" ><b><?=PROMOTIONS_EMPTY?></b></div>
                    <?php }
                    ?>
                </div><!-- tab content -->
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    $(document).ready(function() {
        $('#promotionDialogID').on('hidden.bs.modal', function() {
            window.history.pushState(null, null, "?");
        });
    });
</script>