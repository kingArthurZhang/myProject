<?php
    class AclAction extends Action{
        public function _initialize(){
            if(!$_SESSION['admin_login']){
                $this->error("Please log in first!",U('Login/index'));
                exit;
            }
        }
    }
?>