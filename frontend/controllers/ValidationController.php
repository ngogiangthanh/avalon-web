<?php

/**
 * Thao tác kiểm tra trước khi gọi models
 * @author Chuột
 * @modified 05/07/2014
 */
class ValidationController {

    /**
     * Kiểm tra login
     * @param string
     * @param string 
     * @return boolean
     */
    public static function Login($username, $password) {
        if ($username == "" || $password == "") {
            return false;
        } else {
            return true;
        }
    }

}
