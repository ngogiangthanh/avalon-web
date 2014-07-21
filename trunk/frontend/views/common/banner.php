<link rel="stylesheet" type="text/css" href="./public/css/gallery.css" />
<section id="dg-container" class="dg-container">
    <div class="dg-wrapper">
        <?php foreach ($slideimages as $slideimage): ?>
            <a data-toggle="modal" class="openDetailDiaLog" href="#largeModal" data-id="<?= $slideimage['ID'] ?>"><img src="<?= $slideimage['URL'] ?>" alt="image of product" width="270px" height="360px"/><div></div></a>
                <?php endforeach; ?>
    </div>
</section>
<script type="text/javascript" src="./public/js/modernizr.custom.53451.js"></script>
<script type="text/javascript" src="./public/js/jquery.gallery.js"></script>
<script type="text/javascript">
    $(function() {
        $('#dg-container').gallery({
            autoplay: true
        });
    });
</script>