<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
        $story=M('Story');
        $rows=$story->order('id desc')->select();
        $this->assign('rows',$rows);
    	$this->display();
    }
}