<?php
/**
 * 后台首页控制器
 * Created by PhpStorm.
 * User: Shadow
 * Date: 2016-04-03 0003
 * Time: 13:14
 * Http: www.hongyuvip.com
 */

namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {

//    public function __construct(){
//        parent::__construct();
//        if(!session('username')){
//            $this -> error('请先登录管理员账号',U('Login/index'));
//        }
//    }

    function index(){
        $this->display();
    }

    function login(){
        if($_POST){
            $model = D('Admin');
            if($model->create($_POST, 4)){
                $ret = $model->login();
                if($ret === TRUE){
                    $model->data(array('id'=>session('id'),'last_login'=>array('exp','now()')))->save();
                    $this -> redirect('Index/index');
                    exit;
                }else{
                    $ret == 1 ? $this->error('用户名不存在！') : $this->error('密码不正确！');
                }
            }else{
                $this->error($model->getError());
            }
        }
        $this->display();
    }

    public function logout(){
        session(null);
        $this->redirect('Index/login');
    }
}