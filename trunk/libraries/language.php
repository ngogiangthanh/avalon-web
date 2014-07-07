<?php

/*
 * Lớp set và include file languages.
 * @author Chuột
 * @modified date 04/07/2014
 */

class language {

    private $language = "vietnamese";

    /**
     * Hàm xây dựng
     * @return void
     */
    function __construct() {
        //
    }

    /**
     * Khởi tạo session ngôn ngữ
     * @return void
     */
    public function CreateNewSessionLang() {
        $_SESSION['language'] = $this->language;
    }

    /**
     * Set ngôn ngữ
     * @param string
     * @return void
     */
    public function SetLang($lang) {
        $this->language = ($lang != 'vietnamese' && $lang != 'english') ? 'vietnamese' : $lang;
    }

    /**
     * Include ngôn ngữ đã thiết lập trong giao diện người dùng
     * @param string
     * @return void
     */
    public function IncludeLangUserUI() {
        switch ($this->language) {
            case 'vietnamese': include_once ('./language/vietnamese.php');
                break;
            case 'english': include_once ('./language/english.php');
                break;
        }
    }

    /**
     * Include ngôn ngữ đã thiết lập ttong giao diện admin
     * @param string
     * @return void
     */
    public function IncludeLangAdminUI() {
        switch ($this->language) {
            case 'vietnamese': include_once ('./language/vietnameseadmin.php');
                break;
            case 'english': include_once ('./language/englishadmin.php');
                break;
        }
    }

}
