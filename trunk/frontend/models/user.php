<?php

/**
 * Thao tác với bảng user
 * @author Chuột
 * @modified 05/07/2014
 */

/**
 * Lấy người dùng theo tài khoản và mật khẩu
 * @param string
 * @param string 
 * @return array
 */
function UserSelect($username, $password) {
    $sql = "SELECT * 
                FROM `user` 
                WHERE USERNAME='" . $username . "' 
                    AND password='" . md5($password) . "' 
                   AND STATUS = 1";
    $result = mysql_query($sql);
    return mysql_fetch_row($result);
}

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
function UserInsert($username, $password, $name, $birth, $address, $street, $district, $province, $numberphone, $email) {
    $sql = "INSERT INTO 
            `user` (USERNAME,PASSWORD,NAME,BIRTH,ADDRESS,STREET,DISTRICT,PROVINCE,NUMBERPHONE,EMAIL,ROLE,POINT,STATUS) 
            VALUES('" . $username . "', '" . md5($password) . "','" . $name . "','" . date("Y-m-d", strtotime($birth)) . "','" . $address . "','" . $street . "','" . $district . "','" . $province . "','" . $numberphone . "','" . $email . "',0,0,1)";
    return mysql_query($sql);
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
function UserUpdateInfo($id, $email, $address, $street, $district, $province, $name, $birth, $numberphone) {
    $sql = "UPDATE `user` 
                SET `user`.EMAIL='" . $email . "',`user`.ADDRESS='" . $address . "', 
                `user`.STREET='" . $street . "', `user`.DISTRICT='" . $district . "', 
                `user`.PROVINCE='" . $province . "', `user`.NAME='" . $name . "', 
                `user`.BIRTH='" . $birth . "', `user`.NUMBERPHONE='" . $numberphone . "' 
            WHERE `user`.ID=" . $id;
    return mysql_query($sql);
}

/**
 * Đổi mật khẩu
 * @param int
 * @param string 
 * @return boolean
 */
function UserUpdatePassword($id, $password) {
    $sql = "UPDATE `user` 
                SET `user`.PASSWORD='" . md5($password) . "' 
            WHERE `user`.ID=" . $id;
    return mysql_query($sql);
}

/**
 * Đếm số người dùng theo username
 * @param string
 * @return int
 */
function UserSelectUsername($username) {
    $sql = "SELECT count(`user`.ID) 
            FROM `user` 
            WHERE `user`.USERNAME='" . $username . "'";
    $result = mysql_query($sql);
    $total = mysql_fetch_row($result);
    return $total[0];
}

/**
 * Đếm số người dùng theo email
 * @param string
 * @return int
 */
function UserSelectEmail($email) {
    $sql = "SELECT count(`user`.ID)
            FROM `user` 
            WHERE `user`.EMAIL='" . $email . "'";
    $result = mysql_query($sql);
    $total = mysql_fetch_row($result);
    return $total[0];
}
