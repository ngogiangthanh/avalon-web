<?php

/**
 * Thao tác với các views và models liên quan trang đăng ký, đổi mật khẩu, thay đổi thông tin cá nhân
 * @author Chuột
 * @modified 05/07/2014
 */
include_once './frontend/models/user.php';

/**
 * Thêm mới người dùng
 * @param string
 * @param string 
 * @param string
 * @param date 
 * @param string
 * @param string 
 * @param string
 * @param string 
 * @param string
 * @param string 
 * @return boolean
 */
function PostRegister($username, $password, $name, $birth, $address, $street, $district, $province, $numberphone, $email) {
    return UserInsert($username, $password, escape($name), $birth, escape($address), escape($street), escape($district), escape($province), $numberphone, $email);
}

/**
 * Cập nhật người dùng
 * @param int
 * @param string 
 * @param string
 * @param string
 * @param string
 * @param string
 * @param string 
 * @param date  
 * @param string 
 * @return boolean
 */
function PostUpdateInfo($id, $email, $address, $street, $district, $province, $name, $birth, $numberphone) {
    if (UserUpdateInfo($id, $email, $address, $street, $district, $province, $name, $birth, $numberphone)) {
        $_SESSION['login'][10] = $email;
        $_SESSION['login'][5] = $address;
        $_SESSION['login'][6] = $street;
        $_SESSION['login'][7] = $district;
        $_SESSION['login'][8] = $province;
        $_SESSION['login'][3] = $name;
        $_SESSION['login'][4] = $birth;
        $_SESSION['login'][9] = $numberphone;
        return true;
    } else {
        return false;
    }
}

/**
 * Cập nhật đổi mật khẩu
 * @param int
 * @param string 
 * @return boolean
 */
function PostChangePassword($id, $password) {
    return UserUpdatePassword($id, $password);
}

/**
 * Kiểm tra trùng username
 * @param string 
 * @return boolean
 */
function PostConflictUser($username) {
    if (UserSelectUsername($username) > 0) {
        return true;
    } else {
        return false;
    }
}

/**
 * Kiểm tra trùng email
 * @param string 
 * @return boolean
 */
function PostConflictEmail($email) {
    if (UserSelectEmail($email) > 0) {
        return true;
    } else {
        return false;
    }
}
