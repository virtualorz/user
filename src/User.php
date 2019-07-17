<?php

namespace Virtualorz\User;

use Route;

class User
{
    //
    /**
     * 取得登入者Session值
     * @return String
     */
    public function get($key){

        if(session(env('LOGINSESSION','virtualorz_default').'.login_user') != null){
            return session(env('LOGINSESSION','virtualorz_default').'.login_user.'.$key);
        }

        return null;
    }

    /**
     * 取得Session參數值
     * @return Array
     */
    public function getProp($key){

        if(session(env('LOGINSESSION','virtualorz_default')) != null){
            return session(env('LOGINSESSION','virtualorz_default').'.'.$key);
        }

        return null;
    }

}
