<?php

/**
 * Thao tác với bảng details_order
 * @author Chuột
 * @modified 05/07/2014
 */

/**
 * Thêm một dòng vào bảng chi tiết sản phẩm
 * @param int
 * @param int
 * @param int
 * @return boolean
 */
function DetailsOrderInsert($pid, $orderid, $amount) {
    $sql = "INSERT INTO
             details_order(ID_PRO,ID_ORDER,AMOUNT) 
             VALUES(" . $pid . "," . $orderid . "," . $amount . ")";
    return mysql_query($sql);
}
