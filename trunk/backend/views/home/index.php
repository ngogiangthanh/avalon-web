<?php require('backend/views/common/header.php'); ?>
<body>
    <?php require('backend/views/common/navbar.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12 pull-right">
                <div class="row">
                    <!-- BEGIN CONTENT -->
                    <?php require('backend/views/home/menu.php'); ?>
                    <!-- END CONTENT -->
                </div>
            </div><!--/span-->            
        </div><!--/row-->
    </div><!--/.container-->
    <script type="text/javascript" src="public/js/jquery-1.10.0.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="public/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebar .panel-heading').click(function() {
                $('#sidebar .list-group').toggleClass('hidden-xs');
                $('#sidebar .panel-heading b').toggleClass('glyphicon-plus-sign').toggleClass('glyphicon-minus-sign');
            });
        });
    </script>
</body>
</html>