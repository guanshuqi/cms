<?php

namespace App\Http\Controllers\Vip;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\UserModel;

class UserController extends Controller
{
    //查询
    public function index(){
        $user=UserModel::where('id','=','2')->first()->toArray();
        echo "<pre>";
        print_r($user);
    }
    //添加
    public function add(){
        $data=[
            'name'=>str_random(5),
            'age'=>mt_rand(10,50),
            'email'=>'123@qq.com'
        ];
        $res=userModel::insert($data);
        //dump($res);
    }
    //修改
    public function update(){
        $data=[
            'email'=>'123@163.com',
        ];
        $ures=userModel::where(['id'=>3])->update($data);
        //var_dump($ures);
    }
    //删除
    public function delete(){
        $dres=userModel::where(['id'=>1])->delete();
        var_dump($dres);
    }
    //列表展示
    public function userList(){
        $info=userModel::all()->toArray();
        $data=[
            'info'=>$info,
            'page'=>10
        ];
        return view('user.user',$data);
    }
}
