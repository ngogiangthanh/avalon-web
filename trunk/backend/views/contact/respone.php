<?php require('backend/views/common/header.php'); ?>
<body>
    <?php require('backend/views/common/navbar.php'); ?>
    <link href="./public/css/font-awesome.min.css" rel="stylesheet"/>	
    <script type="text/javascript" src="public/js/jquery-1.10.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./public/css/bootstrap-wysihtml5.css" />
    <script type="text/javascript" src="public/js/toastr.js"></script>
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-xs-12 pull-left" id="sidebar" role="navigation">
                <?php require('backend/views/common/sidebar.php'); ?>
            </div>
            <div class="col-sm-9 col-xs-12 pull-right">
                <div class="row">
                    <!-- BEGIN CONTENT -->
                    <?php require('backend/views/contact/form.php'); ?>
                    <!-- END CONTENT -->
                </div>
            </div><!--/span-->            
        </div><!--/row-->
    </div><!--/.container-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="public/js/bootstrap.min.js"></script>
    <script src="./public/js/wysihtml5-0.3.0.js"></script>
    <script src="./public/js/bootstrap-wysihtml5.js"></script>
    <script type="text/javascript">
    toastr.options.closeButton = true;
    toastr.options.newestOnTop = true;
     $('#respone, #contact').wysihtml5({
            "font-styles": true,
            "emphasis": true,
            "lists": true,
            "html": false,
            "link": false,
            "image": false,
            "stylesheets": false
        });
<?php
if (isset($_GET['statusupdate']) && $_GET['statusupdate'] == 'true') {
    ?>
        toastr.success("<?= CONTACT_RESPONE_ALERT_SEND_SUCCESS ?>");
    <?php
} else if (isset($_GET['statusupdate']) && $_GET['statusupdate'] == 'false') {
    ?>
        toastr.error("<?= CONTACT_RESPONE_ALERT_SEND_FAILED ?>");
<?php }
?>
        $(document).ready(function() {
            $('#sidebar .panel-heading').click(function() {
                $('#sidebar .list-group').toggleClass('hidden-xs');
                $('#sidebar .panel-heading b').toggleClass('glyphicon-plus-sign').toggleClass('glyphicon-minus-sign');
            });
        });
    </script>
</body>
</html>