<?php

/**
 * Thao tác với bảng category
 * @author Chuột
 * @modified 05/07/2014
 */

/**
 * Lấy tất cả các loại sản phẩm
 * @return array list
 */
function CategorySelect() {
    $sql = "SELECT category.ID,
                                    category.NAME_CAT
                                    FROM
                                    category
                                    ORDER BY
                                    category.NAME_CAT ASC,
                                    category.ID ASC";
    $result = mysql_query($sql);
    //Chuyển đổi dữ liệu từ cấu trúc của result từ quert mysql về cấu trúc dạng danh sách mảng của php
    $rows = array();
    if (mysql_num_rows($result) > 0) {
        while ($row = mysql_fetch_assoc($result)) {
            $rows[] = $row;
        }
        mysql_free_result($result);
    }
    return $rows;
}
