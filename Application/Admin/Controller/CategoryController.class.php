<?php
namespace Admin\Controller;
use Common\Controller\AdminBaseController;
/**
 * ��̨��ҳ
 */
class IndexController extends AdminBaseController{
    // ��̨��ҳ
    public function index(){
        $this->display();
    }
    // ��ӭҳ��
    public function welcome(){
        $assign=array(
            'all_article'=>D('Article')->getCountData(),
            'delete_article'=>D('Article')->getCountData(array('is_delete'=>1)),
            'hide_article'=>D('Article')->getCountData(array('is_show'=>0)),
            'all_chat'=>D('Chat')->getCountData(),
            'delete_chat'=>D('Chat')->getCountData(array('is_delete'=>1)),
            'hide_chat'=>D('Chat')->getCountData(array('is_show'=>0)),
            'all_comment'=>M('Comment')->count(),
            );
        $this->assign($assign);
        $this->display();
    }

}




?>
