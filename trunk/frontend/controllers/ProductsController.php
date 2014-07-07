<?php

/**
 * Thao tác với các views và models liên quan đến sản phẩm
 * @author Chuột
 * @modified 05/07/2014
 */
include_once './frontend/models/product.php';

/**
 * Tổng số sản phẩm theo loại sản phẩm
 * @param int
 * @param int
 * @return void
 */
function GetTotal($items, $categoryID) {
    $totalItems = ProductCount($categoryID);
    $pages = $totalItems / $items;
    $total = array("total" => 0);
    $tmp = explode(".", $pages);
    //lam tròn với cac số lẻ. vi du: 0.5 = 1 or 1.5 = 2 or 1 = 1 or 1.1 = 2
    if (count($tmp) > 1) {
        $pages = $tmp[0] + 1;
    } else {
        $pages = $tmp[0];
    }
    $total["total"] = $pages;
    echo json_encode($total);
}

/**
 * Lấy danh sách các sản phẩm
 * @param int
 * @param int
 * @param int
 * @return void
 */
function PostList($items, $currentPage, $categoryID) {
    $offset = ($currentPage - 1) * $items;
    $products = ProductSelect($offset, $items, $categoryID);
    echo json_encode($products);
}

/**
 * Lấy một sản phẩm
 * @param int
 * @return void
 */
function GetElement($id) {
    $details = ProductSelectDetail($id);
    echo json_encode($details);
}
