<?php

/**
 * Thao tác với các views và models liên quan tới liên hệ
 * @author Chuột
 * @modified 05/07/2014
 */
include_once './frontend/models/contact.php';

/**
 * Gửi liên hệ của khách hàng
 * @param string
 * @param string
 * @param string
 * @return boolean
 */
function ContactSend($name, $email, $content) {
    return ContactInsert($name, $email, $content);
}
