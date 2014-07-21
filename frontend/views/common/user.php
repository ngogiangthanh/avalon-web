<?php
$countCart = (isset($_SESSION['cart'])) ? count($_SESSION['cart']) : 0;
?>
<a class="accordion-toggle accordion-heading" data-toggle="collapse"  href="#collapseTwo">
    <i class="icon-th"></i>&nbsp;<?= HELLO_USER . ", " . $_SESSION['login'][1]; ?><b class="caret"></b>
</a>
<ul id="collapseTwo" class="accordion-body collapse accordion-inner" style="height: 0px;">

    <?php
    if ($_SESSION['login'][11] == '1') {
        ?>
        <li><a href='admin.php' target="_blank"><i class="icon-user"></i>&nbsp;<?= ADMINISTRATOR ?></a></li>
        <?php
    } else {
        ?> 
        <li><a href='#' data-toggle="modal" data-target="#dialogCartID" id="dialogCartIDLink"><i class="icon-gift"></i>&nbsp;<?php
                echo CART;
                if ($countCart != 0) {
                    ?> <span class="badge alert-info"><?= $countCart ?></span><?php } ?></a>
        </li>
        <li><a href='#' data-toggle="modal" data-target="#profileUserID"><i class="icon-info-sign"></i>&nbsp;<?= PROFILE_USER ?></a></li>
        <?php
    }
    ?>
    <li id="logout_id"><a href='#'><i class="icon-off"></i>&nbsp;<?= LOGOUT ?></a></li>
</ul>
<script src="./public/js/jquery.cart.1.0.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $.zOpenCart();
        var obj = {
            "alertLogoutConfirm": "<?= LOGOUT_CONFIRM ?>",
            "alertLogoutFailed": "<?= LOGOUT_FAILED ?>",
            "alertLoginSuccess": "<?= LOGOUT_SUCCESS ?>"
        };
        $.zAuthenticate(obj, 'none');
    });
</script>