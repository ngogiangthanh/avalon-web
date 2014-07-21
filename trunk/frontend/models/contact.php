<?php

/**
 * Thao tác với bảng Contact
 * @author Chuột
 * @modified 05/07/2014
 */

/**
 * Thêm một dòng vào bảng liên hệ
 * @param string
 * @param string
 * @param string
 * @return boolean
 */
function ContactInsert($name, $email, $content) {
    $sql = "INSERT INTO 
                        contact(NAME,EMAIL, CONTACT,STATUS) 
                        VALUES('" . $name . "','" . $email . "','" . $content . "',0)";
    return mysql_query($sql);
}
