<?php
namespace app\coop\controller;

use think\Controller;
use app\coop\model\User;
use app\coop\model\Task as TaskModel;
use think\session;

class Task extends Controller
{
    /**
     * 任务首页
     */
    public function index()
    {
//         # 查询条件
//         $where = array(

//         );
//         # 获取任务列表和用户列表
//         $taskList = TaskModel::all($where)->toArray();
//         $userList = User::where("id,name")->field("id,name")->toArray();
//         # 循环处理
// //        foreach ($taskList as &$task) {
// //            $task = $task["data"];
// //        }
//         foreach ($taskList as &$task) {
//             $coNames = array();
//             $leaderInfo = "";
//             ## 协助人id
//             $coIds = explode(",",$task["co_ids"]);
//             ## 负责人id
//             $leaderId = $task["leader_id"];
//             ## 负责人姓名
//             foreach ($userList as $user) {
//                 if ($leaderId == $user["id"]) {
//                     $leaderInfo = $user;
//                 }
//             }
//             ## 协助人姓名
//             foreach ($coIds as $coId) {
//                 foreach ($userList as $user) {
//                     if ($coId == $user["id"]) {
//                         $coNames[] = $user;
//                     }
//                 }
//             }
//             $task["coNames"] = $coNames;
//             $task["leaderInfo"] = $leaderInfo;
//         }
//         $this->assign("taskList",$taskList);
//         echo "<pre>";
//         print_r($taskList);
//         print_r($userList);

//         exit;
        return view();
    }

}
