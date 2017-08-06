<?php
// 本类由系统自动生成，仅供测试用途
class LoginAction extends Action {
    public function index(){
        $this->display();
    }

    public function check(){
        $user=M('User');
        $fcode=md5(strtolower($_POST['fcode']));
        $vcode=$_SESSION['verify'];
        $username=$_POST['username'];
        $password=md5($_POST['password']);

        if ($fcode != $vcode) {
            $this->error('There is something wrong with the verify code,please try again.',U('index'));
        }else{
            $where="username='{$username}' and password='{$password}' and isadmin=1";
            $row=$user->where($where)->find();
            if ($row) {
                $_SESSION['admin_username']=$username;
                $_SESSION['admin_login']=1;
                $this->success('Congratulation!You have logged in!',U('Index/index'));
            }else{
                $this->error('You are not allowed to log in!',U('index'));
            }
        }

    }

    public function logout(){
        $_SESSION=array();
        setcookie('PHPSESSID','',time()-3600,'/');
        session_destroy();

        $this->success('Exit Successfully!',U('Login/index'));
    }

    public function verify(){
         import('ORG.Util.Image');
         Image::buildImageVerify(4,1,"png",70,30);
    }
}