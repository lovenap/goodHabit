<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //Sheetに対するリレーション
    //「1対多」の関係なので単数系に
    public function sheet()
    {
        return $this->belongsTo('App\Sheet');  
    }
}
