<?php
namespace app\coop\controller;

use think\Controller;
use app\coop\model\User;
use think\session;

class IndexController extends Controller
{
    /**
     * 展示首页
     */
    public function index()
    {
        return view();
    }

    /**
     * 展示登录页面
     */
    public function loginPage() {
        return view();
    }

    /**
     * 登录操作
     */
    public function login() {
        ## 获取参数
        $loginName = input("post.loginName");
        $password = input("post.password");

        ## 构造查询条件
        $where = array(
            "login_name"=>$loginName,
            "password"=>$password
        );

        ## 调用模型进行查询
        $user = User::get($where);

        if ($user) {
            session("user",$user);
            return view("index",array("user"=>$user));
        } else {
            $this->error("用户名或密码错误");
        }
    }

}
