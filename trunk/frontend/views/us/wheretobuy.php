<style >
    .cont{
        line-height: 2em;
        font-weight: bold ;
        font-family: serif;
        font-size: 18px;
        margin-left: 15px;
    }
</style>

<link rel="stylesheet" href="./public/css/liquid-slider.css">
<h3><b><?= WHERE_TO_BUY ?></b></h3>
<div class="bor hidden-xs"></div>
<div class="row">
        <div id="main-slider" class="col-md-12 liquid-slider">
            <?php foreach ($branches as $branch): ?>  
                <div>
                    <h2 class="title"><?=$branch['NAME_BRANCH'];?></h2>
                    <p><?=$branch['DESCRIPTE_BRANCH'];?></p>
                </div>   
            <?php endforeach; ?>
        </div>
</div>

<script src="./public/js/jquery.easing.min.js"></script>
<script src="./public/js/jquery.touchSwipe.min.js"></script>
<script src="./public/js/jquery.liquid-slider.min.js"></script>  
<script type="text/javascript">
    $('#main-slider').liquidSlider();
  </script>