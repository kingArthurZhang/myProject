<?php
class UserAction extends AclAction {

    public function index(){
       $user=M('User');
       $this->rows=$user->select();
       $this->display();
    }

    public function delete(){
        $user=M('User');
        if($user->delete($_GET['id'])){
            $this->success('Delete Successfully!',U('index'));
        }
    }

    public function add(){

    }

    public function insert(){

    }

    public function edit(){
        $this->display();
    }

    public function update(){

    }
}