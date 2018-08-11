<?php
namespace app\coop\controller;

class Index
{
    public function index()
    {
        $this->display();
    }

    public function loginPage() {
        $this->display();
    }

    public function login() {
        $loginName = input(post.loginName);
        $password = input(post.password);

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
