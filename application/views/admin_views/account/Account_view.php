<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Account_view extends ViewEntryPoint{

    private $viewData;
    private $path = "admin_views/account/components/";

    public function __construct($transfer = array()){
        parent::__construct();
        //存放由Controller傳遞過來的資訊
        $this->viewData = $transfer;
    }

    public function index(){
        //設定組件
        $components = $this->loadComponent("{$this->path}account",[
            "main"
        ],[
            "userName"  => $this->viewData['userName']
        ]);
        //設定需要在Head載入的內容
        $headComponents = $this->loadComponent("{$this->path}account",[
            "style"
        ],[
            "userPhoto" => $this->viewData['userImg']
        ]);
        //載入模板
        $this->loadTemplate('systemTemplate',[
            //註冊組件
            "components" => $components,
            //註冊需要在head載入的檔案
            "headComponents" => $headComponents,
            //設定頁面內容
            "pageTitle" => "個人主頁",
            "bodyTitle" => "個人主頁"
        ]);
    }

}
?>