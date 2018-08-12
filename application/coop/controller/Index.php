<?php
namespace app\coop\controller;

use think\Controller;
use app\coop\model\User;
use think\session;

class Index extends Controller
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
    public function login() {
        return view();
    }

    /**
     * 注册页面
     */
    public function register() {
        return view();
    }

    /**
     * 登录操作
     */
    public function loginPost() {
        ## 获取参数
        $loginName = input("post.loginName");
        $password = input("post.password");

        ## 构造查询条件
        $where = array(
            "login_name"=>$loginName,
            "password"=>$password
        );

        ## 调用模型进行查询
        $user = new User();
        $data = $user->where($where)->find();

        if ($data) {
            session("user",$data);
            $this->assign("user",$data);
            return $this->fetch('index');
        } else {
            $this->error("用户名或密码错误");
        }
    }

    /**
     * 注册操作
     */
    public function registerPost(){
        ## 获取参数
        $param = input();
        $data = [
            "login_name"=>$param["loginName"],
            "password"=>$param["password"],
            "mobile"=>$param["phone"],
            "gender"=>1,
            "email"=>$param["Email"],
            "name"=>$param["name"],
            "create_time"=>date("Y-m-d H:i:s")
        ];

        ## 数据验证

        ## 实例化模型
        $user = new User;
        $has = $user
                ->where('login_name',$data["login_name"])
                ->find();
        if($has){
            return $this->error("该用户已注册！");
        }
        $user->data($data);
        $user->save();
        if($user){
            $this->success('注册成功', 'login');
        }else{
            return $this->error('注册失败！');
        }
    }
}
