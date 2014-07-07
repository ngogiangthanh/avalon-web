(function($) {
    /*Plugin zAuthenticate
     * Chung thuc login va logout voi ajax
     * @author Chuột
     * 
     */
    $.zAuthenticate = function(options, type)
    {
        //=============================================
        //Cac gia tri mac dinh cua doi tuong options
        //=============================================  
        var defaults = {
            "btnSubmitLogin": "#submit_form_login",
            "dialogLoginForm": "#basicModal",
            "lbUsername": "#username_id",
            "lbPassword": "#password_id",
            "sidebar": ".sidebar",
            "dialogDetailProduct": "#dialogDetailProduct",
            "dialogLogin": "#loginID",
            "dialogCart": "#customerCartId",
            "dialogProfile": "#profileID",
            "dialogRegister": "#registerFormID",
            "dialogContact": "#contactFormID",
            "userWrong": "Username wrong format!",
            "passWrong": "Password wrong format!",
            "alertLoginFailed": "Wrong username or password!",
            "alertLoginSuccess": "Login complete!",
            "btnSubmitLogout": "#logout_id",
            "alertConfirmLogout": "Do you want to logout ?",
            "alertLogoutFailed": "Logout failed!",
            "alertLogoutSuccess": "Logout completed!"
        };
        options = $.extend(defaults, options);
        //Cac bien su dung trong zAuthenticate
        var btnSubmitLogin = $(options.btnSubmitLogin);
        var dialogLogin = $(options.dialogLogin);
        var dialogLoginForm = $(options.dialogLoginForm);
        var lbUsername = $(options.lbUsername);
        var lbPassword = $(options.lbPassword);
        var sidebar = $(options.sidebar);
        var dialogDetailProduct = $(options.dialogDetailProduct);
        var dialogCart = $(options.dialogCart);
        var dialogProfile = $(options.dialogProfile);
        var dialogRegister = $(options.dialogRegister);
        var dialogContact = $(options.dialogContact);
        var btnSubmitLogout = $(options.btnSubmitLogout);
        var usernameRegex = /^[a-zA-Z0-9_]{1,200}$/;
        //login
        var urlMenu = 'route.php?content=reloadmenu';
        var urlDetailProduct = 'route.php?content=reloadadd';
        var urlCartForm = 'route.php?content=reloadcart';
        var urlProfile = 'route.php?content=reloadprofile';
        //logout
        var urlLoginForm = 'route.php?content=reloadlogin';
        var urlResgisterForm = 'route.php?content=reloadregister';
        var urlContactForm = 'route.php?content=reloadcontact';
        //=============================================
        //Cac ham duoc goi khi goi toi hang zAuthenticate
        //=============================================  
        init();
        //=============================================
        //Ham xu ly init
        //=============================================  
        function init()
        {
            //Su kien nhan nut login
            btnSubmitLogin.on("click", function(e) {
                processLogin();
                return false;
            });
            //Su kien nhan nut logout
            btnSubmitLogout.on("click", function(e) {

                //Yeu cau xac nhan truoc khi login
                if (confirm(options.alertConfirmLogout)) {
                    processLogout();
                return false;
                }
            });
            //
            if (type === 'logout') {
                $('.modal').modal('hide');
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();
                processLogout();
            }
            else if (type === 'login') {
                $('.modal').modal('hide');
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();
                $('.modal').on('hidden', function() {
                    $(this).empty();
                });
                refreshLogin();
            }
        }
        //=============================================
        //Ham xu ly refresh login
        //=============================================  
        function refreshLogin()
        {
            toastr.success(options.alertLoginSuccess);
            $(dialogRegister).empty();
            $(dialogContact).empty();
            $(sidebar).load(urlMenu);
            $(dialogDetailProduct).load(urlDetailProduct);
            loadURL2Browser();
        }
        //=============================================
        //Ham xu ly login
        //=============================================  
        function processLogin()
        {
            //kiem tra gia tri truoc khi goi ham ajax
            if (!lbUsername.val().match(usernameRegex))
            {
                toastr.error(options.userWrong);
                $(lbUsername).focus();
                return false;
            }
            else if (lbPassword.val() === "")
            {
                toastr.error(options.passWrong);
                $(lbPassword).focus();
                return false;
            }
            //Goi ham ajax
            $.ajax({
                type: "POST",
                url: "route.php?content=login",
                cache: false,
                data: {
                    "username": lbUsername.val(),
                    "password": lbPassword.val()
                },
                success: function(data) {
                    //ket qua tra ve
                    if (data === 'admin' || data === 'user') {
                        toastr.success(options.alertLoginSuccess);
                        $(dialogRegister).empty();
                        $(dialogContact).empty();
                        //
                        $(sidebar).load(urlMenu);
                        $(dialogDetailProduct).load(urlDetailProduct);
                        if (data === 'user')
                        {
                            $(dialogCart).load(urlCartForm);
                            $(dialogProfile).load(urlProfile);
                            $(dialogContact).load(urlContactForm);
                        }
                        $('.modal').modal('hide');
                        $('body').removeClass('modal-open');
                        $('.modal-backdrop').remove();
                        $(dialogLogin).empty();
                        loadURL2Browser();
                    } else {
                        // thong bao neu tk va mk khong chinh xac
                        toastr.error(options.alertLoginFailed);
                    }
                }
            });
        }
        //=============================================
        //Ham xu ly logout
        //=============================================  
        function processLogout()
        {
            $.ajax({
                type: "GET",
                url: "route.php?content=logout",
                success: function(data_return) {
                    if (data_return === 'true') {
                        toastr.warning(options.alertLoginSuccess);
                        $(dialogProfile).empty();
                        $(dialogCart).empty();
                        $(dialogContact).empty();
                        $(dialogContact).load(urlContactForm);
                        $(sidebar).load(urlMenu);
                        $(dialogLogin).load(urlLoginForm);
                        $(dialogDetailProduct).load(urlDetailProduct);
                        $(dialogRegister).load(urlResgisterForm);
                        loadURL2Browser();
                    } else {
                        //thong bao neu dang xuat that bai
                        toastr.error(options.alertLogoutFailed);
                    }
                }
            });
        }

        //=============================================
        //Ham load lai url
        //=============================================  
        function loadURL2Browser()
        {
            window.history.pushState(null, "Index", "?");
        }
    };
})(jQuery);

