(function($) {
    /*
     * Plugin zCart
     * Thao tac voi session gio hang thong qua ajax
     * 
     */
    $.zCart = function(options)
    {
        //Gia tri mac dinh cua doi tuong options
        var defaults = {
            "idInDetailDialog": "#id_pro_id",
            "nameInDetailDialog": "#title_pro_id",
            "categoryInDetailDialog": "#cat_pro_id",
            "imgInDetailDialog": "#img_pro_id",
            "priceVNDInDetailDialog": "#price_vnd_pro_id",
            "priceUSDInDetailDialog": "#price_usd_pro_id",
            "amountInDetailDialog": "#qty-input",
            "unitInDetailDialog": "#unit_pro_id",
            "btnAddProduct": "#add2CartID",
            "idInforUser": "#inforuser",
            "idInputPriceOff": "#price_off_real",
            "alertAddSucess": "Add product successfully!",
            "alertUpdateSucess": "Update product successfully!",
            "btnDelete": ".deleteElement"
        };
        options = $.extend(defaults, options);
        //Cac bien khoi tao
        var idInDetailDialog = $(options.idInDetailDialog);
        var nameInDetailDialog = $(options.nameInDetailDialog);
        var categoryInDetailDialog = $(options.categoryInDetailDialog);
        var priceVNDInDetailDialog = $(options.priceVNDInDetailDialog);
        var priceUSDInDetailDialog = $(options.priceUSDInDetailDialog);
        var amountInDetailDialog = $(options.amountInDetailDialog);
        var unitInDetailDialog = $(options.unitInDetailDialog);
        var btnAddProduct = $(options.btnAddProduct);
        var idInforUser = $(options.idInforUser);
        var idInputPriceOff = $(options.idInputPriceOff);
        var urlUser = 'route.php?content=reloaduser';
        //Cac ham mac dinh duoc goi
        init();
        //Ham khoi tao
        function init() {

            //Su kien nhan nut them san pham vao gio hang
            btnAddProduct.on("click", function(e) {
                addElement();
            });
        }
        //Ham them san pham vao gio hang
        function addElement() {
            $.ajax({
                type: "POST",
                url: 'route.php?content=addcart',
                cache: false,
                data: {
                    "id": idInDetailDialog.val(),
                    "name_pro": nameInDetailDialog.text(),
                    "name_cat": categoryInDetailDialog.text(),
                    "img": $(options.imgInDetailDialog + '>img').attr('src'),
                    "price_vnd": priceVNDInDetailDialog.text(),
                    "price_usd": priceUSDInDetailDialog.text(),
                    "amount": amountInDetailDialog.val(),
                    "unit_name": unitInDetailDialog.text(),
                    "price_off": idInputPriceOff.val()
                }
            }).done(function(data) {
                if (data === "add")
                {
                    $(idInforUser).load(urlUser);
                    toastr.success(options.alertAddSucess);
                }
                else if (data === "update") {
                    toastr.success(options.alertUpdateSucess);
                }
                else if (data === "out_of_cart") {
                    toastr.error('So lương hien tai trong gio hang va mua vượt quá giới hạn cho phép > 100 đơn vị!');
                    amountInDetailDialog.focus();
                }
            });
        }
    };
    /*====================================================================================================================================================================================
     * Plugin zOpenCart
     * Load cart form
     * 
     */
    $.zOpenCart = function(options)
    {
        //=============================================
        //Cac gia tri mac dinh cua options
        //=============================================  
        var defaults = {
            "dialogCartContent": "#dialogContentCartID",
            "btnOpenCart": "#dialogCartIDLink"
        };
        //Cac bien khoi tao
        options = $.extend(defaults, options);
        var dialogCartContent = $(options.dialogCartContent);
        var btnOpenCart = $(options.btnOpenCart);
        var urlFormCart = 'route.php?content=reloadcartindex';
        //Cac ham dc goi
        init();
        //Ham khoi tao
        function init()
        {
            btnOpenCart.on("click", function(e) {
                loadData();
            });
        }
        // Load thong tin len form
        function loadData()
        {
            $(dialogCartContent).load(urlFormCart);
            loadURL2Browser();
        }
        //doi url
        function loadURL2Browser()
        {
            window.history.pushState(null, "Cart", "?content=home&type=cart");
        }
    };

    $.zDeleteItemCart = function(options)
    {
        var defaults = {
            "btnDelete": ".deleteElement",
            "dialogCartContent": "#dialogContentCartID",
            "btnUpdate": ".updateElement",
            "idInforUser": "#inforuser"
        };
        options = $.extend(defaults, options);
        var btnDelete = $(options.btnDelete);
        var btnUpdate = $(options.btnUpdate);
        var dialogCartContent = $(options.dialogCartContent);
        var idInforUser = $(options.idInforUser);
        var amountRegex = /^[0-9]{1,3}$/;
        var urlFormCart = 'route.php?content=reloadcartindex';
        var urlUser = 'route.php?content=reloaduser';
        var idProduct = "";
        var amount = "";
        init();
        //Ham khoi tao
        function init() {

            //Su kien nhan nut them san pham vao gio hang
            btnDelete.on("click", function(e) {
                idProduct = $(this).data("id")
                deleteElement();
            });
            btnUpdate.on("click", function(e) {
                idProduct = $(this).data("id")
                amount = $("#amount_" + $(this).data("id")).val();
                updateElement();
            });
        }

        function deleteElement()
        {
            $.ajax({
                type: "GET",
                url: 'route.php?content=removeitemcart&id=' + idProduct,
                cache: false
            }).done(function(data) {
                if (data === "true")
                {
                    toastr.success('Xoa san pham thanh cong!');
                    $(dialogCartContent).load(urlFormCart).hide().fadeIn("slow");
                    $(idInforUser).load(urlUser).hide().fadeIn("slow");
                }
            });
        }

        function updateElement() {
            if (!amount.match(amountRegex))
            {
                toastr.error('Tham so khong phu hop!!!');
                $("#amount_" + $(this).data("id")).focus();
            }
            else if (amount > 100 || amount < 1)
            {
                toastr.error('Tham so khong phu hop!!!');
                $("#amount_" + $(this).data("id")).focus();
            }
            else {
                $.ajax({
                    type: "GET",
                    url: 'route.php?content=updateitemcart&id=' + idProduct + '&amount=' + amount,
                    cache: false
                }).done(function(data) {
                    if (data === "true")
                    {
                        toastr.success('Cap nhat thanh cong so luong!');
                        $(dialogCartContent).load(urlFormCart).hide().fadeIn("slow");
                        $(idInforUser).load(urlUser).hide().fadeIn("slow");
                    }
                });
            }
            return false;
        }
    }
})(jQuery);

