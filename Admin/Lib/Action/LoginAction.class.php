<?php
// 本类由系统自动生成，仅供测试用途
class LoginAction extends Action {
    public function index(){
        $this->display();
    }

    public function check(){

    }

    public function logout(){

    }

    public function verify(){
         import('ORG.Util.Image');
         Image::buildImageVerify(4,1,"png",70,30);
    }
}