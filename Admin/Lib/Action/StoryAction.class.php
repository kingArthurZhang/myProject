<?php
// 本类由系统自动生成，仅供测试用途
class StoryAction extends AclAction {

        public function index(){
           $story=M('Story');
           $this->rows=$story->select();
           $this->display();
        }

        public function delete(){
                $story=M('Story');
                if($story->delete($_GET['id'])){
                    $this->success('Delete Successfully!',U('index'));
                }
            }

        public function add(){
    	   $this->display();
        }

        public function insert(){
            $story=M('Story');
            $story->create();
            $story->content=htmlspecialchars($_POST['content']);
            $story->time=time();
            if($story->add()){
                $this->success('Submit Successfully!',U(add));
            }
        }

        public function edit(){
            $id=$_GET['id'];
            $story=M('Story');
            $this->row=$story->find($id);
            $this->display();
        }

        public function update(){
            $story=M('Story');
            $story->create();
            $story->username=$_POST['username'];
            $story->title=$_POST['title'];
            $story->content=$_POST['content'];

            if($story->save()){
                $this->success('Edit Successfully!',U('index'));
            }
        }
}