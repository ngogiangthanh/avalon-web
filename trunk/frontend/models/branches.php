<?php

/**
 * Thao tác với bảng branches
 * @author Chuột
 * @modified 16/07/2014
 */

/**
 * Lấy tất cả các chi nhánh
 * @return array list
 */
function BranchesSelect() {
    $sql = "SELECT *
                                    FROM
                                    branches
                                    ORDER BY
                                    branches.NAME_BRANCH ASC,
                                    branches.ID ASC";
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
