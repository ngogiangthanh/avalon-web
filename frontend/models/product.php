<?php

/**
 * Thao tác với bảng product
 * @author Chuột
 * @modified 05/07/2014
 */

/**
 * Đếm tổng số sản phẩm theo loại sản phẩm
 * @param int
 * @return int
 */
function ProductCount($categoryID) {
    $sql = "SELECT Count(*) as total
                                    FROM
                                    product
                                    WHERE
                                    product.ID_CAT = " . $categoryID;
    $result = mysql_query($sql);
    $total = mysql_fetch_row($result);
    return $total[0];
}

/**
 * Lấy danh sách sản phẩm theo loại sản phẩm
 * @param int
 * @param int
 * @param int
 * @return array list
 */
function ProductSelect($offset, $items, $categoryID) {
    $sql = "SELECT product.ID,
                                        product.INFO_PRO,
                                        product.NAME_PRO,
                                        FORMAT(product.PRICE_USD,2)  AS PRICE_USD,
                                        FORMAT(product.PRICE_VND,-2) as PRICE_VND,
                                        product.URL,
                                        product.THUMB,
                                        unit.UNIT_NAME
                                        FROM
                                        product
                                        INNER JOIN unit ON product.ID_UNIT = unit.ID
                                        WHERE
                                        product.ID_CAT = " . $categoryID . "
                                        ORDER BY
                                        product.NAME_PRO ASC,
                                        product.ID ASC
                                        LIMIT " . $offset . ", " . $items;
    $result = mysql_query($sql);
    //Chuyển đổi dữ liệu từ cấu trúc của result từ quert mysql về cấu trúc dạng danh sách mảng của php
    $products = array();
    if (mysql_num_rows($result) > 0) {
        while ($row = mysql_fetch_assoc($result)) {
            $sql = "SELECT promotions.NAME_PROMOTION,
                                    details_promotion.PRICE_OFF
                                    FROM
                                    promotions
                                    INNER JOIN details_promotion ON details_promotion.ID_PROMOTION = promotions.ID
                                    WHERE
                                    current_date() BETWEEN promotions.TIME_START AND  promotions.TIME_END AND 
                                    details_promotion.ID_PRO=" . $row['ID'];
            $resultpromotion = mysql_query($sql);
            $promotion = array("NAME_PROMOTION" => "", "PRICE_OFF" => "0");
            if (mysql_num_rows($resultpromotion) > 0) {
                $promotion = mysql_fetch_assoc($resultpromotion);
                mysql_free_result($resultpromotion);
            }
            $products[] = $row + $promotion;
        }
        mysql_free_result($result);
    }
    return $products;
}

/**
 * Lấy tất cả sản phẩm theo loại sản phẩm
 * @param int
 * @return arrat list
 */
function ProductSelectAll($categoryID) {
    $sql = "SELECT product.ID,
                                        product.INFO_PRO,
                                        product.NAME_PRO,
                                        FORMAT(product.PRICE_USD,2)  AS PRICE_USD,
                                        FORMAT(product.PRICE_VND,-2) as PRICE_VND,
                                        product.URL,
                                        unit.UNIT_NAME
                                        FROM
                                        product
                                        INNER JOIN unit ON product.ID_UNIT = unit.ID
                                        WHERE
                                        product.ID_CAT = " . $categoryID . "
                                        ORDER BY
                                        product.NAME_PRO ASC,
                                        product.ID ASC";
    $result = mysql_query($sql);
    //Chuyển đổi dữ liệu từ cấu trúc của result từ quert mysql về cấu trúc dạng danh sách mảng của php
    $products = array();
    if (mysql_num_rows($result) > 0) {
        while ($row = mysql_fetch_assoc($result)) {
            $products[] = $row;
        }
        mysql_free_result($result);
    }
    return $products;
}

/**
 * Lấy một sản phẩm theo mã số
 * @param int
 * @return array
 */
function ProductSelectDetail($id) {
    $sql = "SELECT product.ID,
                                        product.INFO_PRO,
                                        product.NAME_PRO,
                                        FORMAT(product.PRICE_USD,2)  AS PRICE_USD,
                                        FORMAT(product.PRICE_VND,-2) as PRICE_VND,
                                        product.URL,
                                        product.THUMB,
                                        product.URL_PDF,
                                        unit.ID AS ID_UNIT,
                                        unit.UNIT_NAME,
                                        category.NAME_CAT
                                        FROM
                                        product
                                        INNER JOIN unit ON product.ID_UNIT = unit.ID
                                        INNER JOIN category ON product.ID_CAT = category.ID
                                        WHERE
                                        product.ID = " . $id;
    $result = mysql_query($sql);
    //Chuyển đổi dữ liệu từ cấu trúc của result từ quert mysql về cấu trúc dạng danh sách mảng của php
    $details = array();
    if (mysql_num_rows($result) > 0) {
        while ($row = mysql_fetch_assoc($result)) {
            $sql = "SELECT
                                    promotions.NAME_PROMOTION,
                                    promotions.CONTENT_PROMOTION,
                                    details_promotion.PRICE_OFF
                                    FROM
                                    promotions
                                    INNER JOIN details_promotion ON details_promotion.ID_PROMOTION = promotions.ID
                                    WHERE
                                    current_date() BETWEEN promotions.TIME_START AND  promotions.TIME_END AND 
                                    details_promotion.ID_PRO=" . $id;
            $resultpromotion = mysql_query($sql);
            $promotion = array("NAME_PROMOTION" => "", "CONTENT_PROMOTION" => "", "PRICE_OFF" => "0");
            if (mysql_num_rows($resultpromotion) > 0) {
                $promotion = mysql_fetch_assoc($resultpromotion);
                mysql_free_result($resultpromotion);
            }
            $details[] = $row + $promotion;
        }
        mysql_free_result($result);
    }
    return $details;
}

/**
 * Lấy tất cả hình ảnh sản phẩm lên slide show
 * @return array list
 */
function ProductSelectSlideShow() {
    $sql = "SELECT product.ID,
                                        product.URL
                                        FROM
                                        product
                                        WHERE
                                        product.SLIDE_SHOW = 1";
    $result = mysql_query($sql);
    //Chuyển đổi dữ liệu từ cấu trúc của result từ quert mysql về cấu trúc dạng danh sách mảng của php
    $details = array();
    if (mysql_num_rows($result) > 0) {
        while ($row = mysql_fetch_assoc($result)) {
            $details[] = $row;
        }
        mysql_free_result($result);
    }
    return $details;
}
