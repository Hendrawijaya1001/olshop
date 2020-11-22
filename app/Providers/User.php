<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    
    Public function pesanan()
    {
        return $this->hasMany('App\Pesanan','user_id','id');
    }
}

    

