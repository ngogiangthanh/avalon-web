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
            "alertOutOfRangeCart": "Cart was out of range!",
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
                    toastr.error(options.alertOutOfRangeCart);
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
            "btnOpenCart": "#dialogCartIDLink",
            "btnOpenCart1": "#dialogCartIDLink1"
        };
        //Cac bien khoi tao
        options = $.extend(defaults, options);
        var dialogCartContent = $(options.dialogCartContent);
        var btnOpenCart = $(options.btnOpenCart);
        var btnOpenCart1 = $(options.btnOpenCart1);
        var urlFormCart = 'route.php?content=reloadcartindex';
        //Cac ham dc goi
        init();
        //Ham khoi tao
        function init()
        {
            btnOpenCart.on("click", function(e) {
                loadData();
            });
            btnOpenCart1.on("click", function(e) {
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
            window.history.pushState(null, null, "?content=home&type=cart");
        }
    };

    $.zUpdateItemCart = function(options)
    {
        var defaults = {
            "btnDelete": ".deleteElement",
            "dialogCartContent": "#dialogContentCartID",
            "btnUpdate": ".updateElement",
            "idInforUser": "#inforuser",
            "alertDeleteSuccess": "Delete successfully!",
            "alertInvalidParam": "Parameter invalid!",
            "alertUpdateSuccess": "Update successfully!"
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
                    toastr.success(options.alertDeleteSuccess);
                    $(dialogCartContent).load(urlFormCart).hide().fadeIn("slow");
                    $(idInforUser).load(urlUser).hide().fadeIn("slow");
                }
            });
        }

        function updateElement() {
            if (!amount.match(amountRegex))
            {
                toastr.error(options.alertInvalidParam);
                $("#amount_" + $(this).data("id")).focus();
            }
            else if (amount > 100 || amount < 1)
            {
                toastr.error(options.alertInvalidParam);
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
                        toastr.success(options.alertUpdateSuccess);
                        $(dialogCartContent).load(urlFormCart).hide().fadeIn("slow");
                        $(idInforUser).load(urlUser).hide().fadeIn("slow");
                    }
                });
            }
            return false;
        }
    }


    $.zSendCart = function(options)
    {
        var defaults = {
            "btnSend": "#btnGuiDH",
            "captcha": "#captcha",
            "contentCart": "#dialogContentCartID",
            "inforUser": "#inforuser",
            "alertEmptyCart": "Giỏ hàng rỗng!",
            "alertSuccessCart": "Gửi thành công!",
            "alertIncorrect": "Captcha không khớp!"
        };
        options = $.extend(defaults, options);

        var btnSend = $(options.btnSend);
        var captchar = $(options.captcha);
        var contentCart = $(options.contentCart);
        var inforUser = $(options.inforUser);
        var urlCart = "route.php?content=reloadcartindex";
        var urlUser = "route.php?content=reloaduser";
        init();
        //Ham khoi tao
        function init() {
            $(btnSend).click(function() {
                var captcha = $(captchar).val();
                console.log(captcha);
                if (captcha === "") {
                    toastr.error(options.alertEmptyCart);
                    $(captchar).focus();
                    return false;
                }
                $.ajax({
                    type: "GET",
                    url: 'route.php?content=sendcart&captcha=' + captcha,
                    cache: false
                }).done(function(data) {
                    if (data === "true")
                    {
                        toastr.success(options.alertSuccessCart);
                        $(contentCart).load(urlCart).hide().fadeIn("slow");
                        $(inforUser).load(urlUser).hide().fadeIn("slow");
                    }
                    else {
                        console.log(data);
                        toastr.error(options.alertIncorrect);
                    }
                });
            });
        }
    }
})(jQuery);

