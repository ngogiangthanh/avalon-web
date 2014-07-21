<?php

/**
 * Thao tác với các views và models liên quan đến chi nhánh
 * @author Chuột
 * @modified 16/07/2014
 */
include_once './frontend/models/branches.php';

/**
 * Lấy danh sách chi nhánh
 * @return array list
 */
function GetBranches() {
    return BranchesSelect();
}
