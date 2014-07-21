<?php

/**
 * Gọi các controller và view tương ứng
 * @author Chuột
 * @modified 05/07/2014
 */
session_start();
include_once './libraries/language.php';
include_once './libraries/workwithdb.php';
include_once './libraries/functions.php';
include_once './frontend/controllers/HomeController.php';
include_once './frontend/controllers/ProductsController.php';
include_once './frontend/controllers/CartController.php';
include_once './frontend/controllers/ContactController.php';
include_once './frontend/controllers/UserController.php';
include_once './frontend/controllers/PromotionController.php';
include_once './frontend/controllers/ReloadController.php';

//Khoi tao doi tuong ngon ngu
$language = new language();
//Thiet lap ngon ngu tuy chon hoac mac dinh 
if (isset($_GET['lang'])) {//Chọn lại
    $language->SetLang($_GET['lang']);
} else {//Mặc định
    $language->SetLang((isset($_SESSION['language'])) ? $_SESSION['language'] : 'vietnamese');
}
$language->CreateNewSessionLang();
$language->IncludeLangUserUI();
//Create connect to DB
$conn = new workwithdb();
$conn->CreateConnection();
//Bo dinh tuyen cho cac yeu cau tu views
switch (escape(isset($_GET['content']) ? $_GET['content'] : "home")) {
    //trang chu mac dinh
    case 'home':
        GetIndex();
        break;
    //xu ly dang nhap
    case 'login':
        PostLogin($_POST['username'], $_POST['password']);
        break;
    //xu ly dang xuat
    case 'logout':
        GetLogout();
        break;
    //xu ly dem cac san pham trong csdl
    case 'count':
        GetTotal((int) $_GET["items"], (int) $_GET["categoryID"]);
        break;
    //xu ly lay danh sach san pham trong csdl
    case 'list':
        PostList((int) $_POST["items"], (int) $_POST["currentPage"], (int) $_POST["categoryID"]);
        break;
    //xu ly lay mot san pham trong csdl
    case 'element':
        GetElement((int) $_GET["id"]);
        break;
    //xu ly them san pham vao gio hang
    case 'addcart':
        AddItem((int) $_POST['id'], $_POST['name_pro'], $_POST['name_cat'], $_POST['img'], $_POST['price_vnd'], $_POST['price_usd'], $_POST['price_off'], $_POST['amount'], $_POST['unit_name']);
        break;
    //xu ly yeu cau cap nhat so luong trong gio hang
    case 'updateitemcart':
        UpdateItem((int) $_GET['id'], (int) $_GET['amount']);
        echo "true";
        break;
    //xu ly yeu cau xoa bo mot san pham trong gio hang
    case 'removeitemcart':
        DeleteItem((int) $_GET['id']);
        echo "true";
        break;
    //xu ly yeu cau xoa bo mot san pham trong gio hang
    case 'sendcart':
        if ($_SESSION['security_code'] == $_GET['captcha']) {
            SendCart();
            echo "true";
        } else {
            echo "false";
        }
        break;
    //xu ly gui contact
    case 'sendcontact':
        if ($_SESSION['security_code'] == $_GET['captcha']) {
            ContactSend($_POST['name'], $_POST['email'], $_POST['content']);
            echo "true";
        } else {
            echo "false";
        }
        break;
    //xu ly gui dang ky
    case 'saveregister':
        if (PostConflictUser($_POST['username'])) {
            echo "conflictuser";
        } else if (PostConflictEmail($_POST['email'])) {
            echo "conflictemail";
        } else {
            if (PostRegister($_POST['username'], $_POST['password'], ($_POST['fullname']), $_POST['birth'], ($_POST['address']), ($_POST['street']), ($_POST['district']), ($_POST['province']), $_POST['numberphone'], $_POST['email'])) {
                echo "true";
            } else {
                echo "false";
            }
        }
        break;
    //xu ly gui update thong tin ca nhan
    case 'saveprofile':
        if ($_POST['password'] != '') {
            if (PostChangePassword($_SESSION['login'][0], $_POST['password'])) {
                //   echo "true";
            } else {
                echo "false";
            }
        }

        if ($_POST['email'] != $_SESSION['login'][10] && PostConflictEmail($_POST['email'])) {
            echo "conflictemail";
        } else {
            if (PostUpdateInfo($_SESSION['login'][0], $_POST['email'], escape($_POST['address']), escape($_POST['street']), escape($_POST['district']), escape($_POST['province']), escape($_POST['fullname']), $_POST['birth'], $_POST['numberphone'])) {
                echo "true";
            } else {
                echo "false";
            }
        }
        break;
    case 'checksession':
        if (isset($_SESSION['refresh'])) {
            echo $_SESSION['refresh'];
            unset($_SESSION['refresh']);
        } else {
            echo 'no';
        }
        break;
    case 'reloadmenu':
        ReloadMenu();
        break;
    case 'reloadadd':
        ReloadDetailProduct();
        break;
    case 'reloadcart':
        ReloadCartPage();
        break;
    case 'reloadcartindex':
        ReloadCart();
        break;
    case 'reloadprofile':
        ReloadProfile();
        break;
    case 'reloadlogin':
        ReloadLoginForm();
        break;
    case 'reloadregister':
        ReloadRegister();
        break;
    case 'reloadcontact':
        ReloadContact();
        break;
    case 'reloaduser':
        ReloadUser();
        break;
    default:
        GetIndex();
        break;
}
//Close connection
$conn->CloseConnection();

