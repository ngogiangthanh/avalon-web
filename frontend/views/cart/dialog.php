<style >
    .close-cart{
        font-weight: bold;
        color: black;
        font-size: 30px;
        margin-right: 5px;
    }
</style>
<div class="modal fade" id="dialogCartID" tabindex="-1" role="dialog" >
    <div class="modal-dialog">
        <div class="modal-content"  style="width: 800px">
            <div class="row">
                <div class="col-sm-12 col-md-12" >
                    <button type="button" class="close close-cart" data-dismiss="modal" aria-hidden="true" >
                        ×
                    </button>
                    <div class="tab-content" id="dialogContentCartID">
                        <?php
                        include_once 'index.php';
                        ?>
                    </div><!-- tab content -->
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#dialogCartID').on('hidden.bs.modal', function() {
        window.history.pushState(null, null, "?");
    });
</script>
