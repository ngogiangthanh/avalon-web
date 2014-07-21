<?php

/**
 * Thao tác với các views và models liên quan tới giỏ hàng
 * @author Chuột
 * @modified 05/07/2014
 */

/**
 * Tạo giỏ hàng
 * @return void
 */
function CreateCart() {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
}

/**
 * Cập nhật số lượng sản phẩm vào giỏ hàng
 * @param int
 * @param string
 * @param string
 * @param string
 * @param number
 * @param number
 * @param number
 * @param int
 * @param string
 * @return void
 */
function AddItem($pid, $name_pro, $name_cat, $img, $price_vnd, $price_usd, $price_off, $amount, $unit_name) {
    CreateCart();
    if (isset($_SESSION['cart'][$pid])) {// Nếu đã có
        if ($_SESSION['cart'][$pid]['amount'] + $amount <= 100) {
            // Cộng dồn trong giới hạn <= 100 cái
            $_SESSION['cart'][$pid]['amount'] += $amount;
            echo "update";
        } else {
            // Ngoài 100 thông báo lỗi
            echo "out_of_cart";
        }
    } else {// Sản phẩm mới
        $_SESSION['cart'][$pid] = array(
            'id' => $pid,
            'name_pro' => $name_pro,
            'name_cat' => $name_cat,
            'image' => $img,
            'vietnamese' => $price_vnd,
            'english' => $price_usd,
            'price_off' => $price_off,
            'amount' => $amount,
            'unit_name' => $unit_name); //Tạo mới một phần tử mảng trong session giỏ hàng
        echo "add";
    }
}

/**
 * Cập nhật thay đổi trong giỏ hàng
 * @param int
 * @param int
 * @return void
 */
function UpdateItem($pid, $amount) {
    if ($amount <= 0) {// Xóa bỏ khỏi giỏ hàng sản phẩm nếu SL <= 0
        unset($_SESSION['cart'][$pid]);
    } else {// Ngược lại chỉ thay đổi số lượng
        $_SESSION['cart'][$pid]['amount'] = $amount;
    }
}

/**
 * Xóa một sản phẩm trong giỏ hàng
 * @param int
 * @return void
 */
function DeleteItem($pid) {
    unset($_SESSION['cart'][$pid]);
}

/**
 * Lấy toàn bộ thông tin về giỏ hàng
 * @return void
 */
function GetCart() {
    return $_SESSION['cart'];
}

/**
 * Đếm số sản phẩm trong giỏ hàng
 * @return int
 */
function CountItem() {
    $count = 0;
    foreach ($_SESSION['cart'] as $product) {
        $count += $product['amount'];
    }
    return $count;
}

/**
 * Tính tổng tiền của giỏ hàng
 * @return string
 */
function PriceCart() {
    $total = 0;
    foreach ($_SESSION['cart'] as $product) {
        $total += preg_replace('/,/', '', $product[$_SESSION['language']]) * $product['amount'];
    }
    return $total;
}

/**
 * Xóa toàn bộ thông tin giỏ hàng
 * @return void
 */
function DestroyCart() {
    $_SESSION['cart'] = array();
}

/**
 * Gửi yêu cầu đặt hàng
 * @return void
 */
function SendCart() {
    //include models thao tác với 2 bảng order và details_order
    include_once './frontend/models/details_order.php';
    include_once './frontend/models/orders.php';
    if (isset($_SESSION['language']) && $_SESSION['language'] == "english") {
        $price_set = "USD";
    } else {
        $price_set = "VND";
    }
    $orderid = OrderInsert($_SESSION['login'][0], $price_set);
    foreach ($_SESSION['cart'] as $product) {
        DetailsOrderInsert($product['id'], $orderid, $product['amount']);
    }
    DestroyCart();//Hủy giỏ hàng sau khi đã gửi thành công
}
