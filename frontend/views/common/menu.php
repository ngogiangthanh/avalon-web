<style type="text/css">
    #inforuser a,#languageid a{
        color:#fff;
    }
    #inforuser a:hover,visited, #languageid a:hover,visited{
        color: #0fa6bc;
    }
    #collapseTwo a, #collapseLanguage a{
        text-decoration: none;
    }
    #collapseLanguage li {
        margin-bottom: 5px;
    }
</style>
<!-- Logo of company -->
<div class="logo text-center" >
    <img src="./public/img/logo.png" width="100%" height="100%" title="logo" alt="logo"/>
</div>
<!-- Navigation menu list -->
<ul class="list-unstyled list" role="menu" aria-labelledby="dropdownMenu" >
    <?php
    if (!isset($_SESSION['login'])) {
        ?>
        <li id="menu_id"><a href="#" class="anchorLink " data-toggle="modal" data-target="#basicModal"><i class="icon-user scolor"></i>&nbsp;<?= MEMBER ?></a></li>
        <?php
    } 
    ?>
    <li id="inforuser" class="accordion-group">
        <?php
        if (isset($_SESSION['login'])) {
            include './frontend/views/common/user.php';
        } else {
            ?>
            <a href='#' data-toggle="modal" data-target="#registerID" id="registerIDLink"><i class="icon-pencil scolor"></i>&nbsp;<?= REGISTER_LINK ?></a>
            <?php
        }
        ?>
    </li>
    <li><a href="#.team" class="anchorLink"><i class="icon-info scolor"></i>&nbsp;<?= ABOUT_US ?></a></li>
    <li class="dropdown-submenu">
        <a href="#.service" class="anchorLink"><i class="icon-gift scolor"></i>&nbsp;<?= OUR_PRODUCTS ?></a>
        <ul class="dropdown-menu">
            <?php
            foreach ($category as $item) {
                $count = ProductCount($item['ID']);
                $products = ProductSelectAll($item['ID']);
                ?> 
                <li <?php
                if ($count > 0) {
                    ?> class="dropdown-submenu" <?php
                    }
                    ?>>
                    <a href="#.category_<?= $item['ID'] ?>" class="anchorLink" style="font-size: 17px;"><?= $item['NAME_CAT'] ?></a>
                    <?php
                    if ($count > 0) {
                        ?>
                        <ul class="dropdown-menu">
                            <?php
                            foreach ($products as $element) {
                                ?>
                                <li>
                                    <a data-toggle="modal" class="openDetailDiaLog" href="#largeModal" data-id="<?= $element['ID'] ?>" style="font-size: 17px;" ><?= $element['NAME_PRO'] ?></a>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </li>
                    <?php
                }
            }
            ?>
        </ul>
    </li>
    <li><a href="#" class="anchorLink" data-toggle="modal" data-target="#promotionDialogID" id="promotionIDLink"><i class="icon-star scolor"></i>&nbsp;<?= PROMOTIONS ?></a></li>
    <li><a href="#.testimonial" class="anchorLink "><i class="icon-money scolor"></i>&nbsp;<?= WHERE_TO_BUY ?></a></li>
    <?php
    if (!isset($_SESSION['login'])) {
        ?>
        <li><a href="#" class="anchorLink"  data-toggle="modal" data-target="#contactDialogID" id="contactUsIDLink"><i class="icon-phone scolor"></i>&nbsp;<?= CONTACT_US ?></a></li>
        <?php
    } else if (isset($_SESSION['login'][11]) && $_SESSION['login'][11] != 1) {
        ?>   
        <li><a href="#" class="anchorLink"  data-toggle="modal" data-target="#contactDialogID" id="contactUsIDLink"><i class="icon-phone scolor"></i>&nbsp;<?= CONTACT_US ?></a></li>
        <?php
    }
    ?>
    <!--<li id="languageid" class="accordion-group">
        <a class="accordion-toggle accordion-heading" data-toggle="collapse" href="#collapseLanguage">
            <i class="icon-flag scolor"></i>&nbsp;<?= LANGUAGE ?>
        </a>
        <ul id="collapseLanguage" class="accordion-body collapse accordion-inner" style="height: 0px;">
            <li><a href="?lang=vietnamese"><img src="./public/img/vietnamflag.png" alt="vietnamese" width="25px"/>&nbsp;<?= VIETNAMESE ?></a></li>
            <li><a href="?lang=english"><img src="./public/img/usflag.png" alt="us" width="25px"/>&nbsp;<?= ENGLISH ?></a></li>
        </ul>
    </li>-->
    
          <li><a href=<?= LANG ?>> <img src=<?= FLAG ?> alt="us" width="32px"/>&nbsp;&nbsp&nbsp&nbsp<?= LABEL ?></a></li>
            
</ul>
<script id="_wauc9p">var _wau = _wau || [];
_wau.push(["tab", "e0mnnl5oqp5x", "c9p", "right-upper"]);
(function() {var s=document.createElement("script"); s.async=true;
s.src="http://widgets.amung.us/tab.js";
document.getElementsByTagName("head")[0].appendChild(s);
})();</script>