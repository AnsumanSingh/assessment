<?php

namespace App\Http\Controllers;
use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }
    
    //rerurn all customers from mysql table
    public function all($fromUserId,$toUserId,$search,$page) {
        $perpage = 50;
        if($page == 1){
            $l=0;
            $m=$perpage;
        }else{
            $m=$page * $perpage;
            $l=$m - $perpage;
        }

        if($page < 0){

            return response(['status' => 'error', "message" => $e->getMessage()], 200);
        }
            

           $users = DB::Select("SELECT * FROM `chat` WHERE  `message` LIKE '$search%' AND ((`from_user_id` ='$fromUserId' and `to_user_id` = '$toUserId') OR(`to_user_id` = '$fromUserId' and `from_user_id` = '$toUserId')) ORDER BY `id` DESC LIMIT 
            $l,$m ");

        

        if(count($users) < 1 ){

            return response(['status' => 'error', "message" => $e->getMessage()], 200);
        }
        return response(['status' => 'true', "data" => $users], 200);
        //return $users;

    }

}

