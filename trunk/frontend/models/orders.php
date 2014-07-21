<?php

/**
 * Thao tác với bảng orders
 * @author Chuột
 * @modified 05/07/2014
 */

/**
 * Thêm một dòng vào đơn đặt hàng
 * @param int
 * @param string
 * @return int nếu thành công or false nếu thất bại
 */
function OrderInsert($idcustomer, $price_set) {
    $sql = "INSERT INTO 
            orders(ID_CUSTOMER,TIME_ORDER, STATUS_ORDER,PRICE_SET) 
            VALUES(" . $idcustomer . ",now(),0,'" . $price_set . "')";
    mysql_query($sql);
    return mysql_insert_id();
}
