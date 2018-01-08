<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;
use DB;

class User extends Model
{
    //获取用户列表
    public function  getUserlist()
    {
        $userlist = DB::table('users')->limit(10)->get();
        return $userlist;
    }

    // 获取用户列表并分页
    public function  getUserList2()
    {
        $userlist = DB::table('users')->where('status',1)->orderBy('uid', 'desc')->offset(0)->limit(100)->paginate(12);
        return $userlist;
    }
}
