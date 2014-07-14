<link rel="stylesheet" type="text/css" href="./public/css/paging.css">
<h3><b><?= OUR_PRODUCTS ?></b></h3>
<div class="bor hidden-xs"></div>
<?php foreach ($category as $item) { ?>
    <div class="category_<?= $item['ID'] ?>">
        <div style="text-align: left"> 
            <?php echo "<h2><b>" . CATEGORY_PRODUCT . " </b>" . $item['NAME_CAT'] . "</h2><br/>"; ?> </div>
        <div class="row" id="rows_<?= $item['ID'] ?>"> </div>
        <div id="categroy_<?= $item['ID'] ?>">
            <div class="paging">
                <ul class="pages pagination" id="pages_<?= $item['ID'] ?>">
                    <li class="goPrevious" id="goPrevious_<?= $item['ID'] ?>">&lsaquo;&lsaquo;<?= PREVIOUS_PAGE ?></li>
                    <li>
                        <div class="currentPage numberPage" id="currentPage_<?= $item['ID'] ?>"></div>
                        <div class="pageInfo numberPage" id="pageInfo_<?= $item['ID'] ?>">/ 1</div>
                    </li>
                    <li class="goNext"  id="goNext_<?= $item['ID'] ?>"><?= NEXT_PAGE ?> &rsaquo;&rsaquo;</li>
                </ul>
                <div class="clr"></div>
            </div>
        </div>
                <br/>
                <br/>
    <hr/>
    </div>
    <?php
}
?>
<script type="text/javascript">
    $(document).ready(function() {
<?php
foreach ($category as $item) {
    ?>
            $("#categroy_<?= $item['ID'] ?>").zPaging({
                "rows": "#rows_<?= $item['ID'] ?>",
                "pages": "#pages_<?= $item['ID'] ?>",
                "items": 4,
                "height": 27,
                "currentPage": 1,
                "total": 0,
                "btnPrevious": "#goPrevious_<?= $item['ID'] ?>",
                "btnNext": "#goNext_<?= $item['ID'] ?>",
                "txtCurrentPage": "#currentPage_<?= $item['ID'] ?>",
                "pageInfo": "#pageInfo_<?= $item['ID'] ?>",
                "categoryID": <?= $item['ID'] ?>
            }, '<?= (isset($_SESSION['language'])) ? $_SESSION['language'] : 'vietnamese'; ?>');
    <?php
}
?>
    });
</script>

