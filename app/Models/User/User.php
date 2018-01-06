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
}
