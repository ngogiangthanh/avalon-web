<?php

/**
 * Thao tác với bảng promotions
 * @author Chuột
 * @modified 05/07/2014
 */

/**
 * Lấy chương trình khuyến mãi 
 * @return array
 */
function PromotionsSelect() {
    $sql = "SELECT
                        promotions.NAME_PROMOTION,
                        promotions.CONTENT_PROMOTION,
                        DATE_FORMAT(promotions.TIME_START,'%d/%m/%Y') as TIME_START,
                        DATE_FORMAT(promotions.TIME_END,'%d/%m/%Y') as TIME_END,
                        product.NAME_PRO,
                        FORMAT(product.PRICE_USD,2)  as PRICE_USD,
                        FORMAT(product.PRICE_VND,-2) as PRICE_VND,
                        product.URL,
                        details_promotion.PRICE_OFF,
                        FORMAT((1-details_promotion.PRICE_OFF)*product.PRICE_USD,2)  as PRICE_USD_OFF,
                        FORMAT((1-details_promotion.PRICE_OFF)*product.PRICE_VND,-2)  as PRICE_VND_OFF,
                        product.ID
                        FROM
                        details_promotion
                        INNER JOIN promotions ON details_promotion.ID_PROMOTION = promotions.ID
                        INNER JOIN product ON details_promotion.ID_PRO = product.ID
                        WHERE
                        current_date() BETWEEN promotions.TIME_START AND  promotions.TIME_END
                        ORDER BY
                        product.NAME_PRO ASC";
    $result = mysql_query($sql);
    //Chuyển đổi dữ liệu từ cấu trúc của result từ quert mysql về cấu trúc dạng danh sách mảng của php
    $promotions = array();
    if (mysql_num_rows($result) > 0) {
        while ($row = mysql_fetch_assoc($result)) {
            $promotions[] = $row;
        }
        mysql_free_result($result);
    }
    return $promotions;
}
