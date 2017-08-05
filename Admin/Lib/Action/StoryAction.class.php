<?php
// 本类由系统自动生成，仅供测试用途
class StoryAction extends Action {
    public function add(){
	   $this->display();
    }

    public function insert(){
        $story=M('Story');
        $story->create();
        $story->content=htmlspecialchars($_POST['content']);
        $story->time=time();

        if($story->add()){
            $this->success('Congratulations!',U(add));
        }
    }

}