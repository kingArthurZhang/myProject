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
        $this->display();
    }

    public function insert(){
        $user=M('User');
        $user->create();
        $user->password=md5($_POST['password']);
        $user->time=time();
        if($user->add()){
            $this->success("Create Successfully!",U('index'));
        }
    }

    public function edit(){
        $id=$_GET['id'];
        $user=M('User');
        $this->row=$user->find($id);
        $this->display();
    }

    public function update(){
        $user=M('User');
        $user->create();
        $user->password=md5($_POST['password']);
        if($user->save()){
            $this->success('Edit Successfully!',U('index'));
        }
    }
}