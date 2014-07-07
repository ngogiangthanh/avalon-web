(function($) {
    /*
     * Plugin zLoadDetailPro2Dialog
     * Tai thong tin chi tiet san pham len dialog bang cach su dung ajax
     * @author Chuột
     * 
     */
    $.zLoadDetailPro2Dialog = function(options)
    {
        //=============================================
        //Cac gia tri mac dinh cua doi tuong options
        //=============================================  
        var defaults = {
            "idProduct": 1, //id cua san pham
            "idInDialog": "#id_pro_id",
            "imgInDialog": "#img_pro_id",
            "titleInDialog": "#title_pro_id",
            "priceVNDInDialog": "#price_vnd_pro_id",
            "priceUSDInDialog": "#price_usd_pro_id",
            "unitInDialog": "#unit_pro_id",
            "categoryInDialog": "#cat_pro_id",
            "infoInDialog": "#inf_pro_id",
            "idInputPriceOff": "#price_off_real",
            "pdfURL": "#pdf_url_id",
            "priceOffVND": "#price_off_vnd_pro_id",
            "priceOffUSD": "#price_off_usd_pro_id",
            "namePromotion": "#name_promotion_id",
            "contentPromotion": "#content_promotion_id",
        };
        options = $.extend(defaults, options);
        var idInDialog = $(options.idInDialog);
        var imgInDialog = $(options.imgInDialog);
        var titleInDialog = $(options.titleInDialog);
        var priceVNDInDialog = $(options.priceVNDInDialog);
        var priceUSDInDialog = $(options.priceUSDInDialog);
        var unitInDialog = $(options.unitInDialog);
        var categoryInDialog = $(options.categoryInDialog);
        var infoInDialog = $(options.infoInDialog);
        var idInputPriceOff = $(options.idInputPriceOff);
        var pdfURL = $(options.pdfURL);
        var priceOffVND = $(options.priceOffVND);
        var priceOffUSD = $(options.priceOffUSD);
        var namePromotion = $(options.namePromotion);
        var contentPromotion = $(options.contentPromotion);

        init();
        //=============================================
        //Ham khoi tao
        //=============================================  
        function init()
        {
            loadData2Dialog();
            loadURL2Browser();
        }
        //=============================================
        // Ham lay du lieu load len dialog
        //=============================================  
        function loadData2Dialog()
        {
            $.ajax({
                type: "GET",
                url: 'route.php?content=element&id=' + options.idProduct,
                dataType: "json",
                cache: false
            }).done(function(data) {
                //  console.log(data);	
                if (data.length > 0) {
                    $("#price_off_id").show();
                    $("#promotion_id_tab").show();
                    idInDialog.empty();
                    imgInDialog.empty();
                    titleInDialog.empty();
                    priceVNDInDialog.empty();
                    priceUSDInDialog.empty();
                    unitInDialog.empty();
                    categoryInDialog.empty();
                    infoInDialog.empty();
                    priceOffVND.empty();
                    priceOffUSD.empty();
                    namePromotion.empty();
                    contentPromotion.empty();
                    //
                    idInDialog.val(data[0].ID);
                    imgInDialog.append('<img src=' + data[0].URL + ' alt="image of product" width="240px"//>');
                    titleInDialog.append(data[0].NAME_PRO);
                    priceVNDInDialog.append(data[0].PRICE_VND + " VND");
                    priceUSDInDialog.append(data[0].PRICE_USD + " USD");
                    unitInDialog.append(data[0].UNIT_NAME);
                    categoryInDialog.append(data[0].NAME_CAT);
                    infoInDialog.append(data[0].INFO_PRO);
                    pdfURL.attr('href', data[0].URL_PDF);
                    idInputPriceOff.val(data[0].PRICE_OFF);
                    if (data[0].NAME_PROMOTION != '') {
                        priceOffVND.append((parseInt(data[0].PRICE_VND.replace(/(,)/g, '')) * (1 - parseFloat(data[0].PRICE_OFF))).format() + " VND (-" + parseFloat(data[0].PRICE_OFF) * 100 + "%)");
                        var piceusd = parseFloat((parseFloat(data[0].PRICE_USD.replace(/(,)/g, '')) * (1 - parseFloat(data[0].PRICE_OFF))).toFixed(2));
                        priceOffUSD.append(piceusd.format() + " USD (-" + parseFloat(data[0].PRICE_OFF) * 100 + "%)");
                        namePromotion.append(data[0].NAME_PROMOTION);
                        contentPromotion.append(data[0].CONTENT_PROMOTION);
                    }
                    else {
                        $("#price_off_id").hide();
                        $("#promotion_id_tab").hide();
                        $("#inf_pro_id,#info_id_tab").addClass('in active');
                    }
                }
                else {
                    $('#largeModal').modal('hide');
                    clearURL();
                }
            });
        }
        //=============================================
        //Ham load lai url
        //=============================================  
        function loadURL2Browser()
        {
            window.history.pushState(null, "Product details", "?content=home&type=productdetails&id=" + options.idProduct);
        }

        function clearURL() {
            window.history.pushState(null, "Product details", "?");
        }
    };
})(jQuery);

