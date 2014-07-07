<?php

// Login =======================================================================
define("LOGIN_TITLE", "Administrator login");
define("LOGIN_USERNAME_PLACEHOLDER", "Your username");
define("LOGIN_PASSWORD_PLACEHOLDER", "Your password");
define("LOGIN_SUBMIT_BUTTON", "Login");
define("LOGIN_ALERT_LOGIN_FAILED", "Wrong username or password !");
define("LOGIN_ALERT_PASSWORD_CHANGED", "Password was changed successfully. Please login again!");
// Navbar ======================================================================
define("NAVBAR_HOME_TITLE_", "Administrator");
define("NAVBAR_STAFF", "Staff");
define("NAVBAR_PROFILE", "My profile");
define("NAVBAR_LOGOUT", "Logout");
define("NAVBAR_ALERT_LOGOUT", "Do you want to logout?");
// Sidebar =====================================================================
define("SIDEBAR_MAIN_MENU", "Administrator");
define("SIDEBAR_MAIN_PAGE_MENU", "Home customer");
define("SIDEBAR_CATEGORIES_MENU", "Categories list");
define("SIDEBAR_UNITS_MENU", "Unit list");
define("SIDEBAR_PRODUCTS_MENU", "Products list");
define("SIDEBAR_PROMOTIONS_MENU", "Promotions list");
define("SIDEBAR_ORDERS_MENU", "Orders list");
define("SIDEBAR_CUMSTOMERS_MENU", "Customers list");
define("SIDEBAR_CONTACTS_MENU", "Contacts"); // 
//Home page ====================================================================
define("HOME_TILTE", "Administrator page");
define("HOME_MENU_MAIN_PAGE_MENU", "Home customer");
define("HOME_MENU_CATEGORIES_MENU", "Categories list");
define("HOME_MENU_UNITS_MENU", "Unit list");
define("HOME_MENU_PRODUCTS_MENU", "Products list");
define("HOME_MENU_PROMOTIONS_MENU", "Promotions list");
define("HOME_MENU_ORDERS_MENU", "Orders list");
define("HOME_MENU_CUMSTOMERS_MENU", "Customers list");
define("HOME_MENU_CONTACTS_MENU", "Contacts");
//Profile page =================================================================
define("PROFILE_ADMIN_TITLE", "My profile");
define("PROFILE_ADMIN_USERNAME", "Username");
define("PROFILE_ADMIN_PASSWORD", "Password");
define("PROFILE_ADMIN_PASSWORD_PLACEHOLDER", "Enter new password");
define("PROFILE_ADMIN_NAME", "Full name");
define("PROFILE_ADMIN_NAME_PLACEHOLDER", "Enter your full name");
define("PROFILE_ADMIN_ADDRESS", "Address");
define("PROFILE_ADMIN_ADDRESS_PLACEHOLDER", "Enter your address");
define("PROFILE_ADMIN_PHONE", "Phone number");
define("PROFILE_ADMIN_PHONE_PLACEHOLDER", "Enter your phone number");
define("PROFILE_ADMIN_EMAIL", "Email");
define("PROFILE_ADMIN_EMAIL_PLACEHOLDER", "Enter your email");
define("PROFILE_ADMIN_BUTTON_UPDATE", "Update");
define("PROFILE_ADMIN_BUTTON_BACK", "Back");
define("PROFILE_ADMIN_ALERT_UPDATE_SUCCESS", "Update your profile successfully!");
define("PROFILE_ADMIN_ALERT_UPDATE_FAILED", "Update your profile failed!");
// Customer ====================================================================
define("CUSTOMER_TITLE_INDEX", "Customers list");
define("CUSTOMER_TITLE_INFO", "My profile");
define("CUSTOMER_TITLE_VIEW", "View customer information");
//Table ========================================================================
define("CUSTOMER_TABLE_SEARCH", "Search customer with username or full name");
define("CUSTOMER_TABLE_ID", "ID");
define("CUSTOMER_TABLE_USERNAME", "Username");
define("CUSTOMER_TABLE_NAME", "Full name");
define("CUSTOMER_TABLE_TYPE", "Level");
define("CUSTOMER_TABLE_TASK", "Tasks");
define("CUSTOMER_TABLE_CONFIRM_TASK_DELETE", "Do you want to delete this customer?");
define("CUSTOMER_TABLE_ALERT_DELETE_SUCCESS", "Delete customer successful!");
define("CUSTOMER_TABLE_ALERT_DELETE_FAILED", "Delete customer failed. This customer has some orders!");
//View ========================================================================
define("CUSTOMER_VIEW_TITLE_PROFILE", "Customer information");
define("CUSTOMER_VIEW_USERNAME", "Username");
define("CUSTOMER_VIEW_FULLNAME", "Full name");
define("CUSTOMER_VIEW_BIRTH", "Birth");
define("CUSTOMER_VIEW_PHONE", "Phone number");
define("CUSTOMER_VIEW_ADDRESS", "Address");
define("CUSTOMER_VIEW_STREET", "Street");
define("CUSTOMER_VIEW_DISTRICT", "District");
define("CUSTOMER_VIEW_PROVINCE", "Province");
define("CUSTOMER_VIEW_EMAIL", "Email");
define("CUSTOMER_VIEW_TYPE", "Level");
define("CUSTOMER_VIEW_STATUS_ACTIVE", "Status");
define("CUSTOMER_VIEW_BUTTON_SAVE", "Save");
define("CUSTOMER_VIEW_BUTTON_BACK", "Back");
define("CUSTOMER_VIEW_TITLE_ORDERS", "Orders");
define("CUSTOMER_VIEW_ORDER", "Order");
define("CUSTOMER_VIEW_ID", "ID");
define("CUSTOMER_VIEW_TIME_ORDER", "Time order");
define("CUSTOMER_VIEW_TIME_PROCESS", "Time process");
define("CUSTOMER_VIEW_STATUS_ORDER", "Status");
define("CUSTOMER_VIEW_STATUS_TASK", "Tasks");
define("CUSTOMER_VIEW_TOTAL_ORDER", "Total");
define("CUSTOMER_VIEW_UNIT_ORDER", "Order");
define("CUSTOMER_VIEW_ALERT_UPDATE_SUCCESS", "Update info customer successful!");
define("CUSTOMER_VIEW_ALERT_UPDATE_FAILED", "Update info customer failed!");
// Type customer ===============================================================
define("CUSTOMER_TYPE_GOLD", "Gold");
define("CUSTOMER_TYPE_SLIVER", "Silver");
define("CUSTOMER_TYPE_BROZONE", "Bronze");
define("CUSTOMER_TYPE_NEWBIE", "New member");
// Contact =====================================================================
define("CONTACT_TITLE_INDEX", "Contact of customer");
define("CONTACT_TITLE_RESPONE", "Respone to customer");
// Table =======================================================================
define("CONTACT_TABLE_SEARCH", "Search with name");
define("CONTACT_TABLE_ID", "ID");
define("CONTACT_TABLE_NAME", "Name");
define("CONTACT_TABLE_CONTENT", "Content of contact");
define("CONTACT_TABLE_EMAIL", "Email");
define("CONTACT_TABLE_STATUS", "Status");
define("CONTACT_TABLE_TASK", "Tasks");
define("CONTACT_TABLE_CONFIRM_DELETE", "Do you want to delete this contact?");
define("CONTACT_TABLE_ALERT_DELETE_SUCCESS", "Delete contact successful!");
define("CONTACT_TABLE_ALERT_DELETE_FAILED", "Delete contact failed!");
// Respone =====================================================================
define("CONTACT_RESPONE_TITLE", "Respone customer");
define("CONTACT_RESPONE_TOPIC", "Topic");
define("CONTACT_RESPONE_TOPIC_CONTENT", "[Blue Dolphin EXIM Co. LTD] Respone from administrator");
define("CONTACT_RESPONE_EMAIL", "To email");
define("CONTACT_RESPONE_EMAIL_PLACEHOLDER", "Enter email of customer");
define("CONTACT_RESPONE_CONTENT_OF_CONTACT", "Content of contact");
define("CONTACT_RESPONE_CONTENT_OF_RESPONE", "Content of respone");
define("CONTACT_RESPONE_CONTENT_OF_RESPONE_PLACEHOLDER", "Enter content of respone");
define("CONTACT_RESPONE_BUTTON_SEND", "Send");
define("CONTACT_RESPONE_BUTTON_BACK", "Back");
define("CONTACT_RESPONE_ALERT_SEND_SUCCESS", "Send respone successful!");
define("CONTACT_RESPONE_ALERT_SEND_FAILED", "Send respone failed!");
// Status respone ==============================================================
define("CONTACT_STATUS_RESPONE", "Responed");
define("CONTACT_STATUS_WAIT", "Wait");
// Category ====================================================================
define("CATEGORY_TITLE_INDEX", "Categories list");
define("CATEGORY_TITLE_ADD", "Add category");
define("CATEGORY_TITLE_EDIT", "Edit category");
// Table =======================================================================
define("CATEGORY_TABLE_BUTTON_ADD", "Add category");
define("CATEGORY_TABLE_ID", "ID");
define("CATEGORY_TABLE_NAME", "Name");
define("CATEGORY_TABLE_TASK", "Tasks");
define("CATEGORY_TABLE_CONFIRM_DELETE", "Do you want to delete this category?");
define("CATEGORY_TABLE_ALERT_DELETE_SUCCESS", "Delete category successful!");
define("CATEGORY_TABLE_ALERT_DELETE_FAILED", "Delete category failed. Some products have this category!");
define("CATEGORY_TABLE_ALERT_UPDATE_SUCCESS", "Update category successful!");
define("CATEGORY_TABLE_ALERT_UPDATE_FAILED", "Update category failed!");
// Form ========================================================================
define("CATEGORY_FORM_TITLE", "Category");
define("CATEGORY_FORM_NAME", "Category name");
define("CATEGORY_FORM_NAME_PLACEHOLDER", "Enter category name");
define("CATEGORY_FORM_BUTTON_SUBMIT_ADD", "Add");
define("CATEGORY_FORM_BUTTON_SUBMIT_EDIT", "Edit");
define("CATEGORY_FORM_BUTTON_BACK", "Back");
// Unit ========================================================================
define("UNIT_TITLE_INDEX", "Units list");
define("UNIT_TITLE_ADD", "Add unit");
define("UNIT_TITLE_EDIT", "Edit unit");
// Table =======================================================================
define("UNIT_TABLE_BUTTON_ADD", "Add unit");
define("UNIT_TABLE_ID", "ID");
define("UNIT_TABLE_NAME", "Unit name");
define("UNIT_TABLE_TASK", "Tasks");
define("UNIT_TABLE_CONFIRM_DELETE", "Do you want to delete this unit?");
define("UNIT_TABLE_ALERT_DELETE_SUCCESS", "Delete unit successful!");
define("UNIT_TABLE_ALERT_DELETE_FAILED", "Delete unit failed. Some products have this unit!");
define("UNIT_TABLE_ALERT_UPDATE_SUCCESS", "Update unit successful!");
define("UNIT_TABLE_ALERT_UPDATE_FAILED", "Update unit failed!");
// Edit ========================================================================
define("UNIT_EDIT_TITLE", "Unit");
define("UNIT_EDIT_NAME", "Unit name");
define("UNIT_EDIT_NAME_PLACEHOLDER", "Enter unit name");
define("UNIT_EDIT_BUTTON_ADD", "Add");
define("UNIT_EDIT_BUTTON_EDIT", "Edit");
define("UNIT_EDIT_BUTTON_BACK", "Back");
// Product =====================================================================
define("PRODUCT_TITLE_INDEX", "Products list");
define("PRODUCT_TITLE_ADD", "Add product");
define("PRODUCT_TITLE_EDIT", "Edit product");
// Table =======================================================================
define("PRODUCT_TABLE_SEARCH", "Search product with name");
define("PRODUCT_TABLE_BUTTON_ADD", "Add product");
define("PRODUCT_TABLE_ID", "ID");
define("PRODUCT_TABLE_PICTURE", "Image");
define("PRODUCT_TABLE_NAME", "Product name");
define("PRODUCT_TABLE_TYPE", "Category");
define("PRODUCT_TABLE_VND", "Price VND");
define("PRODUCT_TABLE_USD", "Price USD");
define("PRODUCT_TABLE_TASK", "Tasks");
define("PRODUCT_TABLE_CONFIRM_DELETE", "Do you want to delete this product?");
define("PRODUCT_TABLE_ALERT_DELETE_SUCCESS", "Delete product successful!");
define("PRODUCT_TABLE_ALERT_DELETE_FAILED", "Delete product failed. Some order have this product!");
// Edit ========================================================================
define("PRODUCT_EDIT_ALERT_PROMOTION_PRICE_OFF_WRONG", "Discount value cannot equals 0 and bigger more than 1!");
define("PRODUCT_EDIT_TITLE", "Product");
define("PRODUCT_EDIT_CATEGORY", "Category");
define("PRODUCT_EDIT_UNIT", "Unit");
define("PRODUCT_EDIT_NAME", "Product name");
define("PRODUCT_EDIT_NAME_PLACEHOLDER", "Enter product name");
define("PRODUCT_EDIT_CONTENT", "Product info");
define("PRODUCT_EDIT_CONTENT_PLACEHOLDER", "Enter product info");
define("PRODUCT_EDIT_PRICE_VND", "Price VND");
define("PRODUCT_EDIT_PRICE_USD", "Price USD");
define("PRODUCT_EDIT_IMAGE", "Image");
define("PRODUCT_EDIT_PDF", "Brochure");
define("PRODUCT_EDIT_PDF_TIPS", "PDF file <= 2MB");
define("PRODUCT_EDIT_PDF_DOWNLOAD", "Download");
define("PRODUCT_EDIT_PROMOTION", "Promotion");
define("PRODUCT_EDIT_PROMOTION_DEFAULT", "-----Choose promotion-----");
define("PRODUCT_EDIT_PRICE_OFF", "Rate price off");
define("PRODUCT_EDIT_BUTTON_ADD", "Add product");
define("PRODUCT_EDIT_BUTTON_EDIT", "Edit product");
define("PRODUCT_EDIT_BUTTON_BACK", "Back");
define("PRODUCT_EDIT_ALERT_UPDATE_SUCCESS", "Update info product successful!");
define("PRODUCT_EDIT_ALERT_UPDATE_FAILED", "Update info product failed!");
define("PRODUCT_EDIT_ALERT_UPDATE_IMAGE_SUCCESS", "Update image product successful!");
define("PRODUCT_EDIT_ALERT_UPDATE_IMAGE_FAILED", "Update image product failed!");
define("PRODUCT_EDIT_ALERT_UPDATE_PDF_SUCCESS", "Update brochure successful!");
define("PRODUCT_EDIT_ALERT_UPDATE_PDF_FAILED", "Update brochure failed!");
// Promotion ===================================================================
define("PROMOTION_TITLE_INDEX", "Promotions list");
define("PROMOTION_TITLE_ADD", "Add promotion");
define("PROMOTION_TITLE_EDIT", "Edit promotion");
define("PROMOTION_TITLE_VIEW", "View promotion");
// Table =======================================================================
define("PROMOTION_TABLE_SEARCH", "Search promotion with name");
define("PROMOTION_TABLE_BUTTON_ADD", "Add promotion");
define("PROMOTION_TABLE_ID", "ID");
define("PROMOTION_TABLE_NAME", "Promotion name");
define("PROMOTION_TABLE_CONTENT", "Promotion info");
define("PROMOTION_TABLE_TIME_START", "Begin");
define("PROMOTION_TABLE_TIME_END", "End");
define("PROMOTION_TABLE_TASK", "Tasks");
define("PROMOTION_TABLE_CONFIRM_DELETE", "Do you want to delete this promotion?");
define("PROMOTION_TABLE_ALERT_DELETE_SUCCESS", "Delete promotion successful!");
define("PROMOTION_TABLE_ALERT_DELETE_FAILED", "Delete promotion failed!");
// Edit ========================================================================
define("PROMOTION_EDIT_ALERT_WRONG_TIME_END_TIME_START", "Time start must before time end!");
define("PROMOTION_EDIT_TITLE", "Promotion");
define("PROMOTION_EDIT_NAME", "Promotion name");
define("PROMOTION_EDIT_NAME_PLACEHOLDER", "Enter promotion name");
define("PROMOTION_EDIT_CONTENT", "Promotion information");
define("PROMOTION_EDIT_CONTENT_PLACEHOLDER", "Enter promotion information");
define("PROMOTION_EDIT_TIME_START", "Begin");
define("PROMOTION_EDIT_TIME_END", "End");
define("PROMOTION_EDIT_BUTTON_ADD", "Add promotion");
define("PROMOTION_EDIT_BUTTON_EDIT", "Edit promotion");
define("PROMOTION_EDIT_BUTTON_BACK", "Back");
define("PROMOTION_EDIT_ALERT_UPDATE_SUCCESS", "Update promotion successful!");
define("PROMOTION_EDIT_ALERT_UPDATE_FAILED", "Update promotion failed because this promotion is duplicated by another promotion!");
// View ========================================================================
define("PROMOTION_VIEW_TITLE_PRO", "Promotion information");
define("PROMOTION_VIEW_ID_PRO", "ID");
define("PROMOTION_VIEW_NAME_PRO", "Promotion name");
define("PROMOTION_VIEW_INFO_PRO", "Promotion info");
define("PROMOTION_VIEW_TIME_START_PRO", "Begin");
define("PROMOTION_VIEW_TIME_END_PRO", "End");
define("PROMOTION_VIEW_TITLE_PRODUCT", "Products of promotion");
define("PROMOTION_VIEW_ORDER_PRODUCT", "Order");
define("PROMOTION_VIEW_ID_PRODUCT", "ID");
define("PROMOTION_VIEW_IMAGE_PRODUCT", "Image");
define("PROMOTION_VIEW_NAME_PRODUCT", "Product name");
define("PROMOTION_VIEW_FRICE_OFF_PRODUCT", "Rate price off");
define("PROMOTION_VIEW_TASK_PRODUCT", "Tasks");
define("PROMOTION_VIEW_TOTAL_PRODUCT", "Total");
define("PROMOTION_VIEW_UNIT_PRODUCT", "product in this promotion");
define("PROMOTION_VIEW_BUTTON_BACK", "Back");
// Order =======================================================================
define("ORDER_TITLE_INDEX", "Orders");
define("ORDER_TITLE_VIEW", "View a order");
define("ORDER_TITLE_PRINT", "Print a order");
// Table =======================================================================
define("ORDER_TABLE_SEARCH", "Search order with customer name");
define("ORDER_TABLE_ID", "ID");
define("ORDER_TABLE_CUSTOMER_NAME", "Customer name");
define("ORDER_TABLE_TIME_ORDER", "Time order");
define("ORDER_TABLE_STATUS", "Status");
define("ORDER_TABLE_TASK", "Tasks");
define("ORDER_TABLE_CONFIRM_DELETE", "Do you want to delete this order?");
define("ORDER_TABLE_ALERT_DELETE_SUCCESS", "Delete order successful!");
define("ORDER_TABLE_ALERT_DELETE_FAILED", "Delete order failed!");
// View ========================================================================
define("ORDER_VIEW_TITLE_ORDER", "Order information");
define("ORDER_VIEW_ORDER", "Order");
define("ORDER_VIEW_IMAGE", "Image");
define("ORDER_VIEW_NAME", "Product name");
define("ORDER_VIEW_AMOUNT", "Amount");
define("ORDER_VIEW_PRICE", "Price");
define("ORDER_VIEW_PRICE_OFF", "% off");
define("ORDER_VIEW_PRICE_TOTAL", "Price total");
define("ORDER_VIEW_TOTAL_PRICE", "Total price");
define("ORDER_VIEW_TITLE_CUSTOMER", "Customer information");
define("ORDER_VIEW_FULLNAME_CUSTOMER", "Full name");
define("ORDER_VIEW_PHONE_CUSTOMER", "Phone number");
define("ORDER_VIEW_TIME_ORDER_CUSTOMER", "Time order");
define("ORDER_VIEW_TIME_PROCESS_CUSTOMER", "Time process");
define("ORDER_VIEW_ADDRESS_CUSTOMER", "Address");
define("ORDER_VIEW_STREET_CUSTOMER", "Street");
define("ORDER_VIEW_DISTRICT_CUSTOMER", "District");
define("ORDER_VIEW_PROVINCE_CUSTOMER", "Province");
define("ORDER_VIEW_TYPE_CUSTOMER", "Level");
define("ORDER_VIEW_BUTTON_SUCCESS", "Success");
define("ORDER_VIEW_BUTTON_DESTROY", "Cancel");
define("ORDER_VIEW_BUTTON_BACK", "Back");
define("ORDER_VIEW_UPDATE_ORDER_SUCCESS", "Update order successfully!");
define("ORDER_VIEW_UPDATE_ORDER_FAILED", "Update order failed!");
// Print =======================================================================
define("ORDER_PRINT_AVALON_WEBSITE", "Avalon Website");
define("ORDER_PRINT_AVALON_NAME", "Name");
define("ORDER_PRINT_AVALON_ADDRESS", "Address");
define("ORDER_PRINT_AVALON_PHONE", "Phone number");
define("ORDER_PRINT_AVALON_EMAIL", "Email");
define("ORDER_PRINT_CUSTOMER_EMAIL", "Email");
define("ORDER_PRINT_PLACE", "Can Tho");
define("ORDER_PRINT_DAY", "Day");
define("ORDER_PRINT_MONTH", "month");
define("ORDER_PRINT_YEAR", "year");
define("ORDER_PRINT_INFO_SIGN", "(sign and write fullname)");
// Level =======================================================================
define("ORDER_STATUS_SUCCESS", "Success");
define("ORDER_STATUS_DESTROY", "Cancel");
define("ORDER_STATUS_WAIT", "Wait");
// Paging ======================================================================
define("PAGING_PREVIOUS", "Previous");
define("PAGING_NEXT", "Next");
define("PAGING_FIRST", "First");
define("PAGING_END", "End");
