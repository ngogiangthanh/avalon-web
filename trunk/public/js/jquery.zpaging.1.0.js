(function($) {
    /*
     * Plugin zPaging
     * Phân trang voi ajax
     * @author Chuột
     * 
     */
    $.fn.zPaging = function(options, language) {
        //=============================================
        //Cac gia mac dinh cua doi tuong options
        //=============================================
        var defaults = {
            "rows": "#rows", // id trong the div
            "items": 1, //so phan tu tren trang
            "height": 27, //chieu cao cua khung chua san pham
            "currentPage": 1, //trang hien tai
            "total": 1, //tong so trang
            "btnPrevious": ".goPrevious", //class trong the div
            "btnNext": ".goNext", //class trong the div
            "txtCurrentPage": "#currentPage", //id the div trang hien tai
            "pageInfo": ".pageInfo", //class the div thong tin ve trang
            "categoryID": 1 //id loai san pham,
        };
        //Ap dung defaults vao options
        options = $.extend(defaults, options);
        //=============================================
        //Cac bien se su dung trong plugin
        //=============================================
        var rows = $(options.rows);
        var btnPrevious = $(options.btnPrevious);
        var btnNext = $(options.btnNext);
        var txtCurrentPage = $(options.txtCurrentPage);
        var lblPageInfo = $(options.pageInfo);
        //=============================================
        //Khoi tao cac ham can thi khi Plugin duoc su dung
        //=============================================
        init();
        setRowsHeight();
        //=============================================
        //Ham khoi dong
        //=============================================
        function init() {
            //Lay tong so trang 
            $.ajax({
                url: "route.php?content=count&items=" + options.items + "&categoryID=" + options.categoryID,
                type: "GET",
                dataType: "json"
            }).done(function(data) {
                options.total = data.total;
                pageInfo();
                loadData(options.currentPage);
            });

            //Gan su kien vao cho btnPrevious - btnNext - txtCurrentPage
            setCurrentPage(options.currentPage);

            btnPrevious.on("click", function(e) {
                goPrevious();
                e.stopImmediatePropagation();
            });

            btnNext.on("click", function(e) {
                goNext();
                e.stopImmediatePropagation();
            });
            if ($(options.total === 1)) {
                $("#categroy_" + options.categoryID).empty();
            }
        }

        //=============================================
        //Ham xu ly khi nhan vao nut btnPrevious
        //=============================================
        function goPrevious() {
            if (options.currentPage !== 1) {
                var p = options.currentPage - 1;
                loadData(p);
                setCurrentPage(p);
                options.currentPage = p;
                pageInfo();
            }
        }

        //=============================================
        //Ham xu ly khi nhan vao nut btnNext
        //=============================================
        function goNext() {
            if (options.currentPage !== options.total) {
                var p = options.currentPage + 1;
                loadData(p);
                setCurrentPage(p);
                options.currentPage = p;
                pageInfo();
            }
        }

        //=============================================
        //Ham xu ly gan gia tri vao 
        //trong o textbox currentPage
        //=============================================
        function setCurrentPage(value) {
            txtCurrentPage.text(value);
        }

        //=============================================
        //Ham hien thi thong tin phan trang
        //=============================================
        function pageInfo() {
            lblPageInfo.text(" / " + options.total);
        }

        //=============================================
        //Thiet lap chieu cao cho ul#rows
        //=============================================
        function setRowsHeight() {
//            var ulHeight = (options.items * options.height) + "px";
//            rows.css("height", ulHeight);
        }

        //=============================================
        //Ham load cac thong trong database va dua vao #row
        //=============================================
        function loadData(page) {
            $.ajax({
                url: "route.php?content=list",
                type: "POST",
                dataType: "json",
                cache: false,
                data: {
                    "items": options.items,
                    "currentPage": page,
                    "categoryID": options.categoryID
                }
            }).done(function(data) {
                // console.log(data);
                if (data.length > 0) {
                    rows.empty();
                    var str = '';
                    $.each(data, function(i, val) {
                        str += '<div class="col-md-3 col-sm-6">'
                                + '<div class="thumbnail">'
                                + '<img src="' + val.URL + '" alt="img" width="200px"/>'
                                + '<h4><a data-toggle="modal" class="openDetailDiaLog" href="#largeModal" data-id="' + val.ID + '">' + val.NAME_PRO + '</a></h4>'

                        if (language === 'english') {
                            if (val.NAME_PROMOTION != '') {
                                var price_off_usd = parseFloat((parseFloat(data[0].PRICE_USD.replace(/(,)/g, '')) * (1 - parseFloat(data[0].PRICE_OFF))).toFixed(2)).format() + " USD (-" + parseFloat(data[0].PRICE_OFF) * 100 + "%)";
                                str += '<p style="color: green;font-size: 16px;font-weight: bold;">Price: ' + val.PRICE_USD + ' USD</p>'
                                        + '<p style="color:red;font-size: 16px;font-weight: bold"> Sale off: ' + price_off_usd + '</p>';
                            }
                            else {
                                str += '<p style="color: green;font-size: 16px;font-weight: bold">Price: ' + val.PRICE_USD + ' USD</p>';
                            }
                        }
                        else
                        {
                            if (val.NAME_PROMOTION != '') {
                                var price_off_vnd = (parseInt(data[0].PRICE_VND.replace(/(,)/g, '')) * (1 - parseFloat(data[0].PRICE_OFF))).format() + " VND (-" + parseFloat(data[0].PRICE_OFF) * 100 + "%)";
                                str += '<p style="color: green;font-size: 16px;font-weight: bold">Giá: ' + val.PRICE_VND + ' VND</p>'
                                        + '<p style="color:red;;font-size: 16px;font-weight: bold">Giảm còn: ' + price_off_vnd + '</p>';
                            }
                            else {
                                str += '<p style="color: green;font-size: 16px;font-weight: bold">Giá: ' + val.PRICE_VND + ' VND</p>';
                            }
                        }
                        str += '</div></div>';
                    });
                    //  str += '</div>';
                    rows.append(str).hide().fadeIn("slow");
                }
                else {
                    $(".category_" + options.categoryID).empty();
                }
            });
        }
    };
})(jQuery);

