<?php

namespace App\Http\Controllers\Vip;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\UserModel;

class UserController extends Controller
{
    public function index(){
        $user=UserModel::where('id','=','2')->first()->toArray();
        echo "<pre>";
        print_r($user);
    }
}
