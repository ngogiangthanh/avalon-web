<?php

/**
 * Thao tác với các views và models liên quan tới ajax
 * @author Chuột
 * @modified 06/07/2014
 */

/**
 * Reload menu
 * @return void
 */
function ReloadMenu() {
    include_once './frontend/models/category.php';
    include_once './frontend/models/product.php';
    $category = CategorySelect();
    include_once './frontend/views/common/menu.php';
}

/**
 * Reload chi tiết sp
 * @return void
 */
function ReloadDetailProduct() {
    include_once './frontend/views/product/add.php';
}

/**
 * Reload trang dialog giỏ hàng
 * @return void
 */
function ReloadCartPage() {
    include_once './frontend/views/cart/dialog.php';
}

/**
 * Reload nội dung giỏ hàng
 * @return void
 */
function ReloadCart() {
    include_once './frontend/views/cart/index.php';
}

/**
 * Reload hồ sơ người dùng
 * @return void
 */
function ReloadProfile() {
    include_once './frontend/views/user/profile.php';
}

/**
 * Reload form đăng nhập
 * @return void
 */
function ReloadLoginForm() {
    include_once './frontend/views/common/login.php';
}

/**
 * Reload đăng ký
 * @return void
 */
function ReloadRegister() {
    include_once './frontend/views/user/register.php';
}

/**
 * Reload liên hệ
 * @return void
 */
function ReloadContact() {
    include_once './frontend/views/us/contact.php';
}

/**
 * Reload phần user panel
 * @return void
 */
function ReloadUser() {
    include_once './frontend/views/common/user.php';
}
