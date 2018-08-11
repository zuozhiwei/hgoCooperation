<?php
namespace app\coop\controller;

use think\Controller;
use app\coop\model\User;

class Index extends Controller
{
    public function index()
    {
        return view();
    }

    public function loginPage() {
        return view();
    }

    public function login() {
        $loginName = input("post.loginName");
        $password = input("post.password");

        $where = array(
            "login_name"=>$loginName,
            "password"=>$password
        );
        // 使用数组查询
        $user = User::get($where);

        if ($user) {
            $this->assign($user);
            $this->success("登录成功","Index/index");
        } else {
            $this->error("用户名或密码错误");
        }
    }

}
