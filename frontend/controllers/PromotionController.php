<?php

/**
 * Thao tác với các views và models liên quan đến khuyến mãi
 * @author Chuột
 * @modified 05/07/2014
 */
include_once './frontend/models/promotions.php';

/**
 * Lấy chương trình khuyến mãi trong thời điểm
 * @return void
 */
function GetCurrentPromotions() {
    return PromotionsSelect();
}
