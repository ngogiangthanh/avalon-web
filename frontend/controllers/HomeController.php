<?php

/**
 * Thao tác với các views và models liên quan trang index, login,logout
 * @author Chuột
 * @modified 05/07/2014
 */
include_once './frontend/controllers/ValidationController.php';
include_once './frontend/models/user.php';
include_once './frontend/models/category.php';

/**
 * Hiện trang chủ
 * @param string
 * @return void
 */
function GetIndex($title = WEBSITENAME) {
    $slideimages = ProductSelectSlideShow(); //banner
    $category = CategorySelect(); //category ở trang product
    $promotions = GetCurrentPromotions(); //promotion ở trang promotion
    $countCart = (isset($_SESSION['cart'])) ? count($_SESSION['cart']) : 0;
    require_once './frontend/views/layouts/penny.php';
}

/**
 * Xử lý đăng nhập
 * @param string
 * @param string
 * @return void
 */
function PostLogin($username, $password) {
    if (ValidationController::Login($username, $password)) {
        $result = UserSelect($username, $password);
        if ($result) {
            $_SESSION['login'] = $result;
            if ($_SESSION['login'][11] == '1') {
                echo 'admin';
            } else {
                echo 'user';
            }
        } else {//Tài khoản và mật khẩu không hợp lệ
            echo 'false';
        }
    } else {//Kiểm tra không hợp lệ
        echo 'false';
    }
}

/**
 * Xử lý đăng xuất
 * @return void
 */
function GetLogout() {
    //Hủy session giỏ hàng
    if (isset($_SESSION['cart'])) {
        unset($_SESSION['cart']);
    }
    //Hủy session login
    if (isset($_SESSION['login'])) {
        unset($_SESSION['login']);
    }
    echo "true";
}
